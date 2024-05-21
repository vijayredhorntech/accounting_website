<x-guest-layout>
    <div class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
        <div class="relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0 before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5">
            <div class="relative z-10 flex flex-col justify-center w-full h-full py-2 lg:py-32">
                <img class="h-[200px] w-[200px] mx-auto" src="{{asset('assets/images/appLogo.png')}}" alt="">
                <form class="mt-10" method="POST" action="{{ route('login') }}" >
                    @csrf
                    <div class="text-2xl font-medium">Sign In</div>
                    <div class="mt-2.5 text-slate-600">
                        Don't have an account?
                        <a class="font-medium text-primary" href="{{route('register')}}">
                            Sign Up
                        </a>
                    </div>
                    <x-validation-errors class="mb-4" />
                    <div class="mt-6">
                        <label data-tw-merge="" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Email*
                        </label>
                        <input data-tw-merge="" name="email" type="text" placeholder="meryl.streep@left4code.com" class="rounded-tl-md rounded-br-md transition duration-200 ease-in-out w-full text-sm border-slate-300 focus:border-slate-400 shadow-sm  placeholder:text-slate-400/90 focus:ring-0 focus:ring-opacity-0"
                        >
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



                        <div class="flex mt-4 text-xs text-slate-500 sm:text-sm">
                            <div class="flex items-center mr-auto">
                                <input data-tw-merge="" name="remember" type="checkbox" class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 mr-2.5 border" id="remember-me">
                                <label class="cursor-pointer select-none" for="remember-me">
                                    Remember me
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{route('password.request')}}">Forgot Password?</a>
                            @endif
                        </div>
                        <div class="mt-5 text-center xl:mt-8 xl:text-left">
                            <button data-tw-merge="" type="submit" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rounded-full w-full bg-gradient-to-r from-theme-1/70 to-theme-2/70 py-3.5 xl:mr-3">Sign In</button>
                            <a href="{{route('register')}}" data-tw-merge="" class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-primary text-primary dark:border-darkmode-100/40 rounded-full mt-3 w-full bg-white/70 py-3.5">Sign Up</a>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</x-guest-layout>
