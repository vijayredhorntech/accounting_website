<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                        <div class="text-base font-medium group-[.mode--light]:text-white">
                            Cash and Bank
                        </div>
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                            <button data-tw-merge
                                    data-tw-toggle="modal" data-tw-target="#adjustMoney" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-white text-white">
                                <i data-tw-merge="" data-lucide="repeat" class="stroke-[1] w-5 h-5  text-white mr-2 rotate-90"></i>

                                Add/ Reduce Money
                            </button>

                            {{--adjust money modal start here--}}
                            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="adjustMoney" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                <div data-tw-merge class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                    <div class="flex items-center px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                        <h2 class="mr-auto text-base font-medium">
                                           Adjust Money
                                        </h2>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="adjust_money_in" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Adjust Money In
                                            </label>
                                            <select name="adjust_money_in" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="Uco Bank">Uco Bank</option>
                                                <option value="HDFC Bank">HDFC Bank</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                        <span  class=" text-base font-medium">
                                            Current balance
                                        </span>
                                        <span  class="text-base font-bold text-primary">
                                           ₹ 50,000
                                        </span>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="date" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Date
                                            </label>
                                            <input name="date" type="date" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                        </div>
                                    </div>


                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-6 sm:col-span-6">
                                            <label data-tw-merge for="add_reduce" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Add/ Reduce
                                            </label>
                                            <select name="add_reduce" data-tw-merge class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="1">Add</option>
                                                <option value="0">Reduce</option>
                                            </select>
                                        </div>

                                        <div class="col-span-6 sm:col-span-6">
                                            <label data-tw-merge for="amount" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Amount
                                            </label>
                                            <input name="amount" type="number"  placeholder="ex: ₹ 50,000" data-tw-merge class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                        <span  class=" text-base font-medium">
                                            New balance
                                        </span>
                                        <span  class="text-base font-bold text-primary">
                                           ₹
                                        </span>
                                    </div>

                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="remark" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Remark
                                            </label>
                                            <textarea name="remark" rows="4" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="px-5 py-3 text-right border-t border-slate-400/60 dark:border-darkmode-400">
                                        <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-slate-400 text-slate-400">
                                            Cancel
                                        </button>
                                        <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--adjust money modal ends here -->


                            <button data-tw-merge
                                    data-tw-toggle="modal" data-tw-target="#transferMoney" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-white text-white">
                                <i data-tw-merge="" data-lucide="repeat" class="stroke-[1] w-5 h-5  text-white mr-2"></i>
                                Transfer Money
                            </button>


                            {{--transfer money modal start here--}}
                            <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="transferMoney" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                <div data-tw-merge class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                    <div class="flex items-center px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                        <h2 class="mr-auto text-base font-medium">
                                            Transfer Balance
                                        </h2>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="adjust_money_in" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Transfer money from
                                            </label>
                                            <select name="adjust_money_in" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="Uco Bank">Uco Bank</option>
                                                <option value="HDFC Bank">HDFC Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="adjust_money_in" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Transfer money to
                                            </label>
                                            <select name="adjust_money_in" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                <option value="HDFC Bank">HDFC Bank</option>
                                                <option value="Uco Bank">Uco Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                        <span  class=" text-base font-medium">
                                            Current balance
                                        </span>
                                        <span  class="text-base font-bold text-primary">
                                           ₹ 50,000
                                        </span>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="date" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Date
                                            </label>
                                            <input name="date" type="date" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>

                                        </div>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="amount" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Amount
                                            </label>
                                            <input name="amount" type="number"  placeholder="ex: ₹ 50,000" data-tw-merge class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                        </div>
                                    </div>
                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-12">
                                            <label data-tw-merge for="remark" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                Remark
                                            </label>
                                            <textarea name="remark" rows="4" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="px-5 py-3 text-right border-t border-slate-400/60 dark:border-darkmode-400">
                                        <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-slate-400 text-slate-400">
                                            Cancel
                                        </button>
                                        <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">
                                            Transfer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--transfer money modal ends here -->



                            <button data-tw-merge
                                    data-tw-toggle="modal" data-tw-target="#addBankAccount" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary bg-primary text-white">
                                <i data-tw-merge="" data-lucide="plus" class="stroke-[1] w-5 h-5  text-white mr-2"></i>
                                Add New Account
                            </button>

                        </div>
                    </div>

                    <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="relative col-span-12 xl:col-span-3">
                            <div class="sticky top-[104px] ">
                                <div class="box box--stacked ">
                                     <div class="flex justify-between px-5 pb-6 pt-5 border-b-[1px] border-primary">
                                         <div class="font-semibold text-lg text-black">Total Balance</div>
                                         <div class="font-semibold text-lg text-primary">₹ 70,000</div>
                                     </div>
                                    <div class="flex justify-between px-5 py-2 border-b-[1px] border-primary">
                                        <div class="font-semibold text-md text-black">Cash</div>
                                    </div>
                                     <div class="flex justify-between px-5 pb-6 pt-5 border-b-[1px] border-primary cursor-pointer">
                                         <div class="font-semibold text-lg text-black">Cash in hand</div>
                                         <div class="font-semibold text-lg text-primary">₹ 20,000</div>
                                     </div>
                                    <div class="flex justify-between px-5 py-2 border-b-[1px] border-primary">
                                        <div class="font-semibold text-md text-black">Bank Accounts</div>
                                    </div>



