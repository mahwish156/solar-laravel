<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">

    <title> WEBSOLAR </title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active mx-3" aria-current="page" href="/">Home</a> <!-- Added mx-3 -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle mx-3"  aria-current="page" href="/services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a> <!-- Added mx-3 -->
                    <ul class="dropdown-menu" aria-labelledby="v3">
                    <li><a class="dropdown-item nav-link scrollto" href="/services">Solar panel</a></li> <!-- Changed href to #service3 -->
                        
                    <li><a class="dropdown-item nav-link scrollto" href="#inverter">Invertor</a></li>
                        <li><a class="dropdown-item nav-link scrollto" href="#installation">Installation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-3" aria-current="page" href="/contact">Contact</a> <!-- Added mx-3 -->
                </li>
                <li class="nav-item">
                    <a class="nav-link active mx-3" aria-current="page" href="/about">About</a> <!-- Added mx-3 -->
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield("mycontent")





 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>