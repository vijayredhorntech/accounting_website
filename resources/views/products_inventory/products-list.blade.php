<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            All Products
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <a href="{{route('create-product')}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pen-line" class="lucide lucide-pen-line mr-2 h-4 w-4 stroke-[1.3]"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                Add New Product</a>
                        </div>
                    </div>
                    <div class="mt-3.5">
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <input type="text" placeholder="Search products..." class="pl-[40px] disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 focus:border-slate-400 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-0 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
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
                                                            Stock
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
                                <table class="w-full text-left border-[1px] border-slate-300 border-collapse">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Sr. No.
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Images
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Product Name
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Product Group
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Price
                                        </td>

                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Stock
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Status
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 w-36 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Action
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $products = [
                                        [
                                            'image' => asset('assets/images/products/1.jpg'),
                                            'name' => 'Wireless Headphones with Noise Cancellation',
                                            'tags' => 'Music, Technology, Travel',
                                            'category' => 'Electronics',
                                            'price' => '149.99',
                                            'stock' => 50,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/2.jpg'),
                                            'name' => 'Smart Watch with Health Tracker',
                                            'tags' => 'Fitness, Health, Lifestyle',
                                            'category' => 'Electronics',
                                            'price' => '199.99',
                                            'stock' => 30,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/3.jpg'),
                                            'name' => 'Portable Blender for Smoothies',
                                            'tags' => 'Health, Fitness, Nutrition',
                                            'category' => 'Kitchen Appliances',
                                            'price' => '79.99',
                                            'stock' => 20,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'name' => 'Digital Camera with HD Recording',
                                            'tags' => 'Photography, Technology, Travel',
                                            'category' => 'Electronics',
                                            'price' => '299.99',
                                            'stock' => 15,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/5.jpeg'),
                                            'name' => 'Bluetooth Speaker with Bass Boost',
                                            'tags' => 'Music, Entertainment, Technology',
                                            'category' => 'Electronics',
                                            'price' => '129.99',
                                            'stock' => 40,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'name' => 'Electric Toothbrush with UV Sanitizer',
                                            'tags' => 'Health, Hygiene, Dental Care',
                                            'category' => 'Personal Care',
                                            'price' => '49.99',
                                            'stock' => 25,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/7.jpg'),
                                            'name' => 'Wireless Charging Pad for Phones',
                                            'tags' => 'Technology, Gadgets, Accessories',
                                            'category' => 'Electronics',
                                            'price' => '39.99',
                                            'stock' => 60,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/8.jpg'),
                                            'name' => 'Stainless Steel Water Bottle',
                                            'tags' => 'Fitness, Outdoor, Travel',
                                            'category' => 'Sports & Outdoors',
                                            'price' => '19.99',
                                            'stock' => 100,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/5.jpeg'),
                                            'name' => 'Solar-Powered LED Camping Lantern',
                                            'tags' => 'Camping, Outdoor, Emergency',
                                            'category' => 'Sports & Outdoors',
                                            'price' => '29.99',
                                            'stock' => 35,
                                            'status' => 'Active'
                                        ],
                                        [
                                            'image' => asset('assets/images/products/4.jpg'),
                                            'name' => 'Fitness Tracker with Heart Rate Monitor',
                                            'tags' => 'Fitness, Health, Wearables',
                                            'category' => 'Electronics',
                                            'price' => '79.99',
                                            'stock' => 20,
                                            'status' => 'Active'
                                        ],
                                    ];

                                    ?>

                                    @foreach($products as $product)
                                        <tr class="[&amp;_td]:last:border-b-0">
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$loop->iteration}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="flex">
                                                    <div class="image-fit zoom-in h-9 w-9">
                                                        <img data-placement="top" src="{{$product['image']}}" alt="Product Image Here" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="#">
                                                    {{$product['name']}}
                                                </a>
                                                <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                                    Tags: {{$product['tags']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    {{$product['category']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="whitespace-nowrap">
                                                    ₹ {{$product['price']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600 text-{{$product['stock']<=20?'danger':'success'}}">
                                                <div class="whitespace-nowrap">
                                                    {{$product['stock']}}
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center text-{{$product['status']==='Active'?'success':'danger'}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="database" class="lucide lucide-database h-3.5 w-3.5 stroke-[1.7]"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{$product['status']}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 border-[1px] border-slate-300 relative  py-4 dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                        </button>
                                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                                            <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a href="{{route('create-product')}}" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
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
