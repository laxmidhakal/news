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
              <input type="text" class="form-control" placeholder="Search Internship, Documents or Directory...">
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
      <h2 class="section-title">Job Internship</h2>
      <!-- <p class="margin-bottom-25">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita harum aliquam numquam, eos sunt quae cupiditate magni maxime dolorum assumenda delectus. Quas earum ducimus, perspiciatis, nulla necessitatibus minima molestiae vitae.
      </p> -->

      <div class="row publication-grid">
        <div class="col-md-3">
          <!-- <div class="publication"> -->
          <a href="" class="publication">
            <div class="col-md-12 col-xs-5 col-sm-5 pub-detail">
              <img class="img-responsive img-thumbnail" src="" style="height: 199px; width: 100%;">
            </div>
            <div class="col-md-12 col-xs-7 col-sm-7 pub-detail">
              <h4 class="pub-title">$detail->title</h4>
                  <img src="{{URL::to('/')}}/images/new/new.gif">
              <p class="pub-summary">
              </p>
              <p class="read-more">Read More</p>
            </div>
          </a>
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