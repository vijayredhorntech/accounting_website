<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12 sm:col-span-10 sm:col-start-2">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                           New {{$type}} invoice
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('quotation')}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Save </a>
                        </div>
                    </div>

                    <div class="mt-7">
                        <div class="box box--stacked flex flex-col">
                            {{-- Bill From and Invoice Details div here--}}
                            <div class="px-7 py-2">
                                <div class=" grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-2">
                                    <div
                                        class="lg:col-span-2 md:col-span-1 col-span-1 mb-2 w-full inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 lg:border-r-[1px] md:border-r-[1px] border-r-[0px] lg:border-b-[0px] md:border-b-[0px] border-b-[1px] border-gray-200">
                                        <div class="text-left">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg">From</div>
                                            </div>
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-semibold text-sm text-primary">Him Soft Solution</div>
                                            </div>
                                            <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                                <span class="font-semibold">Phone Number:</span> 0177-262-4611
                                            </div>
                                            <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                                <span class="font-semibold">Address:</span> Mohali, Phase 8, Pubjab,
                                                101010
                                            </div>
                                            <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                                <span class="font-semibold">PAN:</span> JUGHJ5684L
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2 gap-2 xl:mt-0 ">
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Quotation Number</div>
                                            </div>
                                            <input type="number" placeholder="Quotation Number"
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Quotation Date</div>
                                            </div>
                                            <input type="date" placeholder="Quotation Date"
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Payment Term (Days)</div>
                                            </div>
                                            <input type="number" placeholder="Payment Term Days"
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Due Date</div>
                                            </div>
                                            <input type="date" placeholder="Due Date"
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>


                                    </div>
                                </div>
                            </div>

                            {{-- Bill To Details Div Starts Here--}}
                            <div
                                class=" px-7 py-2 grid lg:grid-cols-2 md;grid-cols-2 grid-cols-1 gap-2 border-t-[1px] border-gray-200">
                                {{-- billing address details div starts here--}}
                                <div
                                    class=" flex flex-col p-2   lg:border-r-[1px] md:border-r-[1px] border-r-[0px] lg:border-b-[0px] md:border-b-[0px] border-b-[1px] border-gray-200">
                                    <div class="flex items-center justify-between">
                                        <div class="font-medium text-lg">Bill To</div>
                                        <div id="changePartyDiv" data-tw-merge
                                             data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview"
                                             class="hidden cursor-pointer ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                                            Change Party
                                        </div>
                                    </div>

                                    {{--                                   bill to company details div starts here--}}
                                    <div id="billToDiv" class="text-left hidden">

                                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                            <div class="font-semibold text-sm text-primary ">Other Company Name</div>
                                        </div>
                                        <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                            <span class="font-semibold">Phone Number:</span> 0177-262-4611
                                        </div>
                                        <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                            <span class="font-semibold">Address:</span> Mohali, Phase 8, Pubjab, 101010
                                        </div>
                                        <div class=" text-xs leading-relaxed text-slate-500/80 ">
                                            <span class="font-semibold">PAN:</span> JUGHJ5684L
                                        </div>
                                    </div>

                                    {{--                                    party selection button and modal starts here--}}
                                    <div id="selectPartyDiv" class="w-full h-28 flex justify-center items-center">
                                        <button data-tw-merge
                                                data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview"
                                                class="px-10 py-4 font-semibold text-primary border-dotted border-[2px] border-primary">
                                            Select Party
                                        </button>


                                        {{--select party modal start here--}}
                                        <div
                                            data-tw-backdrop=""
                                            aria-hidden="true"
                                            tabindex="-1"
                                            id="header-footer-modal-preview"
                                            class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]"
                                        >
                                            <div
                                                data-tw-merge
                                                class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
                                            >
                                                <div
                                                    class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400"
                                                ><h2 class="mr-auto text-base font-medium">
                                                        Select Party
                                                    </h2>

                                                </div>
                                                <div
                                                    data-tw-merge
                                                    class="p-5 grid grid-cols-12 gap-4 gap-y-3"
                                                >

                                                    <div class="col-span-12 sm:col-span-12">
                                                        <label
                                                            data-tw-merge
                                                            for="modal-form-1"
                                                            class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                                                        >
                                                            Existing Party
                                                        </label>
                                                        <select
                                                            data-tw-merge
                                                            onchange="
                                                        document.getElementById('shipToDiv').classList.remove('hidden');
                                                        document.getElementById('billToDiv').classList.remove('hidden');
                                                        document.getElementById('selectPartyDiv').classList.add('hidden');
                                                        document.getElementById('changePartyDiv').classList.remove('hidden');

                                                        "

                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                        >
                                                            <option value="1">Select Party</option>
                                                            <option value="2">Party 1</option>
                                                            <option value="3">Party 2</option>
                                                            <option value="4">Party 3</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-12 flex justify-end">
                                                        <a href="{{route('create-customer-vendor')}}" target="_blank"
                                                           class=" mt-4 px-6 flex justify-center w-full py-2 font-semibold text-primary border-dotted border-[2px] border-primary">
                                                            Create New Party
                                                        </a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"
                                                >
                                                    <button
                                                        data-tw-merge
                                                        data-tw-dismiss="modal" type="button"
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20"
                                                    >Cancel
                                                    </button>
                                                    <button
                                                        data-tw-merge
                                                        data-tw-dismiss="modal"
                                                        type="button"
                                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20"
                                                    >Select
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--select party modal ends here -->


                                    </div>
                                </div>
                                {{-- shipping address details div starts here--}}
                                <div id="shipToDiv" class=" flex flex-col p-2  hidden">
                                    <div class="flex items-center">
                                        <div class="font-medium text-lg">Ship To</div>
                                    </div>
                                    <div class=" w-full grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-1 ">
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Name</div>
                                            </div>
                                            <input type="text" placeholder="Name" value="Other Company Name"
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>
                                        <div class="flex flex-col ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Phone</div>
                                            </div>
                                            <input type="text" placeholder="Phone" value="0177-262-4611"
                                                   class="w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder-text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80">

                                        </div>
                                        <div class="flex flex-col lg:col-span-2 md:col-span-2 col-span-1 ">
                                            <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80">
                                                <div class="font-normal">Address</div>
                                            </div>
                                            <textarea rows="3" type="number" placeholder=" Phone"
                                                      class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                Mohali, Phase 8, Pubjab, 101010
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
                                            HSN
                                        </td>
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            QTY
                                        </td>

                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            PRICE/ ITEM(₹)
                                        </td>
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            DISCOUNT
                                        </td>
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            TAX
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
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                JHLHSL7987JKHA
                                            </a>

                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="qty" value="1"
                                                   class=" py-0.5 w-24 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="price" value="100"
                                                   class=" py-0.5 w-24 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600 flex flex-col">

                                            <div class="flex gap-1 border-[0px]">
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 w-4">
                                                    <div class="font-normal">%</div>
                                                </div>
                                                <input type="number" placeholder="%" value="2"
                                                       class=" py-0.5 w-12 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                            </div>
                                            <div class="flex gap-1 border-[0px]">
                                                <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 w-4">
                                                    <div class="font-normal">₹</div>
                                                </div>
                                                <input type="number" placeholder="₹"
                                                       class=" py-0.5 w-12 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                            </div>


                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <div class="flex gap-1 ">
                                                <select type="number" placeholder="%"
                                                        class=" py-0.5 w-24 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <option value="0%">0%</option>
                                                    <option value="1%">9%</option>
                                                    <option value="2%">18%</option>
                                                    <option value="3%">28%</option>

                                                </select>


                                                <div
                                                    class="mt-1.5 text-xs leading-relaxed text-slate-500/80 flex justify-center">
                                                    <div class="font-normal">0%</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5  dark:border-darkmode-300 border-[1px] border-slate-400 py-4 dark:bg-darkmode-600">
                                            <input type="number" placeholder="amount" value="98"
                                                   class=" py-0.5 w-40 disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border  file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
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
                                        <td colspan="9"
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
                                                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]"
                                            >
                                                <div
                                                    data-tw-merge
                                                    class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]"
                                                >
                                                    <div
                                                        class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400"
                                                    ><h2 class="mr-auto text-base font-medium">
                                                            Select Item
                                                        </h2>

                                                    </div>
                                                    <div
                                                        data-tw-merge
                                                        class="p-5 grid grid-cols-12 gap-4 gap-y-3"
                                                    >

                                                        <div class="col-span-12 sm:col-span-12">
                                                            <label
                                                                data-tw-merge
                                                                for="modal-form-1"
                                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right"
                                                            >
                                                                Existing Items
                                                            </label>
                                                            <select
                                                                data-tw-merge
                                                                onchange="
                                                                document.getElementById('itemsList').classList.remove('hidden');

                                                                "

                                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"
                                                            >
                                                                <option value="1">Select Item</option>
                                                                <option value="2">Item 1</option>
                                                                <option value="3">Item 2</option>
                                                                <option value="4">Item 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-12 flex justify-end">
                                                            <a href="{{route('create-product')}}" target="_blank"
                                                               class=" mt-4 px-6 flex justify-center w-full py-2 font-semibold text-primary border-dotted border-[2px] border-primary">
                                                                Create New Item
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400"
                                                    >
                                                        <button
                                                            data-tw-merge
                                                            data-tw-dismiss="modal" type="button"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-20 mr-1 w-20"
                                                        >Cancel
                                                        </button>
                                                        <button
                                                            data-tw-merge
                                                            data-tw-dismiss="modal"
                                                            type="button"
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-20 w-20"
                                                        >Select
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--select items modal ends here -->


                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="5"
                                            class="text-right px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4 font-medium text-slate-500">
                                            SUBTOTAL
                                        </td>

                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            ₹ 100
                                        </td>
                                        <td class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            ₹ 12
                                        </td>
                                        <td colspan="2"
                                            class="px-5 dark:border-darkmode-300 border-[1px] border-slate-400 bg-slate-50 py-4  font-medium text-slate-500">
                                            ₹ 12012
                                        </td>

                                    </tr>
                                    </tfoot>
                                </table>

                            </div>


                            {{--Other information and amount details div starts here--}}
                            <div
                                class=" px-7 py-2 grid lg:grid-cols-2 md;grid-cols-2 grid-cols-1 gap-2 border-t-[1px] border-gray-200">

                                {{-- terms and conditions div starts here--}}
                                <div id="shipToDiv"
                                     class=" flex flex-col gap-2 p-2 lg:border-r-[1px] md:border-r-[1px] border-r-[0px] lg:border-b-[0px] md:border-b-[0px] border-b-[1px] border-gray-200">
                                    <div class="flex items-center">
                                        <button id="addNotesBtn"
                                                onclick="
                                                document.getElementById('addNoteDiv').classList.remove('hidden');
                                                document.getElementById('addNotesBtn').classList.add('hidden');
                                                "

                                                class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                            <i data-tw-merge="" data-lucide="plus"
                                               class="stroke-[1] w-5 h-5 text-primary"></i>

                                            Add Notes
                                        </button>
                                    </div>
                                    <div id="addNoteDiv" class="hidden w-full grid  grid-cols-1 gap-1 ">
                                        <div class="flex flex-col ">
                                            <div
                                                class="mt-1.5 text-xs leading-relaxed text-slate-500/80 flex justify-between">
                                                <div class="font-normal">Note</div>
                                                <div class="h-max w-max cursor-pointer" onclick="
                                                document.getElementById('addNoteDiv').classList.add('hidden');
                                                document.getElementById('addNotesBtn').classList.remove('hidden');
                                                "
                                                >
                                                    <i data-tw-merge="" data-lucide="x"
                                                       class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                </div>
                                            </div>
                                            <input type="text" placeholder="Enter your note ....."
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>
                                    </div>


                                    <div class="flex items-center">
                                        <button id="addTermBtn"
                                                onclick="
                                                document.getElementById('addTermDiv').classList.remove('hidden');
                                                document.getElementById('addTermBtn').classList.add('hidden');
                                                "

                                                class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                            <i data-tw-merge="" data-lucide="plus"
                                               class="stroke-[1] w-5 h-5 text-primary"></i>
                                            Add Terms & Conditions
                                        </button>
                                    </div>
                                    <div id="addTermDiv" class="hidden w-full grid  grid-cols-1 gap-1 ">
                                        <div class="flex flex-col ">
                                            <div
                                                class="mt-1.5 text-xs leading-relaxed text-slate-500/80 flex justify-between">
                                                <div class="font-normal">Terms & Conditions</div>
                                                <div class="h-max w-max cursor-pointer" onclick="
                                                document.getElementById('addTermDiv').classList.add('hidden');
                                                document.getElementById('addTermBtn').classList.remove('hidden');
                                                "
                                                >
                                                    <i data-tw-merge="" data-lucide="x"
                                                       class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                </div>
                                            </div>
                                            <input type="text" placeholder="Add Terms & Conditions ....."
                                                   class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                        </div>
                                    </div>
                                </div>

                                {{-- Other charges and price details div starts here--}}
                                <div class=" flex flex-col p-2 text-left">

                                    <div class=" pb-4 border-b-[1px] border-gray-200 flex flex-col gap-4">
                                        <div>
                                            <div>
                                                <button id="addOtherChargeBtn"
                                                        onclick="
                                                document.getElementById('otherChargesDiv').classList.remove('hidden');
                                                document.getElementById('addOtherChargeBtn').classList.add('hidden');
                                                "

                                                        class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                                    <i data-tw-merge="" data-lucide="plus"
                                                       class="stroke-[1] w-5 h-5 text-primary"></i>

                                                    Add Other Charges
                                                </button>
                                            </div>
                                            <div id="otherChargesDiv" class="hidden w-full grid  grid-cols-1 gap-1 ">
                                                <div class="flex flex-col ">
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 flex justify-between">
                                                        <div class="font-normal">Other Charges</div>
                                                        <div class="h-max w-max cursor-pointer" onclick="
                                                document.getElementById('otherChargesDiv').classList.add('hidden');
                                                document.getElementById('addOtherChargeBtn').classList.remove('hidden');
                                                "
                                                        >
                                                            <i data-tw-merge="" data-lucide="x"
                                                               class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-2">
                                                        <input type="text" placeholder="Charges Name ....."
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                                        <input type="number" placeholder="Amount (₹) ....."
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=" text-sm leading-relaxed text-slate-500/80 flex justify-between ">
                                            Taxable Amount: <span class="font-semibold"> ₹ 156 </span>
                                        </div>

                                        <div>
                                            <div>
                                                <button id="addDiscountBtn"
                                                        onclick="
                                                document.getElementById('addDiscountDiv').classList.remove('hidden');
                                                document.getElementById('addDiscountBtn').classList.add('hidden');
                                                "

                                                        class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                                    <i data-tw-merge="" data-lucide="plus"
                                                       class="stroke-[1] w-5 h-5 text-primary"></i>

                                                    Add Discount
                                                </button>
                                            </div>
                                            <div id="addDiscountDiv" class="hidden w-full grid  grid-cols-1 gap-1 ">
                                                <div class="flex flex-col ">
                                                    <div
                                                        class="mt-1.5 text-xs leading-relaxed text-slate-500/80 flex justify-between">
                                                        <div class="font-normal">Other Charges</div>
                                                        <div class="h-max w-max cursor-pointer" onclick="
                                                document.getElementById('addDiscountDiv').classList.add('hidden');
                                                document.getElementById('addDiscountBtn').classList.remove('hidden');
                                                "
                                                        >
                                                            <i data-tw-merge="" data-lucide="x"
                                                               class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-2">
                                                        <select type="text" placeholder="Charges Name ....."
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                            <option value="">Discount After Tax</option>
                                                            <option value="">Discount Before Tax</option>
                                                        </select>
                                                        <input type="number" placeholder="Discount (%)....."
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                                        <input type="number" placeholder="Discount (₹) ....."
                                                               class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    {{-- round off and total amount section --}}
                                    <div class=" py-4 border-b-[1px] border-gray-200 flex flex-col gap-4">
                                        <div class=" w-full flex justify-between lg:flex-row md:flex-row flex-col gap-2 ">
                                            <div class="font-semibold mt-1.5 text-sm leading-relaxed text-slate-500/80 flex gap-2">
                                                <input type="checkbox"
                                                       class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent
                                                        transition duration-200 ease-in-out text-sm border-[1px] border-slate-400 focus:border-slate-400 shadow-sm rounded-tr-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                Auto Round Off
                                            </div>
                                            <div
                                                class="lg:w-[200px] md:w-[200px] w-full flex gap-2 lg:flex-row md:flex-row flex-col">
                                                <select
                                                    class="lg:w-[100px] md:w-[100px] w-full py-1  disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                    <option value="add">+ Add</option>
                                                    <option value="reduce">- Reduce</option>
                                                </select>
                                                <input type="number" placeholder="Amount (₹) ....."
                                                       class="lg:w-[100px] md:w-[100px] w-full py-1  disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                            </div>
                                        </div>

                                        <div class=" text-2xl  leading-relaxed text-primary flex justify-between gap-2 lg:flex-row md:flex-row flex-col">
                                            Total Amount: <span class="font-semibold"> ₹ 15,210 </span>
                                        </div>


                                        @if($type == 'sales' || $type == 'purchase')
                                            <div class=" w-full flex justify-between lg:flex-row md:flex-row flex-col gap-2 ">
                                                <div class="font-semibold mt-1.5 text-sm leading-relaxed text-slate-500/80 flex gap-2">

                                                    Amount {{ $type == 'sales' ? 'Received' : 'Paid'}}
                                                </div>
                                                <div class="lg:w-[200px] md:w-[200px] w-full flex gap-2 lg:flex-row md:flex-row flex-col">
                                                    <input type="number" placeholder="Amount (₹) ....."
                                                           class="lg:w-[100px] md:w-[100px] w-full py-1  disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">

                                                    <select
                                                        class="lg:w-[100px] md:w-[100px] w-full py-1  disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out  text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <option value="add">Cash</option>
                                                        <option value="bank">Bank</option>
                                                        <option value="cheque">Cheque</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="leading-relaxed text-primary flex justify-between gap-2 lg:flex-row md:flex-row flex-col">
                                                Balance <span class="font-semibold"> ₹ 1,000 </span>
                                            </div>
                                        @endif



                                    </div>

                                    {{-- signature section here--}}
                                    <div class=" py-10 border-b-[1px] border-gray-200 flex flex-col gap-4  items-end">
                                        <div class=" text-sm leading-relaxed text-slate-500/80 flex gap-2 w-max ">
                                            Authorized signatory for <span
                                                class="font-semibold text-primary"> Himsoft </span>
                                        </div>

                                        <div
                                            class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                            <img src="{{asset('assets/images/signture.png')}}" class="h-auto w-32"
                                                 alt="">
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
    </div>
    </div>
</x-app-layout>
