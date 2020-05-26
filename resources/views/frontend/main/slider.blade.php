@extends('frontend.main.app')
@section('content')
<div class="container">
  <div class="home-slider owl-carousel owl-theme">
    <div class="item">
      <img src="{{URL::to('/')}}/images/slider/hero-1.jpg">
      <div class="slider-content">
        <h2></h2>
        <p></p>
      </div>
    </div>
  </div>
  <h2 class="section-title">Currrent Publication</h2>
  <div class="row publication-grid">
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="...">
        <div class="caption text-center">
          <h3>Image</h3>
          <p><a href="#" class="btn btn-warning" role="button" id="color">View</a> <a href="#" class="btn btn-default" role="button">Order</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="...">
        <div class="caption text-center">
          <h3>Image</h3>
          <p>
          <a href="#" class="btn btn-warning" role="button" id="color">View</a> <a href="#" class="btn btn-default" role="button">Order</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h2 class="section-title"> Publicity/Advertising site</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
    </div>
  </div>
  <h2 class="section-title">Latest news</h2>
  <div class="row publication-grid">
    <div class="col-md-8">
      <a href="" class="publication">
        <div class="col-xs-5 col-sm-5 pub-image">
         <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
        </div>
        <div class="col-xs-7 col-sm-7 pub-detail">
         <h4 class="pub-title">title</h4>
         <p class="pub-summary">
         </p>
         <p><b>ID</b> : News</p>
         <p class="read-more">Read More</p>
        </div>
      </a>
    </div>
    <div class="col-md-4">
      <h2 class="section-title"> Subscribers</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
    </div>
  </div>
  <div class="row publication-grid">
    <div class="col-md-8">
      <a href="" class="publication">
        <div class="col-xs-5 col-sm-5 pub-image">
         <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
        </div>
        <div class="col-xs-7 col-sm-7 pub-detail">
         <h4 class="pub-title">title</h4>
         <p class="pub-summary">
         </p>
         <p><b>ID</b> : News</p>
         <p class="read-more">Read More</p>
        </div>
      </a>
    </div>
    <div class="col-md-4">
    </div>
  </div>
  <div class="row publication-padding">
    <h2 class="section-title text-center"> Our Partners</h2>
    <div class="col-md-4">
      <div class="home-slider owl-carousel owl-theme">
        <div class="item">
          <img src="{{URL::to('/')}}/images/slider/hero-1.jpg">
          <div class="slider-content">
            <h2></h2>
            <p></p>
          </div>
        </div>
        <div class="item">
          <img src="{{URL::to('/')}}/images/slider/hero-1.jpg">
          <div class="slider-content">
            <h2></h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="home-slider owl-carousel owl-theme">
        <div class="item">
          <img src="{{URL::to('/')}}/images/slider/hero-1.jpg">
          <div class="slider-content">
            <h2></h2>
            <p></p>
          </div>
        </div>
        <div class="item">
          <img src="{{URL::to('/')}}/images/slider/hero-1.jpg">
          <div class="slider-content">
            <h2></h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
        <h2 class="section-title text-center"> Important links</h2>
        </div>
        <div class="panel-body">
          <ul class="list-inline">
            <li class="list-inline-item my-auto" >
              <a href="$social->facebook}}" target="_blank" title="Share on Facebook" class=" link facebook text-center">
                <i class="fa fa-facebook main-spin"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="$social->twitter}}" target="_blank" title="Share on Twitter" class="link twitter text-center">
                <i class="fa fa-twitter main-spin" ></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="$social->linkedin}}" target="_blank" class="link linkedin text-center">
                <i class="fa fa-linkedin main-spin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection