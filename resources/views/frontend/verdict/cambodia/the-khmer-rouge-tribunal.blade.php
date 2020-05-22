@extends('frontend.app')
@section('content')
  <div class="container">
    <div class="search-box">
      <form>
        @if(isset($page_name))
        <input type="hidden" id="page_name" name="page_name" value="{{$page_name}}">
        @endif

        @if(isset($name2))
        <input type="hidden" id="name2" name="name2" value="{{$name2}}">
        @endif
        
        @if(isset($name3))
        <input type="hidden" id="name3" name="name3" value="{{$name3}}">
        @endif
         @if(isset($name4))
         <input type="hidden" id="name4" name="name4" value="{{$name4}}">
        @endif
        <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
        <!-- <input type="hidden" class="main_val"  value="{{ $page_name }}"> -->
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
              <div class="col-xs-6 col-sm-3">
                <input class="form-control doc_name" type="text" placeholder="Document name" id="doc_name" name="doc_name">
              </div>
              <div class="col-xs-6 col-sm-3">
                <input class="form-control keyword" type="text" placeholder="Keyword" id="keyword" name="keyword">
              </div>
              <div class="col-xs-6 col-sm-3">
                <input class="form-control signer" type="text" placeholder="Signer" id="signer" name="signer">
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control institute" id="institute" name="institute">
                  <option value=0 >Institute</option>
                  @foreach($institute_detail as $inst)
                  <option value="{{$inst->id}}">{{$inst->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control category" id="category" name="category">
                  <option value=0>Document Category</option>
                  @foreach($category_detail as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control domain" id="domain" name="domain">
                  <option value=0>Domain</option>
                  @foreach($domain_detail as $dom)
                  <option value="{{$dom->id}}">{{$dom->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control month" id="month" name="month">
                  <option value=0 >Month</option>
                  <option value="-01-">January</option>
                  <option value="-02-">February</option>
                  <option value="-03-">March</option>
                  <option value="-04-">April</option>
                  <option value="-05-">May</option>
                  <option value="-06-">June</option>
                  <option value="-07-">July</option>
                  <option value="-08-">August</option>
                  <option value="-09-">September</option>
                  <option value="-10-">October</option>
                  <option value="-11-">November</option>
                  <option value="-12-">December</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-3">
                <select class="form-control year" id="year" name="year">
                  <option value=0 >Year</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
            <button class="btn btn-default btn-block big" type="button" id="search">
              <i class="glyphicon glyphicon-search"></i> Search
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="content-wrapper">
      <div class="table-responsive">
        <div id="replaceTable">
          <table class="table">
          <thead>
            <tr>
              <th>SN</th>
              <th class="document">Document</th>
              <th>Category</th>
              <th class="date">Date</th>
              <th>PDF</th>
              <th>EN</th>
            </tr>
          </thead>
          <tbody>
            @foreach($main_datas as $index=>$main)
            <tr>
              <td>{{$index+1}}</td>
              <td>
                <a href="{{URL::to('/')}}/detail/{{$main->translation_id}}">{!! $main->title !!}</a>
              </td>
              <td>{{$main->getCategoryDetail->name}}</td>
              <td>{{ date('j M Y',strtotime($main->created_at))}}</td>
              <td>
                @if($main->khu_pdf_enc == "")
                <a class="disabled">
                  <img src="{{URL::to('/')}}/images/pdf-icon-non.png">
                </a>
                @else
                <a href="{{URL::to('/')}}/download/{{$page_name}}/{{$main->khu_pdf_enc}}">
                  <img src="{{URL::to('/')}}/images/pdf-icon.png">
                </a>
                @endif
              </td>
              <td>
                @if($main->end_pdf_enc == "")
                <a class="disabled">
                  <img src="{{URL::to('/')}}/images/pdf-icon-non.png">
                </a>
                @else
                <a href="{{URL::to('/')}}/download/{{$page_name}}/{{$main->end_pdf_enc}}">
                  <img src="{{URL::to('/')}}/images/pdf-icon.png">
                </a>
                @endif
              </td>
            </tr>
            @endforeach
           
          </tbody>
        </table>
        </div>
      </div>
      <div class="text-right">
        <ul class="pagination">
          {!! str_replace('/?', '?', $main_datas->render()) !!}
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