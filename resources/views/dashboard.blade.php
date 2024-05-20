<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            General Report
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">

                            <div class="relative">
                                <i data-tw-merge="" data-lucide="calendar" class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] group-[.mode--light]:!text-slate-200"></i>
                                <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.5rem] pl-9 group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200 sm:w-64">
                            </div>
                        </div>
                    </div>


                    <div class="tab-content box box--stacked mt-3.5">
                        <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1" role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row visible opacity-100" data-state="enter" style="width:100%;">
                            <div class="grid w-full grid-cols-5 gap-2">
                                <div class="box relative col-span-5 flex-1 overflow-hidden rounded-[0.6rem] border-0 border-slate-200/60 bg-slate-50 bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5 before:absolute before:right-0 before:top-0 before:-mr-[62%] before:h-[130%] before:w-full before:rotate-45 before:bg-gradient-to-b before:from-black/[0.15] before:to-transparent before:content-[''] sm:col-span-5 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                        <i data-tw-merge="" data-lucide="bell" class="lucide lucide-database stroke-[1] h-6 w-6 fill-white/10 text-white"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium text-white">
                                            247,220
                                        </div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            12%
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-up" class="lucide lucide-chevron-up ml-px h-4 w-4 stroke-[1.5]"><path d="m18 15-6-6-6 6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-white/70">
                                        Account Balance
                                    </div>

                                </div>
                                <div class="relative col-span-5 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-3 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                        <i data-tw-merge="" data-lucide="corner-left-up" class="lucide lucide-database stroke-[1] h-6 w-6 fill-white/10 text-primary"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">124,625</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            3%
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down ml-px h-4 w-4 stroke-[1.5]"><path d="m6 9 6 6 6-6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Sales
                                    </div>

                                </div>
                                <div class="relative col-span-5 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                        <i data-tw-merge="" data-lucide="corner-right-down" class="lucide lucide-database stroke-[1] h-6 w-6 fill-white/10 text-primary"></i>
                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">749,220</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            4%
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-up" class="lucide lucide-chevron-up ml-px h-4 w-4 stroke-[1.5]"><path d="m18 15-6-6-6 6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Purchases
                                    </div>

                                </div>
                                <div class="relative col-span-5 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                        <i data-tw-merge="" data-lucide="trending-up" class="lucide lucide-database stroke-[1] h-6 w-6 fill-white/10 text-primary"></i>

                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">273,235</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            9%
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-up" class="lucide lucide-chevron-up ml-px h-4 w-4 stroke-[1.5]"><path d="m18 15-6-6-6 6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Profit/ Loss
                                    </div>

                                </div>
                                <div class="relative col-span-5 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-3 xl:col-span-1">
                                    <div class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                        <i data-tw-merge="" data-lucide="repeat" class="lucide lucide-database stroke-[1] h-6 w-6 fill-white/10 text-primary"></i>

                                    </div>
                                    <div class="mt-12 flex items-center">
                                        <div class="text-2xl font-medium">1,30,25,145</div>
                                        <div class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                            9%
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-up" class="lucide lucide-chevron-up ml-px h-4 w-4 stroke-[1.5]"><path d="m18 15-6-6-6 6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="mt-1 text-base text-slate-500">
                                       Total Transactions
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">Products & Inventory</div>
                    </div>


                    <div class="-mx-2.5 mt-3.5">
                        <div class="grid grid-cols-4 gap-1">
                            <div class="px-2.5 pb-3 col-span-4 sm:col-span-2 xl:col-span-1">
                                <div class="box box--stacked relative p-5">
                                    <div class="flex items-center">
                                        <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                            <i data-tw-merge="" data-lucide="heart" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="ml-auto flex">
                                            <div class="image-fit zoom-in h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/1.jpg')}}" alt="Top Products">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/3.jpg')}}" alt="Top Products">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/5.jpeg')}}" alt="Top Products">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">Top Products</div>
                                        <div class="mt-0.5 text-slate-500">
                                            These products are trending
                                        </div>
                                    </div>
                                    <a class="mt-4 flex items-center border-t  pt-4 font-medium text-primary" href="#">
                                        Explore Products
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3 col-span-4 sm:col-span-2 xl:col-span-1">
                                <div class="box box--stacked relative p-5">
                                    <div class="flex items-center">
                                        <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="droplet" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="ml-auto flex">
                                            <div class="image-fit zoom-in h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/2.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/4.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/7.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">Least Products</div>
                                        <div class="mt-0.5 text-slate-500">
                                            These products are least sold
                                        </div>
                                    </div>
                                    <a class="mt-4 flex items-center border-t  pt-4 font-medium text-primary" href="#">
                                        View Products
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3 col-span-4 sm:col-span-2 xl:col-span-1">
                                <div class="box box--stacked relative p-5">
                                    <div class="flex items-center">
                                        <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="battery-charging" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="ml-auto flex">
                                            <div class="image-fit zoom-in h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/2.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/5.jpeg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/8.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">Low Inventory Alert</div>
                                        <div class="mt-0.5 text-slate-500">
                                            These products are running out of stock
                                        </div>
                                    </div>
                                    <a class="mt-4 flex items-center border-t  pt-4 font-medium text-primary" href="#">
                                        View Products
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-2.5 pb-3 col-span-4 sm:col-span-2 xl:col-span-1">
                                <div class="box box--stacked relative p-5">
                                    <div class="flex items-center">
                                        <div class="group flex items-center justify-center w-10 h-10 border rounded-full [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                            <i data-tw-merge="" data-lucide="alert-triangle" class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                        </div>
                                        <div class="ml-auto flex">
                                            <div class="image-fit zoom-in h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/5.jpeg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/8.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                            <div class="image-fit zoom-in -ml-3 h-8 w-8">
                                                <img class="rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]" src="{{asset('assets/images/products/2.jpg')}}" alt="Tailwise - Admin Dashboard Template">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-11">
                                        <div class="text-base font-medium">For a Long</div>
                                        <div class="mt-0.5 text-slate-500">
                                            These products are not sold for a long time
                                        </div>
                                    </div>
                                    <a class="mt-4 flex items-center border-t  pt-4 font-medium text-primary" href="#">
                                        View Products
                                        <i data-tw-merge="" data-lucide="arrow-right" class="stroke-[1] ml-1.5 h-4 w-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium">Unpaid Invoices</div>
                    </div>
                    <div class="mt-2 overflow-auto lg:overflow-visible">
                        <table data-tw-merge="" class="w-full text-left border-separate border-spacing-y-[10px]">
                            <tbody>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="trending-up" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="ml-3.5">
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                IVR/20240301/IX/VII/2645514417
                                            </a>
                                            <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                                Sales Order
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Customer Name
                                    </div>
                                    <a class="flex items-center text-primary" href="#">
                                        <i data-tw-merge="" data-lucide="user" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            Leonardo DiCaprio
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Type
                                    </div>
                                    <div class="flex items-center text-success">
                                        <i data-tw-merge="" data-lucide="package-search" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            To Receive
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Date
                                    </div>
                                    <div class="whitespace-nowrap">12/12/2023</div>
                                </td>
                                <td data-tw-merge="" class="px-5 border-[1px] border-slate-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        View Details</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Print Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="trending-down" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="ml-3.5">
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                IVR/202asdhkj/9979?//HKHFS
                                            </a>
                                            <div class="mt-1 whitespace-nowrap text-xs text-slate-500">

                                                Purchase Order
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Vendor Name
                                    </div>
                                    <a class="flex items-center text-primary" href="#">
                                        <i data-tw-merge="" data-lucide="user-check" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            Leonardo DiCaprio
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Type
                                    </div>
                                    <div class="flex items-center text-danger">
                                        <i data-tw-merge="" data-lucide="package-search" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            To pay
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Date
                                    </div>
                                    <div class="whitespace-nowrap">24/10/2024</div>
                                </td>
                                <td data-tw-merge="" class="px-5 border-[1px] border-slate-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        View Details</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Print Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="trending-up" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="ml-3.5">
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                IVR/20240301/IX/VII/2645514417
                                            </a>
                                            <div class="mt-1 whitespace-nowrap text-xs text-slate-500">
                                                Sales Order
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Customer Name
                                    </div>
                                    <a class="flex items-center text-primary" href="#">
                                        <i data-tw-merge="" data-lucide="user" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            Leonardo DiCaprio
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Type
                                    </div>
                                    <div class="flex items-center text-success">
                                        <i data-tw-merge="" data-lucide="package-search" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            To Receive
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Date
                                    </div>
                                    <div class="whitespace-nowrap">12/12/2023</div>
                                </td>
                                <td data-tw-merge="" class="px-5 border-[1px] border-slate-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        View Details</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Print Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr data-tw-merge="" class="">
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center">
                                        <i data-tw-merge="" data-lucide="trending-down" class="h-6 w-6 fill-primary/10 stroke-[0.8] text-theme-1"></i>
                                        <div class="ml-3.5">
                                            <a class="whitespace-nowrap font-medium" href="#">
                                                IVR/202asdhkj/9979?//HKHFS
                                            </a>
                                            <div class="mt-1 whitespace-nowrap text-xs text-slate-500">

                                                Purchase Order
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-60 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Vendor Name
                                    </div>
                                    <a class="flex items-center text-primary" href="#">
                                        <i data-tw-merge="" data-lucide="user-check" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            Leonardo DiCaprio
                                        </div>
                                    </a>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Type
                                    </div>
                                    <div class="flex items-center text-danger">
                                        <i data-tw-merge="" data-lucide="package-search" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                        <div class="ml-1.5 whitespace-nowrap">
                                            To pay
                                        </div>
                                    </div>
                                </td>
                                <td data-tw-merge="" class="px-5 py-3 border-[1px] border-slate-300 box w-44 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="mb-1 whitespace-nowrap text-xs text-slate-500">
                                        Date
                                    </div>
                                    <div class="whitespace-nowrap">24/10/2024</div>
                                </td>
                                <td data-tw-merge="" class="px-5 border-[1px] border-slate-300 box relative w-20 rounded-l-none rounded-r-none border-x-0 py-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i data-tw-merge="" data-lucide="more-vertical" class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                            </button>
                                            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="wallet-cards" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        View Details</a>
                                                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="printer" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                        Print Invoice</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>





                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                          Recent Transactions
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-bar-chart2" class="lucide lucide-file-bar-chart2 mr-2 h-4 w-4 stroke-[1.3]"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M12 18v-6"></path><path d="M8 18v-1"></path><path d="M16 18v-3"></path></svg>
                                Export to Excel</button>
                            <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-bar-chart2" class="lucide lucide-file-bar-chart2 mr-2 h-4 w-4 stroke-[1.3]"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M12 18v-6"></path><path d="M8 18v-1"></path><path d="M16 18v-3"></path></svg>
                                Export to PDF</button>
                        </div>
                    </div>
                    <div class="mt-3.5">
                        <div class="box box--stacked flex flex-col">
                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        <input type="text" placeholder="Search transactions..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&amp;[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&amp;:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-[0.5rem] pl-9 sm:w-64">
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto xl:overflow-visible">
                                <table class="w-full text-left border-[1px] border-slate-300 border-collapse">
                                    <thead class="">
                                    <tr class="">
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Customer Name
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Transaction ID
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Status
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Amount
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 bg-slate-50 py-4 font-medium text-slate-500">
                                            Date
                                        </td>
                                        <td class="px-5 w-36 border-[1px] border-slate-300 bg-slate-50 py-4 text-center font-medium text-slate-500">
                                            Action
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="[&amp;_td]:last:border-b-0">

                                        <td class="px-5 border-[1px] border-slate-300 w-44  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="image-fit zoom-in h-9 w-9">
                                                    <img data-placement="top" src="{{asset('assets/images/users/user4.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                </div>
                                                <div class="ml-3.5">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Johnny Depp
                                                    </a>
                                                    <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                                                        Product:
                                                        <a class="ml-1 block w-44 truncate" href="#">
                                                            Purchased: 4 Items
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <a class="flex items-center text-primary" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                                                <div class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                    IVR/20240301/V/III/6641603712
                                                </div>
                                            </a>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="package" class="lucide lucide-package h-3.5 w-3.5 stroke-[1.7]"><path d="m7.5 4.27 9 5.15"></path><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path><path d="m3.3 7 8.7 5 8.7-5"></path><path d="M12 22V12"></path></svg>
                                                <div class="ml-1.5 whitespace-nowrap">
                                                    Completed
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                ₹1.186
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                Sun Jul 2020
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 relative  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center justify-center">
                                                <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu z-[9999] hidden absolute invisible opacity-0 translate-y-1" data-state="leave" id="_b1h8vrf4p" style="display: none; position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-253px, 350px);" data-popper-placement="bottom-end">
                                                        <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                Edit</a>
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash2" class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="[&amp;_td]:last:border-b-0">

                                        <td class="px-5 border-[1px] border-slate-300 w-44  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="image-fit zoom-in h-9 w-9">
                                                    <img data-placement="top" src="{{asset('assets/images/users/user4.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                </div>
                                                <div class="ml-3.5">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Meryl Streep
                                                    </a>
                                                    <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                                                        Product:
                                                        <a class="ml-1 block w-44 truncate" href="#">
                                                            Purchased: 2 Items
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <a class="flex items-center text-info" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                                                <div class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-info/30 decoration-dotted underline-offset-[3px]">
                                                    IVR/20240301/IX/V/414898578
                                                </div>
                                            </a>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center text-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="package-x" class="lucide lucide-package-x h-3.5 w-3.5 stroke-[1.7]"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path><path d="m7.5 4.27 9 5.15"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line><path d="m17 13 5 5m-5 0 5-5"></path></svg>
                                                <div class="ml-1.5 whitespace-nowrap">
                                                    Cancelled
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                ₹1.373
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                Thu Feb 2022
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 relative  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center justify-center">
                                                <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                     </button>
                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                                        <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                Edit</a>
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash2" class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="[&amp;_td]:last:border-b-0"  >

                                        <td class="px-5 border-[1px] border-slate-300 w-44  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="image-fit zoom-in h-9 w-9">
                                                    <img data-placement="top" src="{{asset('assets/images/users/user2.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                </div>
                                                <div class="ml-3.5">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Brad Pitt
                                                    </a>
                                                    <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                                                        Product:
                                                        <a class="ml-1 block w-44 truncate" href="#">
                                                            Purchased: 7 Items
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <a class="flex items-center text-warning" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                                                <div class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                    IVR/20240301/I/IV/1909266333
                                                </div>
                                            </a>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center text-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="hourglass" class="lucide lucide-hourglass h-3.5 w-3.5 stroke-[1.7]"><path d="M5 22h14"></path><path d="M5 2h14"></path><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"></path><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"></path></svg>
                                                <div class="ml-1.5 whitespace-nowrap">
                                                    Pending
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                ₹1.838
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                Sat Aug 2021
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 relative  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center justify-center">
                                                <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                                        <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                Edit</a>
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash2" class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="[&amp;_td]:last:border-b-0"  >

                                        <td class="px-5 border-[1px] border-slate-300 w-44  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center">
                                                <div class="image-fit zoom-in h-9 w-9">
                                                    <img data-placement="top" src="{{asset('assets/images/users/user2.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                                </div>
                                                <div class="ml-3.5">
                                                    <a class="whitespace-nowrap font-medium" href="#">
                                                        Brad Pitt
                                                    </a>
                                                    <div class="mt-0.5 flex whitespace-nowrap text-xs text-slate-500">
                                                        Product:
                                                        <a class="ml-1 block w-44 truncate" href="#">
                                                            Purchased: 7 Items
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <a class="flex items-center text-danger" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link h-3.5 w-3.5 stroke-[1.7]"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>
                                                <div class="ml-1.5 whitespace-nowrap text-[13px] underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                    IVR/20240301/I/IV/1909266333
                                                </div>
                                            </a>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center text-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-x2" class="lucide lucide-file-x2 h-3.5 w-3.5 stroke-[1.7]"><path d="M4 22h14a2 2 0 0 0 2-2V7.5L14.5 2H6a2 2 0 0 0-2 2v4"></path><path d="M14 2v6h6"></path><path d="m3 12.5 5 5"></path><path d="m8 12.5-5 5"></path></svg>
                                                <div class="ml-1.5 whitespace-nowrap">
                                                    Failed
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                ₹1.838
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300  py-4 dark:bg-darkmode-600">
                                            <div class="whitespace-nowrap">
                                                Sat Aug 2021
                                            </div>
                                        </td>
                                        <td class="px-5 border-[1px] border-slate-300 relative  py-4 dark:bg-darkmode-600">
                                            <div class="flex items-center justify-center">
                                                <div data-tw-placement="bottom-end" class="dropdown relative h-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-vertical" class="lucide lucide-more-vertical stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden invisible opacity-0 translate-y-1" data-state="leave" style="display: none;">
                                                        <div class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square" class="lucide lucide-check-square stroke-[1] mr-2 h-4 w-4"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                                                Edit</a>
                                                            <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash2" class="lucide lucide-trash2 stroke-[1] mr-2 h-4 w-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
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
