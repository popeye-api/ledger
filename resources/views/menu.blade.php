<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
<style>
  .page-login {
    background: linear-gradient(165deg, #f7f5fb 50%, #fff 50%);
  }

  .login-bg {
    position: relative;
  }

  .card-size{
    
    weight : 40%;
    

  }

  .img-bg{
    /* background-image: url("/storage/bg.jpg"); */
    height : 63px;
    weight: 50px;
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
</style>
</head>
<body>

  <nav class="nav navbar-expand-sm navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
    <div class="d-inline-flex align-items-center">
              <div class="brand shadow mr-3">
                Ls
              </div>
              <h5 class="brand-title">Ledger system</h5>
    </div>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('v_dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('v_ledger') }}">Ledger account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('report') }}">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('Profile') }}" >Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="cursor:pointer " data-toggle="modal" data-target="#logout" >Logout</a>
      </li>
    </ul>
  </div>
  </nav>

<!-- modal logout -->
  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <p>Do you want to logout?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-success"  ><a class="nav-link d-flex align-items-center py-0 text-white" href="{{ url('/logout') }}">Comfirm</a></button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 


 <!-- Page wrapper -->
<div class="page-wrapper">
  @yield('content')
</div> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
{{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
  );

  function reClassInValid(x) {
  document.getElementById(x).classList.remove('is-invalid');
  }
</script>    


@yield('script')
</body>
</html>