<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="box box--stacked flex flex-col p-1.5">
                        <div
                            class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                            <div
                                class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]"></div>
                            <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
                                <div
                                    class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                    <img src="{{asset('assets/images/users/user2.jpeg')}}"
                                         alt="Customer_Vendor Profile Photos">
                                </div>
                                <div
                                    class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                </div>
                            </div>
                        </div>
                        <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                            <div class="flex items-center justify-center text-xl font-medium">
                                James Smith

                                {{--                                if user is active--}}
                                <i data-tw-merge="" data-lucide="badge-check"
                                   class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>
                                {{--                                if user is not active--}}
                                {{--                                <i data-tw-merge="" data-lucide="badge-x" class="stroke-[1] w-5 h-5 ml-2 fill-red-500/30 text-red-500"></i>--}}
                            </div>
                            <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="map-pin"
                                       class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    1234 North Avenue, New York
                                </div>
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="mail" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    <a href="mailto: james@gmail.com">james@gmail.com</a>
                                </div>
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="phone" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    +1 234 567 890
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mt-10">
                        <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                            <ul data-tw-merge="" role="tablist"
                                class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
                                <li id="example-1-tab" data-tw-merge="" role="presentation"
                                    class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Profile
                                    </button>
                                </li>
                                <li id="example-4-tab" data-tw-merge="" role="presentation"
                                    class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#example-4" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Transactions
                                        <span
                                            class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                                                                120
                                                            </span></button>
                                </li>
                                <li id="example-2-tab" data-tw-merge="" role="presentation"
                                    class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#example-2" role="tab"
                                            class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Unpaid Invoices
                                        <span
                                            class="ml-2 flex h-5 items-center justify-center rounded-full border border-theme-1/10 bg-theme-1/10 px-1.5 text-xs font-medium text-theme-1/70">
                                                                4
                                                            </span></button>
                                </li>
                            </ul>
                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                                <button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 rounded-[0.6rem] bg-white py-3 text-[0.94rem]">
                                            <span class="flex h-5 w-5 items-center justify-center">
                                                <i data-tw-merge="" data-lucide="more-vertical"
                                                   class="h-4 w-4 stroke-[1.3]"></i>
                                            </span>
                                </button>
                                <div data-transition="" data-selector=".show"
                                     data-enter="transition-all ease-linear duration-150"
                                     data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                     data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                     data-leave="transition-all ease-linear duration-150"
                                     data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                     data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                     class="dropdown-menu absolute z-[9999] hidden">
                                    <div data-tw-merge=""
                                         class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-44">
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><i
                                                data-tw-merge="" data-lucide="lock" class="stroke-[1] mr-2 h-4 w-4"></i>
                                            Lock Account
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div data-transition="" data-selector=".active"
                             data-enter="transition-[visibility,opacity] ease-linear duration-150"
                             data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                             data-enter-to="visible opacity-100"
                             data-leave="transition-[visibility,opacity] ease-linear duration-150"
                             data-leave-from="visible opacity-100"
                             data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1"
                             role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active">
                            <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-7">
                                <div class="col-span-12 xl:col-span-8">
                                    <div class="flex flex-col gap-y-7">
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Recent Activities
                                            </div>
                                            <div class="-my-3">
                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">


                                                    {{--                                                        foreach activity on this div for each activity--}}
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                New Purchase Order
                                                            </a>

                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                2 hours ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                New Purchase Order
                                                            </a>

                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                2 hours ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Invoice Cleared
                                                            </a>

                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                1 day ago
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="relative col-span-12 row-start-1 xl:col-span-4 xl:col-start-9">
                                    <div class="sticky top-[6.2rem] flex flex-col gap-y-7">
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div>Profile Status (100%)</div>
                                            <div class="mt-3.5 flex h-2">
                                                <div
                                                    class="h-full w-[100%] border border-primary/50 bg-primary/50 first:rounded-l last:rounded-r">
                                                </div>

                                            </div>
                                            <a href="{{route('create-customer-vendor')}}" data-tw-merge=""
                                               class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-5 w-full border-primary/20 bg-white text-primary hover:bg-primary/20">
                                                <i data-tw-merge="" data-lucide="user-check"
                                                   class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                Profile Settings</a>
                                        </div>
                                        <div class="box box--stacked flex flex-col p-5">
                                            <div
                                                class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                                Profile
                                            </div>
                                            <div class="flex flex-col gap-8">
                                                <div>
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Personal Data
                                                    </div>
                                                    <div class="mt-3.5">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="user"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Name: James Cameron
                                                        </div>
                                                        <div class="mt-3 flex items-center">
                                                            <i data-tw-merge="" data-lucide="mail"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Email: james@gmail.com
                                                        </div>
                                                        <div class="mt-3 flex items-center">
                                                            <i data-tw-merge="" data-lucide="phone-call"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Mobile: +91 9876543210
                                                        </div>
                                                        <div class="mt-3 flex items-center">
                                                            <i data-tw-merge="" data-lucide="phone"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Phone: +1 (345) 678-9012
                                                        </div>
                                                        <div class="mt-3 flex items-center">
                                                            <i data-tw-merge="" data-lucide="printer"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Joining Date: 12th Jan 2021
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Address Information
                                                    </div>
                                                    <div class="mt-3.5">
                                                        <div class="flex items-center">
                                                            <i data-tw-merge="" data-lucide="map"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Address: 4663 Washington Ave. Manchester, Kentucky 39495
                                                        </div>
                                                        <div class="mt-3 flex items-center">
                                                            <i data-tw-merge="" data-lucide="map-pin"
                                                               class="mr-2 h-4 w-4 stroke-[1.3] text-slate-500"></i>
                                                            Pincode: 39495
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-transition="" data-selector=".active"
                             data-enter="transition-[visibility,opacity] ease-linear duration-150"
                             data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                             data-enter-to="visible opacity-100"
                             data-leave="transition-[visibility,opacity] ease-linear duration-150"
                             data-leave-from="visible opacity-100"
                             data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-4"
                             role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane">
                            <div class="mt-3.5 gap-x-6 gap-y-10">
                                <div class="box box--stacked flex flex-col">
                                    <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                        <div>
                                            <div class="relative">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     data-lucide="search"
                                                     class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <path d="m21 21-4.3-4.3"></path>
                                                </svg>
                                                <input type="text" placeholder="Search transactions..."
                                                       class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overflow-auto xl:overflow-visible">
                                        <table class="w-full text-left border-b border-slate-200/60">
                                            <thead class="">
                                            <tr class="">

                                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Transaction ID
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Status
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Amount
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                                    Date
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                                    Action
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="[&amp;_td]:last:border-b-0">

                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <a class="flex items-center text-primary" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="external-link"
                                                             class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                            <polyline points="15 3 21 3 21 9"></polyline>
                                                            <line x1="10" x2="21" y1="14" y2="3"></line>
                                                        </svg>
                                                        <div
                                                            class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                            IVR/20240301/V/III/6641603712
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center text-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="package"
                                                             class="lucide lucide-package h-3.5 w-3.5 stroke-[1.7]">
                                                            <path d="m7.5 4.27 9 5.15"></path>
                                                            <path
                                                                d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
                                                            <path d="m3.3 7 8.7 5 8.7-5"></path>
                                                            <path d="M12 22V12"></path>
                                                        </svg>
                                                        <div class="ml-1.5 whitespace-nowrap">
                                                            Completed
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ₹1.186
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        Sun Jul 2020
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center">
                                                        <div data-tw-placement="bottom-end"
                                                             class="dropdown relative h-5">
                                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer h-5 w-5 text-slate-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     data-lucide="more-vertical"
                                                                     class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div data-transition="" data-selector=".show"
                                                                 data-enter="transition-all ease-linear duration-150"
                                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave="transition-all ease-linear duration-150"
                                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 class="dropdown-menu z-[9999] hidden absolute invisible opacity-0 translate-y-1"
                                                                 data-state="leave" id="_b1h8vrf4p"
                                                                 style="display: none; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-253px, 350px);"
                                                                 data-popper-placement="bottom-end">
                                                                <div
                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="check-square"
                                                                             class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4">
                                                                            <polyline
                                                                                points="9 11 12 14 22 4"></polyline>
                                                                            <path
                                                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                                        </svg>
                                                                        Edit</a>
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4">
                                                                            <path d="M3 6h18"></path>
                                                                            <path
                                                                                d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                                            <path
                                                                                d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                                            <line x1="10" x2="10" y1="11"
                                                                                  y2="17"></line>
                                                                            <line x1="14" x2="14" y1="11"
                                                                                  y2="17"></line>
                                                                        </svg>
                                                                        Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="[&amp;_td]:last:border-b-0">

                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <a class="flex items-center text-info" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="external-link"
                                                             class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                            <polyline points="15 3 21 3 21 9"></polyline>
                                                            <line x1="10" x2="21" y1="14" y2="3"></line>
                                                        </svg>
                                                        <div
                                                            class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-info/30 decoration-dotted underline-offset-[3px]">
                                                            IVR/20240301/IX/V/414898578
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center text-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="package-x"
                                                             class="lucide lucide-package-x h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                                            <path d="m7.5 4.27 9 5.15"></path>
                                                            <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                            <line x1="12" x2="12" y1="22" y2="12"></line>
                                                            <path d="m17 13 5 5m-5 0 5-5"></path>
                                                        </svg>
                                                        <div class="ml-1.5 whitespace-nowrap">
                                                            Cancelled
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ₹1.373
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        Thu Feb 2022
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center">
                                                        <div data-tw-placement="bottom-end"
                                                             class="dropdown relative h-5">
                                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer h-5 w-5 text-slate-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     data-lucide="more-vertical"
                                                                     class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div data-transition="" data-selector=".show"
                                                                 data-enter="transition-all ease-linear duration-150"
                                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave="transition-all ease-linear duration-150"
                                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                                 data-state="leave" style="display: none;">
                                                                <div
                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="check-square"
                                                                             class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4">
                                                                            <polyline
                                                                                points="9 11 12 14 22 4"></polyline>
                                                                            <path
                                                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                                        </svg>
                                                                        Edit</a>
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4">
                                                                            <path d="M3 6h18"></path>
                                                                            <path
                                                                                d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                                            <path
                                                                                d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                                            <line x1="10" x2="10" y1="11"
                                                                                  y2="17"></line>
                                                                            <line x1="14" x2="14" y1="11"
                                                                                  y2="17"></line>
                                                                        </svg>
                                                                        Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="[&amp;_td]:last:border-b-0">

                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <a class="flex items-center text-warning" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="external-link"
                                                             class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                            <polyline points="15 3 21 3 21 9"></polyline>
                                                            <line x1="10" x2="21" y1="14" y2="3"></line>
                                                        </svg>
                                                        <div
                                                            class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                            IVR/20240301/I/IV/1909266333
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center text-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="hourglass"
                                                             class="lucide lucide-hourglass h-3.5 w-3.5 stroke-[1.7]">
                                                            <path d="M5 22h14"></path>
                                                            <path d="M5 2h14"></path>
                                                            <path
                                                                d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"></path>
                                                            <path
                                                                d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"></path>
                                                        </svg>
                                                        <div class="ml-1.5 whitespace-nowrap">
                                                            Pending
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ₹1.838
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        Sat Aug 2021
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center">
                                                        <div data-tw-placement="bottom-end"
                                                             class="dropdown relative h-5">
                                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer h-5 w-5 text-slate-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     data-lucide="more-vertical"
                                                                     class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div data-transition="" data-selector=".show"
                                                                 data-enter="transition-all ease-linear duration-150"
                                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave="transition-all ease-linear duration-150"
                                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                                 data-state="leave" style="display: none;">
                                                                <div
                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="check-square"
                                                                             class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4">
                                                                            <polyline
                                                                                points="9 11 12 14 22 4"></polyline>
                                                                            <path
                                                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                                        </svg>
                                                                        Edit</a>
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4">
                                                                            <path d="M3 6h18"></path>
                                                                            <path
                                                                                d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                                            <path
                                                                                d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                                            <line x1="10" x2="10" y1="11"
                                                                                  y2="17"></line>
                                                                            <line x1="14" x2="14" y1="11"
                                                                                  y2="17"></line>
                                                                        </svg>
                                                                        Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="[&amp;_td]:last:border-b-0">

                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <a class="flex items-center text-danger" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="external-link"
                                                             class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                                            <polyline points="15 3 21 3 21 9"></polyline>
                                                            <line x1="10" x2="21" y1="14" y2="3"></line>
                                                        </svg>
                                                        <div
                                                            class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                            IVR/20240301/I/IV/1909266333
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center text-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" data-lucide="file-x2"
                                                             class="lucide lucide-file-x2 h-3.5 w-3.5 stroke-[1.7]">
                                                            <path
                                                                d="M4 22h14a2 2 0 0 0 2-2V7.5L14.5 2H6a2 2 0 0 0-2 2v4"></path>
                                                            <path d="M14 2v6h6"></path>
                                                            <path d="m3 12.5 5 5"></path>
                                                            <path d="m8 12.5-5 5"></path>
                                                        </svg>
                                                        <div class="ml-1.5 whitespace-nowrap">
                                                            Failed
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ₹1.838
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        Sat Aug 2021
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center justify-center">
                                                        <div data-tw-placement="bottom-end"
                                                             class="dropdown relative h-5">
                                                            <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                    class="cursor-pointer h-5 w-5 text-slate-500">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                                     stroke="currentColor" stroke-width="2"
                                                                     stroke-linecap="round" stroke-linejoin="round"
                                                                     data-lucide="more-vertical"
                                                                     class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div data-transition="" data-selector=".show"
                                                                 data-enter="transition-all ease-linear duration-150"
                                                                 data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave="transition-all ease-linear duration-150"
                                                                 data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                 data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                 class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                                 data-state="leave" style="display: none;">
                                                                <div
                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="check-square"
                                                                             class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4">
                                                                            <polyline
                                                                                points="9 11 12 14 22 4"></polyline>
                                                                            <path
                                                                                d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                                        </svg>
                                                                        Edit</a>
                                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" viewBox="0 0 24 24"
                                                                             fill="none" stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4">
                                                                            <path d="M3 6h18"></path>
                                                                            <path
                                                                                d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                                            <path
                                                                                d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                                            <line x1="10" x2="10" y1="11"
                                                                                  y2="17"></line>
                                                                            <line x1="14" x2="14" y1="11"
                                                                                  y2="17"></line>
                                                                        </svg>
                                                                        Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-transition="" data-selector=".active"
                             data-enter="transition-[visibility,opacity] ease-linear duration-150"
                             data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                             data-enter-to="visible opacity-100"
                             data-leave="transition-[visibility,opacity] ease-linear duration-150"
                             data-leave-from="visible opacity-100"
                             data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2"
                             role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane">
                            <div class="mt-3.5  gap-x-6 gap-y-10">
                                <div class="mt-2 overflow-auto lg:overflow-visible">
                                    <table class="w-full text-left border-separate border-spacing-y-[10px]">
                                        <tbody>
                                        <tr class="">
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="trending-up"
                                                         class="lucide lucide-trending-up h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                    <div class="ml-3.5">
                                                        <a class="whitespace-nowrap font-medium" href="#">
                                                            IVR/20240301/IX/VII/2645514417
                                                        </a>
                                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                                            Sales Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Type
                                                </div>
                                                <div class="flex items-center text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="package-search"
                                                         class="lucide lucide-package-search h-3.5 w-3.5 stroke-[1.7]">
                                                        <path
                                                            d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                                        <path d="m7.5 4.27 9 5.15"></path>
                                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                        <line x1="12" x2="12" y1="22" y2="12"></line>
                                                        <circle cx="18.5" cy="15.5" r="2.5"></circle>
                                                        <path d="M20.27 17.27 22 19"></path>
                                                    </svg>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        To Receive
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Date
                                                </div>
                                                <div class="whitespace-nowrap">12/12/2023</div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5">
                                                        <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                class="cursor-pointer h-5 w-5 text-slate-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 data-lucide="more-vertical"
                                                                 class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show"
                                                             data-enter="transition-all ease-linear duration-150"
                                                             data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave="transition-all ease-linear duration-150"
                                                             data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                             data-state="leave" style="display: none;">
                                                            <div
                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="wallet-cards"
                                                                         class="lucide lucide-wallet-cards stroke-[1] mr-2 h-4 w-4">
                                                                        <rect width="18" height="18" x="3" y="3"
                                                                              rx="2"></rect>
                                                                        <path
                                                                            d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                                                                        <path
                                                                            d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21"></path>
                                                                    </svg>
                                                                    View Details</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="printer"
                                                                         class="lucide lucide-printer stroke-[1] mr-2 h-4 w-4">
                                                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                                        <path
                                                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                                        <rect width="12" height="8" x="6" y="14"></rect>
                                                                    </svg>
                                                                    Print Invoice</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="trending-up"
                                                         class="lucide lucide-trending-up h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                    <div class="ml-3.5">
                                                        <a class="whitespace-nowrap font-medium" href="#">
                                                            IVR/20240301/IX/VII/2645514417
                                                        </a>
                                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                                            Sales Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Type
                                                </div>
                                                <div class="flex items-center text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="package-search"
                                                         class="lucide lucide-package-search h-3.5 w-3.5 stroke-[1.7]">
                                                        <path
                                                            d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                                        <path d="m7.5 4.27 9 5.15"></path>
                                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                        <line x1="12" x2="12" y1="22" y2="12"></line>
                                                        <circle cx="18.5" cy="15.5" r="2.5"></circle>
                                                        <path d="M20.27 17.27 22 19"></path>
                                                    </svg>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        To Receive
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Date
                                                </div>
                                                <div class="whitespace-nowrap">12/12/2023</div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5">
                                                        <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                class="cursor-pointer h-5 w-5 text-slate-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 data-lucide="more-vertical"
                                                                 class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show"
                                                             data-enter="transition-all ease-linear duration-150"
                                                             data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave="transition-all ease-linear duration-150"
                                                             data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                             data-state="leave" style="display: none;">
                                                            <div
                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="wallet-cards"
                                                                         class="lucide lucide-wallet-cards stroke-[1] mr-2 h-4 w-4">
                                                                        <rect width="18" height="18" x="3" y="3"
                                                                              rx="2"></rect>
                                                                        <path
                                                                            d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                                                                        <path
                                                                            d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21"></path>
                                                                    </svg>
                                                                    View Details</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="printer"
                                                                         class="lucide lucide-printer stroke-[1] mr-2 h-4 w-4">
                                                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                                        <path
                                                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                                        <rect width="12" height="8" x="6" y="14"></rect>
                                                                    </svg>
                                                                    Print Invoice</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="trending-up"
                                                         class="lucide lucide-trending-up h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1">
                                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                        <polyline points="16 7 22 7 22 13"></polyline>
                                                    </svg>
                                                    <div class="ml-3.5">
                                                        <a class="whitespace-nowrap font-medium" href="#">
                                                            IVR/20240301/IX/VII/2645514417
                                                        </a>
                                                        <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                                            Sales Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Type
                                                </div>
                                                <div class="flex items-center text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="package-search"
                                                         class="lucide lucide-package-search h-3.5 w-3.5 stroke-[1.7]">
                                                        <path
                                                            d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                                        <path d="m7.5 4.27 9 5.15"></path>
                                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                        <line x1="12" x2="12" y1="22" y2="12"></line>
                                                        <circle cx="18.5" cy="15.5" r="2.5"></circle>
                                                        <path d="M20.27 17.27 22 19"></path>
                                                    </svg>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        To Receive
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                                    Date
                                                </div>
                                                <div class="whitespace-nowrap">12/12/2023</div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5">
                                                        <button data-tw-toggle="dropdown" aria-expanded="false"
                                                                class="cursor-pointer h-5 w-5 text-slate-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 data-lucide="more-vertical"
                                                                 class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show"
                                                             data-enter="transition-all ease-linear duration-150"
                                                             data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave="transition-all ease-linear duration-150"
                                                             data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                             data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                             class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1"
                                                             data-state="leave" style="display: none;">
                                                            <div
                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="wallet-cards"
                                                                         class="lucide lucide-wallet-cards stroke-[1] mr-2 h-4 w-4">
                                                                        <rect width="18" height="18" x="3" y="3"
                                                                              rx="2"></rect>
                                                                        <path
                                                                            d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                                                                        <path
                                                                            d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21"></path>
                                                                    </svg>
                                                                    View Details</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                                         stroke="currentColor" stroke-width="2"
                                                                         stroke-linecap="round" stroke-linejoin="round"
                                                                         data-lucide="printer"
                                                                         class="lucide lucide-printer stroke-[1] mr-2 h-4 w-4">
                                                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                                        <path
                                                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                                                        <rect width="12" height="8" x="6" y="14"></rect>
                                                                    </svg>
                                                                    Print Invoice</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
