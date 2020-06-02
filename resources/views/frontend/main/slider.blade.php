@extends('frontend.main.app')
@section('content')
<style type="text/css">
  .bg-slider {
      background: #0000008c;
  }
</style>
<div class="container">
  <div class="home-slider owl-carousel owl-theme">
    <div class="item">
      <img src="{{URL::to('/')}}/images/slider/slider2.jpg">
      <div class="slider-content">
        <div class="bg-slider py-3">
          <h2 class="text-left">Aggrement </h2>
          <p class="text-left">Rotary Club Kigali Doyen donates Rwf13 million to Coronavirus fight</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <h2 class="section-title">Currrent Publication</h2>
      <div class="row publicationblock-grid">
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication1.jpg" alt="..."  class="publicationimage img-responsive">
            <div class="row">
              <div class="col-sm-6 pr-md-0">
                <button type="button" class="btn b-radius-0 btn-block btnview ">View</button>
              </div>
              <div class="col-sm-6 pl-md-0">
                <button type="button" class="btn b-radius-0 btn-block color-blue">Order</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication2.jpg" alt="..." class="publicationimage img-responsive">
              <div class="row">
                <div class="col-sm-6 pr-md-0">
                  <button type="button" class="btn b-radius-0 btn-block btnview">View</button>
                </div>
                <div class="col-sm-6 pl-md-0">
                  <button type="button" class="btn b-radius-0 btn-block color-blue">Order</button>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication3.jpg" alt="..." class="publicationimage img-responsive">
              <div class="row">
                <div class="col-sm-6 pr-md-0">
                  <button type="button" class="btn b-radius-0 btn-block btnview">View</button>
                </div>
                <div class="col-sm-6 pl-md-0">
                  <button type="button" class="btn b-radius-0 btn-block color-blue">Order</button>

                </div>
              </div>
          </div>
        </div>
      </div>
      <h2 class="section-title">Latest news</h2>
      <div class="row publication-grid">
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/newslatest.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">New CIMERWA boss speaks out on rebranding the firm’s products</h4>
             <p class="pub-summary">
              The 38-year-old Rwandan cement company, CIMERWA ,recently announced the appointment of their new Chief Executive Officer...
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
              A team of workers supervised by engineers are putting finishing touches on some of the major sections of Kigali International Airport...
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
              By the time Lieutenant Ariane Mwiza completed her secondary education at the Kigali-based Lycée Notre Dame de Citeaux, she already knew... 
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
      
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/news4.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">Rwanda: Dozens killed as heavy rains trigger floods, landslides</h4>
             <p class="pub-summary">
              Worst downpours in months damage roads, houses and bridges and sweep away farms, Rwandan government says..
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
        <div class="col-md-12">
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
             <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/news3.jpg" style="height: 199px; width: 100%;">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
             <h4 class="pub-title">
              Israel police kill unarmed Palestinian in occupied East Jerusalem
             </h4>
             <p class="pub-summary">
              Israeli police have shot and killed an unarmed Palestinian near the Old City in occupied East Jerusalem..
             </p>
             <p class="read-more">Read More</p>
            </div>
          </a>
        </div>
        <div class="col-md-12">
        <h2 class="section-title text-center"> Our Partners</h2>
          <div class="home-partner owl-carousel owl-theme mb-4">
            <div class="item">
              <img src="{{URL::to('/')}}/images/partner2.jpg" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <h4 class="section-title"> &nbsp;</h4>
          <div class="left-side-box mt-md-5">
            <div class="">
              <h3 class="title-ads text-secondary text-center">Advertisment</h3>
              <a href="">
                <img src="{{URL::to('/')}}/images/partner.jpg" border="0" class="img-responsive mb-4">
              </a><a href="">
                <img src="{{URL::to('/')}}/images/partner.jpg" border="0" class="img-responsive mb-4">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default mt-5">
            <!-- <div class="panel-heading">
              <h2 class="section-title text-center">Subscribers</h2>
            </div> -->
            <div class="panel-body newsletter-sectionback">
              <div class="col-sm-12 col-lg-12">
                <div class="newsletter-section">
                  <div class="newsletter-title my-md-3 h5"><strong>NEWSLETTER</strong> - Subscribe here</div>
                  <form id="newsletter-form">
                    <input type="email" name="mail-nl" class="mail-nl" placeholder="Email">
                    <div class="buton-field">
                      <input type="submit" class="pull-right mail-send" value="SIGN UP">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <h2 class="section-title">Important links</h2>
            <ul class="media-list o-scroll pb-4">
              <li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/slider/slider2.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li><li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/newslatest.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li><li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/1news.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li><li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/woman.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li><li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/news4.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li><li class="media my-0">
                <div class="media-left">
                  <a href="">
                    <img src="{{URL::to('/')}}/images/partner.jpg" class="media-object" style="width: 130px;" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <!-- <h4 class="media-heading">Media heading</h4> -->
                  <h4 class="media-heading">
                    20 arrested in hotel Sauna
                  </h4>             
                </div>
              </li>
            </ul>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection