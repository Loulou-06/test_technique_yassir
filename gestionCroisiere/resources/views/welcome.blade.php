<!DOCTYPE html>
<html>

<head>
    <title>starCroisiere</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <style>
        body {
            background-color: #9ac2cf;
        }
    </style>
</head>

<body>
    <div class="container p-4 mt-5 border border-primary shadow-lg p-3 mb-5 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 d-flex justify-content-between rounded">
            <div>
                <a class="navbar-brand m-2" href="#"><img width="50" height="50"
                        src="{{ asset('storage/etoile_starcroisieres.png') }}" class="img-fluid"
                        alt="étoile StarCroisières"><span class="text-warning">  Star</span><span
                        class="text-info">Croisières</span></a>
            </div>
            <div>
                <div class="dropdown m-2">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="nav-item nav-link" href="../companies">Companies</a>
                        <a class="nav-item nav-link" href="../cruiseships">Cruise-ship</a>
                        <a class="nav-item nav-link" href="../cabins">Cabin</a>
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')

        <div class="row justify-content-center">
            <div class="card  m-2 pt-2"
                style="width: 18rem; height: 20rem; background: linear-gradient(
                45deg,
                hsla(168, 85%, 52%, 0.5),
                hsla(263, 88%, 45%, 0.5) 100%
              );">
                <a href="./companies" class="btn">
                    <div class="shadow">
                        <img class="card-img-top container mt-2 p-2  "
                            style="width: 15rem; height: 10rem; background: linear-gradient(
                        45deg,
                        hsla(168, 85%, 52%, 0.5),
                        hsla(263, 88%, 45%, 0.5) 100%
                      );"
                            src="{{ asset('storage/companyName.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><u>The companies</u></h5>
                        <p class="card-text">Here you can create, show, update and delete a company</p>
                    </div>
                </a>
            </div>
            <div class="card m-2 pt-2"
                style="width: 18rem; height: 20rem; background: linear-gradient(
            45deg,
            hsla(168, 85%, 52%, 0.5),
            hsla(263, 88%, 45%, 0.5) 100%
          );">
                <a href="./cruiseships" class="btn">
                    <div class="shadow">
                        <img class="card-img-top mt-2 p-2"
                            style="width: 15rem; height: 10rem; background: linear-gradient(
                    45deg,
                    hsla(168, 85%, 52%, 0.5),
                    hsla(263, 88%, 45%, 0.5) 100%
                  );"
                            src="{{ asset('storage/cruiseShip.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><u>The cruise ships</u></h5>
                        <p class="card-text">Here you can create, show, update and delete a cruise ship</p>
                    </div>
                </a>
            </div>
            <div class="card m-2 pt-2"
                style="width: 18rem; height: 20rem; background: linear-gradient(
        45deg,
        hsla(168, 85%, 52%, 0.5),
        hsla(263, 88%, 45%, 0.5) 100%
      );">
                <a href="./cabins" class="btn">
                    <div  class="shadow ">
                        <img class="card-img-top mt-2 p-2"
                            style="width: 15rem; height: 10rem; background: linear-gradient(
                45deg,
                hsla(168, 85%, 52%, 0.5),
                hsla(263, 88%, 45%, 0.5) 100%
              );"
                            src="{{ asset('storage/hublot-starcroisiere.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><u>The cabins</u></h5>
                        <p class="card-text">Here you can create, show, update and delete a cabin</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
