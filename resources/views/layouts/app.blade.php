<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PageBleu - Directory of your Employees</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="body_myphone">
        <div class="">

            <!-- Page Heading -->
            <header class="header_myphone">
                <nav class="">
                <ul>
				    <div class="nav-hover"><li><a href="/">Home</a></li></div> 
				    <div class="nav-hover"><li><a href="/employees">Employees</a></li></div> 
				    <div class="nav-hover"><li><a href="/company">Company</a></li></div> 
                        <div class="nav-hover"><li><a href="/employees/register">Add employee</a></li></div>
                        <div class="nav-hover"><li><a href="/employees/list">List employee</a></li></div> 
                        <div class="nav-hover"><li><a href="/company/register">Add company</a></li></div> 
                        <div class="nav-hover"><li><a href="/company/list">List company</a></li></div>  
				    <div class="nav-right">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <form method="POST" action="{{ route('logout') }}" class="text-sm text-gray-700 underline">
                                    @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log out') }}
                                        </x-dropdown-link>
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif
                            @endauth
                            </div>
                        @endif

			    	</div>
			    </ul>
                </nav>
            </header>

            <!-- Page Content -->
            <main class="main_myphone">
                @yield('content')
            </main>
        </div>
    </body>
</html>
