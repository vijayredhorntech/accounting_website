<x-app-layout>
    <div class="mt-16 px-5">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                <div class="col-span-12">
                    <div class="box box--stacked flex flex-col p-1.5">
                        <div class="relative h-48 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                            <div class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]"></div>
                            <div class="absolute inset-x-0 top-0 mx-auto mt-24 h-32 w-32">
                                <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                                    <img src="{{asset('assets/images/appLogo.png')}}" alt="User Profile Logo">
                                </div>
                                <div class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                                </div>

                                <input type="file" class="absolute top-0 left-0 opacity-0 h-full w-full cursor-pointer">
                            </div>
                        </div>
                        <div class="rounded-[0.6rem] bg-slate-50 pb-6 pt-12">
                            <div class="flex items-center justify-center text-xl font-medium">
                                {{auth()->user()->name}}
                                <i data-tw-merge="" data-lucide="badge-check" class="stroke-[1] w-5 h-5 ml-2 fill-blue-500/30 text-blue-500"></i>

                            </div>

                            <div class="mt-2.5 flex flex-col items-center justify-center gap-x-5 gap-y-2 sm:flex-row">
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="mail" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    {{auth()->user()->email}}
                                </div>
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="signal" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    +91 0123456789
                                </div>
                                <div class="flex items-center text-slate-500">
                                    <i data-tw-merge="" data-lucide="mountain-snow" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                    <a href="#">Shimla, Himachal Pradesh</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="flex flex-col gap-y-3 2xl:flex-row 2xl:items-center">
                            <ul data-tw-merge="" role="tablist" class="p-0.5 border dark:border-darkmode-400 w-full flex box mr-auto flex-col rounded-[0.6rem] border-slate-200 bg-white sm:flex-row 2xl:w-auto">
                                <li id="profile_info-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#profile_info" role="tab" class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Profile Info
                                    </button>
                                </li>
                                <li id="security-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#security" role="tab" class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Security
                                    </button>
                                </li>
                                <li id="account_deactivate-tab" data-tw-merge="" role="presentation" class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                    <button data-tw-merge="" data-tw-target="#account_deactivate" role="tab" class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 flex w-full items-center justify-center whitespace-nowrap rounded-[0.6rem] py-2.5 text-[0.94rem] text-slate-500 xl:w-40">
                                        Account Deactivation
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="profile_info" role="tabpanel" aria-labelledby="profile_info-tab" class="tab-pane active">
                                <div class="box box--stacked flex flex-col p-5 mt-3">
                                    <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                        Profile Info
                                    </div>
                                    <div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Full Name</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input type="text" placeholder="Johnny" class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                    <input type="text" placeholder="Depp" class="rounded-r-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Date of Birth</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input type="date" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Gender</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div class="flex items-center"><input type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-1" value="">
                                                            <label for="checkbox-switch-1" class="cursor-pointer ml-2">Male</label>
                                                        </div>
                                                    </div>
                                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div class="flex items-center"><input type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-2" value="">
                                                            <label for="checkbox-switch-2" class="cursor-pointer ml-2">Female</label>
                                                        </div>
                                                    </div>
                                                    <div class="w-full rounded-md border border-slate-300/60 bg-white px-3 py-2 shadow-sm first:rounded-b-none last:-mt-px last:rounded-t-none focus:z-10 first:md:rounded-r-none first:md:rounded-bl-md last:md:-ml-px last:md:mt-0 last:md:rounded-l-none last:md:rounded-tr-md [&amp;:not(:first-child):not(:last-child)]:-mt-px [&amp;:not(:first-child):not(:last-child)]:rounded-none [&amp;:not(:first-child):not(:last-child)]:md:-ml-px [&amp;:not(:first-child):not(:last-child)]:md:mt-0">
                                                        <div class="flex items-center"><input type="radio" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-3" value="">
                                                            <label for="checkbox-switch-3" class="cursor-pointer ml-2">Prefer Not to Say</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Email</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input type="text" placeholder="email address" value="{{auth()->user()->email}}" disabled class=" rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Phone Number</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input type="text" placeholder="+91 0123456789" class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                    <select class="rounded-r-md w-[200px] transition duration-200 ease-in-out text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                        <option value="office">Office</option>
                                                        <option value="home">Home</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Address Line 1</div>

                                                    </div>
                                                    <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                                                        Enter the primary line of your physical address,
                                                        typically including your house or building number and
                                                        street name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <textarea placeholder="Address" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">City</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input type="text" placeholder="Shimla" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">State / Province</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input type="text" placeholder="Himachal Pradesh" class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Zip / Postal Code</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <input type="number" placeholder="171002" class="rounded-l-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="security" role="tabpanel" aria-labelledby="security-tab" class="tab-pane">
                                <div class="box box--stacked flex flex-col p-5 mt-3">
                                    <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                        Security Info
                                    </div>
                                    <div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Current Password</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input type="password" placeholder="Enter your current password" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">New Password</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input type="password" placeholder="Enter your new password" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                                            <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Confirm New Password</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-full flex-1 xl:mt-0">
                                                <div class="flex flex-col items-center md:flex-row">
                                                    <input type="password" placeholder="Confirm your new password" class="rounded-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">Save Changes</button>
                                    </div>
                                </div>

                            </div>
                            <div data-transition="" data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="account_deactivate" role="tabpanel" aria-labelledby="account_deactivate-tab" class="tab-pane">
                                <div class="box box--stacked flex flex-col p-5 mt-3">
                                    <div class="mb-6 flex items-center border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
                                        Account Deactivation
                                    </div>
                                    <div>
                                        <div class="leading-relaxed">
                                            When you initiate the account deletion process, you'll no
                                            longer have access to Front account services, and your
                                            personal data will be permanently removed. You have a 10-day
                                            window to cancel the deletion if needed.
                                        </div>
                                        <div class="flex items-center mt-5"><input type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary [&amp;[type='radio']]:checked:border-primary [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary [&amp;[type='checkbox']]:checked:border-primary [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50" id="checkbox-switch-1" value="">
                                            <label for="checkbox-switch-1" class="cursor-pointer ml-2">Confirm that I want to delete my account.</label>
                                        </div>
                                    </div>
                                    <div class="mt-6 flex flex-col-reverse gap-3 border-t border-dashed border-slate-300/70 pt-5 md:flex-row md:justify-end">
                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-gray-400 text-gray-400">Learn More</button>
                                        <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-0 focus:ring-opacity-0 focus-visible:outline-none text-xs py-1.5 px-4 border-primary text-primary">Delete</button>
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
