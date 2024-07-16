
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Accounting Software - Him Soft Solution') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('assets/dist/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/app.css')}}">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles


</head>
<body>


<div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher"
         class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
             class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
            <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
               data-tw-dismiss="modal" href="javascript:;">
                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-3 w-3 sm:h-8 sm:w-8"></i>
            </a>
            <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                <div class="flex flex-col">

                    <div class="px-8 pb-8 pt-6">
                        <div class="text-base font-medium">Color Schemes</div>
                        <div class="mt-0.5 text-slate-500">
                            Choose your color schemes
                        </div>
                        <div class="mt-5 grid grid-cols-2 gap-x-4 gap-y-3.5 sm:grid-cols-4">
                            <div>
                                <a data-theme-color="default"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 default"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 default"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-1"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-1"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-1"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-2"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-2"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-2"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-3"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-3"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-3"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-4"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-4"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-4"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-5"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-5"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-5"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-6"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-6"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-6"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-7"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-7"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-7"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-8"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-8"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-8"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-9"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-9"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-9"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-10"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-10"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-10"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-11"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-11"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-11"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-12"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-12"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-12"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-13"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-13"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-13"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-14"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-14"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-14"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-15"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-15"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-15"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-16"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-16"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-16"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a data-theme-color="theme-17"
                                   class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                    <div class="h-full overflow-hidden rounded-full">
                                        <div class="-mx-2 flex h-full items-center gap-1">
                                            <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-17"></div>
                                            <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-17"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg"
        data-tw-toggle="modal" data-tw-target="#theme-switcher">
        <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 animate-spin"></i>
    </div>
</div>

{{ $slot }}

<div class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
    <div class="relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20 after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0] before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]"></div>
    <div class="h-full col-span-7 2xl:col-span-8 lg:relative before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%] after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat">
        <div class="sticky top-0 z-10 flex-col justify-center hidden h-screen ml-16 lg:flex xl:ml-28 2xl:ml-36">
            <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
                Him Accounting: <br>Your Financial Nexus
            </div>
            <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
                Welcome to Him Accounting, your gateway to seamless financial management. Unlock the power of our accounting software designed to simplify your tasks and streamline your operations. Whether you're a small business owner, a freelancer, or a seasoned accountant, BalanceLink empowers you to effortlessly manage your finances with precision and ease. Log in now to experience the harmony of efficient accounting at your fingertips.
            </div>
            <div class="flex flex-col gap-3 mt-10 xl:flex-row xl:items-center">
                <div class="flex items-center">
                    <div class="image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                        <img data-placement="top" title="Meryl Streep" src="{{asset('assets/images/users/user1.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                    </div>
                    <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                        <img data-placement="top" title="Cate Blanchett" src="{{asset('assets/images/users/user2.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                    </div>
                    <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                        <img data-placement="top" title="Tom Hanks" src="{{asset('assets/images/users/user3.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                    </div>
                    <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                        <img data-placement="top" title="Angelina Jolie" src="{{asset('assets/images/users/user4.jpeg')}}" alt="Tailwise - Admin Dashboard Template" class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                    </div>
                </div>
                <div class="text-base text-white/70 xl:ml-2 2xl:ml-3">
                    Over 7k+ strong and growing! Your journey begins here.
                </div>
            </div>
        </div>
    </div>
</div>


@stack('modals')

@livewireScripts
<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/alert.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/tippy.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/lucide.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/tippy.js')}}"></script>
</body>

</html>
