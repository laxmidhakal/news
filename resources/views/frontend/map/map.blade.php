  @extends('frontend.main.app')
  @section('content')
  <div class="container">
    <div class="search-box">
      <form>
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
              <div class="col-xs-6 col-sm-3">
                <select class="form-control">
                  <option >Institute</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control">
                  <option >Document Category</option>
                  <option>Labor Law</option>
                  <option>Intellectual Property Law</option>
                  <option>Agriculture Law</option>
                  <option>Juvenile Law</option>
                  <option>Army</option>
                  <option>Diplomacy</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-2">
                <select class="form-control">
                  <option >Domain</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-2">
                <select class="form-control">
                  <option >Month</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                  <option>Option 6</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-2">
                <input class="form-control" type="text" placeholder="Signer">
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <button class="btn btn-default btn-block" type="submit">
              <i class="glyphicon glyphicon-search"></i> Search
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="content-wrapper">
      <div class="location-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3994180.317523426!2d102.73533169529476!3d12.141770439148576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310787bfd4dc3743%3A0xe4b7bfe089f41253!2sCambodia!5e0!3m2!1sen!2snp!4v1515655314968" width="100%" height="600" frameborder="0" style="border:0; margin: 0;" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  @endsection