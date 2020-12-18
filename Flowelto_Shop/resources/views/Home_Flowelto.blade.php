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
        body{
          background-color: linen;
        }

        .caterogi{
          background-color: lightpink;
        }
        .img{
          width: 220px;
          max-height: 300px;
        }
        .content{
          background-color: palevioletred;
        }
    </style>    
    
</head>

<body>
     {{-- navigation bar diatas --}}
     <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #fd3a69">
        <a class="navbar-brand" href="#">Flowelto Shop</a>
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
                  <a class="dropdown-item" href="#">Hand Bouquet (gift)</a>
                  <a class="dropdown-item" href="#">Wedding Bouquet</a>
                  <a class="dropdown-item" href="#">Fleur Box</a>
                  <a class="dropdown-item" href="#">Vase Arrangements</a>
                </div>
              </li>
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

  <div>
    <div>
        <div class="tulisan text-center" style="margin-top: 20px">
            <p style="font-style: italic; font-size: 150%">Welcome to Flowelto Shop</p>
            <h5>The Best Flower Shop in Binus Univeristy</h5>
        </div>
        @foreach ($homecategory->chunk(2) as $flower1) 
        <div class="row  mt-5 mx-5 d-flex justify-content-center">
          @foreach ($flower1 as $flower2)
                <div class=" border col-2 content py-2 px-0 mx-1 text-center ">
                  <a href="/#">
                    <img class="img"src="{{asset('gambar_bunga/'.$flower2->flower_image)}}" alt="{{$flower2->flower_image}}">
                    <p class="" style="mt-3">{{$flower2->flower_name}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
    </div>
</div>
</body>
</html>