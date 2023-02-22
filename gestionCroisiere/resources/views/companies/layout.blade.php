<!DOCTYPE html>
<html>

<head>
    <title>Exemple d'une application CRUD Laravel 8 - apcpedagogie.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #9ac2cf;
        }
    </style>
</head>

<body>

    <div class="container p-4 mt-5 border border-primary shadow-lg p-3 mb-5 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 d-flex justify-content-between rounded">
            
            
            {{-- regler le souci du inline quand on ouvre le burger --}}
            <div>
                <a class="navbar-brand m-2" href="#"><img width="50" height="50" src="{{asset('storage/etoile_starcroisieres.png')}}" class="img-fluid"
                        alt="étoile StarCroisières"><span class="text-warning">Star</span><span
                        class="text-info">Croisières</span></a>
            </div>
            
            <div>
                <button class="navbar-toggler m-2" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse m-2" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        {{-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> --}}
                        <a class="nav-item nav-link" href="../companies">Companies</a>
                        <a class="nav-item nav-link" href="../cruiseships">Cruise-ship</a>
                        <a class="nav-item nav-link" href="../cabins">Cabin</a>
                    </div>
                </div>
            </div>
            {{-- regler le souci du inline quand on ouvre le burger --}}


        </nav>
        @yield('content')
        {{-- penser a faire un foreach pour creer la pagination --}}
        <nav class="d-flex justify-content-center" aria-label="Page navigation center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>
