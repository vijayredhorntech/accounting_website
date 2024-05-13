<div class="side-menu xl:ml-0 shadow-xl transition-[margin,padding] duration-300 xl:shadow-none fixed top-0 left-0 z-50 group inset-y-0 xl:py-3.5 xl:pl-3.5 after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
    <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
        <a class="ml-5 mt-5" href="#">
            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
        </a>
    </div>




    <div class="side-menu__content h-full box bg-white/[0.95] rounded-none xl:rounded-xl z-20 relative w-[275px] duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] overflow-hidden flex flex-col">
        <div class="flex-none hidden xl:flex items-center z-10 px-5 h-[65px] w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px]">
            <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2" href="#">
                    <img class="h-[70px] w-[70px] -ml-4" src="{{asset('assets/images/appLogo.png')}}" alt="">

                <div class="overflow-hidden ml-3.5 font-medium transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                    {{auth()->user()->name}}
                </div>
            </a>
            <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-slate-600/40 transition-[opacity,transform] hover:bg-slate-600/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="#">
                <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
            </a>
        </div>
        <div class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
            <ul class="scrollable">
                <li class="side-menu__divider">
                    DASHBOARDS
                </li>
                <li>
                    <a href="{{route('dashboard')}}" class="side-menu__link side-menu__link--{{Route::currentRouteName()==='dashboard' ?'active': ''}} ">
                        <i data-tw-merge="" data-lucide="gauge-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="user-check" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Customer/ Vendors</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Add New</div>
                            </a>
                            <!-- BEGIN: Second Child -->
                            <!-- END: Second Child -->
                        </li>

                        <li>
                            <a href="echo-product-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Customers
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="echo-product-grid.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Vendors
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Products/ Inventory</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Add New Product</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-product-grid.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="folder" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Product Groups
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-product-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="shopping-cart" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Products
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-product-list.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="database" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Stock
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- END: Second Child -->
                </li>


                <li class="side-menu__divider">
                    Invoices
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="shopping-cart" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Sales</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="file" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Quote</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="maximize-2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Sales Invoice</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="corner-right-down" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Payment In</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="corner-down-right" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Credit Note</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="chevrons-right" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Sale Return</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Delivery Challans</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="shuffle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Performa Invoice</div>
                            </a>
                        </li>


                    </ul>
                    <!-- END: Second Child -->
                </li>



                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Purchase</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="file" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Quote</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="minimize-2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Purchase Invoice</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="corner-left-up" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Payment Out</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="corner-up-left" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Debit Note</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="chevrons-left" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Purchase Return</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Delivery Challans</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="shuffle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Performa Invoice</div>
                            </a>
                        </li>


                    </ul>
                    <!-- END: Second Child -->
                </li>

                <li class="side-menu__divider">
                    REPORTS
                </li>
                <li>
                    <a href="{{route('dashboard')}}" class="side-menu__link side-menu__link--{{Route::currentRouteName()==='' ?'active': ''}} ">
                        <i data-tw-merge="" data-lucide="activity" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Reports</div>
                    </a>
                </li>

                <li class="side-menu__divider">
                    ACCOUNTS
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="globe" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Accounting Solutions</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="key" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Cash & Bank</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="link" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">E-Invoice</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="save" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Automated Bills</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="alert-triangle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Expenses</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="book" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Budgets</div>
                            </a>
                        </li>

                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li>
                    <a href="javascript:;" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="scissors" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Business Tools</div>
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="hidden">
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="user-check" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Staff Attendance & Payroll</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="user-x" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Manage Users</div>
                            </a>
                        </li>
                        <li>
                            <a href="echo-dashboard-overview-2.html" class="side-menu__link ">
                                <i data-tw-merge="" data-lucide="map-pin" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">Online Store</div>
                            </a>
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
                <li class="side-menu__divider">
                    SETTINGS
                </li>
                <li>
                    <a href="{{route('dashboard')}}" class="side-menu__link side-menu__link--{{Route::currentRouteName()==='' ?'active': ''}} ">
                        <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Account Setting</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard')}}" class="side-menu__link side-menu__link--{{Route::currentRouteName()==='' ?'active': ''}} ">
                        <i data-tw-merge="" data-lucide="log-out" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Log Out</div>
                    </a>
                </li>

            </ul>
        </div>
    </div>


    <div class="fixed inset-x-0 top-0 mt-3.5 h-[65px] transition-[margin] duration-100 xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px]">
        <div class="top-bar absolute left-0 xl:left-3.5 right-0 h-full mx-5 group before:content-[''] before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
            <div class="box group-[.top-bar--active]:box container flex h-full w-full items-center border-transparent bg-transparent shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-transparent group-[.top-bar--active]:bg-gradient-to-r group-[.top-bar--active]:from-theme-1 group-[.top-bar--active]:to-theme-2 group-[.top-bar--active]:px-5">
                <div class="flex items-center gap-1 xl:hidden">
                    <a class="open-mobile-menu rounded-full p-2 text-white hover:bg-white/5" href="#">
                        <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                    </a>
                    <a class="rounded-full p-2 text-white hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                        <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                    </a>
                </div>
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
                    <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                        <li class="">
                            <a href="{{route('dashboard')}}">App</a>
                        </li>
                        <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                            <a href="{{route('dashboard')}}">Dashboards</a>
                        </li>
                        <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                            <a href="#">Analytics</a>
                        </li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="relative hidden flex-1 justify-center xl:flex" data-tw-toggle="modal" data-tw-target="#quick-search">
                    <div class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border border-transparent bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors duration-300 hover:bg-white/[0.15] hover:duration-100">
                        <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                        <div class="ml-2.5 mr-auto">Quick search...</div>
                        <div>⌘K</div>
                    </div>
                </div>
                <div id="quick-search" aria-hidden="true" tabindex="-1" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                    <div class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                                <i data-tw-merge="" data-lucide="search" class="stroke-[1] w-5 h-5 -mr-1.5 text-slate-500"></i>
                            </div>
                            <input data-tw-merge="" type="text" placeholder="Quick search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0">
                            <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                                <div class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                                    ESC
                                </div>
                            </div>
                        </div>
                        <div class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                            <div class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                                <i data-tw-merge="" data-lucide="search-x" class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                                <div class="mt-5 text-xl font-medium">
                                    No result found
                                </div>
                                <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                                    No results found for
                                    <span class="global-search__keyword font-medium italic"></span>
                                    . Please try a different search term or check your
                                    spelling.
                                </div>
                            </div>
                            <div class="hidden group-[.global-search--show-result]:block">
                                <div class="px-5 py-4">
                                    <div class="flex items-center">
                                        <div class="text-xs uppercase text-slate-500">
                                            Start your search here...
                                        </div>
                                    </div>
                                    <div class="mt-3.5 flex flex-wrap gap-2">
                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="#">
                                            <i data-tw-merge="" data-lucide="users2" class="h-4 w-4 stroke-[1.3]"></i>
                                            Users
                                        </a>
                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="#">
                                            <i data-tw-merge="" data-lucide="building2" class="h-4 w-4 stroke-[1.3]"></i>
                                            Departments
                                        </a>
                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="#">
                                            <i data-tw-merge="" data-lucide="kanban-square" class="h-4 w-4 stroke-[1.3]"></i>
                                            Products
                                        </a>
                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50" href="#">
                                            <i data-tw-merge="" data-lucide="mail-check" class="h-4 w-4 stroke-[1.3]"></i>
                                            Mails
                                        </a>
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><a data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;" class="cursor-pointer flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50">More
                                                <i data-tw-merge="" data-lucide="chevron-down" class="-ml-0.5 h-4 w-4 stroke-[1.3]"></i>
                                            </a>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="map" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Locations</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="file-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Projects</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Devices</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-dashed px-5 py-4">
                                    <div class="flex items-center">
                                        <div class="text-xs uppercase text-slate-500">
                                            Users
                                        </div>
                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                            See All
                                        </a>
                                    </div>
                                    <div class="mt-3.5 flex flex-col gap-1">
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/users/user9-50x50.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                Denzel Washington
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Atlanta, USA
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/users/user3-50x50.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                Leonardo DiCaprio
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Chicago, USA
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/users/user2-50x50.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                Meryl Streep
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Los Angeles, USA
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-t border-dashed px-5 py-4">
                                    <div class="flex items-center">
                                        <div class="text-xs uppercase text-slate-500">
                                            Departments
                                        </div>
                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                            See All
                                        </a>
                                    </div>
                                    <div class="mt-3.5 flex flex-col gap-1">
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                <i data-tw-merge="" data-lucide="store" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                            </div>
                                            <div class="truncate font-medium">
                                                Operations
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Guyana
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                <i data-tw-merge="" data-lucide="hotel" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                            </div>
                                            <div class="truncate font-medium">
                                                Engineering
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Bulgaria
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                <i data-tw-merge="" data-lucide="store" class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                            </div>
                                            <div class="truncate font-medium">
                                                Product Management
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Northern Mariana Islands
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="border-t border-dashed px-5 py-4">
                                    <div class="flex items-center">
                                        <div class="text-xs uppercase text-slate-500">
                                            Products
                                        </div>
                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                            See All
                                        </a>
                                    </div>
                                    <div class="mt-3.5 flex flex-col gap-1">
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/products/product8-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                Smartphone Charging Dock
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Home & Garden
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/products/product9-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                8-Cup Coffee Maker
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Beauty & Personal Care
                                            </div>
                                        </a>
                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80" href="#">
                                            <div class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="dist/images/products/product7-400x400.jpg" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="truncate font-medium">
                                                Wireless Earbuds with Mic
                                            </div>
                                            <div class="hidden text-slate-500 sm:block">
                                                Furniture
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notification & User Menu -->




                <div class="flex flex-1 items-center">
                    <div class="ml-auto flex items-center gap-1">


                        <a class="rounded-full p-2 text-white hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#notifications-panel" href="javascript:;">
                            <i data-tw-merge="" data-lucide="bell" class="stroke-[1] h-[18px] w-[18px]"></i>
                        </a>
                    </div>
                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5">
                        <button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit h-[50px] w-[50px] overflow-hidden rounded-full border-[3px] border-white/[0.15]">
                            <img src="{{asset('assets/images/appLogo2.jpeg')}}" alt="Tailwise - Admin Dashboard Template">
                        </button>
                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-1 w-56">
                                <a href="echo-settings.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Profile Info</a>
                                <a href="echo-settings-security.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="lock" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Reset Password</a>
                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                </div>

                                <form method="POST" action="{{ route('logout') }}" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                    @csrf
                                    <button type="submit" class="flex"><i data-tw-merge="" data-lucide="power" class="stroke-[1] mr-2 h-4 w-4"></i>
                                        Logout
                                    </button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="notifications-panel" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                        <div data-tw-merge="" class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]"><a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14" data-tw-dismiss="modal" href="javascript:;">
                                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                            </a>
                            <div data-tw-merge="" class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                <h2 class="mr-auto text-base font-medium">Notifications</h2>
                                <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer bg-primary focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i data-tw-merge="" data-lucide="shield-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Read All
                                </button>
                            </div>
                            <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                <div class="flex flex-col gap-0.5 p-3">
                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                        <div>
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="{{asset('assets/images/users/user4.jpeg')}}" alt="User Name">
                                            </div>
                                        </div>
                                        <div class="sm:ml-5">
                                            <div class="font-medium">Purchase Request</div>
                                            <div class="mt-0.5 text-slate-500">
                                                Ask for product purchase
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                2 hours ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80" href="#">
                                        <div>
                                            <div class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                <img src="{{asset('assets/images/users/user2.jpeg')}}" alt="User Name">
                                            </div>
                                        </div>
                                        <div class="sm:ml-5">
                                            <div class="font-medium">Payment Request</div>
                                            <div class="mt-0.5 text-slate-500">
                                                Ask for payment
                                            </div>
                                            <div class="mt-1.5 text-xs text-slate-500">
                                                1 hours ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
