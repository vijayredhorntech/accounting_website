<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Debit Note
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('create-invoice',['type'=>'debit-note'])}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Create Debit Note</a>
                        </div>
                    </div>
                    <div class="mt-3.5 flex flex-col gap-8">
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <input type="text" placeholder="Search debit note....." class="px-10 rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                        >
                                    </div>
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">
                                    <div data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary"
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
                                    <div data-tw-placement="bottom-end" class="dropdown relative inline-block"><button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary"
                                        ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-down-wide-narrow" class="lucide lucide-arrow-down-wide-narrow mr-2 h-4 w-4 stroke-[1.3]"><path d="m3 16 4 4 4-4"></path><path d="M7 20V4"></path><path d="M11 4h10"></path><path d="M11 8h7"></path><path d="M11 12h4"></path></svg>
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
                                            Debit Note No.
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4  font-medium text-slate-500">
                                            Party Name
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Amount
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4  font-medium text-slate-500">
                                            Status
                                        </td>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="[&amp;_td]:last:border-b-0">
                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            1
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            12-09-2021
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            101
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                Other Company Name
                                            </div>
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                ₹ 1325
                                            </div>
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                <a href="{{route('invoice-detail',['type'=>'debit-note'])}}" class="cursor-pointer flex w-max items-center p-2 transition duration-300 ease-in-out rounded-md bg-warning/80 hover:bg-orange-200/40 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-warning">
                                                    Unpaid</a>
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



</x-app-layout>
