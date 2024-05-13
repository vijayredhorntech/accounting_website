
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

    <!-- font awesom link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="{{asset('assets/dist/css/vendors/litepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/vendors/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/themes/echo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/app.css')}}">
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
                    <div class="border-b border-dashed"></div>
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


<div class="echo group bg-gradient-to-b from-slate-200/70 to-slate-50 background relative min-h-screen before:content-[''] before:h-[370px] before:w-screen before:bg-gradient-to-t before:from-theme-1/80 before:to-theme-2 [&.background--hidden]:before:opacity-0 before:transition-[opacity,height] before:ease-in-out before:duration-300 before:top-0 before:fixed after:content-[''] after:h-[370px] after:w-screen [&.background--hidden]:after:opacity-0 after:transition-[opacity,height] after:ease-in-out after:duration-300 after:top-0 after:fixed after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-13rem] after:bg-no-repeat">
    <div class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
        @livewire('navigation-menu')
        <div class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode content--compact xl:ml-[275px] mode--light [&.content--compact]:xl:ml-[91px]">
            {{ $slot }}
        </div>


    </div>
</div>


@stack('modals')

@livewireScripts
<!-- BEGIN: Vendor JS Assets-->
<script src="{{asset('assets/dist/js/vendors/dom.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/tailwind-merge.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/lucide.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/dayjs.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/litepicker.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/tiny-slider.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/popper.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/dropdown.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/tippy.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/simplebar.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/transition.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/chartjs.js')}}"></script>
<script src="{{asset('assets/dist/js/vendors/modal.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/theme-color.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/lucide.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/litepicker.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/tiny-slider.js')}}"></script>
<script src="{{asset('assets/dist/js/utils/colors.js')}}"></script>
<script src="{{asset('assets/dist/js/utils/helper.js')}}"></script>
<script src="{{asset('assets/dist/js/components/report-line-chart.js')}}"></script>
<script src="{{asset('assets/dist/js/components/report-donut-chart-3.js')}}"></script>
<script src="{{asset('assets/dist/js/components/base/tippy.js')}}"></script>
<script src="{{asset('assets/dist/js/themes/echo.js')}}"></script>
<script src="{{asset('assets/dist/js/components/quick-search.js')}}"></script>
</body>

</html>
