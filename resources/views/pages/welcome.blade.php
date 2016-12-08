@extends('main')

@section('title', '|Homepage')

@section('welcomescripts')
	<link rel="stylesheet" href="{{ URL::asset('css/style-welcome-buttons.css') }}">
	
	<link href="{{ URL::asset('css/jquery.fancybox.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}" type="text/css">
	<link href="{{ URL::asset('css/queries.css?v=1.6') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/styles.css?v=1.6') }}" rel="stylesheet">

	<script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
	<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.smooth-scroll.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/jquery.fancybox.pack.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/scripts.js?v=1.7') }}"></script>
    <script src="{{ URL::asset('js/jquery.flexslider.js') }}"></script>

</head>
	<body>

@endsection

@section('content')
			
		<!-- Intro -->    
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>Hey.</h2>
					</header>
					<p>Welcome to <strong>Big Picture</strong> a responsive site template designed
					by <a href="http://html5up.net">HTML5 UP</a>, built on <a href="http://skeljs.org">skelJS</a>,
					and released for free under the <a href="http://html5up.net/license/">Creative Commons Attribution 3.0 license</a>.</p>
					<footer>
                       <a href="{{ route('events.create') }}" class="action-button shadow animate yellow">Create your event</a>
						<!--<a href="#one" class="button style2 down">More</a>-->
					</footer>
				</div>
                <a href="#one" class="button style2 down anchored">More</a>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>What I Do</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, 
					id varius justo euismod in. Curabitur egestas consectetur magna urna.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Who I Am</h2>
					</header>
					<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu, 
					id varius justo euismod in. Curabitur egestas consectetur magna urna.</p>
				</div>
				<a href="#media" class="button style2 down anchored">Next</a>
			</section>
        
        <!--Comments-->
        <section class="testimonials" id="media">
			<div class="container">
			  <div class="row">
				<div class="col-md-12 text-center">
				  <div id="firstSlider">
					<ul class="slides">
					  <li>
						<div class="avatar"><img src="images/av-blaz.png" alt="Blaz Robar"></div>
						<h1>I couldnt possibly use my own eyes to look at the stars, thansk Starnught App.</h1>
					  </li>
					  <li>
						<div class="avatar"><img src="images/av-pete.png" alt="Pete Finlan"></div>
						<h1>Staring at the stars has given me feels like never before.</h1>
					  </li>
					  <li>
						<div class="avatar"><img src="images/av-doge.png" alt="Doge Finbar"></div>
						<h1>Much flat, many design, so app. Wow.</h1>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>
		  </section>
			
		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>My Work</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum. 
						Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis 
						arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae urna.</p>
					</header>
					
					<!--
						 Lightbox Gallery
						 
						 Powered by poptrox. Full docs here: https://github.com/n33/jquery.poptrox
					-->
						<div class="container small gallery">
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image full l"><img src="images/thumbs/01.jpg" title="The Anonymous Red" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image full r"><img src="images/thumbs/02.jpg" title="Airchitecture II" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image full l"><img src="images/thumbs/03.jpg" title="Air Lounge" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image full r"><img src="images/thumbs/04.jpg" title="Carry on" alt="" /></a></div>
							</div>
							<div class="row flush images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image full l"><img src="images/thumbs/05.jpg" title="The sparkling shell" alt="" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image full r"><img src="images/thumbs/06.jpg" title="Bent IX" alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Say Hello.</h2>
						<p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
					</header>
					<div class="box container small">
					
						<!--
							 Contact Form
							 
							 To get this working, place a script on your server to receive the form data, then
							 point the "action" attribute to it (eg. action="http://mydomain.tld/mail.php").
							 More on how it all works here: http://www.1stwebdesigner.com/tutorials/custom-php-contact-forms/
						-->
							<form method="post" action="{{ url(' ')}}">
								{{csrf_field() }}
								<div class="row half">
								
									<div class="6u">
									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input type="text" name="email" placeholder="Email" /></div>
										@if ($errors->has('email'))
                                    	<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    	</span>
                               			 @endif
									</div>

									
									<div class="6u">
									<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
									<input type="text" name="subject" placeholder="Subject: " /></div>
										@if ($errors->has('subject'))
                                    	<span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    	</span>
                               			 @endif

									</div>
								</div>

								<div class="row half">
								
									<div class="12u">
									<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
									<textarea name="message" placeholder="Message" rows="6"></textarea></div>
										@if ($errors->has('Message'))
                                    	<span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    	</span>
                               			 @endif
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">
			
				<!--
				     Social Icons
				     
				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<li><a href="#" class="fa solo fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa solo fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa solo fa-google-plus"><span>Google+</span></a></li>
						<li><a href="#" class="fa solo fa-dribbble"><span>Dribbble</span></a></li>
						<li><a href="#" class="fa solo fa-pinterest"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa solo fa-instagram"><span>Instagram</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
					</ul>
			
			</footer>

@endsection	