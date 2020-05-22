@extends('frontend.app')
@section('content')
  <div class="container">
    
    <div class="content-wrapper">
    <div class="row">
        @foreach($main_datas as $main)
        <!-- {{$main->video_enc}} -->
        <div class="col-xs-12 col-sm-6 col-md-4 margin-top-20">
          <div class="thumbnail">
          <video width="100%" height="240" controls>
          <source src="{{URL::to('/')}}/images/video/{{$main->video_enc}}" type="video/mp4">
          <!-- Sorry, your browser doesn't support the video element. -->
        </video>
      </div>
        </div>
        @endforeach
    </div>
        
      </div><!-- End row -->
  </div>
  
  @endsection