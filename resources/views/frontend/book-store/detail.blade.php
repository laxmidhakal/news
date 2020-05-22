@extends('frontend.main.app')
@section('content')
  <div class="container">
    <div class="content-wrapper">
          <div class="row margin-top-10">
            <div class="col-md-12">
              <div class="well well-sm">
                <div class="media">
                  <div class="row">
                    <div class="col-md-6">
                        <a class="thumbnail" href="" data-lightbox="roadtrip" data-title="">
                          <img class="media-object img-responsive" style="height:200px;" src="">
                        </a>
                    </div>
                    <div class="col-md-6">
                      <div class="media-body pad-l-10">
                        <h3 class="media-heading"> {{$detail->title}}</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <ul class="list-unstyled margin-top-15">
                              <li class="margin-top-10">Company type: {{$detail->doc_type}}</li>
                              <li class="margin-top-10">@lang('translation.status'): {{$detail->status}}</li>
                              <li class="margin-top-10">@lang('translation.adoption_date/Promulgation_date/signing_date'):  {{$detail->apsdate}}</li>
                              <li class="margin-top-10">@lang('translation.access_and_use_constraints'):  {{$detail->auconstraint}}</li>
                              <li class="margin-top-10">@lang('translation.copyright'):  {{$detail->copyright}}</li>
                              <li class="margin-top-10">@lang('translation.issuing_agency/parties'):  {!! $detail->description !!}</li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul class="list-unstyled margin-top-15">
                              <li class="margin-top-10">@lang('translation.license'):  {{$detail->license}}</li>
                              <li class="margin-top-10">@lang('translation.language'):  {{$detail->language}}</li>
                              <li class="margin-top-10">@lang('translation.date_modified') ap:  {{$detail->issuingap}}</li>
                              <li class="margin-top-10">Date:  {{$detail->date}}</li>
                              <li class="margin-top-10">Data Entry Date:  {{$detail->created_at}}</li>
                              <li class="margin-top-10">Price:  {{$detail->price}}</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class=" margin-top-15">
                <div class="media">
                  
                  <div class="media-body" style="padding-left: 10px;">
                    <h3 class="media-heading">Contact</h3>
                    
                    <ul class="list-group margin-top-15">
                      <li class="list-group-item">Phone: </li>
                      <li class="list-group-item">E-mail: </li>
                      <li class="list-group-item">Website: </li>
                      <li class="list-group-item">Address: </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
      </div>
  </div>
@endsection