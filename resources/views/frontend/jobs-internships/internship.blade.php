@extends('frontend.app')
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
        @foreach($internship_detail as $detail)
        <div class="col-md-3">
          <!-- <div class="publication"> -->
          <a href="{{URL::to('/')}}/internship/details/{{$detail->translation_id}}" class="publication">
            <div class="col-md-12 col-xs-5 col-sm-5 pub-detail">
              <img class="img-responsive img-thumbnail" src="{{URL::to('/')}}/images/internship/{{$detail->image_ency}}" style="height: 199px; width: 100%;">
            </div>
            <div class="col-md-12 col-xs-7 col-sm-7 pub-detail">
              <h4 class="pub-title">{{$detail->title}}</h4>
              <?php $date = date('y/m/d' ,strtotime('- 30 days')); 
                      $new_date = date('y/m/d',strtotime($detail->created_at));
                ?>
                 @if($new_date > $date) 
                  <img src="{{URL::to('/')}}/images/new/new.gif">
                 @endif
              <p class="pub-summary">
                {!!$detail->type!!}
              </p>
              <p class="read-more">Read More</p>
            </div>
          </a>
          <!-- </div> -->
        </div>
        @endforeach
        
        
        
      </div>

      <div class="text-right">
        <ul class="pagination">
          {!! str_replace('/?', '?', $internship_detail->render()) !!}
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