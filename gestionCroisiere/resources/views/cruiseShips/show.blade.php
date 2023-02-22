@extends('cruiseShips.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Afficher la companie</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('cruiseShips.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   @if($cruiseShip->id)
    <div class="row p-3 mb-2 bg-dark text-white ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $cruiseShip->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                {{ $cruiseShip->image }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $cruiseShip->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year of construction:</strong>
                {{ $cruiseShip->year_of_construction }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ship length:</strong>
                {{ $cruiseShip->ship_length }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ship width:</strong>
                {{ $cruiseShip->ship_width }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>company Id:</strong>
                {{ $cruiseShip->company_id }}
            </div>
        </div>
        @endif
        {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantité en stock:</strong>
                {{ $companie->qstock }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $companie->description }}
            </div>
        </div> --}}
    </div>
@endsection