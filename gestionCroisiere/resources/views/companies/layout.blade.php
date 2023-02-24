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
                <a class="navbar-brand m-2" href="/"><img width="50" height="50"
                        src="{{ asset('storage/etoile_starcroisieres.png') }}" class="img-fluid"
                        alt="étoile StarCroisières"><span class="text-warning">  Star</span><span
                        class="text-info">Croisières</span>
                </a>
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
        {{-- penser a faire un foreach pour creer la pagination --}}
        {{-- <nav class="d-flex justify-content-center" aria-label="Page navigation center">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> --}}
    </div>

</body>

</html>
