
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ToothFairy</title>
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
    




    <script src="https://api-maps.yandex.ru/2.1/?apikey=dc4b0d54-f93b-4aad-aa41-6eb7a578339a&lang=en_US" type="text/javascript"></script>

<script type="text/javascript">
    ymaps.ready(init);
    function init(){ 
        var myMap = new ymaps.Map("mapyan", {
           center: [42.894483396254394, 71.3780920309875],
            zoom: 11
        }, {
            searchControlProvider: 'yandex#search'
        });

    myMap.geoObjects
        .add(new ymaps.Placemark([42.894483396254394, 71.3780920309875], {
          
          hintContent: 'TOOTHFAIRY',
            balloonContent: '<img src="http://www.kissradio.ca/wp-content/uploads/sites/6/2016/07/toothfairy-300x259.jpg"><br> <strong>TOOTHFAIRY</strong> <br> Dental treatment <br> <strong>Abaya avenue 73a</strong>'
        }, {

            preset: 'islands#icon',
            iconColor: '#0095b6'
        }));

         MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        )

       
}
</script>

    




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
              <h1>{{ __("WELCOME TO")}} <p style="font-size:8vw;">TOOTHFAIRY</p></h1>
                <h1 data-aos="fade-up" class="mb-5" style="font-size:3vw;">{{ __("We give solutions to your problems with")}} <span class="typed-words"></span></h1>

                
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  



    <div class="block-quick-info-2">
      <div class="container">
        <div class="block-quick-info-2-inner">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-home mr-3"></span>
                <div class="text">
                  <a href="#mapyan">
                  <strong class="d-block heading">{{ __("Visit our Location")}}</strong>
                  <span class="excerpt">{{ __("73A Abay Avenue")}}</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-phone mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">{{ __("Call us")}}</strong>
                  <span class="excerpt"><a href="#">8777 456 7890</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-envelope mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">{{ __("Send us a message")}}</strong>
                  <span class="excerpt"><a href="#">info@gmail.com</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-clock-o mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">{{ __("Opening hours")}}</strong>
                  <span class="excerpt">{{ __("Mon-Fri 7:AM - 5PM")}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="block-half-content-1 d-block d-lg-flex mt-5">
      <div class="block-half-content-img" style="background-image: url('images/image1-1.jpg')">
        
      </div>
      <div class="block-half-content-text bg-primary">
        <div class="block-half-content-text-inner">
          <h2 class="block-half-content-heading mb-4">{{ __("Why Choose Us")}}</h2>
          <div class="block-half-content-excerpt">
          <p class="lead">{{ __("We employ the best specialists.")}}</p>
          </div>
        </div>

        <div class="block-counter-1 section-counter">
          <div class="row">
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="3">0</span><span class="append">K</span>
                </div>
                <span class="block-counter-1-caption">{{ __("Happy Customers")}}</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="7">0</span><span class="append"></span>
                </div>
                <span class="block-counter-1-caption">{{ __("Years of Experience")}}</span>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="counter">
                <div class="number-wrap">
                  <span class="block-counter-1-number" data-number="100">0</span><span class="append">%</span>
                </div>
                <span class="block-counter-1-caption">{{ __("Satisfaction")}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">{{ __("Our Special Offers")}}</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="d-block d-lg-flex">
          <div class="half-wrap d-block d-md-flex">
            <div class="half bg-white d-block d-md-flex arrow-right">
              <div class="text">
                <h2>{{ __("Therapeutic reception")}}</h2>
                <p>{{ __("Therapeutic dentistry is a whole section of dental practice...")}}</p>
                <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">{{ __("Learn More")}}</a></p>
              </div>
            </div>
            <div class="half bg-img img" style="background-image: url('images/img_1_1.jpg');"></div>
          </div>
          <div class="half-wrap d-block d-md-flex">
            <div class="half bg-white d-block d-md-flex arrow-right">
              <div class="text">
                <h2>{{ __("Treatment of complicated forms of caries")}}</h2>
                <p>{{ __("The concept of caries is familiar to everyone — it is the defeat of the hard...")}}</p>
                <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">{{ __("Learn More")}}</a></p>
              </div>
            </div>
            <div class="half bg-img img" style="background-image: url('images/img_3_3.jpg');"></div>
          </div>
        </div>

        <div class="d-block d-lg-flex">
            <div class="half-wrap d-block d-md-flex">
              <div class="half bg-white d-block d-md-flex arrow-left order-md-2">
                <div class="text">
                  <h2>{{ __("General manipulations")}}</h2>
                  <p>{{ __("Therapeutic dentistry is a whole section of dental practice...")}}</p>
                  <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">{{ __("Learn More")}}</a></p>
                </div>
              </div>
              <div class="half bg-img img" style="background-image: url('images/img_2_2.jpg');"></div>
            </div>
            <div class="half-wrap d-block d-md-flex">
              <div class="half bg-white  d-block d-md-flex arrow-left order-md-2">
                <div class="text">
                  <h2>{{ __("Surgical procedure")}}</h2>
                  <p>{{ __("Surgical dentistry is a branch of dentistry that practices such methods...")}}</p>
                  <p><a href="course-details.html" class="btn btn-primary btn-sm btn-pill">{{ __("Learn More")}}</a></p>
                </div>
              </div>
              <div class="half bg-img img" style="background-image: url('images/img_4_4.jpg');"></div>
            </div>
          </div>
      </div>
    </div>

     <div class="site-section">

      <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">{{ __("Our location")}}</h2>
          </div>
        </div>
    
     <div class="container">
        <div class="row">
          <div class="col-md-2 col-lg-4 mb-4 mb-lg-5 text-center">
            
                <address>
            Lietzenseeufer 2, 14057 Berlin, Deutschland<br> 
            Jetzt geöffnet<br> 
              <bdi>‫الجمعة</bdi> - Freitag 10:00–18:00<br> 

              <bdi>‫الجمعة</bdi> - Samstag -  Geschlossen<br> 

              <bdi>‫الجمعة</bdi> - Sonntag -  Geschlossen<br> 

              <bdi>‫الجمعة</bdi> - Montag - 10:00–18:00<br> 

               <bdi>‫الجمعة</bdi> - Dienstag -  10:00–18:00<br> 

              <bdi>‫الجمعة</bdi> - Mittwoch - 10:00–18:00<br> 

              <bdi>‫الجمعة</bdi> - Donnerstag -  10:00–18:00<br>
            +493088595660<br>
           G74Q + VV Berlin, Deutschland<br>
           
            </address>
             
          </div>
          <div class="col-md-7 col-lg-8 mb-4 mb-lg-5 text-center">
           
               <div id="mapyan" style=" height: 350px;"></div>

          </div>
          </div>


  </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">{{ __("Satisfied customers")}}</h2>
          </div>
        </div>
        <div class="row">

          <div class="col-12">

            <div class="owl-carousel-2 owl-carousel">

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/client_1.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">{{ __("Zarina Ashim")}}</h2>
                  <blockquote>&ldquo;{{ __("Specialists do their work very quickly and it is very convenient for customers.")}}&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/client_2.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">{{ __("Arman Amir")}}</h2>
                  <blockquote>&ldquo;{{ __("I lavoratori sono semplicemente di fascia alta. Fanno il loro lavoro molto rapidamente ed efficacemente.")}}&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/client_3.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">{{ __("Marat Zhapar")}}</h2>
                  <blockquote>&ldquo;{{ __("It is very convenient and comfortable, and the staff is very kind. After the reception, they give advice on how to save your teeth.!")}}&rdquo;</blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/client_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">{{ __("Nursultsn Bektain")}}</h2>
                  <blockquote>&ldquo;{{ __("Prices for the service are inexpensive. The specialists are very high-quality.")}}&rdquo;</blockquote>
                </div>
              </div>


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
            strings: ["dental caries","tooth loss","bad breath"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>
  @endsection
  </body>
</html>