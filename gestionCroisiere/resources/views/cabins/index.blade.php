@extends('cabins.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Cabins</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('cabins.create') }}"> Créer une nouvelle cabine</a>
            </div>
        </div>
    </div>
   
    @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{!! Session::get('success') !!}</p>
        </div>
    @endif
   <div class="table-responsive">
       <table class="table table-bordered table-dark table-striped table-hover">
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Image</th>
               <th>Description</th>
               <th>Area</th>
               <th>Cruise ship id</th>
               <th width="280px">Action</th>
           </tr>
           @foreach ($cabins as $cabin)
           <tr>
              
               <td>{{ $cabin->id }}</td>
               <td>{{ $cabin->name }}</td>
               <td>{{ $cabin->logo }}</td>
               <td>{{ $cabin->description }}</td>
               <td>{{ $cabin->area }}m</td>
               <td>{{ $cabin->cruise_ship_id }}</td>
               <td>
                   <form action="{{ route('cabins.destroy',$cabin->id) }}" method="POST">
      
                       <a class="btn btn-outline-primary" href="{{ route('cabins.show', $cabin->id) }}">Montrer</a>
       
                       <a class="btn btn-outline-success" href="{{ route('cabins.edit', $cabin->id) }}">Éditer</a>
      
                       @csrf
                       @method('DELETE')
         
                       <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </table>
   </div>
    {{-- <div class="d-flex justify-content-center pagination-lg"> --}}
    {{-- {!! $companies->links('pagination::bootstrap-4') !!} --}}
      {{-- </div> --}}
@endsection


{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Company</h1>
        <form method="POST" action="{{ route('companies.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="text" name="logo" id="logo" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection --}}
