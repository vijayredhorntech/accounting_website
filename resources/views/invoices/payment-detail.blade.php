<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            {{ucfirst($type)}} Details
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Print</button>
                        </div>
                    </div>


                    <div class="mt-3.5 flex flex-col gap-8">
                        <div class="box box--stacked flex flex-col p-5">
                            <div class="grid grid-cols-4 gap-5">
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Party Name</div>
                                    <div class="mt-1.5 text-xl">Other Company Name</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-warning/10 bg-warning/10 p-4 text-xs font-medium text-warning">
                                            <i data-tw-merge="" data-lucide="user-check" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Payment Date</div>
                                    <div class="mt-1.5 text-xl">16 May 2024</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-success/10 bg-success/10 p-4 text-xs font-medium text-success">
                                            <i data-tw-merge="" data-lucide="calendar" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Payment Amount</div>
                                    <div class="mt-1.5 text-xl">₹ 2,10,562</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-danger/10 bg-danger/10 p-4 text-xs font-medium text-danger">
                                            <i data-tw-merge="" data-lucide="trending-up " class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Payment Type</div>
                                    <div class="mt-1.5 text-xl">Cash</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-danger/10 bg-danger/10 p-4 text-xs font-medium text-danger">
                                            <i data-tw-merge="" data-lucide="book" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box col-span-4 rounded-[0.6rem] border border-dashed border-slate-300/80 p-5 shadow-sm md:col-span-2 xl:col-span-1">
                                    <div class="text-base text-slate-500">Notes</div>
                                    <div class="mt-1.5 text-xl">No Note Added</div>
                                    <div class="absolute inset-y-0 right-0 mr-5 flex flex-col justify-center">
                                        <div class="flex items-center rounded-full border border-danger/10 bg-danger/10 p-4 text-xs font-medium text-danger">
                                            <i data-tw-merge="" data-lucide="file" class="stroke-[1] w-5 h-5 "></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                            <div class="text-base font-medium group-[.mode--light]:text-primary">
                                Invoices settled with this payment
                            </div>

                        </div>


                        <div class="box box--stacked flex flex-col">

                            <div class="overflow-auto xl:overflow-visible">
                                <table class="w-full text-left border-[1px] border-slate-300 border-collapse ">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Sr. No.
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Date
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Invoice Number
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4  font-medium text-slate-500">
                                            Invoice Amount
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Invoice Amount Settled
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            TDS Amount
                                        </td>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="[&amp;_td]:last:border-b-0">
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                1
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                16 May 2024
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                INV-0001
                                            </td>

                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹ 2,10,562
                                                </div>
                                            </td>

                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹ 2,10,562
                                                </div>
                                            </td>

                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹ 0
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