{{--                                    replicate this div for dynamic bank accounts--}}
                                    <div class="flex justify-between px-5 pb-6 pt-5 border-b-[1px]  border-primary items-center cursor-pointer">
                                        <div class="font-semibold text-lg text-black flex gap-2 items-center">
                                            <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="flex flex-col ">
                                                <span class="font-semibold text-sm text-primary">Uco Bank</span>
                                                <span class="font-normal text-xs text-black">1564258954621</span>
                                            </div>

                                        </div>
                                        <div class="font-semibold text-md text-primary">₹ 20,000</div>
                                    </div>
                                    <div class="flex justify-between px-5 pb-6 pt-5 border-b-[1px] bg-red-50 border-primary items-center cursor-pointer">
                                        <div class="font-semibold text-lg text-black flex gap-2 items-center">
                                            <i data-tw-merge="" data-lucide="check-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="flex flex-col ">
                                                <span class="font-semibold text-sm text-primary">HDFC Bank</span>
                                                <span class="font-normal text-xs text-black">HDFC489756214563213</span>
                                            </div>

                                        </div>
                                        <div class="font-semibold text-md text-primary">₹ 30,000</div>
                                    </div>
                                    <div class="flex justify-center  px-5 pb-6 pt-5">
                                        <button data-tw-merge
                                                data-tw-toggle="modal" data-tw-target="#addBankAccount"
                                                class="px-10 py-2 font-semibold text-primary border-dotted border-[2px] border-primary">
                                            Add new bank
                                        </button>



                                        {{--select party modal start here--}}
                                        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="addBankAccount" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&amp;:not(.show)]:duration-[0s,0.2s] [&amp;:not(.show)]:delay-[0.2s,0s] [&amp;:not(.show)]:invisible [&amp;:not(.show)]:opacity-0 [&amp;.show]:visible [&amp;.show]:opacity-100 [&amp;.show]:duration-[0s,0.4s]">
                                            <div data-tw-merge class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                                <div class="flex items-center px-5 py-3 border-b border-slate-400/60 dark:border-darkmode-400">
                                                    <h2 class="mr-auto text-base font-medium">
                                                        Add Bank Account
                                                    </h2>
                                                </div>
                                                <div data-tw-merge class="p-5 grid grid-cols-12 gap-4">
                                                    <div class="col-span-12 sm:col-span-12">
                                                        <label data-tw-merge for="account_name" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                            Account Name
                                                        </label>
                                                        <input name="account_name" type="text" placeholder="ex: Personal Account" data-tw-merge class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                    </div>
                                                </div>
                                                <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label data-tw-merge for="opening_balance" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                            Opening Balance
                                                        </label>
                                                        <input name="opening_balance" type="number" placeholder="ex: ₹ 50,000" data-tw-merge class=" rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-6">
                                                        <label data-tw-merge for="date" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                            As of Date
                                                        </label>
                                                        <input name="date" type="date"   data-tw-merge class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                    </div>
                                                </div>
                                                <div class="flex items-center justify-between px-5 py-3 border-t-[1px] border-slate-400/60 ">
                                                    <span   class="mr-auto text-base font-medium">Add Bank Details</span>
                                                    <i  id="leftToggle" data-tw-merge="" data-lucide="toggle-left" class="stroke-[1] w-7 h-7 side-menu__link__icon cursor-pointer"
                                                     onclick="
                                                     console.log('hellow')
                                                       let leftToggle = document.getElementById('leftToggle');
                                                      let rightToggle = document.getElementById('rightToggle');
                                                      let accountDetails = document.getElementById('accountDetails');
                                                      leftToggle.classList.toggle('hidden');
                                                      rightToggle.classList.toggle('hidden');
                                                      accountDetails.classList.toggle('hidden');
                                                     "
                                                    ></i>
                                                    <i id="rightToggle" data-tw-merge="" data-lucide="toggle-right" class="stroke-[1] w-7 h-7 side-menu__link__icon cursor-pointer hidden"
                                                       onclick="
                                                     let leftToggle = document.getElementById('leftToggle');
                                                      let rightToggle = document.getElementById('rightToggle');
                                                      let accountDetails = document.getElementById('accountDetails');
                                                      leftToggle.classList.toggle('hidden');
                                                      rightToggle.classList.toggle('hidden');
                                                      accountDetails.classList.toggle('hidden');
                                                     "
                                                    ></i>
                                                </div>


                                                <div id="accountDetails" class="hidden">
                                                    <div data-tw-merge class="p-5 grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label data-tw-merge for="account_holder_name" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                Account Holder Name
                                                            </label>
                                                            <input name="account_holder_name" type="text" placeholder="ex: user name" data-tw-merge class=" rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label data-tw-merge for="account_number" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                Account Number
                                                            </label>
                                                            <input name="account_number" type="number" placeholder="ex: 4589654785412"   data-tw-merge class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label data-tw-merge for="ifsc" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                IFSC Code
                                                            </label>
                                                            <input name="ifsc" type="text" placeholder="ex: HDFC0001234"   data-tw-merge class="rounded-l-md  transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                        </div>
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label data-tw-merge for="branch" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                                                Branch Name
                                                            </label>
                                                            <input name="branch" type="text" placeholder="ex: Delhi"   data-tw-merge class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"/>
                                                        </div>
                                                    </div>


                                                </div>




                                                <div class="px-5 py-3 text-right border-t border-slate-400/60 dark:border-darkmode-400">
                                                    <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-slate-400 text-slate-400">
                                                        Cancel
                                                    </button>
                                                    <button data-tw-merge data-tw-dismiss="modal" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">Add Bank Account
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--select party modal ends here -->




                                    </div>



                                </div>

                            </div>
                        </div>



                        <div class="col-span-12 flex flex-col gap-y-7 xl:col-span-9">
                            <div class="box box--stacked flex flex-col p-1.5">
                                <div class="px-7 py-2">
                                    <div class=" grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-2">
                                        <div class="lg:col-span-3 md:col-span-2 col-span-1 mb-2 w-full inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 lg:border-r-[1px] md:border-r-[1px] border-r-[0px] lg:border-b-[0px] md:border-b-[0px] border-b-[1px] border-gray-200">
                                            <div class="text-left">
                                                <div class="flex items-center">
                                                    <div class="font-medium text-lg">Account Details</div>
                                                </div>
                                                <div class=" text-lg leading-relaxed text-primary font-bold mt-4 ">
                                                    <span class="font-normal text-md text-black">Account Number:</span> 0177-262-4611
                                                </div>

                                                <div class=" text-md leading-relaxed text-primary font-semibold mt-1 ">
                                                    <span class="font-normal text-sm text-black">Account Name:</span> Uco Bank
                                                </div>
                                                <div class=" text-md leading-relaxed text-primary font-semibold mt-1 ">
                                                    <span class="font-normal text-sm text-black">Account Holder's Name:</span> User Name
                                                </div>
                                                <div class=" text-md leading-relaxed text-primary font-semibold mt-1 ">
                                                    <span class="font-normal text-sm text-black">IFSC Code:</span> UCBA0001234
                                                </div>
                                                <div class=" text-md leading-relaxed text-primary font-semibold mt-1 ">
                                                    <span class="font-normal text-sm text-black">Branch Name:</span> Delhi
                                                </div>

                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-1 xl:mt-0 ">
                                            <div class="flex flex-col ">
                                                <button data-tw-merge
                                                        data-tw-toggle="modal" data-tw-target="#addBankAccount" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">
                                                    <i data-tw-merge="" data-lucide="pen-tool" class="stroke-[1] w-5 h-5  mr-2 "></i>
                                                    Update bank details
                                                </button>
                                            </div>
                                            <div class="flex flex-col ">
                                                <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">
                                                    <i data-tw-merge="" data-lucide="share-2" class="stroke-[1] w-5 h-5  mr-2 "></i>
                                                    Share bank details
                                                </button>

                                            </div>
                                            <div class="flex flex-col ">
                                                <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">
                                                    <i data-tw-merge="" data-lucide="download" class="stroke-[1] w-5 h-5  mr-2 "></i>
                                                    Download Statement
                                                </button>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box box--stacked flex flex-col p-5">
                                <div class="flex items-center">
                                    <div class="font-medium text-lg">Transactions</div>
                                </div>

{{--                                if no transaction found--}}
                                 <div class="hidden flex flex-col items-center">
                                     <i data-tw-merge="" data-lucide="repeat" class="stroke-[1] w-16 h-16 text-primary  mr-2"></i>
                                     <span  class=" text-lg leading-relaxed text-primary font-bold mt-4 ">
                                         No Transactions
                                     </span>
                                     <span  class=" text-sm leading-relaxed text-slate-500 font-semibold mt-1 ">
                                         Vouchers created with payment mode as Cheque/ Online will be displayed here
                                     </span>
                                 </div>

{{--                                if transactions found--}}
                                <div class="col-span-12">
                                    <div class="mt-3.5">
                                        <div class="box box--stacked flex flex-col">
                                            <div class="flex flex-col gap-y-2 p-5 sm:flex-row sm:items-center">
                                                <div>
                                                    <div class="relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3] text-slate-500"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                                        <input type="text" placeholder="Search transactions..." class="pl-[40px] rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overflow-auto xl:overflow-visible">
                                                <table class="w-full text-left border-[1px] border-slate-300 border-collapse">
                                                    <thead class="">
                                                    <tr class="">
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
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
