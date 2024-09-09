@extends('layouts.app')

@section('title', 'Vendor')

@section('content')
    <div class="content">
        <h2 class="intro-y text-lg font-medium mt-10">
            List Vendor
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2 justify-between">
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                        <input type="text" id="search" class="form-control w-56 box pr-10 placeholder-theme-8" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                    </div>
                </div>
                @can('vendor-create')
                <a href="{{ URL::to('master/add-vendor') }}" class="btn btn-primary shadow-md mr-2">Add New Vendor</a>
                @endcan
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y box p-5 col-span-12 overflow-auto lg:overflow-visible">
                <table class="table">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="text-center whitespace-nowrap">Vendor ID</th>
                            <th class="text-center whitespace-nowrap">Vendor Name</th>
                            <th class="text-center whitespace-nowrap">Contact</th>
                            <th class="text-center whitespace-nowrap">Phone</th>
                            <th class="text-center whitespace-nowrap">Fax</th>
                            <th class="text-center whitespace-nowrap">Active</th>
                            <th class="text-center whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody id="vendor-list">
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center justify-between">
                
                <div id="pagination-info" class="hidden md:block text-gray-600"></div>
                <ul class="pagination mr-0" id="pagination-links">
                    <!-- Dynamic pagination links will be inserted here -->
                </ul>
            </div>
            <!-- END: Pagination -->
        </div>
       
    </div>
@endsection

@section('script')

