@extends('cabins.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>>Display the cabin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('cabins.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    @if ($cabin->id)
        <div class="row border shadow">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    {{ $cabin->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $cabin->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    {{ $cabin->image }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $cabin->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Area:</strong>
                    {{ $cabin->area }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cruise ship id:</strong>
                    {{ $cabin->cruise_ship_id }}
                </div>
            </div>
    @endif
    </div>
@endsection
