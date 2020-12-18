<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{asset('jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('popper/popper.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset("Bootstrap/css/bootstrap.min.css")}}">
    <script src="{{ asset('Bootstrap/js/bootstrap.min.js')}}"
    ></script>
   

    <style>
        .navigationbar{
            margin-left: 1000px;
            display: flex;
            justify-content: space-around;

        }
        .navbar-brand{
            display:flex;
            justify-content: space-around;
            
        }

        .login_email{
            display:flex;
            justify-content: center;
            margin-top: 600px;
                   
        }
        body{
            background-color: linen;
        }

        .registertxt{
            justify-content: center;
            margin-top: 10px; 
            margin-left: 750px;
        }
        .RegForm{
            margin-left: 500px;
        }
       
    </style>
</head>
<body>
     {{-- navigation bar diatas register --}}
     <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fd3a69">
        <a class="navbar-brand" href="/Home">Flowelto Shop</a>
        <div class="navigationbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categoris
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Bouquet (gift)</a>
                  <a class="dropdown-item" href="#">Acrylic Flower</a>
                  <a class="dropdown-item" href="#">Fleur Box</a>
                  <a class="dropdown-item" href="#">Vase Arrangements</a>
                </div>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="/Login">Login<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Register">Register</a>
            </li>
            <li class="nav-tanggal">
                <a class="nav-link" href="#">Sat,16 Mei 2020</a>
              </li> 
          </ul>
        </div>
      </div> 
    </nav>

    <h1 class="registertxt">Register</h1>

    {{-- buat form register --}}
    @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
          @endif
       <div class="RegForm"> 

        <form class="px-5 py-2" action="/Regist" method="POST" >
          @csrf
            <div class="form-group col-md-6" >
                <label for="exampleDropdownFormEmail1" class="col-form-label">Username</label>
                <input name="username" type="Username" class="form-control" id="exampleDropdownFormEmail1" minlength="5" required>
            </div>
          <div class="form-group col-md-6">
            <label for="exampleDropdownFormEmail2">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail2" required>
          </div>
          <div class="form-group col-md-6">
            <label  for="exampleDropdownFormPassword1">Password</label>
            <input name="password"type="password" class="form-control" id="exampleDropdownFormPassword1" minlength="8" required>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleDropdownFormPassword2">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleDropdownFormPassword2" required>
          </div>
          <fieldset class="form-group col-md-6">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked >
                  <label class="form-check-label" for="gridRadios1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                  <label class="form-check-label" for="gridRadios2">
                    Female
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
          <div class="form-group col-md-6">
            <label for="inputDateBirth">Date Birth</label>
            <input name="DOB" type="text" class="form-control" id="inputDateBirth" placeholder="mm/dd/yyyy" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input name="address" type="text" class="form-control" id="inputAddress" minlength="10" required>
          </div>
          <button type="submit" class="btn btn-primary" style="margin-left: 20px">Register</button>
        </form>
        <div class="dropdown-divider"></div>
    </div> 
        <script>
          var password= document.getElementById("exampleDropdownFormPassword1"),
          Confirmpassword=document.getElementById("exampleDropdownFormPassword2");
      function ValPassword(){
        if(password.value != Confirmpassword.value) {
          Confirmpassword.setCustomValidity("Passwords Don't Match");
        } else {
          Confirmpassword.setCustomValidity('');
        }
      }
      password.onchange = ValPassword;
      Confirmpassword.onkeyup = ValPassword;
     </script>  
</body>
</html>