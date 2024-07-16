    <x-guest-layout>
        <div class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
            <div class="relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0 before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5">


                <div class="relative z-10 flex flex-col justify-center w-full h-full py-2 lg:py-32">
                    <img class="h-[200px] w-[200px] mx-auto" src="{{asset('assets/images/appLogo.png')}}" alt="">

                    <form class="mt-10" method="POST" action="{{ route('register') }}" >
                        @csrf
                        <div class="text-2xl font-medium">Sign Up</div>
                        <div class="mt-2.5 text-slate-600">
                            Already have an account?
                            <a class="font-medium text-primary" href="{{route('login')}}">
                                Sign In
                            </a>
                        </div>
                        <x-validation-errors class="mb-4" />
                        <div class="mt-6">
                            <label data-tw-merge="" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right mt-4">
                                Company Name*
                            </label>
                            <input data-tw-merge="" name="name" type="text" placeholder="Enter company name....." class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">



                            <label data-tw-merge="" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right mt-4">
                                Email*
                            </label>
                            <input data-tw-merge="" name="email" type="text" placeholder="Enter your email address....." class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">


                            <label data-tw-merge="" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right mt-4">
                                Password*
                            </label>
                            <div class="relative">
                                <input data-tw-merge="" id="password" name="password" type="password" placeholder="************" class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                <i id="passwordIcon"  class="fa fa-eye-slash  stroke-[1] w-5 h-5 side-menu__link__icon absolute right-2 top-3 cursor-pointer"


                                   onclick="
                                        const password = document.getElementById('password');
                                        const passwordIcon = document.getElementById('passwordIcon');

                                        if (password.type === 'password') {
                                            password.type = 'text';
                                            passwordIcon.classList.remove('fa-eye-slash');
                                            passwordIcon.classList.add('fa-eye');
                                        } else {
                                            password.type = 'password';
                                            passwordIcon.classList.remove('fa-eye');
                                            passwordIcon.classList.add('fa-eye-slash');
                                        }
        "
                                ></i>
                            </div>







                            <label data-tw-merge="" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right mt-4">
                                Confirm Password*
                            </label>
                            <div class="relative">
                                <input data-tw-merge="" id="password_confirmation" name="password_confirmation" type="password" placeholder="************" class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0">
                                <i id="password_confirmation-icon"  class="fa fa-eye-slash  stroke-[1] w-5 h-5 side-menu__link__icon absolute right-2 top-3 cursor-pointer"


                                   onclick="
                                        const password = document.getElementById('password_confirmation');
                                        const passwordIcon = document.getElementById('password_confirmation-icon');

                                        if (password.type === 'password') {
                                            password.type = 'text';
                                            passwordIcon.classList.remove('fa-eye-slash');
                                            passwordIcon.classList.add('fa-eye');
                                        } else {
                                            password.type = 'password';
                                            passwordIcon.classList.remove('fa-eye');
                                            passwordIcon.classList.add('fa-eye-slash');
                                        }
        "
                                ></i>
                            </div>
                            <div class="mt-5 text-center xl:mt-8 xl:text-left">
                                <button data-tw-merge="" type="submit" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rounded-full w-full bg-gradient-to-r from-theme-1/70 to-theme-2/70 py-3.5 xl:mr-3">Sign Up</button>
                                <a href="{{route('login')}}" data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-primary text-primary dark:border-darkmode-100/40 rounded-full mt-3 w-full bg-white/70 py-3.5">Sign In</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-guest-layout>

