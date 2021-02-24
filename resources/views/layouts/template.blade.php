<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


  

    <script>
      var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline()
  .add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 10000,
    delay: (el, i) => 275 * i
  }
  // ).add({
  //   targets: '.ml10',
  //   opacity: 0,
  //   duration: 1000,
  //   easing: "easeOutExpo",
  //   delay: 100
  // }
  );



 



    </script>    


    <style>
     
.page-login {
  background: linear-gradient(165deg, #f7f5fb 50%, #fff 50%);
}

.login-bg {
  position: relative;
}

@media (min-width: 992px) {
  .login-bg {
    background-image: url("/images/4710013.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .login-bg:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: rgba(63, 81, 181, 0.62);
  }
}

.form-login {
  background-color: #FFFFFF;
  width: 100%;
  max-width: 500px;
}

@media (min-width: 992px) {
  .form-login-side {
    background: linear-gradient(165deg, #f7f5fb 50%, #fff 50%);
  }
}

.brand {
  background-color: #eb5b23;
  border-radius: 0.4rem;
  color: black;
  display: inline-block;
  font-weight: 500;
  font-size: 2.6rem;
  width: 3.125rem;
  height: 3.125rem;
  line-height: 3rem;
  text-align: center;
}

@media (min-width: 992px) {
  .brand {
    font-size: 2.8rem;
    width: 3.75rem;
    height: 3.75rem;
    line-height: 3.625rem;
  }
}

.brand-title {
  font-size: 2rem;
}

@media (min-width: 992px) {
  .brand-title {
    font-size: 1.8rem;
    color: #FFFFFF;
  }
}

@media (min-width: 992px) {
  .brand-desc {
    color: #FFFFFF;
    font-family: 'Designil Thai Font';
    unicode-range: U+0E00–U+0E7F;
  }

.nav{
  padding: 5px;
}
}
/*# sourceMappingURL=login.min.css.map */




        
        </style>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

      {{-- <main class="py-4">
        @yield('content')
    </main> --}}
    </div>
</body>
</html>