{{-- <script>
    var userPermissions = {
        canEditVendor: @json(auth()->user()->can('vendor-edit')),
        canDeleteVendor: @json(auth()->user()->can('vendor-delete'))
    };

    let currentPage = 1;
    function loadVendor(page) {
        // Show loading indicator
        $('#vendor-list').html(getLoadingTable(7));

        q = $('#search').val();
        $.ajax({
            url: `{{ URL::to('api/master/vendor') }}?`,
            data: { 
                page: page,
                q:q, 
                paginate:10
            },
            method: 'GET',
            beforeSend: function(){
                $('#vendor-list').html(getLoadingTable(7));
            },
            success: function(response) {
                const { data: vendors, links, from, to, total, per_page, current_page, last_page } = response;

                if(total == 0){
                    $('#vendor-list').html(getNoDataTable(9));
                    return
                }
                
                let vendorListHtml = vendors.map((vendor, index) => `
                    <tr>
                        <td class="border-b text-center">${vendor.id_vendor}</td>
                        <td class="border-b text-center">${vendor.name_vendor}</td>
                        <td class="border-b text-center">
                            <span class="whitespace-nowrap">${vendor.contact1 ? vendor.contact1 : ""}</span>
                            <span class="whitespace-nowrap">${vendor.contact2 ? vendor.contact2 : ""}</span>
                        </td>
                        <td class="border-b text-center">
                            <span class="whitespace-nowrap">${vendor.phone1 ? vendor.phone1 : ""}</span>
                            <span class="whitespace-nowrap">${vendor.phone2 ? vendor.phone2 : ""}</span>
                        </td>
                        <td class="border-b text-center">${vendor.fax ? vendor.fax : ""}</td>
                        <td class="border-b text-center w-20">
                            <div class="flex items-center justify-center text-theme-24">
                                ${userPermissions.canEditVendor ?
                                `<input class="form-check-switch active-switch" data-id="${vendor.id_vendor}" type="checkbox" ${vendor.active == 1?'checked':''} >` : ''}
                            </div>
                        </td>
                        <td class="border-b table-report__action w-20">
                            <div class="flex flex-col gap-2 justify-center items-center">
                                ${userPermissions.canEditVendor ?
                                `<a class="flex items-center mr-3" href="{{URL::to('master/edit-vendor')}}/${vendor.id_vendor}"><i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit</a>` : ''}
                                ${userPermissions.canDeleteVendor ?
                                `<a class="flex items-center text-theme-24 delete-button" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation" data-id="${vendor.id_vendor}"><i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete</a>` : ''}
                            </div>
                        </td>
                    </tr>
                `).join('');

                $('#vendor-list').html(vendorListHtml);
                $('#pagination-info').text(`Showing ${from ? from : '0'} to ${to ? to : '0'} of ${total} entries`);

                let paginationLinks = '';

                if (current_page != 1) {
                    paginationLinks += `<li><a class="pagination__link" href="#" data-page="1"><i class="w-4 h-4" data-feather="chevrons-left"></i></a></li>`;
                }

                links.forEach(link => {
                    if (link.label === '&laquo; Previous' && current_page != 1) {
                        paginationLinks += `<li><a class="pagination__link" href="#" data-page="${currentPage - 1}"><i class="w-4 h-4" data-feather="chevron-left"></i></a></li>`;
                    }
                    if (link.label === 'Next &raquo;' && current_page != last_page) {
                        paginationLinks += `<li><a class="pagination__link" href="#" data-page="${currentPage + 1}"><i class="w-4 h-4" data-feather="chevron-right"></i></a></li>`;
                    }
                    if (link.label !== '&laquo; Previous' && link.label !== 'Next &raquo;') {
                        paginationLinks += `<li><a class="pagination__link ${link.active ? "pagination__link--active" : ''}" href="#" data-page="${link.label}">${link.label}</a></li>`;
                    }
                });

                if (current_page != last_page) {
                    paginationLinks += `<li><a class="pagination__link" href="#" data-page="${last_page}"><i class="w-4 h-4" data-feather="chevrons-right"></i></a></li>`;
                }

                $('#pagination-links').html(paginationLinks);
                feather.replace();

                $('#pagination-links a').on('click', function(event) {
                    event.preventDefault();
                    const newPage = $(this).data('page');
                    if (newPage && newPage !== currentPage) {
                        currentPage = newPage;
                        loadVendor(currentPage);
                    }
                });
            },
            error: function() {
                alert('Failed to fetch data');
            }
        });
    }

    $(function() {
        // const authToken = localStorage.getItem('auth-token');

        $('#search').on('input', function(){
            loadVendor(1);
        });

        loadVendor(currentPage);

        // Event delegation untuk tombol delete
        $(document).on('click', '.delete-button', function() {
            
            var id = $(this).data('id');
            $('#delete-confirmation').data('id', id);
            $('#delete-confirmation').show();
        });

        // Ketika tombol delete di klik dalam modal
        $(document).on('click', '#confirm-delete', function() {
            // Ambil ID dari modal
            var id = $('#delete-confirmation').data('id');

            // Kirim permintaan AJAX untuk menghapus data
            $.ajax({
                url: `{{ URL::to('api/master/vendor') }}/${id}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Authorization': `Bearer ${authToken}`,
                },
                success: function(response) {

                    showModalSuccess("Vendor Saved!", "Vendor data saved successfully!");

                    $('.main').removeClass('overflow-y-hidden');
                    $('#delete-confirmation').hide();
                    loadVendor(currentPage);
                },
                error: function(xhr) {
                    showModalError("Error!", "Please try again");
                }
            });
        });
        

        // Event delegation untuk tombol delete
        $(document).on('click', '.active-switch', function() {

            // Ambil ID dari atribut data-id
            var id = $(this).data('id');
            data ={
                id:id,
                status: ($(this).is(':checked')) ? 1 : 0,
             }
            
            $.ajax({
                url: `{{ URL::to('api/master/vendor/set-status') }}`,
                type: 'POST',
                data:data,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Authorization': `Bearer ${authToken}`,
                },
                success: function(response) {
                    showModalSuccess("Vendor Saved!", "Vendor data saved successfully!");
                },
                error: function(xhr) {
                    showModalError("Error!", "Please try again");
                }
            });
        });
    });


</script> --}}
@endsection