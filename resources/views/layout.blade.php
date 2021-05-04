<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
   a {
    color: #000080; /* Цвет обычной ссылки */
    padding: 2px; /* Поля вокруг текста */
   }
   a:visited {
    color: #800080; /* Цвет посещенной ссылки */
   } 
   a:hover {
    text-decoration: none; /* Убираем подчеркивание */
    color: #fff; /* Цвет ссылки при наведении на нее курсора мыши */  
    background: #e24486; /* Цвет фона */
   }
  </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>


    
</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <h1 class="mb-0 site-logo"><a href="/" class="text-white mb-0">ToothFairy<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li ><a href="/"><span>{{__("Home")}}</span></a></li>
                <li class="has-children">
                  <a href="/services"><span>{{ __("Services")}}</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="/services">{{ __("Therapeutic reception")}}</a></li>
                    <li><a href="/services">{{ __("General manipulations")}}</a></li>
                    <li><a href="/services">{{ __("Surgical procedure")}}</a></li>
                  </ul>
                </li>
                <li><a href="/about" ><span>{{ __("About Us")}}</span></a></li>
                <li><a href="/contact"><span>{{ __("Contact")}}</span></a></li>
                <li>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="background-color: #343a40;">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <button style="color: #313332 " id="navbarDropdown" class="nav-link " href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           @switch($locale)
    								@case('en')
    								<img width="20" src="{{asset('img/en.png')}}">
    								English
    								@break
    								@case('kz')
    								<img width="20" src="{{asset('img/kz.png')}}">
    								Kazakh
    								@break
    								@case('ru')
    								<img width="20" src="{{asset('img/ru.png')}}">
    								Russian
    								@break
    								@default
    								<img width="20" src="{{asset('img/en.png')}}">
    								English
    								@endswitch
    								<span class="caret"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color: #313332 " class="dropdown-item" href="en"><img width="20" src="{{asset('img/en.png')}}"> English</a> <br>
                            <a style="color: #313332 " class="dropdown-item" href="kz"><img width="20" src="{{asset('img/kz.png')}}"> Kazakh</a> <br>
                            <a style="color: #313332 " class="dropdown-item" href="ru"><img width="20" src="{{asset('img/ru.png')}}"> Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </li>
              </ul>
             </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      
      
    </header>
  </div>


        
    
    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>