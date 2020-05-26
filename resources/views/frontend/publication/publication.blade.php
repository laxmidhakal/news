@extends('frontend.main.app')
@section('content')
  <div class="container">
    <div class="search-box">
      <form>
        <div class="row">
          <div class="col-sm-3">
            <select class="form-control" id="sel1">
              <option >Select One</option>
              <option>Labor Law</option>
              <option>Intellectual Property Law</option>
              <option>Agriculture Law</option>
              <option>Juvenile Law</option>
              <option>Army</option>
              <option>Diplomacy</option>
            </select>
          </div>
          <div class="col-sm-9">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Publications, Documents or Directory...">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i> Search
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="content-wrapper">
      <h2 class="section-title">Publications</h2>
      <p class="margin-bottom-25">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita harum aliquam numquam, eos sunt quae cupiditate magni maxime dolorum assumenda delectus. Quas earum ducimus, perspiciatis, nulla necessitatibus minima molestiae vitae.
      </p>

      <div class="row publication-grid">
        <div class="col-md-6">
          <!-- <div class="publication"> -->
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
              <img src="">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
              <h4 class="pub-title"></h4>
              <p class="pub-summary">
                
              </p>
              <p class="read-more">Read More</p>
            </div>
          </a>
          <td>
            <a href="{{URL::to('/')}}/images/slider/hero-1.jpg" data-toggle="lightbox" data-title="Image">
              <img src="{{URL::to('/')}}/images/slider/hero-1.jpg" class="img-thumbnail img-fluid back-img center-block">
            </a>
          </td>
          <!-- </div> -->
        </div>
      </div>
      <div class="text-right">
        <ul class="pagination">
          <!-- <li><a href="#">Prev</a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Next</a></li> -->
        </ul>
      </div>
    </div>
  </div>
@endsection