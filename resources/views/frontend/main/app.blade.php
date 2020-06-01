<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kinyamateka </title>
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Source+Sans+Pro:300,400,600" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/main.boot.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/style.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/style.main.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/scroll.main.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/auto_img_resizer.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/frontend/css/lightbox.min.css">
</head>
<body>
  <header>
    <div class="top-banner">
      <div class="container banner_content">
        <div class="text-center">
          <ul class="list-inline headerblock">
              <li class="list-inline-item text-light main-font-12 hometext">
                  <i class="fa fa-phone mr-1"></i> 
                  +977-124466
              </li>
              <li class="list-inline-item text-light main-font-12 hometext">
                  <i class="fa fa-envelope mr-1"></i> 
                  kinyamateka@gmail.com
              </li>
              <li class="list-inline-item my-auto">
                  <a href="$social->facebook}}" target="_blank" title="Share on Facebook" class=" link facebook text-center">
                      <i class="fa fa-facebook main-spin"></i>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="$social->twitter}}" target="_blank" title="Share on Twitter" class="link twitter text-center">
                      <i class="fa fa-twitter main-spin" ></i>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a href="$social->linkedin}}" target="_blank" class="link linkedin text-center">
                      <i class="fa fa-linkedin main-spin"></i>
                  </a>
              </li>
          </ul>
        </div>
        <div class="text-right">
          <a href="{{URL::to('/')}}"><button class="btn btn-default color-blue"><i class="fa fa-home" aria-hidden="true"></i></button></a>
          @if (Auth::guest())
          <button class="btn btn-default color-blue" data-toggle="modal" data-target="#login"><i class="glyphicon glyphicon-user"></i> Login</button>
          @else
          <li class="dropdown">
              <button href="#" class="btn btn-default color-blue dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
              </ul>
          </li>
          @endif
        </div>
        <img src="{{URL::to('/')}}/images/logo.png" class="img-responsive">
        <h1 class="text-white">kinyamateka</h1>
      </div>
      <!-- Modal -->
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand visible-xs" data-toggle="collapse" href="#myNavbar">Menu</a>
          </div>
          @include('frontend.main.navbar')
        </nav>
      </div>
    </div>
  </header>
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-body">
        <form class="form-signin" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">       
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2 class="form-signin-heading">Login Form</h2>

          <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />

          <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
          <div class="checkbox">
            <label class="">
              <input type="checkbox" value="remember-me" id="rememberMe" name="remember"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <hr>
          <ul class="list-unstyled text-center nav-justified">
            <li><a href="{{URL::to('/')}}/forgot-password">Forgot Password</a></li>
            <li><a href="{{URL::to('/')}}/change-password">Change Password</a></li>
            <li><a href="{{URL::to('/')}}/auth/register">Create Account</a></li>
          </ul>
        </form>

      </div>
    </div>
  </div>
  <div class="container">
    <div class="largenavbar">
         <form>
           <div class="row">
             <div class="col-sm-3">
               
             </div>
             <div class="col-sm-9">
               <li>
               </li>
             </div>
           </div>
         </form>
       </div>
  </div>
@yield('content')
@yield('javascript')
@include('frontend.main.footer')
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="{{URL::to('/')}}/frontend/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/frontend/js/script.js"></script>
  <script type="text/javascript" src="{{URL::to('/')}}/frontend/js/lightbox.min.js"></script>
  <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
  </script>
  <script type="text/javascript">
    auto_resizer(".publication-grid .pub-image>img");
    auto_resizer(".home-slider .item>img");
  </script>
  <script type="text/javascript">
    $('ul.nav li.dropdown').hover(function() {
      $(this).children('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).children('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  </script>
  <script type="text/javascript">
    $('.home-slider.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 50,
        dots: false,
        items: 1
    })
  </script>
  <script type="text/javascript">
    $('.home-partner.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 50,
        dots: false,
        items: 2
    })
  </script>
  <script type="text/javascript">
    // filter for teacher to get shift
    $('#search').click(function(){
        var page_name = $('#page_name').val(),
            name2 = $('#name2').val(),
            name3 = $('#name3').val(),
            name4 = $('#name4').val(),
            doc_name = $('#doc_name').val(),
            keyword = $('#keyword').val(),
            signer = $('#signer').val(),
            institute = $('#institute').val(),
            category = $('#category').val(),
            domain = $('#domain').val(),
            month = $('#month').val(),
            year = $('#year').val(),
            token =$('.token').val();
        $.ajax({
            type:"POST",
            dataType:"html",
            url: "{{URL::route('search_data')}}",
            data: {
              _token: token,
              doc_name:doc_name,
              keyword:keyword,
              signer:signer,
              institute:institute,
              category:category,
              domain:domain,
              month:month,
              page_name:page_name,
              name2 : name2,
              name3 : name3,
              name4 : name4,
              year:year
            },
            success: function(response) {
              if(response){
                $('#replaceTable').html(response);
                $('#loader').hide('slow');
              }
            },
            error: function (response) {
            alertify.alert('Sorry! this data couldnot display');
          }
        });
    });
</script>
<script type="text/javascript">
  $("body").on("click", ".language", function(event){
    // debugger;
    var language = $(event.target).attr('id'),
    token = $('.token').val();
    $.ajax({
          type:"GET",
          dataType:"JSON",
          url: "{{URL::route('languagechooser')}}",
          data:{
              _token: token,
              language: language,
          },
          success:function(response){
            location.reload()
          },
          error: function (response) {
              alertify.alert('Sorry! this data couldnot be deleted!');
          }
      });
  });
</script>
</html>