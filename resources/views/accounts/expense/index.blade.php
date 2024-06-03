<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Expenses
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('create-expense')}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Create Expense</a>
                        </div>
                    </div>
                    <div class="mt-3.5">
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div class="flex gap-2">
                                    <div class="relative">
                                        <select class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            <option value="365Days">Last 365 Days</option>
                                            <option value="today">Today</option>
                                            <option value="yesterday">Yesterday</option>
                                            <option value="thisWeek">This Week </option>
                                            <option value="7days">Last 7 Days</option>
                                            <option value="thisMonth">This Month</option>
                                            <option value="previousMonth">Previous Month</option>
                                            <option value="30Days">Last 30 Days</option>
                                            <option value="thisQuarter">This Quarter</option>
                                            <option value="previousQuarter">Previous Quarter</option>
                                            <option value="currentFiscalYear">Current Fiscal Year</option>
                                            <option value="previousFiscalYear">Previous Fiscal Year</option>
                                        </select>
                                    </div>
                                    <div class="relative">
                                        <select class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            <option value="all">All Expenses Categories</option>
                                            <option value="bankFee">Bank Fee and Charges</option>
                                            <option value="salaries">Employee Salaries & Advances</option>
                                            <option value="rent">Rent Expenses</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                    <div data-tw-placement="bottom-end" class="dropdown relative">
                                        <button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary"
                                        ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" class="lucide lucide-download mr-2 h-4 w-4 stroke-[1.3]"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
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
                                </div>
                            </div>



                            <div class="overflow-auto xl:overflow-visible">
                                <table class="w-full text-left border-[1px] border-slate-300 border-collapse">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Sr. No.
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                           Date
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Expense Number
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Party Name
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Category
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4  font-medium text-slate-500">
                                            Amount
                                        </td>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $expenses = [
                                        [
                                            'date' => '20/08/2024',
                                            'expenseNumber' => '1',
                                            'partyName' => 'ABC Services',
                                            'category' => 'Miscellaneous',
                                            'amount' => '68,247',
                                        ],
                                        [
                                            'date' => '24/04/2024',
                                            'expenseNumber' => '2',
                                            'partyName' => 'ABC Services',
                                            'category' => 'Travel',
                                            'amount' => '85,382',
                                        ],
                                        [
                                            'date' => '21/03/2024',
                                            'expenseNumber' => '3',
                                            'partyName' => 'RK Traders',
                                            'category' => 'Utilities',
                                            'amount' => '85,362',
                                        ],
                                        [
                                            'date' => '22/10/2024',
                                            'expenseNumber' => '4',
                                            'partyName' => 'RK Traders',
                                            'category' => 'Miscellaneous',
                                            'amount' => '99,043',
                                        ],
                                        [
                                            'date' => '30/08/2024',
                                            'expenseNumber' => '5',
                                            'partyName' => 'OPQ Enterprises',
                                            'category' => 'Travel',
                                            'amount' => '25,149',
                                        ],
                                        [
                                            'date' => '26/05/2024',
                                            'expenseNumber' => '6',
                                            'partyName' => 'ABC Services',
                                            'category' => 'Miscellaneous',
                                            'amount' => '84,163',
                                        ],
                                        [
                                            'date' => '08/07/2024',
                                            'expenseNumber' => '7',
                                            'partyName' => 'OPQ Enterprises',
                                            'category' => 'Rent Expense',
                                            'amount' => '4,458',
                                        ],
                                        [
                                            'date' => '13/10/2024',
                                            'expenseNumber' => '8',
                                            'partyName' => 'XYZ Supplies',
                                            'category' => 'Utilities',
                                            'amount' => '77,269',
                                        ],
                                        [
                                            'date' => '18/01/2024',
                                            'expenseNumber' => '9',
                                            'partyName' => 'RK Traders',
                                            'category' => 'Utilities',
                                            'amount' => '45,262',
                                        ],
                                        [
                                            'date' => '21/12/2024',
                                            'expenseNumber' => '10',
                                            'partyName' => 'LMN Industries',
                                            'category' => 'Office Supplies',
                                            'amount' => '10,396',
                                        ],
                                    ];
                                    ?>

                                    @foreach($expenses as $expense)
                                        <tr class="[&amp;_td]:last:border-b-0">
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$loop->iteration}}
                                                </div>
                                            </td>

                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="#">
                                                    {{$expense['date']}}
                                                </a>

                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$expense['expenseNumber']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$expense['partyName']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$expense['category']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹ {{$expense['amount']}}
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
