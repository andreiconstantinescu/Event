<!-- Header -->
			<header id="header">

				
				<!-- Logo -->
					<h1 id="logo"><a href="/">Big Picture</a></h1>


				<!-- Nav -->
					<nav id="nav">
							<form>
 					 		<input type="text" name="search" placeholder="Search..">
							</form>

					@if(Auth::check())
						<ul>
							<li><a href="/allevents">Events</a></li>
                            <li><a href="/events">My Events</a></li>
							<li><a href="{{ route('profile.show', Auth::user()->id) }}">Profile</a></li>
							<li><a href="/logout">Logout</a></li>
					<!--		<li><a href="/signup">Sign Up</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="#work">My Work</a></li>
							<li><a href="#contact">Contact</a></li>   -->
						</ul>

						@else

							<ul>
							<li><a href="/allevents">Events</a></li>
							<li><a href="/login">Authentication</a></li>
					<!--		<li><a href="/signup">Sign Up</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="#work">My Work</a></li>
							<li><a href="#contact">Contact</a></li>   -->
						</ul>
						@endif
					</nav>

			</header>