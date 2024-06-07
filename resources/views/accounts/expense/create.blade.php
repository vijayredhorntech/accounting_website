<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 sm:col-span-10 sm:col-start-2">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            New Expense
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('quotation')}}"
                               class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" data-lucide="pen-line"
                                     class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path>
                                </svg>
                                Save </a>
                        </div>
                    </div>

                    <div class="mt-7">
                        <div class="box box--stacked flex flex-col">
                            {{-- Bill From and Invoice Details div here--}}
                            <div class="px-7 py-2">
                                <div class=" grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
                                    <div
                                        class="grid grid-cols-1 gap-2 h-max xl:mt-0 p-2 lg:border-r-[1px] md:border-r-[1px]">
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Expense with GST</div>
                                            </div>
                                            <select
                                                class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Expense Category</div>
                                            </div>
                                            <select
                                                class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="">--- Select Category ---</option>
                                                <option value="bankFee">Bank Fee and Charges</option>
                                                <option value="salaries">Employee Salaries & Advances</option>
                                                <option value="rent">Rent Expenses</option>

                                            </select>
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Expense Number</div>
                                            </div>
                                            <input type="number" placeholder="Expense Number....."
                                                   class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                        </div>

                                    </div>
                                    <div
                                        class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-2 xl:mt-0 ">
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Original Invoice Number</div>
                                            </div>
                                            <input type="number" placeholder="Invoice number....."
                                                   class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >

                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal"> Invoice Date</div>
                                            </div>
                                            <input type="date" placeholder="Quotation date....."
                                                   class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >
                                        </div>


                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Payment Mode</div>
                                            </div>
                                            <select
                                                class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="cash">Cash</option>
                                                <option value="bank">Bank</option>
                                                <option value="online">Online</option>
                                                <option value="cheque">Cheque</option>

                                            </select>
                                        </div>


                                        {{--                                        if payment mode is cash this will not visible--}}
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Payment Made From</div>
                                            </div>
                                            <select
                                                class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="">--- Select ---</option>
                                                <option value="bankAccount">Bank Account</option>

                                            </select>
                                        </div>


                                        <div class="flex flex-col lg:col-span-2 md:col-span-2 sm:col-span-2 col-span-1">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Note</div>
                                            </div>
                                            <textarea rows="4" placeholder="Enter Note....."
                                                      class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">

                                            </textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- products/ servies details div starts here--}}
                            <div class="p-7 border-t-[1px] border-gray-200 overflow-x-auto">
                                <table class="w-full text-left border-b border-slate-200/60">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            NO
                                        </td>

                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            ITEMS
                                        </td>
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            QTY
                                        </td>

                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            PRICE/ ITEM(₹)
                                        </td>


                                        <td colspan="2"
                                            class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            AMOUNT (₹)
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--items list tr--}}
                                    <tr id="itemsList" class="hidden [&amp;_td]:last:border-b-0">
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                1
                                            </div>
                                        </td>
                                        <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                Product Name
                                            </a>

                                        </td>

                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="Qty....." value="1"
                                                   class="w-24 py-0.5 rounded-tl-md rounded-br-md transition duration-200 ease-in-out  text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                            >
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="Price...." value="100"
                                                   class="w-24 py-0.5 rounded-tl-md rounded-br-md transition duration-200 ease-in-out  text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="amount" value="98"
                                                   class="w-40 py-0.5 rounded-tl-md rounded-br-md transition duration-200 ease-in-out  text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 relative border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center justify-center">
                                                <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-12">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="trash2"
                                                         class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                    <tfoot class="">
                                    <tr class="">
                                        <td colspan="6"
                                            class="px-5 text-center  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 font-medium ">
                                            <button data-tw-merge
                                                    data-tw-toggle="modal" data-tw-target="#select-items-modal"
                                                    class="px-10 py-4 font-semibold text-primary border-dotted border-[2px] border-primary w-full">
                                                Add Item
                                            </button>

                                            {{--select items modal start here--}}
                                            <div
                                                data-tw-backdrop=""
                                                aria-hidden="true"
                                                tabindex="-1"
                                                id="select-items-modal"
                                                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                                <div data-tw-merge
                                                     class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[700px]">
                                                    <div
                                                        class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                                        <h2 class="mr-auto text-base font-medium">
                                                            Add Expense Item
                                                        </h2>


                                                    </div>
                                                    <div
                                                        class="flex items-center justify-between px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">

                                                        <input type="text" placeholder="Search Items....."
                                                               class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out lg:w-[200px] md:w-[200px] w-[150px] text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                                        <button data-tw-merge
                                                                data-tw-toggle="modal" data-tw-target="#addNewItems"
                                                                class="px-3 py-1 font-semibold text-primary border-dotted border-[2px] border-primary w-max">
                                                            Create New Item
                                                        </button>
                                                    </div>
                                                    {{--  create new item modal starts here--}}
                                                    <div
                                                        data-tw-backdrop=""
                                                        aria-hidden="true"
                                                        tabindex="-1"
                                                        id="addNewItems"
                                                        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                                        <div data-tw-merge
                                                             class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[700px]">
                                                            <div
                                                                class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                                                                <h2 class="mr-auto text-base font-medium">
                                                                    Create New Expense Item
                                                                </h2>


                                                            </div>

                                                            <div
                                                                class=" grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
                                                                <div
                                                                    class="grid grid-cols-1 gap-2 h-max xl:mt-0 p-2 lg:border-r-[1px] md:border-r-[1px]">
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">Item name</div>
                                                                        </div>
                                                                        <input name="itemName"
                                                                               placeholder="Item Name....."
                                                                               class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                                                    </div>
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">Purchase Price
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2">
                                                                            <input name="price" placeholder="Price....."
                                                                                   class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                                            <select
                                                                                class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                                                <option value="withoutTax">Without Tax
                                                                                </option>
                                                                                <option value="withTax">With Tax
                                                                                </option>
                                                                            </select>
                                                                        </div>


                                                                    </div>
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">HSN</div>
                                                                        </div>
                                                                        <input name="hsn" placeholder="HSN....."
                                                                               class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                                                    </div>
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">ITC Applicable
                                                                            </div>
                                                                        </div>
                                                                        <select
                                                                            class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                                            <option value="eligible">Eligible</option>
                                                                            <option value="ineligible">Ineligible
                                                                            </option>
                                                                            <option value="ineligibleOthers">Ineligible
                                                                                Others
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="grid grid-cols-1 gap-2 h-max xl:mt-0 ">
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">Item Type</div>
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col items-center md:flex-row gap-2">
                                                                            <div
                                                                                class="w-max rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                                                <div class="flex items-center">
                                                                                    <input checked type="radio"
                                                                                           name="type"
                                                                                           class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                                                           id="checkbox-switch-1"
                                                                                           value="">
                                                                                    <label for="type"
                                                                                           class="cursor-pointer ml-2">Product</label>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="w-max rounded-md border border-slate-300 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                                                <div class="flex items-center">
                                                                                    <input type="radio" name="type"
                                                                                           class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50"
                                                                                           id="checkbox-switch-1"
                                                                                           value="">
                                                                                    <label for="type"
                                                                                           class="cursor-pointer ml-2">Service</label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">Measuring Unit
                                                                            </div>
                                                                        </div>
                                                                        <select
                                                                            class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                                            <option value="kg">Kg</option>
                                                                            <option value="box">Box</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="flex flex-col ">
                                                                        <div
                                                                            class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                                            <div class="font-normal">GST Tax rate %
                                                                            </div>
                                                                        </div>
                                                                        <select
                                                                            class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                                            <option value="none">None</option>
                                                                            <option value="exempted">Exempted</option>
                                                                            <option value="0">0 %</option>
                                                                            <option value="9">9 %</option>
                                                                            <option value="18">18 %</option>
                                                                            <option value="28">28 %</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div
                                                                class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400">
                                                                <button
                                                                    data-tw-merge
                                                                    data-tw-dismiss="modal" type="button"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-slate-400 text-slate-400"

                                                                >Cancel
                                                                </button>
                                                                <button
                                                                    data-tw-merge
                                                                    data-tw-dismiss="modal"
                                                                    type="button"
                                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary"

                                                                >Save Item
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- create new items modal ends here--}}


                                                    <table class="w-full text-left border-b border-slate-200/60">
                                                        <thead class="">
                                                        <tr class="">
                                                            <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                                                Name
                                                            </td>
                                                            <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                                                HSN
                                                            </td>

                                                            <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                                                Price
                                                            </td>

                                                            <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                                                Action
                                                            </td>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        {{--items list tr--}}
                                                        <tr class=" ">

                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    Item name 1
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    465626846
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    ₹ 4863
                                                                </a>

                                                            </td>
                                                            <td class="px-5  dark:border-darkmode-300 relative border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <div class="flex items-center justify-center">
                                                                    <a onclick=" document.getElementById('itemsList').classList.remove('hidden'); "
                                                                       class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="plus-circle"
                                                                             class="lucide lucide-plus-circle stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-info w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="pen-tool"
                                                                             class="lucide lucide-pen-tool stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1]  h-4 w-4">
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
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class=" ">

                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    Item name 2
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    0298465
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    ₹ 1200
                                                                </a>

                                                            </td>
                                                            <td class="px-5  dark:border-darkmode-300 relative border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <div class="flex items-center justify-center">
                                                                    <a onclick=" document.getElementById('itemsList').classList.remove('hidden'); "
                                                                       class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="plus-circle"
                                                                             class="lucide lucide-plus-circle stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-info w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="pen-tool"
                                                                             class="lucide lucide-pen-tool stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1]  h-4 w-4">
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
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class=" ">

                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    Item name 3
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    98743213
                                                                </a>

                                                            </td>
                                                            <td class=" px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <a class="whitespace-nowrap font-medium" href="#">
                                                                    ₹ 52012
                                                                </a>

                                                            </td>
                                                            <td class="px-5  dark:border-darkmode-300 relative border-[1px] border-slate-400 py-2 dark:bg-darkmode-600">
                                                                <div class="flex items-center justify-center">
                                                                    <a onclick=" document.getElementById('itemsList').classList.remove('hidden'); "
                                                                       class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-success w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="plus-circle"
                                                                             class="lucide lucide-plus-circle stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-info w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="pen-tool"
                                                                             class="lucide lucide-pen-tool stroke-[1]  h-4 w-4">
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
                                                                    </a>
                                                                    <a class="cursor-pointer flex items-center justify-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger w-12">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24"
                                                                             viewBox="0 0 24 24" fill="none"
                                                                             stroke="currentColor"
                                                                             stroke-width="2" stroke-linecap="round"
                                                                             stroke-linejoin="round"
                                                                             data-lucide="trash2"
                                                                             class="lucide lucide-trash2 stroke-[1]  h-4 w-4">
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
                                                                    </a>

                                                                </div>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                    <div
                                                        class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400">
                                                        <button
                                                            data-tw-merge
                                                            data-tw-dismiss="modal" type="button"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-slate-400 text-slate-400"

                                                        >Cancel
                                                        </button>
                                                        <button
                                                            data-tw-merge
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary"

                                                        >Add
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--select items modal ends here -->


                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="4"
                                            class="text-right px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            Total Expense Amount
                                        </td>


                                        <td colspan="3"
                                            class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            ₹ 12012
                                        </td>
                                    </tr>
                                    </tfoot>
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
</x-app-layout>
