@extends('frontend.main.app')
@section('content')
<div class="container">
  <div class="home-slider owl-carousel owl-theme">
    <div class="item">
      <img src="{{URL::to('/')}}/images/slider/slider2.jpg">
      <div class="slider-content">
        <h2></h2>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <h2 class="section-title">Currrent Publication</h2>
      <div class="row publicationblock-grid">
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication1.jpg" alt="..."  class="publicationimage img-responsive">
            <div class="row">
              <div class="col-sm-6 pr-0">
                <button type="button" class="btn b-radius-0 btn-block btn-info">View</button>
              </div>
              <div class="col-sm-6 pl-0">
                <button type="button" class="btn b-radius-0 btn-block btn-warning">Order</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication2.jpg" alt="..." class="publicationimage img-responsive">
              <div class="row">
                <div class="col-sm-6 pr-0">
                  <button type="button" class="btn b-radius-0 btn-block btn-info">View</button>
                </div>
                <div class="col-sm-6 pl-0">
                  <button type="button" class="btn b-radius-0 btn-block btn-warning">Order</button>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail ">
            <img src="{{URL::to('/')}}/images/publication/publication3.jpg" alt="..." class="publicationimage img-responsive">
              <div class="row">
                <div class="col-sm-6 pr-0">
                  <button type="button" class="btn b-radius-0 btn-block btn-info">View</button>
                </div>
                <div class="col-sm-6 pl-0">
                  <button type="button" class="btn b-radius-0 btn-block btn-warning">Order</button>
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
      </div>
      <div class="row publication-grid">
        <div class="col-md-12">
        <h2 class="section-title text-center"> Our Partners</h2>
          <div class="home-partner owl-carousel owl-theme">
            <div class="item">
              <img src="{{URL::to('/')}}/images/partner2.jpg" class="partnerimage">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-12">
          <h2 class="section-title"> Publicity/Advertising site</h2>
          <div class="left-side-box">
            <div class="margintop text-center pb-4">
              <h3 class="title-ads text-secondary">Advertisment</h3>
              <img src="{{URL::to('/')}}/images/partner.jpg" border="0" class="img-responsive ">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default mt-5">
            <div class="panel-heading">
              <h2 class="section-title text-center">Subscribers</h2>
            </div>
            <div class="panel-body newsletter-sectionback">
              <div class="col col-lg-12">
                <div class="newsletter-section mt-2">
                  <div class="newsletter-title"><strong>NEWSLETTER</strong> - Subscribe here</div>
                  <form id="newsletter-form">
                    <input type="email" name="mail-nl" class="mail-nl" placeholder="Email">
                    <div class="buton-field"><input type="submit" class="pull-right mail-send" value="SIGN UP"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <h2 class="section-title pt-4">Important links </h2>
          <div class="irambuye-news">
            <div class="row">
              <div class="col  col-md-12 pr-0">
                <div class="flashnews2">
                  <div class="flashphoto">
                    <img src="{{URL::to('/')}}/images/news3.jpg" class="img-responsive" alt=".">
                  </div>
                  <div class="f-title2 pl-0">
                    <a href="news/article/20-arrested-in-hotel-sauna " class="f-color">20 arrested in hotel Sauna</a>
                  </div>
                </div>
              </div>
              <div class="col col-md-6 ">
                <div class="scroll">Discussions with Premier Ngirente revolved around assessing achievements from Rwanda-Qatar relations, needed efforts for    improvement and different issues concerning Africa.Following discussions, Rwanda’s Minister of Foreign Affairs and International Cooperation, Dr Richard Sezibera highlighted that both country’s relations are on a good note.“Cooperation between Rwanda and Qatar is on good progress, Africa, Qatar cooperation is vibrant too. The visit was meant to pave way for strengthening existing relationships,” he said.Dr Sezibera explained that they held talks concerning investment in agriculture, transport, aviation, irrigation and mining yesterday.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection