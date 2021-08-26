
<!--Navigation bar -->
<nav>
	<ul>
		<li><a href="#"><img src="../Nouveau test/Icons/Pi-logo2.png" class="navbar-logo"></a></li> <!--Logo cliquable-->				
		<div class="nav-hover"><li><a href="#"><img src="../Icons/heart-health.png" class="navbar-icons"></a></li></div> <!--Like-->
		<div class="nav-hover"><li><a href="#"><img src="../Icons/white-person-icon-people-white-icon-115533940829fbknk3dev.png" class="navbar-icons"></a></li></div> <!--Members-->
		<div class="nav-hover"><li><a href="#"><img src="../Icons/Message-PNG-Icon-715x657.png" class="navbar-icons"></a></li></div> <!--Messages-->
		
        <div class="nav-right">
            <div class="nav-hover">
                <li><div class="navbar-compte">
                    <a href="#"><img src="https://pbs.twimg.com/media/EpoPe7WXMAU6Fxk?format=jpg&name=4096x4096" class="navbar-pseudo">
                    <span>Archy</span></a>
                </li></div>
			</div>
		</div>

	</ul>
</nav>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
    @endauth
    </div>
@endif
