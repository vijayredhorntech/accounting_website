<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                           {{ucfirst($type)}} Invoice: LKJOI93845793J87KHK
                        </div>
                        {{--                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">--}}
                        {{--                            <a href=""--}}
                        {{--                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="external-link" class="lucide lucide-external-link mr-3 h-4 w-4 stroke-[1.3]"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg>--}}
                        {{--                                Preview--}}
                        {{--                            </a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
{{--                       left section--}}
                        <div  class="col-span-12 xl:col-span-8">
                            <div class="box box--stacked flex flex-col p-5 sm:p-14">
                                <div
                                    class="flex flex-col gap-y-7 rounded-lg border border-primary/5 bg-primary/[0.03] px-8 py-12 sm:-mx-10 sm:-mt-10 sm:px-10 sm:py-16 md:flex-row">
                                    <div class="flex flex-col justify-center">
                                        <img class="h-[100px] w-[100px] " src="{{asset('assets/images/appLogo.png')}}" alt="">

                                        <div class=" text-lg font-medium text-primary">
                                            Him Soft Solution
                                        </div>
                                    </div>
                                    <div class="md:ml-auto md:text-right">
                                        <div class="-mt-1 text-lg font-medium text-primary">
                                            # INVOICE
                                        </div>
                                        <div class="mt-1">
                                            IVR/20240301/IX/V/4978182226
                                        </div>
                                        <div class="mt-7 flex flex-col gap-1">
                                            <div>Plot 8, Phase B</div>
                                            <div>Floor 3B</div>
                                            <div>Mohali, Punjab</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex flex-col px-8 pt-4 sm:flex-row sm:px-0">
                                    <div>
                                        <div class="text-slate-500">Bill to :</div>
                                        <div class="mt-1.5 text-base font-medium text-primary">
                                            Other Party Name
                                        </div>
                                        <div class="mt-1.5 flex flex-col gap-1">
                                            <div>890 Cedar Avenue</div>
                                            <div>Unit 501</div>
                                            <div>Seattle, USA</div>
                                        </div>
                                    </div>
                                    <div class="mt-7 flex flex-col gap-4 sm:ml-auto sm:mt-0 sm:text-right">
                                        <div>
                                            <div class="text-slate-500">Invoice date :</div>
                                            <div class="mt-1.5 font-medium text-slate-600">
                                                Wed Sep 2021
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-slate-500">Due date :</div>
                                            <div class="mt-1.5 font-medium text-slate-600">
                                                Wed Sep 2021
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 rounded-[0.6rem] border border-slate-200/80">
                                    <div class="overflow-auto xl:overflow-visible">
                                        <table class="w-full text-left">
                                            <thead class="">
                                            <tr class="">
                                                <td class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-4 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                    Item
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                    Quantity
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                    Rate
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-4 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                    Amount
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="[&amp;_td]:last:border-b-0">
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items-center">
                                                        <div class="whitespace-nowrap">
                                                            Computers &Accessories
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        3
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap">
                                                        ₹ 159
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace-nowrap font-medium">
                                                        ₹ 477
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="[&amp;_td]:last:border-b-0">
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 dark:bg-darkmode-600">
                                                    <div class="flex items center">
                                                        <div class="whitespace nowrap">
                                                            Software & Licenses
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace
                                                    -nowrap">
                                                        2
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace
                                                    -nowrap">
                                                        ₹ 245
                                                    </div>
                                                </td>
                                                <td class="px-5 border-b dark:border-darkmode-300 border-dashed py-4 text-right dark:bg-darkmode-600">
                                                    <div class="whitespace
                                                    -nowrap font-medium">
                                                        ₹ 490
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="my-10 ml-auto flex flex-col gap-3.5 pr-5 text-right">
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Subtotal:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-52">
                                            ₹ 967
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Tax:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-52">
                                            ₹ 523
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Total:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-52">
                                            ₹ 1,490
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Amount paid:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-52">
                                            ₹ 1,463
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-end">
                                        <div class="text-slate-500">Due balance:</div>
                                        <div class="w-20 font-medium text-slate-600 sm:w-52">
                                            ₹ 27
                                        </div>
                                    </div>
                                </div>
                                <div class="-mx-8 border-t border-dashed border-slate-200/80 px-10 pt-6">
                                    <div class="text-base font-medium">
                                        Notes
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Please make the payment within 15 days. Late payment charges will be applicable after 15 days.
                                    </div>
                                </div>
                                <div class="-mx-8 border-t border-dashed border-slate-200/80 px-10 pt-6">
                                    <div class="text-base font-medium">
                                        Terms & Conditions
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Products once sold will not be taken back. Warranty of the product is limited to the manufacturer only.
                                    </div>
                                    <div class="mt-5 text-slate-500">© 2024 Him Soft Solution</div>
                                </div>
                                <div class=" py-10 border-t border-dashed border-slate-200/80 flex flex-col gap-4  items-end">
                                    <div
                                        class="px-6 py-1 font-semibold text-primary border-dotted border-[2px] border-primary flex gap-2">
                                        <img src="{{asset('assets/images/signture.png')}}" class="h-auto w-32"
                                             alt="">
                                    </div>
                                    <div class=" text-sm leading-relaxed text-slate-500/80 flex gap-2 w-max ">
                                        Authorized signatory for <span
                                            class="font-semibold text-primary"> Himsoft </span>
                                    </div>



                                </div>
                            </div>
                        </div>
{{--                        right section--}}
                        <div class="col-span-12 xl:col-span-4">
                            <div class="box box--stacked flex flex-col p-5">
                                <div
                                    class="mb-5 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                    Recent {{ucfirst($type)}} Invoices
                                </div>

                                    <div class="">
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane active visible opacity-100" >
                                                <div class="rounded-[0.6rem] border border-dashed border-slate-300/80">
                                                    <div
                                                        class="flex cursor-pointer items-center border-b border-dashed border-slate-300/80 px-5 py-4 last:border-0 last:border-b-0 hover:bg-slate-50">
                                                        <div>
                                                            <div
                                                                class="max-w-[12rem] truncate font-medium text-primary">
                                                                  James Franco
                                                            </div>

                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Wed Sep 2021
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto whitespace-nowrap font-medium">
                                                            ₹ 1,523
                                                        </div>

                                                    </div>
                                                    <div
                                                        class="flex cursor-pointer items-center border-b border-dashed border-slate-300/80 px-5 py-4 last:border-0 last:border-b-0 hover:bg-slate-50">
                                                        <div>
                                                            <div
                                                                class="max-w-[12rem] truncate font-medium text-primary">
                                                                Denzel Washington
                                                            </div>

                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Mon Oct 2021
                                                            </div>
                                                        </div>
                                                        <div class="ml-auto whitespace-nowrap font-medium">
                                                            ₹ 758
                                                        </div>

                                                    </div>

                                                </div>
                                                <a href="{{route('quotation')}}"
                                                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed dark:border-primary mt-3 w-full border-primary/[0.15] bg-white text-primary hover:bg-primary/20">
                                                    View all quotations/ estimate
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         data-lucide="arrow-right"
                                                         class="lucide lucide-arrow-right ml-2 h-4 w-4 stroke-[1.3]">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg>
                                                </a>
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
