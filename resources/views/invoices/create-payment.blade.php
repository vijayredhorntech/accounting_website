<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 sm:col-span-10 sm:col-start-2">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Record {{ucfirst($type)}} :
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('payment-in')}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Save </a>
                        </div>
                    </div>

                    <div class="mt-7">
                        <div class="box box--stacked flex flex-col">
                            {{-- Bill From and Invoice Details div here--}}
                            <div class="px-7 py-2">
                                <div class=" grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">
                                    <div class="lg:col-span-2 md:col-span-1 col-span-1 mb-2 w-full inline-block sm:mb-0 sm:mr-5 xl:mr-14 lg:border-r-[1px] md:border-r-[1px] border-r-[0px] lg:border-b-[0px] md:border-b-[0px] border-b-[1px] border-gray-200 pr-4">
                                        <div class="grid grid-cols-1 gap-2 xl:mt-0 ">
                                            <div class="flex flex-col ">
                                                <div class="mt-1.5 text-lg leading-relaxed text-slate-500/80">
                                                    <div class="font-normal">Select Party</div>
                                                </div>
                                                <select
                                                    class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                                >
                                                    <option value="">-- Select Party --</option>
                                                    <option value="">Party 1</option>
                                                    <option value="">Party 2</option>
                                                    <option value="">Party 3</option>
                                                    <option value="">Party 4</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col ">
                                                <div class="mt-1.5 text-lg leading-relaxed text-slate-500/80">
                                                    <div class="font-normal">Enter Amount</div>
                                                </div>
                                                <input type="text" placeholder="Enter amount ......"
                                                       class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2 xl:mt-0 ">
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Payment Date</div>
                                            </div>
                                            <input type="date" placeholder="Payment date...."
                                                   class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >

                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">{{ucfirst($type)}} number</div>
                                            </div>
                                            <input type="number" placeholder="{{ucfirst($type)}} number....."
                                                   class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal"> Payment Mode</div>
                                            </div>
                                            <select
                                                   class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >
                                                <option value="">Cash</option>
                                                <option value="">Cheque</option>
                                                <option value="">Bank Transfer</option>
                                            </select>

                                        </div>

                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Note</div>
                                            </div>
                                            <input type="text" placeholder="Note....."
                                                   class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="px-7 py-2">
                                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                    <div class="text-base font-medium group-[.mode--light]:text-primary">
                                       Settle Invoice with this payemnt
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
                                            Payment No.
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4  font-medium text-slate-500">
                                            Party Name
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Amount
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Action
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
                                                <a href="{{route('payment-detail',['type'=>'payment-out'])}}" class="cursor-pointer flex w-max items-center p-2 transition duration-300 ease-in-out rounded-md bg-warning/80 hover:bg-orange-200/40 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-warning">
                                                    View</a>
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
    </div>
    </div>
</x-app-layout>
