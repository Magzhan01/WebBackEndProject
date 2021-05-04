
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  @extends('layout')
  @section('content')
 


  

    <div class="site-blocks-cover overlay" style="background-image: url(images/image1-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">{{ __("About our")}}  <span class="typed-words"></span></h1>

               
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  



    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/image-2-2.jpg" alt="Image" class="img-fluid rounded mb-3">
            <img src="images/image1-1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">{{ __("About Our History")}}</h2>
            <p class="lead">{{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.")}}</p>
            <p class="mb-4">{{ __("It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages")}}</p>

            <p>{{ __("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!")}}</p>
            <p class="mb-4">{{ __("It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages")}}</p>

            <ul class="ul-check list-unstyled success">
              <li>{{ __("This is our stage 1")}}</li>
              <li>{{ __("This is our stage 2")}}</li>
              <li>{{ __("This is our stage 3")}}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="text-primary mb-3">{{ __("Our Staffs")}}</h2>
            <p>{{ __("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.")}} </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 text-center">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-3 w-50 rounded-circle">
            <h3 class="h4">{{ __("Arai Zhahan")}}</h3>
            <p class="caption text-primary">{{ __("Surgeon")}}</p>
            <p> {{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.")}}</p>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 text-center">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3 w-50 rounded-circle">
            <h3 class="h4">{{ __("Samat Yesen")}}</h3>
            <p class="caption text-primary">{{ __("Therapist")}}</p>
            <p>{{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.")}}</p>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 text-center">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3 w-50 rounded-circle">
            <h3 class="h4">{{ __("Aslan Moldabay")}}</h3>
            <p class="caption text-primary">{{ __("Podiatrist")}}</p>
            <p> {{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.")}}</p>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-5 text-center">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3 w-50 rounded-circle">
            <h3 class="h4">{{ __("Aruzhan Sain")}}</h3>
            <p class="caption text-primary">{{ __("Dental Implantologist")}}</p>
            <p>{{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.")}}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/image-2-2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">{{ __("Every Friday we offer discounts of up to 30%, do not miss this wonderful offer. This is your best chance.")}}</h2>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="/contact" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">{{ __("Contact Us")}}</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <br><br><br><br>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["clinic"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  @endsection
  </body>
</html>