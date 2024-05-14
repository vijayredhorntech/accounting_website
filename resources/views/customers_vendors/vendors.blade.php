<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Vendors
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('create-customer-vendor')}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Add New Vendor</a>
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-8">
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="grid grid-cols-4 gap-5">
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Registered Vendors</div>
                                    <div class="mt-1.5 text-2xl font-medium">98</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-success/10 bg-success/10 p-4 text-xs font-medium text-success">
                                            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Active Vendors</div>
                                    <div class="mt-1.5 text-2xl font-medium">56</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-warning/10 bg-warning/10 p-4 text-xs font-medium text-warning">
                                            <i data-tw-merge="" data-lucide="user-check" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Unpaid Invoices</div>
                                    <div class="font-mediumm mt-1.5 text-2xl">12</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-info/10 bg-info/10 p-4 text-xs font-medium text-info">
                                            <i data-tw-merge="" data-lucide="file-text" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Amount to Pay</div>
                                    <div class="font-mediumm mt-1.5 text-2xl">₹ 10,25,600</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-danger/10 bg-danger/10 p-4 text-xs font-medium text-danger">
                                            <i data-tw-merge="" data-lucide="meh" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <input type="text" placeholder="Search users..." class="px-10 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-12 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                    <div data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" class="lucide lucide-download mr-2 h-4 w-4 stroke-[1.3]"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
                                            Export
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down ml-2 h-4 w-4 stroke-[1.3]"><path d="m6 9 6 6 6-6"></path></svg></button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-bar-chart" class="lucide lucide-file-bar-chart stroke-[1] mr-2 h-4 w-4"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M12 18v-4"></path><path d="M8 18v-2"></path><path d="M16 18v-6"></path></svg>
                                                    PDF</a>
                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-bar-chart" class="lucide lucide-file-bar-chart stroke-[1] mr-2 h-4 w-4"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M12 18v-4"></path><path d="M8 18v-2"></path><path d="M16 18v-6"></path></svg>
                                                    CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-tw-placement="bottom-end" class="dropdown relative inline-block"><button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-down-wide-narrow" class="lucide lucide-arrow-down-wide-narrow mr-2 h-4 w-4 stroke-[1.3]"><path d="m3 16 4 4 4-4"></path><path d="M7 20V4"></path><path d="M11 4h10"></path><path d="M11 8h7"></path><path d="M11 12h4"></path></svg>
                                            Filter
                                            <span class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                                            2
                                                        </span></button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                                                <div class="p-2">
                                                    <div>
                                                        <div class="text-left text-slate-500">
                                                            Balance
                                                        </div>
                                                        <select class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="Support Specialist">
                                                                Pending
                                                            </option>
                                                            <option value="Data Analyst">
                                                                Paid
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="text-left text-slate-500">
                                                            Status
                                                        </div>
                                                        <select class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="Support Team">
                                                                Active
                                                            </option>
                                                            <option value="Data Team">
                                                                Inactive
                                                            </option>

                                                        </select>
                                                    </div>
                                                    <div class="mt-4 flex items-center">
                                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-slate-100 [&amp;:hover:not(:disabled)]:border-slate-100 [&amp;:hover:not(:disabled)]:dark:border-darkmode-300/80 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-300/80 ml-auto w-32">Close</button>
                                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary ml-2 w-32">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-auto xl:overflow-visible">
                                <table class="w-full text-left border-b border-slate-200/60">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Name
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Joined Date
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Status
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Recent Transaction
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Due Invoices
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Balance
                                        </td>

                                        <td class="px-5 border-b dark:border-darkmode-300 w-20 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Action
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $customers = [
                                        [
                                            'image' => asset('assets/images/users/user4.jpeg'),
                                            'name' => 'John Doe',
                                            'email' => 'john.doe@example.com',
                                            'joined_date' => 'May 5, 2018',
                                            'status' => 'Inactive',
                                            'recent_transaction' => '50,000',
                                            'due_invoices' => 0,
                                            'balance' => '0'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user2.jpeg'),
                                            'name' => 'Alice Johnson',
                                            'email' => 'alice.johnson@example.com',
                                            'joined_date' => 'June 10, 2019',
                                            'status' => 'Active',
                                            'recent_transaction' => '20,500',
                                            'due_invoices' => 2,
                                            'balance' => '3,200'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user1.jpeg'),
                                            'name' => 'Robert Smith',
                                            'email' => 'robert.smith@example.com',
                                            'joined_date' => 'April 3, 2020',
                                            'status' => 'Inactive',
                                            'recent_transaction' => '8,900',
                                            'due_invoices' => 0,
                                            'balance' => '0'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user4.jpeg'),
                                            'name' => 'Emma Brown',
                                            'email' => 'emma.brown@example.com',
                                            'joined_date' => 'January 15, 2021',
                                            'status' => 'Active',
                                            'recent_transaction' => '12,750',
                                            'due_invoices' => 1,
                                            'balance' => '1,500'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user3.jpeg'),
                                            'name' => 'Michael Wilson',
                                            'email' => 'michael.wilson@example.com',
                                            'joined_date' => 'September 8, 2018',
                                            'status' => 'Active',
                                            'recent_transaction' => '18,200',
                                            'due_invoices' => 0,
                                            'balance' => '4,800'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user1.jpeg'),
                                            'name' => 'Sarah Martinez',
                                            'email' => 'sarah.martinez@example.com',
                                            'joined_date' => 'March 20, 2019',
                                            'status' => 'Inactive',
                                            'recent_transaction' => '6,300',
                                            'due_invoices' => 2,
                                            'balance' => '0'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user4.jpeg'),
                                            'name' => 'David Taylor',
                                            'email' => 'david.taylor@example.com',
                                            'joined_date' => 'December 12, 2020',
                                            'status' => 'Active',
                                            'recent_transaction' => '10,000',
                                            'due_invoices' => 1,
                                            'balance' => '2,100'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user1.jpeg'),
                                            'name' => 'Emily Anderson',
                                            'email' => 'emily.anderson@example.com',
                                            'joined_date' => 'July 7, 2017',
                                            'status' => 'Active',
                                            'recent_transaction' => '25,600',
                                            'due_invoices' => 0,
                                            'balance' => '6,700'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user2.jpeg'),
                                            'name' => 'Daniel Garcia',
                                            'email' => 'daniel.garcia@example.com',
                                            'joined_date' => 'February 28, 2021',
                                            'status' => 'Inactive',
                                            'recent_transaction' => '9,800',
                                            'due_invoices' => 0,
                                            'balance' => '0'
                                        ],
                                        [
                                            'image' => asset('assets/images/users/user4.jpeg'),
                                            'name' => 'Olivia Rodriguez',
                                            'email' => 'olivia.rodriguez@example.com',
                                            'joined_date' => 'November 3, 2019',
                                            'status' => 'Active',
                                            'recent_transaction' => '14,300',
                                            'due_invoices' => 3,
                                            'balance' => '3,900'
                                        ],
                                    ];


                                    ?>
                                    @foreach($customers as $customer)
                                        <tr class="[&amp;_td]:last:border-b-0">

                                            <td class="px-5 border-b dark:border-darkmode-300 w-80 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <div class="image-fit zoom-in h-9 w-9">
                                                        <img data-placement="top" src="{{$customer['image']}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <a class="whitespace-nowrap font-medium" href="{{route('customer-vendor-details')}}">
                                                            {{$customer['name']}}
                                                        </a>
                                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                            {{$customer['email']}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$customer['joined_date']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-{{$customer['status']==='Active'? 'success':'danger'}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="database" class="lucide lucide-database h-3.5 w-3.5 stroke-[1.7]"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{$customer['status']}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹  {{$customer['recent_transaction']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$customer['due_invoices']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-{{$customer['balance']==='0'?'success':'danger'}}">
                                                    <i data-tw-merge="" data-lucide="{{$customer['balance']==='0'?'check':'activity'}}" class="stroke-[1] w-5 h-5"></i>

                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        ₹ {{$customer['balance']}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5">
                                                        <button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu z-[9999] hidden absolute invisible opacity-0 translate-y-1" data-state="leave" id="_7xcrev5w8" style="display: none; position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(-231px, 39px, 0px);" data-popper-placement="top-end" data-popper-reference-hidden="" data-popper-escaped="">
                                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a {{route('create-customer-vendor')}} class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                    Edit</a>
                                                                <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash2" class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                                    Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach









                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
