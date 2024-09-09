<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    body {
        overflow-y: hidden;
    }
</style>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="hfj login">
    <meta name="keywords" content="hfj login">
    <meta name="author" content="Hamad Fauzi Jessar">
    <title>@yield('title', 'Login Admin')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    @yield('style')
    <!-- END: CSS Assets-->
    @vite('resources/css/app.css')
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen"
                style="
                        background-image: url(../assets/images/test.svg);
                        background-repeat: no-repeat;
                        background-size: auto 100%;
                        z-index: 9999;
                        background-position: 100%;
                        transform: translate(-10%,0);
                    ">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6 ml-6"
                        src={{ asset('assets/images/logo_a.svg') }}>
                    <span class="text-white text-lg ml-3"> Ad<span class="font-medium">Visor</span> </span>
                </a>
                <div class="flex flex-col h-[80%] justify-end">
                    {{-- <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src={{asset("assets/images/illustration.svg")}}> --}}
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10 ml-6">
                        Advertising and Finance
                        <br>
                        System Solution
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500 ml-6"><br></div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <p class="text-[17px] text-center xl:text-left">Welcome back! 👋</p>
                    <h2 class="intro-x font-bold text-2xl xl:text-[26px] text-center xl:text-left">
                        Login to your account
                    </h2>
                    {{-- <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div> --}}
                    <form id="formLogin" onsubmit="return false;" class="form search-insight">
                        <div class="intro-x mt-8">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col">
                                    <p class="text-sm text-[#333333] font-bold">Email</p>
                                        <input value="tes1@gmail.com" id="email" type="text"
                                        class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-1"
                                        placeholder="Please enter your email">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-sm text-[#333333] font-bold">Password</p>
                                    {{-- <input id="password" type="password"
                                        class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
                                        value="password" placeholder="Enter password"> --}}
                                        <div class="mt-1 relative">
                                            <input value="password" id="password" type="password" class="block w-full px-3 py-2 border border-gray-300 form-control" placeholder="Enter password">
                                            <i id="toggle-icon" data-feather="eye-off" class="absolute inset-y-0 right-0 flex items-center mt-1.5 mr-3 pt-1 pb-1 cursor-pointer" onclick="togglePassword()"></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-full xl:mr-3 align-top"
                                id="login-button">Login</button>
                            {{-- <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</button> --}}
                        </div>
                    </form>
                    <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                        {{-- <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div> --}}
                        <a href="" class="text-[#0066FF] text-sm">Forgot Password?</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.getElementById('toggle-icon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.setAttribute('data-feather', 'eye');
            } else {
                passwordField.type = 'password';
                icon.setAttribute('data-feather', 'eye-off');
            }

            // Re-render feather icons
            feather.replace();
        }

        // Initialize feather icons
        feather.replace();

        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $(document).on("submit", "#formLogin", async function(e) {

            const email = $('#email').val();
            const password = $('#password').val();
            const token = $('meta[name="csrf-token"]').attr('content');

            try {
                const response = await $.ajax({
                    url: '/api/login',
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: JSON.stringify({
                        email: email,
                        password: password
                    })
                });

                if (response.token) {
                    await setItem('auth-token', response.token);
                    console.log(response.token);
                    window.location.href = response.redirect_url || '/media/plan';
                } else {
                    alert('Login failed. Please check your credentials.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        })

        // $('#login-button').on('click', async function() {

        // });

        // Helper function to wrap localStorage.setItem in a promise
        function setItem(key, value) {
            return new Promise((resolve) => {
                localStorage.setItem(key, value);
                resolve();
            });
        }
    </script>
    <!-- END: JS Assets-->
</body>

</html>
