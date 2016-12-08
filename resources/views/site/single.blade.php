@extends('main')
<?php $titleTag = htmlspecialchars($event->title); ?>
@section('title', '|$titleTag')

@section('showscripts')
        <link rel="stylesheet" href="{{ URL::asset('css/style-welcome-buttons.css') }}">
        <link href="{{ URL::asset('css/style-index.css') }}" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        </script>
        <!----webfonts---->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script src="{{URL::asset('js/jquery.min (2).js') }}"></script>

</head>

<body>

@endsection
    
@section('content')

<div class="content">
            <div class="wrap">
            <div class="single-page">
                            <div class="single-page-artical">
                                <div class="artical-content">
                                 
                                    <img src="/images/single-post-pic.jpg" title="banner1">
                                    <h3>{{$event->title}}</h3>
                                    <small><b>Category:</b>{{$event->category->name}}</small>
                                    <p><b>Location: </b> {{$event->location}}</p> 
                                    <p class="para1"><b>Date: </b> {{date('M j, Y',strtotime($event->startdate)) }} {{$event->starttime}} - {{date('M j, Y',strtotime($event->enddate)) }} {{$event->endtime}}</p> 
                                    <p class="para2">{{$event->description}}</p>
                                     <p><b>Price:</b>{{$event->price}} {{$event->currency}}</p>

                                   
                                     @if(Auth::check())
                                     <input type="submit" class="action-button shadow animate yellow" value="Are you going?">
                                     @endif 
                               <!--      <a href="#" class="action-button shadow animate yellow">Are you going?</a> -->
                                  
                                    </div>
                                    
                                 <div class="clear"> </div>
                            </div>
                            <!--start-comments-section-->


                            <div class="comment-section">
                <div class="grids_of_2">
                    <h2>Comments</h2>
                    <div class="grid1_of_2">
                        <div class="grid_img">
                            <a href=""><img src="/images/pic10.jpg" alt=""></a>
                        </div>
                        <div class="grid_text">
                            <h4 class="style1 list"><a href="#">Uku Mason</a></h4>
                            <h3 class="style">march 2, 2013 - 12.50 AM</h3>
                            <p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                            <a href="" class="btn1">Click to Reply</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="grid1_of_2 left">
                        <div class="grid_img">
                            <a href=""><img src="/images/pic10.jpg" alt=""></a>
                        </div>
                        <div class="grid_text">
                            <h4 class="style1 list"><a href="#">Designer First</a></h4>
                            <h3 class="style">march 3, 2013 - 4.00 PM</h3>
                            <p class="para top"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                            <a href="" class="btn1">Click to Reply</a>
                        </div>
                        <div class="clear"></div>
                    </div>    
                              @if(Auth::check())               
                        <div class="artical-commentbox">
                            <h2>Leave a Comment</h2>
                            <div class="table-form">
                                <form method="post" action="{{ route('comments.store', $event->id) }}" name="comment">
                                    <div>
                                        <label>Your Comment<span>*</span></label>
                                        <textarea> </textarea>  
                                    </div>
                                </form>
                                <input type="submit" value="submit">
                                    
                            </div>
                            <div class="clear"> </div>
                            @endif
                        </div>          
                    </div>
            </div>
                            <!---//End-comments-section--->
                        </div>
                         </div>
        </div>
        <!----start-footer--->
        <div class="footer">
            <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        <!----//End-footer--->
        <!---//End-wrap---->

    
@endsection