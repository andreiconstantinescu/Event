@extends('main')

@section('title', '|Create New Event')

@section('createscripts')
  
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="{{ URL::asset('js/eventform.js') }}"></script>
   <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   <script>tinymce.init({  selector:'textarea', 
                           plugins: ["link lists",],                    
                          menubar: false   });</script> -->
    
    
    <link rel="stylesheet" href="{{ URL::asset('css/form-style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    

  
</head>

    
<body onload="getRandomColor();">
    
@endsection
    
@section('content')
    <div class="center">
  

<form id="create-form" method="post" action="{{ route('events.store') }}" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  
        
  <p>
      <input style="font-size:50px;" type="text" name="title" id="title" minlength="3" placeholder="Untitled" required></p>

  <p>
    <input type="text" name="location" id="location" placeholder="Where is it happening?" required>
  </p>
    
    <p>
    <input type="date" name="startdate" id="startdate" value="Start date" required></p>    
    
    <p>
    <input type="time" name="starttime" id="starttime" value="Start time" required></p> 
        
    <p>
    <input type="date" name="enddate" id="enddate" value="End date" required></p>    
    
    <p>
    <input type="time" name="endtime" id="endtime" value="End time" required></p> 
    
    <p>
    <input type="number" name="price" min="0" id="price" placeholder="Price" required>
    <select name="currency">    
      <option style="color:red;" value="RON">RON</option>
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="GBP">GBP</option>
        </select>
    </p>


    <p>
    <label for="category_id">Category</label>
    <select name="category_id"> 
    @foreach($categories as $category)   
      <option style="color:red;" value="{{$category->id}}">{{$category->name}}</option>
     @endforeach
        </select>
    </p>

    <p><input type="file" name="image" id="image"></p>
    
  <p>
    <label for="description">Add a description of the event</label></p>

  <p>
    <textarea name="description" id="description" placeholder="What can you tell us about your event?" class="expanding"></textarea>
  </p>
  <p>
    <button type="submit" >
      <svg version="1.1" class="send-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="36px" viewBox="0 0 100 36" enable-background="new 0 0 100 36" xml:space="preserve">
        <path d="M100,0L100,0 M23.8,7.1L100,0L40.9,36l-4.7-7.5L22,34.8l-4-11L0,30.5L16.4,8.7l5.4,15L23,7L23.8,7.1z M16.8,20.4l-1.5-4.3
	l-5.1,6.7L16.8,20.4z M34.4,25.4l-8.1-13.1L25,29.6L34.4,25.4z M35.2,13.2l8.1,13.1L70,9.9L35.2,13.2z" />
      </svg>    
      <small>send</small>
    </button>
  </p>
        
       <!-- <input type="hidden" name="_token" value="{{ Session::token() }}"> -->
</form>
    </div>
 
@endsection