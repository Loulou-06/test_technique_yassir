@extends('companies.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Display the company</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('companies.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    @if ($company->id)
        <div class="row border shadow">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id:</strong>
                    {{ $company->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $company->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Logo:</strong>
                    {{ $company->logo }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $company->description }}
                </div>
            </div>
    @endif
    </div>
@endsection
