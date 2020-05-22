@extends('frontend.main.app')
@section('content')
<div class="container">
  <div class="search-box">
    <form>
      <div class="row">
        <div class="col-sm-10">
          <div class="row">
            <div class="col-xs-6 col-sm-4">
              <input class="form-control" type="text" placeholder="ឈ្មោះជាភាសាខ្មែរ">
            </div>
            <div class="col-xs-6 col-sm-4">
              <input class="form-control" type="text" placeholder="ឈ្មោះជាភាសាអង់គ្លេស">
            </div>
            <div class="col-xs-6 col-sm-4">
              <input class="form-control" type="text" placeholder="អត្តលេខ">
            </div>
            <div class="col-xs-6 col-sm-6">
              <select class="form-control">
                <option >Function</option>
                <option>No info</option>
                <option>Head of the Law on Dispute Resolution</option>
                <option>Officials</option>
                <option>Chief of the cathedral</option>
                <option>Judge</option>
                <option>Assistant</option>
                <option>Parliamentarians</option>
                <option>Senior Minister</option>
                <option>Consultant</option>
              </select>
            </div>
            <div class="col-xs-12 col-sm-6">
              <select class="form-control">
                <option >បរិយាយ/ស្ថាប័ន</option>
                <option>មិនមែនព័ត៌មាន</option>
                <option>ការបរទេស និងសហប្រតិបត្តិការអន្តរជាតិ(ក្រសួង)</option>
                <option>ការពារជាតិ(ក្រសួង)</option>
                <option>កិច្ចការនារី(ក្រសួង)</option>
                <option>ការងារបណ្តុះបណ្តាលវិជ្ជាជីវៈ(ក្រសួង)</option>
                <option>សង្គមកិច្ច អតីតយុទ្ធជន និងយុវនីតិសម្បទា(ក្រសួង)</option>
                <option>គណៈកម្មការមូលបត្រកម្ពុជា</option>
                <option>ីស្តីការគណៈរដ្ឋមន្រ្តី</option>
                <option>ទេសចរណ៍(ក្រសួង)</option>
                <option>ទំនាក់ទំនងរដ្ឋសភា ព្រឹទ្ធសភា និងអធិការកិច្ច(ក្រសួង)</option>
                <option>ធម្មការ និងសាសនា(ក្រសួង)</option>
                <option>ធនធានទឹក(ក្រសួង)</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <button class="btn btn-default btn-block big" type="submit">
            <i class="glyphicon glyphicon-search"></i> Search
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="content-wrapper">
    <h2 class="section-title">Directory</h2>
    <div class="row publication-grid">
      <div class="col-md-6">
        <!-- <div class="publication"> -->
          <a href="" class="publication">
            <div class="col-xs-5 col-sm-5 pub-image">
              <img src="">
            </div>
            <div class="col-xs-7 col-sm-7 pub-detail">
              <h4 class="pub-title">$directory->title</h4>
              <p class="pub-summary">
              </p>
              <p><b>ID</b> : $directory->function</p>
              <p class="read-more">Read More</p>
            </div>
          </a>
          <!-- </div> -->
        </div>
      </div>
      <div class="text-right">
        <ul class="pagination">
          <li><a href="#">Prev</a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </div>
    </div>
  </div>
  @endsection