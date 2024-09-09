<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/images/logo_a.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="advisor">
    <meta name="keywords" content="advisor">
    <meta name="author" content="DMA">
    <title>@yield('title', 'Advisor')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tom-select.css') }}" />
    @yield('style')
    <!-- END: CSS Assets-->
    @vite('resources/css/app.css')
    <style>
        .tom-select.plugin-dropdown_input.focus.dropdown-active .ts-control {
            border: 0;
            display: flex;
            outline: none;
            min-height: 36px !important;
            align-items: center;
            background-color: transparent;
            font-size: inherit;
            padding: .5rem .75rem;
        }
    </style>
</head>

<!-- END: Head -->

<body class="main">

    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-6"
                    src="{{ asset('assets/images/logo_a.svg') }}">
                <span class="text-white text-lg ml-3"> Ad<span class="font-medium">Vison</span> </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            {{-- <div class="-intro-x breadcrumb mr-auto"> <span>Master</span> <i data-feather="chevron-right"
                    class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">@yield('title', 'Advisor')</a>
            </div> --}}
            <!-- END: Breadcrumb -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">

            <!-- BEGIN: Content -->
            @yield('content')
            <!-- BEGIN: Notification Content -->

            <!-- END: Notification Content -->
            <!-- END: Content -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/tom-select.complete.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        function formatDateToYMD(isoDateString) {
            const date = new Date(isoDateString);

            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based, so add 1
            const day = String(date.getDate()).padStart(2, '0');

            return `${day}/${month}/${year}`;
        }

        function getMonthName(monthNumber) {
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            // Subtract 1 from monthNumber to get the correct index (0-based index)
            if (monthNumber < 1 || monthNumber > 12) {
                return "Invalid month number";
            }

            return monthNames[monthNumber - 1];
        }

        function formatDateToDMY(dateStr) {
            if (!dateStr) {
                return;
            }
            // Parse the date string (assuming format "Y-m-d")
            const dateParts = dateStr.split("-");
            const year = dateParts[0];
            const month = dateParts[1] - 1; // JavaScript months are 0-based
            const day = dateParts[2];

            // Create a new Date object
            const date = new Date(year, month, day);

            // Define an array of month names
            const monthNames = [
                "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
            ];

            // Format the date to "d M, Y"
            const formattedDate = `${date.getDate()} ${monthNames[date.getMonth()]}, ${date.getFullYear()}`;

            return formattedDate;
        }

        function formatDateToMY(dateStr) {
            if (!dateStr) {
                return '-';
            }
            // Parse the date string (assuming format "Y-m-d")
            const dateParts = dateStr.split("-");
            const year = dateParts[0];
            const month = dateParts[1] - 1; // JavaScript months are 0-based
            const day = dateParts[2];

            // Create a new Date object
            const date = new Date(year, month, day);

            // Define an array of month names
            const monthNames = [
                "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
            ];

            // Format the date to "d M, Y"
            const formattedDate = `${monthNames[date.getMonth()]} ${date.getFullYear()}`;

            return formattedDate;
        }

        function convertDateFormat(dateString) {
            if (dateString == null || dateString == '') {
                return '-';
            }
            const dateParts = dateString.split("-");
            const formattedDate = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
            return formattedDate;
        }

        function hideModal(id) {
            $('.main').removeClass('overflow-y-hidden');
            $(id).hide();
        }
    </script>
    @yield('script')
    <!-- END: JS Assets-->
</body>

</html>
