@extends('main')

@section('title', '|Show Events')

@section('profilescripts')

<link href="css/style-profile.css" rel='stylesheet' type='text/css' />

</head>
<body>
@endsection

@section('content')

	@if($profile->isEmpty() === true)

	<p> We don't have any information about up. Would you like to update ur profile?</p>

		 <a href="{{ route('profile.edit', $profile->user_id) }}" class="action-button shadow animate yellow">Update your profile</a>

		 @else
<figure class="snip0057 red">
  <figcaption>
    <h2>{{$profile->firstname}} <span>{{$profile->lastname}}</span></h2>
    <p>{{$profile->bio}}</p>
    <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
  </figcaption>

  @if(!$profile->profilepic)
  <div class="image"><img src="\images\unknown-user.png">
  @else
  <div class="image"><img src="{{asset('images/' . $profile->profilepic)}}" alt="sample4"/></div>
  @endif
  <a style="margin-top: 20px;" href="{{ route('profile.edit', $profile->user_id) }}">Edit</a>
</figure>
		@endif
@endsection