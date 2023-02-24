@extends('cruiseShips.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modify the boat</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('cruiseShips.index') }}"> Retour</a>
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

    <form action="{{ route('cruiseShips.update', $cruiseShip->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row text-center d-flex justify-content-center p-2 border shadow">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="name" value="{{ $cruiseShip->name }}" class="form-control text-center"
                        placeholder="Saisir un nom">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="text" name="image" value="{{ $cruiseShip->image }}" class="form-control text-center"
                        placeholder="Image">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Year of construction:</strong>
                    <input class="form-control text-center" name="year_of_construction" placeholder="Year of construction"
                        value="{{ $cruiseShip->year_of_construction }}"">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>ship length:</strong>
                    <input class="form-control text-center" name="ship_length" placeholder="ship length"
                        value="{{ $cruiseShip->ship_length }}"">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>ship width:</strong>
                    <input class="form-control text-center" name="ship_width" placeholder="ship width"
                        value="{{ $cruiseShip->ship_width }}"">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Company Id:</strong>
                    <input class="form-control text-center" name="company_id" placeholder="Company id"
                        value="{{ $cruiseShip->company_id }}"">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control text-center" style="height:150px" name="description" placeholder="Description">{{ $cruiseShip->description }}</textarea>
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
