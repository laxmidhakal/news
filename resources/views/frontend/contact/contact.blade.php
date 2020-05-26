@extends('frontend.main.app')
@section('content')
  <div class="container">
    <div class="content-wrapper contact-page">
      <h2 class="section-title">Contact</h2>
      <p>Preah Ang Duong St. (110), Rwanda, Kigali.</p>
      <div class="row">
      	<div class="col-md-6">
      		<h3 class="section-title">Contact Form</h3>
      		<form>
      			<div class="form-group">
      				<label for="">Name<span class="text-danger">*</span></label>
      				<input type="text" class="form-control" name="" value="" placeholder="Name">
      			</div>
      			<div class="form-group">
      				<label for="">Email<span class="text-danger">*</span></label>
      				<input type="email" class="form-control" name="" value="" placeholder="example@domain.com">
      			</div>
      			<div class="form-group">
      				<label for="">Phone<span class="text-danger">*</span></label>
      				<input type="tel" class="form-control" name="" value="" placeholder="Phone">
      			</div>
      			<div class="form-group">
      				<label for="">Enquiry<span class="text-danger">*</span></label>
      				<textarea class="form-control" name="" rows="3" placeholder="Enquiry"></textarea>
      			</div>
      			<button class="btn btn-default" type="submit" name="button">
      				<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
      			</button>
      		</form>
      	</div>
      	<div class="col-md-6">
      		<h3 class="section-title">Contact Map</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041615.458113992!2d28.758897205120487!3d-1.9405375607786222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c29654e73840e3%3A0x7490b026cbcca103!2sRwanda!5e0!3m2!1sen!2snp!4v1590409470039!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      	</div>
      </div>
    </div>
  </div>
@endsection