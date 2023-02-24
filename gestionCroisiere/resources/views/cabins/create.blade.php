@extends('cabins.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Add a new cabin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('cabins.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cabins.store') }}" method="POST">
        @csrf

        <div class="row text-center d-flex justify-content-center p-2 border shadow">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control text-center" placeholder="Saisir un nom">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>image:</strong>
                    <input type="text" name="image" class="form-control text-center" placeholder="Image">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>area:</strong>
                    <input type="text" name="area" class="form-control text-center" placeholder="Area">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>cruise_ship_id:</strong>
                    <input type="text" name="cruise_ship_id" class="form-control text-center"
                        placeholder="Cruise-ship Id">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control text-center" style="height:150px" name="description" placeholder="Description"></textarea>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>

    </form>
@endsection
