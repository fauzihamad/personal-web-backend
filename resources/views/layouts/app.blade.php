<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('assets/images/logo_a.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hdj">
        <meta name="keywords" content="hdj">
        <meta name="author" content="Hamad Fauzi Jessar">
        <title>@yield('title', 'Login Admin')</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/tom-select.css')}}" />
        @yield('style')
        <!-- END: CSS Assets-->
        @vite('resources/css/app.css')

        {{-- style scroll --}}
        <style>
            /* Mengubah tampilan scrollbar secara umum */
            ::-webkit-scrollbar {
                width: 1px;
                height: 7.5px;
            }

            /* Warna track scroll */
            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }

            /* Warna handle scroll */
            ::-webkit-scrollbar-thumb {
                background: #888;
                border-radius: 2.5px;
            }

            /* Mengubah warna handle saat dihover */
            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            /* Mengubah ukuran dan warna saat berada di sudut elemen */
            ::-webkit-scrollbar-corner {
                background: #f1f1f1;
            }
        </style>

        {{-- TOM Select --}}
        <style>
            .tom-select.plugin-dropdown_input .ts-control{
                display: flex;
                padding: .5rem .75rem;
                align-items: center;
                min-height: 38px !important;
                font-size: inherit;
            }
            
            .ts-control{
                border: 1px solid #e5e7eb !important;
                box-shadow : 0 1px 2px 0 rgba(0,0,0,0.05);
                border-radius: .375rem;
            }
            .tom-select .no-results{
                padding: .75rem 8px;
            }
            .ts-dropdown, .ts-control, .ts-control input{
                z-index: 99;
            }
        </style>

        {{-- datepicker --}}
        <style>
            .litepicker{
                z-index: 99999!important;
            }

            .disable-button {
                background-color: rgba(20, 46, 113, 0.38);
                border-color: rgba(20, 46, 113, 0.38) !important;
            }
            
        </style>
    </head>

<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-feather="x-circle" class="w-16 h-16 text-theme-24 mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">
                        Do you really want to delete these records?
                        <br>
                        This process cannot be undone.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1"
                        id="cancel-delete">Cancel</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger w-24" id="confirm-delete">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->

{{-- Warning --}}
<div id="modal-confirmation" class="modal" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-feather="alert-circle" class="w-16 h-16 text-theme-12 mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">
                        Do you really to approve/unapprove this schedule?
                        {{-- <br> --}}
                        {{-- This process cannot be undone. --}}
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1"
                        id="cancel-confirmation">Cancel</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger w-24" id="confirm-button">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Warning --}}

<!-- END: Head -->

