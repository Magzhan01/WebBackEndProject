
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
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

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



      



    <style type="text/css">
        .box{
            width: 600px;
            margin: 0 auto;
            border:1px solid #ccc;
        }
        .has-error{
            border-color:#cc0000;
            background-color: #ffff99;
        }
    </style>
    
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
                <h1 data-aos="fade-up" class="mb-5">Get  <span class="typed-words"></span></h1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
        @if(count($errors) > 0)
               <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
               </div> 
            @endif

            @if($massage = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $massage }}</strong>
                </div>
            @endif
          <div class="col-md-7 mb-5"  data-aos="fade">

        
          <h2>{{ __("You can send us an email with your questions.")}}</h2>


           

            <form method="post" action="{{ url('sendemail/send') }}" class="p-5 bg-white" >
            {{ csrf_field() }}
            <div class="row form-group">
                <label class="text-black">{{ __("Enter your name:")}}</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="row form-group">
                <label class="text-black">{{ __("Enter your email:")}}</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="row form-group">
                <label class="text-black">{{ __("Enter your message:")}}</label>
                <textarea name="massage" class="form-control"></textarea>
            </div>
            <div class="row form-group">
                <input type="submit" name="send" value="Send" class="btn btn-success">
            </div>
            </form>
            

            
        
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            

          <div class="p-4 mb-3 bg-white">

         
    <div class="container">
        <div class="row">
            
            <div class="col-md-5"><h3>{{ __("Or you can send us a photo and an explanation of your problem.")}}</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-0"></div>
        <div class="col-md-4">
            <form action="http://127.0.0.1:8000/multiuploads" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-droup">
                    <label for="Full Name">{{ __("Full Name")}}</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" >
                    <label for="Email">{{ __("Email")}}</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" >
                    </div>
                    <label for="Full Name">{{ __("Photos of your problem")}}</label>
                    <br>
                    <input type="file" class="form-control" name="photos[]" multiple>
                    <br> 
                    <input type="submit" class="btn btn-success" value="Upload">
            </form>
        </div>
    </div>
    </div>

          </div>


            <div class="p-4 mb-3 bg-white">
            
              <p class="mb-0 font-weight-bold">{{ __("Address")}}</p>
              <p class="mb-4">{{ __("73A Abay Avenue")}}</p>

              <p class="mb-0 font-weight-bold">{{ __("Phone")}}</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">{{ __("Email Address")}}</p>
              <p class="mb-0"><a href="/contact">youremail@domain.com</a></p>

            </div>
          

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
            strings: ["in touch with us"],
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