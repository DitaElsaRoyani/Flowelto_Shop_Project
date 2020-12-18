<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>

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
        body{
            background-color: linen;
        }
    </style>    
</head>
<body>
  
    {{-- navigation bar diatas login  --}}
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fd3a69">
        <a class="navbar-brand" href="/Home">Flowelto Shop</a>
        <div class="navigationbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/Home" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categoris
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Bouquet </a>
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
          @if (Auth::user()->roleadmin==0)
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Transaction History</a>
              <a class="dropdown-item" href="#">My Cart</a>
              <a class="dropdown-item" href="#">Change Password</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/Login">Logout</a>   
            </div>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manager
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Add Flower</a>
              <a class="dropdown-item" href="#">Manage Categoris</a>
              <a class="dropdown-item" href="#">Change Password</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/Login">Logout</a>   
            </div>
          </li>                  
        @endif
   
        </div>
      </div> 
    </nav>

    
    <h1 style="text-align: center">Change Password</h1>

  <form class="form-horizontal" method="POST" action="{{ route('change_password') }}">
    <div class="login_email dropdown-menu d-block" style="margin-top: -630px; margin-left: 720px; background-color: ">
        <form class="px-4 py-3">
          <div class="form-group{{ $errors->has('YourPassword') ? ' has-error' : '' }}">
            <label for="NewPassword" style="margin-left: 15px">Your Password</label>

            <div class="col-md-12">
                <input name="password" id="YourPassword" type="password" class="form-control" name="YourPassword" required>
            @if ($errors->has('YourPassword'))
            <span class="help-block">
                <strong>{{ $errors->first('YourPassword') }}</strong>
            </span>
             @endif
          </div>
        </div>

          <div class="form-group{{ $errors->has('NewPassword') ? ' has-error' : '' }}">
            <label for="NewPassword" style="margin-left: 15px">New Password</label>

            <div class="col-md-12">
               <input name="newpassword" id="NewPassword" type="password" class="form-control" name="NewPassword" required>
            @if ($errors->has('NewPassword'))
            <span class="help-block">
                <strong>{{ $errors->first('NewPassword') }}</strong>
            </span>
        @endif
          </div>
        </div> 
        <div class="form-group">
          <label for="new-password-confirm" style="margin-left: 15px">Confirm New Password</label>
          <div class="col-md-12">
            <input name="confnewpassword" id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
          </div>
        </div>
          <button type="Loginbutton" class="btn btn-primary" style="margin-left: 20px">Change Password</button>
        </form>
        <div class="dropdown-divider"></div>
    </div> 
  </form>
</body>
</html>