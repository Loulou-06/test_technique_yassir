@extends('cruiseShips.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Ajouter un nouveau bateau</h2>
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
   
<form action="{{ route('cruiseShips.store') }}" method="POST">
    @csrf
  
     <div class="row text-center d-flex justify-content-center">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control text-center" placeholder="Saisir un nom">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="text" name="image" class="form-control text-center" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control text-center" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Year of construction:</strong>
                <input type="text" name="year_of_construction" class="form-control text-center" placeholder="Year of construction">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ship length:</strong>
                <input type="text" name="ship_length" class="form-control text-center" placeholder="Ship length">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ship width:</strong>
                <input type="text" name="ship_width" class="form-control text-center" placeholder="Ship width">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Company:</strong>
                <input type="text" name="company_id" class="form-control text-center" placeholder="Company">
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