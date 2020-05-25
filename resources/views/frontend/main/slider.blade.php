@extends('frontend.main.app')
@section('content')
  <div class="container">
    <div id="carousel-example-generic" class="carousel slide padding" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="{{URL::to('/')}}/images/slider/slide_1.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        ...
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <h2 class="section-title">Currrent Publication</h2>
    <div class="row publication-grid">
      <div class="col-md-4">
       <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
      </div>
      <div class="col-md-4">
       <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
      </div>
      <div class="col-md-4">
      <h2 class="section-title"> Publicity/Advertising site</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
      </div>
    </div>
    <h2 class="section-title">Latest news</h2>
    <div class="row publication-grid">
      <div class="col-md-4">
       <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
      </div>
      <div class="col-md-4">
        <h4 class="pub-title">book </h4>
        <button class="btn btn-warning">Read more</button>
      </div>
      <div class="col-md-4">
      <h2 class="section-title"> Subscribers</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
      </div>
    </div>
    <div class="row publication-grid">
      <div class="col-md-4">
       <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
      </div>
      <div class="col-md-4">
        <h4 class="pub-title">book </h4>
        <button class="btn btn-warning">Read more</button>
      </div>
      <div class="col-md-4">
      
      </div>
    </div>
    <div class="row publication-padding">
      <div class="col-md-8">
      <h2 class="section-title text-center"> Our partners</h2>
      </div>
      <div class="col-md-4">
      <h2 class="section-title text-center"> Important links</h2>
      <p></p>
      </div>
    </div>
  </div>
@endsection