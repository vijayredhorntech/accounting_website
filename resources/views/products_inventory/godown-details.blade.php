<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Godown 1
                        </div>
                    </div>
                    <div class="mt-3.5">
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <input type="text" placeholder="Search Product Groups..." class="pl-[40px] disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-x-3 gap-y-2 sm:ml-auto sm:flex-row">


                                    {{--                                  export to pdf div here--}}
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


                                    {{--                                    filter div here--}}
                                    <div data-tw-placement="bottom-end" class="dropdown relative inline-block"><button data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 w-full sm:w-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="arrow-down-wide-narrow" class="lucide lucide-arrow-down-wide-narrow mr-2 h-4 w-4 stroke-[1.3]"><path d="m3 16 4 4 4-4"></path><path d="M7 20V4"></path><path d="M11 4h10"></path><path d="M11 8h7"></path><path d="M11 12h4"></path></svg>
                                            Filter
                                            <span class="ml-2 flex h-5 items-center justify-center rounded-full border bg-slate-100 px-1.5 text-xs font-medium">
                                                            3
                                                        </span></button>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600">
                                                <div class="p-2">
                                                    <div>
                                                        <div class="text-left text-slate-500">
                                                            Status
                                                        </div>
                                                        <select class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="text-left text-slate-500">
                                                            Products
                                                        </div>
                                                        <select class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 mt-2 flex-1">
                                                            <option value="1 - 50">1 - 50</option>
                                                            <option value="51 - 100">50 - 100</option>
                                                            <option value="> 100">&gt; 100</option>
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
                                            Images
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 font-medium text-slate-500">
                                            Item Name
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 whitespace-nowrap border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Item Code
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 whitespace-nowrap border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Item Batch
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 whitespace-nowrap border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Stock Quantity
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Stock Value
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Selling Price
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Purchase Price
                                        </td>
                                        <td class="px-5 border-b dark:border-darkmode-300 w-36 border-t border-slate-200/60 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Action
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $godownItems = [
                                        [
                                            'image' => asset('assets/images/products/1.jpg'),
                                            'item_name' => 'Laptop Bag',
                                            'item_code' => 'LB001',
                                            'item_batch' => 'BATCH001',
                                            'stock_quantity' => '50',
                                            'stock_value' => '2000',
                                            'selling_price' => '50',
                                            'purchase_price' => '40',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/2.jpg'),
                                            'item_name' => 'Wireless Mouse',
                                            'item_code' => 'WM001',
                                            'item_batch' => 'BATCH002',
                                            'stock_quantity' => '30',
                                            'stock_value' => '900',
                                            'selling_price' => '20',
                                            'purchase_price' => '15',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/3.jpg'),
                                            'item_name' => 'Notebook',
                                            'item_code' => 'NB001',
                                            'item_batch' => 'BATCH003',
                                            'stock_quantity' => '80',
                                            'stock_value' => '1600',
                                            'selling_price' => '10',
                                            'purchase_price' => '8',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'item_name' => 'Desk Lamp',
                                            'item_code' => 'DL001',
                                            'item_batch' => 'BATCH004',
                                            'stock_quantity' => '40',
                                            'stock_value' => '1200',
                                            'selling_price' => '30',
                                            'purchase_price' => '25',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/5.jpeg'),
                                            'item_name' => 'Coffee Mug',
                                            'item_code' => 'CM001',
                                            'item_batch' => 'BATCH005',
                                            'stock_quantity' => '60',
                                            'stock_value' => '600',
                                            'selling_price' => '5',
                                            'purchase_price' => '3',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/7.jpg'),
                                            'item_name' => 'Mechanical Pencil Set',
                                            'item_code' => 'MP001',
                                            'item_batch' => 'BATCH006',
                                            'stock_quantity' => '20',
                                            'stock_value' => '200',
                                            'selling_price' => '15',
                                            'purchase_price' => '10',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/8.jpg'),
                                            'item_name' => 'Whiteboard Marker',
                                            'item_code' => 'WM002',
                                            'item_batch' => 'BATCH007',
                                            'stock_quantity' => '70',
                                            'stock_value' => '350',
                                            'selling_price' => '5',
                                            'purchase_price' => '3',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/5.jpeg'),
                                            'item_name' => 'Sticky Notes',
                                            'item_code' => 'SN001',
                                            'item_batch' => 'BATCH008',
                                            'stock_quantity' => '90',
                                            'stock_value' => '450',
                                            'selling_price' => '2',
                                            'purchase_price' => '1',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'item_name' => 'Calculator',
                                            'item_code' => 'CL001',
                                            'item_batch' => 'BATCH009',
                                            'stock_quantity' => '25',
                                            'stock_value' => '500',
                                            'selling_price' => '20',
                                            'purchase_price' => '15',
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'item_name' => 'USB Flash Drive',
                                            'item_code' => 'USB001',
                                            'item_batch' => 'BATCH010',
                                            'stock_quantity' => '120',
                                            'stock_value' => '1200',
                                            'selling_price' => '10',
                                            'purchase_price' => '8',
                                        ],
                                    ];


                                    ?>
                                    @foreach($godownItems as $godownItem)
                                        <tr class="[&amp;_td]:last:border-b-0">
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium">
                                                   {{$loop->iteration}}
                                                </a>

                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex">
                                                    <div class="image-fit zoom-in h-9 w-9">
                                                        <img data-placement="top" src="{{$godownItem['image']}}" alt="Product Image Here" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium">
                                                    {{$godownItem['item_name']}}
                                                </a>

                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$godownItem['item_code']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$godownItem['item_batch']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$godownItem['stock_quantity']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-center dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹  {{$godownItem['stock_value']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-success">
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{$godownItem['selling_price']}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-danger">
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{$godownItem['purchase_price']}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-b dark:border-darkmode-300 relative border-dashed py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <button type="button" data-tw-merge
                                                                        data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                    Edit</button>
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