<body class="main">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="" class="flex mr-auto">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-6"
                    src="{{ asset('assets/images/logo_a.svg') }}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                    class="w-8 h-8 text-white transform -rotate-90"></i> </a>
        </div>
        <ul class="border-t border-theme-2 py-5 hidden">
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="home"></i> </div>
                    <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="index.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="box"></i> </div>
                    <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="index.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Side Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Simple Menu </div>
                        </a>
                    </li>
                    <li>
                        <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Top Menu </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="side-menu-light-inbox.html" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Inbox </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-file-manager.html" class="menu">
                    <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="menu__title"> File Manager </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-point-of-sale.html" class="menu">
                    <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                    <div class="menu__title"> Point of Sale </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-chat.html" class="menu">
                    <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                    <div class="menu__title"> Chat </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-post.html" class="menu">
                    <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="menu__title"> Post </div>
                </a>
            </li>
            <li>
                <a href="side-menu-light-calendar.html" class="menu">
                    <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                    <div class="menu__title"> Calendar </div>
                </a>
            </li>
            <li class="menu__devider my-6"></li>
            <li>
                <a href="javascript:;.html" class="menu menu--active">
                    <div class="menu__icon"> <i data-feather="edit"></i> </div>
                    <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                </a>
                <ul class="menu__sub-open">
                    <li>
                        <a href="side-menu-light-crud-data-list.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Data List </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-crud-form.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Form </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="users"></i> </div>
                    <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-users-layout-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-users-layout-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Layout 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="trello"></i> </div>
                    <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-profile-overview-1.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 1 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-2.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 2 </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-profile-overview-3.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overview 3 </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="layout"></i> </div>
                    <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Wizards <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-blog-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-blog-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Pricing <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Invoice <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-faq-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 1</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 2</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-faq-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Layout 3</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login-light-login.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Login </div>
                        </a>
                    </li>
                    <li>
                        <a href="login-light-register.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Register </div>
                        </a>
                    </li>
                    <li>
                        <a href="main-light-error-page.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Error Page </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-update-profile.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Update profile </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-change-password.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Change Password </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu__devider my-6"></li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                    <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Table <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-table.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Regular Table</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tabulator.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Tabulator</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Overlay <i data-feather="chevron-down"
                                    class="menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-modal.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Modal</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slide-over.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Slide Over</div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-notification.html" class="menu">
                                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                    <div class="menu__title">Notification</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-accordion.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Accordion </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-button.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Button </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-alert.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Alert </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-progress-bar.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Progress Bar </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tooltip.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Tooltip </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-dropdown.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Dropdown </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-typography.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Typography </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-icon.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Icon </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-loading-icon.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Loading Icon </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                    <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-regular-form.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Regular Form </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-datepicker.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Datepicker </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-tail-select.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Tail Select </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-upload.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> File Upload </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Wysiwyg Editor </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-validation.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Validation </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="menu">
                    <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                    <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i>
                    </div>
                </a>
                <ul class="">
                    <li>
                        <a href="side-menu-light-chart.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Chart </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-slider.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Slider </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-image-zoom.html" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Image Zoom </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="Icewall Tailwind HTML Admin Template" class="w-6"
                    src="{{ asset('assets/images/logo_a.svg') }}">
                <span class="text-white text-lg ml-3"> H<span class="font-medium">FJ</span> </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto"> <span>Master</span> <i data-feather="chevron-right"
                    class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">@yield('title', 'Hamad Fauzi Jessar')</a>
            </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false">
                    <img alt="foto profile" src="{{ asset('assets/images/profile-13.jpg') }}">
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                        <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">Media Planner</div>
                        </div>
                        <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                            {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>  --}}
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a href="javascript:;"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                                    <span>Logout</span>
                                </a>
                                {{-- Logout </a> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            {{-- side-nav--simple --}}
            <nav class="side-nav ">
                <ul>
                    @canAny(['plan-list', 'plan-create', 'plan-update', 'plan-delete'])
                    <li>
                        <a href="{{ route('media.plan') }}"
                            class="side-menu {{ Request::is('media*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                            <div class="side-menu__title">
                                Plan
                            </div>
                        </a>
                    </li>
                    @endcan
                    @canAny(['schedule-list', 'schedule-create', 'schedule-update', 'schedule-delete'])
                    <li>
                        <a href="{{ route('schedule.index') }}"
                            class="side-menu {{ Request::is('schedule*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                            <div class="side-menu__title">
                                Schedule
                            </div>
                        </a>
                    </li>
                    @endcan
                    @canAny(['order-list', 'order-create', 'order-update', 'order-delete'])
                    <li>
                        <a href="{{ route('order.index') }}"
                            class="side-menu {{ Request::is('order*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
                            <div class="side-menu__title">
                                Order
                            </div>
                        </a>
                    </li>
                    @endcan
                    @canAny(['campaign-detail-list', 'campaign-detail-create', 'campaign-detail-update', 'campaign-detail-delete'])
                    <li>
                        <a href="{{ route('campaign-detail.index') }}"
                            class="side-menu {{ Request::is('campaign-detail*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="tv"></i> </div>
                            <div class="side-menu__title">
                                Campaign Detail
                            </div>
                        </a>
                    </li>
                    @endcan
                    @canAny(['control-list', 'control-create', 'control-update', 'control-delete'])
                    <li>
                        <a href="{{ route('control.index') }}"
                            class="side-menu {{ Request::is('control*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="airplay"></i> </div>
                            <div class="side-menu__title">
                                Control
                            </div>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a href="javascript:;.html"
                            class="side-menu {{ Request::is('accounting*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="bar-chart"></i> </div>
                            <div class="side-menu__title">
                                Accounting
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="{{ Request::is('accounting*') ? 'side-menu__sub-open' : 'side-menu__sub-close' }}">
                            @canAny(['AR-list', 'AR-create', 'AR-update', 'AR-delete'])
                            <li>
                                <a href="{{ route('accounting.account-receivables.index') }}"
                                    class="side-menu {{ Request::is('accounting/account-receivables*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Account Receivables </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['AP-list', 'AP-create', 'AP-update', 'AP-delete'])
                            <li>
                                <a href="{{ route('accounting.account-payables.index') }}"
                                    class="side-menu {{ Request::is('accounting/account-payables*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="dollar-sign"></i> </div>
                                    <div class="side-menu__title"> Account Payables </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['delivery-note-list', 'delivery-note-create', 'delivery-note-update', 'delivery-note-delete'])
                            <li>
                                <a href="{{ route('accounting.delivery-note.index') }}"
                                    class="side-menu {{ Request::is('accounting.delivery-note*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Delivery Notes </div>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html"
                            class="side-menu {{ Request::is('master*') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title">
                                Master
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="{{ Request::is('master*') ? 'side-menu__sub-open' : 'side-menu__sub-close' }}">
                            @canAny(['client-list', 'client-create', 'client-update', 'client-delete'])
                            <li>
                                <a href="{{ route('master.client.index') }}"
                                    class="side-menu {{ Request::is('master/client*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Client </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['vendor-list', 'vendor-create', 'vendor-update', 'vendor-delete'])
                            <li>
                                <a href="{{ route('master.vendor.index') }}"
                                    class="side-menu {{ Request::is('master/vendor*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Vendor </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['product-list', 'product-create', 'product-update', 'product-delete'])
                            <li>
                                <a href="{{ route('master.product.index') }}"
                                    class="side-menu {{ Request::is('master/product*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Product </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['program-list', 'program-create', 'program-update', 'program-delete'])
                            <li>
                                <a href="{{ route('master.program.index') }}"
                                    class="side-menu {{ Request::is('master/program*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Program </div>
                                </a>
                            </li>
                            @endcan

                            @canAny(['user-list', 'user-create', 'user-update', 'user-delete'])    
                            <li>
                                <a href="{{ route('users.index') }}"
                                    class="side-menu {{ Request::is('users*') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">
                                        Users
                                    </div>
                                </a>
                            </li>
                            @endcan

                        </ul>
                    </li>
                </ul>
                <div class="flex items-center justify-center mt-3">
                    <button class="btn btn-primary" id="btn-minimize">
                        <i data-feather="corner-down-left" class="w-4 h-4 icon-minimize"></i>
                    </button>
                </div>
            </nav>
            
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            @yield('content')
            <!-- BEGIN: Notification Content -->
            <div id="success-notification" class="toastify-content hidden">
                <i class="text-theme-10" data-feather="check-circle"></i>
                <div class="ml-4 mr-4">
                    <div class="font-medium" id="notifTitle">Client Saved!</div>
                    <div class="text-gray-600 mt-1" id="notifMessage">Client data saved successfully!</div>
                </div>
            </div>
            <!-- END: Notification Content -->

            <div id="failed-notification-content" class="toastify-content hidden flex" >
                <i class="text-theme-24" data-feather="x-circle"></i> 
                <div class="ml-4 mr-4">
                    <div class="font-medium" id="notifErrorTitle">Registration failed!</div>
                    <div class="text-gray-600 mt-1" id="notifErrorMessage"> Please check the fileld form. </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/tom-select.complete.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('assets/js/jquery.number.min.js') }}"></script>

    <script>

        const authToken = localStorage.getItem('auth-token');

        const ajaxWithNotif = (url, type, data, titleNotif = "Saved!", messageNotif = "Data saved successfully!") => {
            
            $.ajax({
                url: `{{ URL::to('${url}') }}`,
                type: type,
                data: data,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Authorization': `Bearer ${authToken}`,
                },
                success: function(response) {
                    showModalSuccess(titleNotif, messageNotif);
                },
                error: function(xhr) {
                    showModalError("Error!", "Please try again");
                }
            });
        }

        function numberToDayInitial(number) {
            // Define the mapping of numbers to day initials
            const dayInitials = {
                1: 'M', // Monday
                2: 'T', // Tuesday
                3: 'W', // Wednesday
                4: 'T', // Thursday
                5: 'F', // Friday
                6: 'S', // Saturday
                7: 'S'  // Sunday
            };

            // Convert the number to a string to process each digit
            const numberStr = number.toString();
            let result = '';

            // Iterate through each digit of the number
            for (let digit of numberStr) {
                // Map the digit to its day initial
                if (dayInitials.hasOwnProperty(digit)) {
                    result += dayInitials[digit];
                } else {
                    result += '-'; // Handle invalid digits
                }
            }

            return result;
        }

        function formatDateToYMD(isoDateString) {
            const date = new Date(isoDateString);

            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based, so add 1
            const day = String(date.getDate()).padStart(2, '0');

            return `${day}/${month}/${year}`;
        }

        function getDayInitial(dateString) {
            const date = new Date(dateString);
            const days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]; // Sunday, Monday, Tuesday, etc.
            const dayIndex = date.getDay();

            return days[dayIndex];
        }

        const showPagination = (from, to, total, current_page, currentPage, links, page) => {
            $('#pagination-info').text(`Showing ${from} to ${to} of ${total} entries`);

            let paginationLinks = '';

            if (current_page != 1) {
                paginationLinks +=
                    `<li><a class="pagination__link" href="#" data-page="1"><i class="w-4 h-4" data-feather="chevrons-left"></i></a></li>`;
            }

            links.forEach(link => {
                if (link.label === '&laquo; Previous' && current_page != 1) {
                    paginationLinks +=
                        `<li><a class="pagination__link" href="#" data-page="${currentPage - 1}"><i class="w-4 h-4" data-feather="chevron-left"></i></a></li>`;
                }
                if (link.label === 'Next &raquo;' && current_page != last_page) {
                    paginationLinks +=
                        `<li><a class="pagination__link" href="#" data-page="${currentPage + 1}"><i class="w-4 h-4" data-feather="chevron-right"></i></a></li>`;
                }
                if (link.label !== '&laquo; Previous' && link.label !== 'Next &raquo;') {
                    paginationLinks +=
                        `<li><a class="pagination__link ${link.active ? "pagination__link--active" : ''}" href="#" data-page="${link.label}">${link.label}</a></li>`;
                }
            });

            if (current_page != last_page) {
                paginationLinks +=
                    `<li><a class="pagination__link" href="#" data-page="${last_page}"><i class="w-4 h-4" data-feather="chevrons-right"></i></a></li>`;
            }

            $('#pagination-links').html(paginationLinks);
            feather.replace();

            $('#pagination-links a').on('click', function(event) {
                event.preventDefault();
                const newPage = $(this).data('page');
                if (newPage && newPage !== currentPage) {
                    currentPage = newPage;
                    loadSchedule(currentPage);
                }
            });
        }

        function capitalizeFirstWordInSentences(text) {
            return text.replace(/(^\s*\w|[.!?]\s*\w)/g, function(c) {
                return c.toUpperCase();
            });
        }
        
        function parseDate(dateString) {
            if(dateString){
                const [year, month, day] = dateString.split('-').map(Number);
                return new Date(year, month - 1, day);
            }else{
                return new Date();
            }
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
        
        function getDaysInMonth(dateString) {
            const date = new Date(dateString);
            const month = date.getMonth() + 1;
            const year = date.getFullYear();

            return new Date(year, month, 0).getDate();
        }

        function convertToWeekdays(number) {
            const days = ['M', 'T', 'W', 'T', 'F', 'S', 'S'];
            let result = '';

            for (let i = 0; i < number.length; i++) {
                const digit = parseInt(number[i]);
                if (digit >= 1 && digit <= 7) {
                    result += days[digit - 1];
                }
            }

            return result;
        }

        function getLoadingTable(numColSpan) {

            const html = `'<tr><td colspan="${numColSpan}" class="text-center">Loading...</td></tr>'`
            
            return html;
        }

        function getNoDataTable(numColSpan) {

            const html = `'<tr><td colspan="${numColSpan}" class="text-center">No Data</td></tr>'`
            
            return html;
        }


    </script>
    
    <script>
        

        let sideNavStatus = localStorage.getItem('sideNavStatus');
        
        if (sideNavStatus === 'simple') {
            $('.side-nav').addClass('side-nav--simple');
            $('#btn-minimize .icon-minimize').attr('data-feather', 'corner-down-right');
        } else {
            $('.side-nav').removeClass('side-nav--simple');
            $('#btn-minimize .icon-minimize').attr('data-feather', 'corner-down-left');
        }
        feather.replace();
        
        $('#btn-minimize').on('click', function() {
            $('.side-nav').toggleClass('side-nav--simple');
            let icon = $(this).find('.icon-minimize');
            
            if ($('.side-nav').hasClass('side-nav--simple')) {
                icon.attr('data-feather', 'corner-down-right');
                localStorage.setItem('sideNavStatus', 'simple');
            } else {
                icon.attr('data-feather', 'corner-down-left');
                localStorage.setItem('sideNavStatus', 'normal');
            }
            feather.replace();
        });
        const showModalError = (title, desc) => {
            
            $("#notifErrorTitle").empty().html(title);
            $("#notifErrorMessage").empty().html(desc);

            Toastify({
                node: cash("#failed-notification-content")
                    .clone().addClass("flex")
                    .removeClass("hidden")[0],
                duration: 3000,
                // duration: -1, 
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        }

        const showModalSuccess = (title, desc, dur = 3000) => {
            $("#notifTitle").empty().html(title);
            $("#notifMessage").empty().html(desc);

            Toastify({
                node: cash("#success-notification")
                    .clone().addClass("flex")
                    .removeClass("hidden")[0],
                duration: dur,
                // duration: -1, 
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        }

    </script>
    @yield('script')
    <!-- END: JS Assets-->
</body>

</html>
