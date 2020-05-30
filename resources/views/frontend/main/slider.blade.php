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
  <div class="row">
    <div class="col-md-8">
      <h2 class="section-title">Currrent Publication</h2>
      <div class="row publicationblock-grid">
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="..."  class="publicationimage img-responsive">
            <div class="row">
              <div class="col-sm-6 pr-0">
                <button type="button" class="btn b-radius-0 btn-block btn-info">Info</button>
              </div>
              <div class="col-sm-6 pl-0">
                <button type="button" class="btn b-radius-0 btn-block btn-warning">Warning</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="..." class="publicationimage img-responsive">
              <div class="col-sm-6 viewdiv">
                <a href="#" class="btn btncssofview btn-warning btn-block" role="button" id="btncssofview">View</a>
              </div>
              <div class="col-sm-6 orderdiv">
                <a href="#" class="btn btncssorder btn-default btn-block" role="button" id="color">Order</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" alt="..." class="publicationimage img-responsive">
              <div class="col-sm-6 viewdiv">
                <a href="#" class="btn btncssofview btn-warning btn-block" role="button" id="btncssofview">View</a>
              </div>
              <div class="col-sm-6 orderdiv">
                <a href="#" class="btn btncssorder btn-default btn-block" role="button" id="color">Order</a>
              </div>
          </div>
        </div>
      </div>
      <h2 class="section-title">Latest news</h2>
      <div class="row publication-grid">
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/covid.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Rwanda, DR Congo agree to reopen border amid Covid-19</h4>
             <p class="pub-summary">
              Senior Rwandan officials and their counterparts from the Democratic Republic of the Congo (RDC), on Thursday, May 27 agreed on a set of mechanisms to revive cross-border trade despite the Covid-19 outbreak. The senior officials met in Rubavu District at La Corniche One Stop Border Post a...
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
        
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/1news.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Inside Kigali International Airport expansion works</h4>
             <p class="pub-summary">
              A team of workers supervised by engineers are putting finishing touches on some of the major sections of Kigali International Airport as part of the expansion works. Workers and trucks are seen clearing the new apron – an airport parking – which according to Rwanda Airports (RAC...
              Saturday, May 30, 2020 - 12:37am
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
     
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/woman.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Peacekeeping: Redefining the role of Rwandan women</h4>
             <p class="pub-summary">
              By the time Lieutenant Ariane Mwiza completed her secondary education at the Kigali-based Lycée Notre Dame de Citeaux, she already knew that somehow, her career path would involve the military. At just 25, Mwiza is not only part of the Rwanda Defense Force (RDF), she is also currently serving as...
              Friday, May 29, 2020 - 11:31pm
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
      
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Latest</h4>
             <p class="pub-summary">
             </p>
             <p><b>ID</b> : News</p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/slider/hero-1.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Latest</h4>
             <p class="pub-summary">
             </p>
             <p><b>ID</b> : News</p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
      </div>
      <div class="row publication-grid">
        <div class="col-md-12">
        <h2 class="section-title text-center"> Our Partners</h2>
          <div class="home-partner owl-carousel owl-theme">
            <div class="item">
              <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" class="partnerimage">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"> Publicity/Advertising site</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
        </div>
        <div class="col-md-12">
          <h2 class="section-title"> Subscribers</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam recusandae aliquid quod et deserunt nemo mollitia dicta? Aperiam illo animi impedit ipsa repudiandae amet omnis, nostrum ab! Odio, architecto, laboriosam?</p>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default mt-5">
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
  </div>
</div>
@endsection