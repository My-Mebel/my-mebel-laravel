<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
</head>

<body>
    @vite('resources/css/app.css')
    <div
        class="flex flex-col-reverse items-center md:items-stretch md:flex-row gap-8 text-sm md:text-base min-h-screen md:min-h-0 p-6 md:p-0">
        <div class="flex flex-col flex-1 items-center md:min-h-screen p-0 md:p-8 md:pr-0 w-full">
            <div class="flex flex-1 flex-col gap-6 md:gap-12 max-w-sm w-full md:justify-center">
                <div class="flex flex-col gap-4 md:gap-7 w-full">
                    <h1 class="font-semibold text-2xl md:text-4xl text-primary-300">Welcome Back 👋</h1>
                    <p class="whitespace-pre-line text-secondary">Today is a new day. It's your day. You shape it.
                        Sign in to start managing your projects.
                    </p>
                </div>
                <form id="loginForm" class="flex flex-col gap-4 md:gap-6" method="post" action="javascript:;">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email"
                            class="border border-typo-inline rounded-xl appearance-none bg-typo-surface px-4 py-2" />
                        <p id="login-email" class="hidden"></p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="border border-typo-inline rounded-xl appearance-none bg-typo-surface px-4 py-2" />
                        <p id="login-password" class="hidden"></p>
                    </div>
                    <p class="text-right text-link"><a href="{{ url('user/forgot-password') }}">Forgot Password?</a></p>
                    <button class="bg-teal-900 rounded-md text-white py-2.5 md:py-3">Sign In</button>
                    <p class="text-center text-primary-100">Don't have an account? <span class="text-link">Sign up<span>
                    </p>
                </form>
            </div>
            <p class="mt-auto text-typo-disabled text-center">© 2024 ALL RIGHTS RESERVED</p>
        </div>
        <div class="md:flex-1 max-w-sm md:max-w-none md:p-8 md:pl-0"><img src="{{ asset('images/login-hero.png') }}"
                alt="hero" class="rounded-2xl h-full w-full object-cover object-left"></div>
    </div>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    <!-- Modernizr-JS -->
    <script type="text/javascript" src="{{ url('front/js/vendor/modernizr-custom.min.js') }}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ url('front/js/nprogress.min.js') }}"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="{{ url('front/js/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ url('front/js/bootstrap.min.js') }}"></script>
    <!-- Popper -->
    <script type="text/javascript" src="{{ url('front/js/popper.min.js') }}"></script>
    <!-- ScrollUp -->
    <script type="text/javascript" src="{{ url('front/js/jquery.scrollUp.min.js') }}"></script>
    <!-- Elevate Zoom -->
    <script type="text/javascript" src="{{ url('front/js/jquery.elevatezoom.min.js') }}"></script>
    <!-- jquery-ui-range-slider -->
    <script type="text/javascript" src="{{ url('front/js/jquery-ui.range-slider.min.js') }}"></script>
    <!-- jQuery Slim-Scroll -->
    <script type="text/javascript" src="{{ url('front/js/jquery.slimscroll.min.js') }}"></script>
    <!-- jQuery Resize-Select -->
    <script type="text/javascript" src="{{ url('front/js/jquery.resize-select.min.js') }}"></script>
    <!-- jQuery Custom Mega Menu -->
    <script type="text/javascript" src="{{ url('front/js/jquery.custom-megamenu.min.js') }}"></script>
    <!-- jQuery Countdown -->
    <script type="text/javascript" src="{{ url('front/js/jquery.custom-countdown.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ url('front/js/owl.carousel.min.js') }}"></script>
    <!-- Main -->
    <script type="text/javascript" src="{{ url('front/js/app.js') }}"></script>

    <!-- Our front/js/custom.js file -->
    <script type="text/javascript" src="{{ url('front/js/custom.js') }}"></script>

    {{-- To enable us to write PHP code within JavaScript code (to operate the Dynamic Filters dynamically (the second way)) --}}
    @include('front.layout.scripts') {{-- scripts.blade.php --}}
</body>

</html>
