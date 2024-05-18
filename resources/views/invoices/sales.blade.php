<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Salses Invoices
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('create-invoice',['type'=>'sales'])}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Add New Invoice</a>
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-8">
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="grid grid-cols-3 gap-5">
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Total Sales</div>
                                    <div class="mt-1.5 text-2xl font-medium">15,00,251</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-warning/10 bg-warning/10 p-4 text-xs font-medium text-warning">
                                            <i data-tw-merge="" data-lucide="trending-up" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Paid</div>
                                    <div class="mt-1.5 text-2xl font-medium">15,00,000</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-success/10 bg-success/10 p-4 text-xs font-medium text-success">
                                            <i data-tw-merge="" data-lucide="smile" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Unpaid</div>
                                    <div class="font-mediumm mt-1.5 text-2xl">251</div>
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
                                        <input type="text" placeholder="Search invoices..." class="px-10 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-12 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
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
                                            Sr. No.
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Invoice Date
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Invoice Number
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4  font-medium text-slate-500">
                                            Party Name
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Due In
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Amount
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4  font-medium text-slate-500">
                                            Status
                                        </td>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $customers = [
                                        [
                                            'date' => 'May 5, 2018',
                                            'invoice_number' => 'JLDKLK79894JHK7689KJH',
                                            'party_name' => 'John Doe',
                                            'due_in' => 20,
                                            'amount' => '15,000',
                                            'un_paid' => 0,
                                            'status' => 'partially_paid',
                                        ],
                                        [
                                            'date' => 'July 12, 2019',
                                            'invoice_number' => 'MKDFJ38894KLFJ8765MKF',
                                            'party_name' => 'Jane Smith',
                                            'due_in' => 15,
                                            'amount' => '10,500',
                                            'un_paid' => 5,
                                            'status' => 'partially_paid',
                                        ],
                                        [
                                            'date' => 'April 2, 2020',
                                            'invoice_number' => 'HJFGD56782LKJH5678LK',
                                            'party_name' => 'Alice Johnson',
                                            'due_in' => 30,
                                            'amount' => '20,000',
                                            'un_paid' => 0,
                                            'status' => 'fully_paid',
                                        ],
                                        [
                                            'date' => 'August 19, 2021',
                                            'invoice_number' => 'GBVDJ37764LKJH3457YH',
                                            'party_name' => 'Bob Williams',
                                            'due_in' => 0,
                                            'amount' => '8,700',
                                            'un_paid' => 3,
                                            'status' => 'partially_paid',
                                        ],
                                        [
                                            'date' => 'June 7, 2019',
                                            'invoice_number' => 'JHGFD88762MKL9087GHF',
                                            'party_name' => 'Emily Brown',
                                            'due_in' => 35,
                                            'amount' => '3,200',
                                            'un_paid' => 0,
                                            'status' => 'fully_paid',
                                        ],
                                        [
                                            'date' => 'September 25, 2020',
                                            'invoice_number' => 'JHGFD88762MKL9087GHF',
                                            'party_name' => 'Michael Davis',
                                            'due_in' => 25,
                                            'amount' => '18,900',
                                            'un_paid' => 10,
                                            'status' => 'partially_paid',
                                        ],
                                        [
                                            'date' => 'December 15, 2018',
                                            'invoice_number' => 'KJHGD67895LKJH4532LK',
                                            'party_name' => 'David Wilson',
                                            'due_in' => 5,
                                            'amount' => '4,500',
                                            'un_paid' => 0,
                                            'status' => 'fully_paid',
                                        ],
                                        [
                                            'date' => 'March 8, 2022',
                                            'invoice_number' => 'KJHGD67895LKJH4532LK',
                                            'party_name' => 'Emma Martinez',
                                            'due_in' => 15,
                                            'amount' => '12,300',
                                            'un_paid' => 5,
                                            'status' => 'partially_paid',
                                        ],
                                        [
                                            'date' => 'October 30, 2021',
                                            'invoice_number' => 'OIUYT45678MKJH7890LK',
                                            'party_name' => 'Daniel Taylor',
                                            'due_in' => 10,
                                            'amount' => '6,800',
                                            'un_paid' => 0,
                                            'status' => 'fully_paid',
                                        ],
                                        [
                                            'date' => 'January 10, 2023',
                                            'invoice_number' => 'HGFDK45678MKLJ7845HJ',
                                            'party_name' => 'Olivia Anderson',
                                            'due_in' => 0,
                                            'amount' => '14,200',
                                            'un_paid' => 14200,
                                            'status' => 'un_paid',
                                        ],
                                    ];



                                    ?>
                                    @foreach($customers as $customer)
                                        <tr class="[&amp;_td]:last:border-b-0">
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                {{$loop->iteration}}
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                              {{$customer['date']}}
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                              {{$customer['invoice_number']}}
                                            </td>

                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$customer['party_name']}}
                                                </div>
                                            </td>

                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center  text-{{$customer['due_in']===0? 'danger': ($customer['due_in']>=20?'success':'warning')}}">
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{$customer['due_in']}} days
                                                    </div>
                                                </div>
                                            </td>



                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹   {{$customer['amount']}}
                                                   @if($customer['un_paid']>0)

                                                    <br>
                                                    <span class="text-xs text-slate-500">unpaid ₹ {{$customer['un_paid']}}</span>
                                                       @endif
                                                </div>
                                            </td>

                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center  text-{{$customer['status']==='fully_paid'? 'success': ($customer['status']==='un_paid'?'danger':'warning')}}">
                                                    <i data-tw-merge="" data-lucide="{{$customer['status']==='fully_paid'? 'check': ($customer['status']==='un_paid'?'x':'activity')}}" class="stroke-[1] w-5 h-5"></i>
                                                    <a  href="{{route('invoice-detail',['type'=>'sales'])}}" class="ml-1.5 whitespace-nowrap">
                                                        {{strtoupper($customer['status'])}}
                                                    </a>
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
