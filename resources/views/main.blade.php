<!DOCTYPE HTML>
<html>
    
@include('partials._head')
        
        @yield('welcomescripts')
        
        @yield('createscripts')
    
        @yield('showscripts')
        
        @yield('indexscripts')

        @yield('authscripts')

        @yield('profilescripts')
  
        
		@include('partials._header')
		
		@include('partials._messages')
    	
    	
		@yield('content')

	</body>
</html>