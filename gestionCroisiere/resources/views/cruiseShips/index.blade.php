@extends('cruiseShips.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Cruise-ship</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('cruiseShips.create') }}"> Créer un nouveau bateau</a>
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
                   <th>Year of construction</th>
                   <th>Ship_length</th>
                   <th>Ship_width</th>
                   <th>Company</th>
                   <th width="280px">Action</th>
               </tr>
           @foreach ($cruiseShips as $cruiseShip)
           <tr>
              
               <td>{{ $cruiseShip->id }}</td>
               <td>{{ $cruiseShip->name }}</td>
               <td>{{ $cruiseShip->image }}</td>
               <td>{{ $cruiseShip->description }}</td>
               <td>{{ $cruiseShip->year_of_construction }}</td>
               <td>{{ $cruiseShip->ship_length }}m</td>
               <td>{{ $cruiseShip->ship_width }}m</td>
               <td>{{ $cruiseShip->company_id }}</td>
               <td>
                   <form action="{{ route('cruiseShips.destroy',$cruiseShip->id) }}" method="POST">
      
                       <a class="btn btn-outline-primary" href="{{ route('cruiseShips.show', $cruiseShip->id) }}">Montrer</a>
       
                       <a class="btn btn-outline-success" href="{{ route('cruiseShips.edit', $cruiseShip->id) }}">Éditer</a>
      
                       @csrf
                       @method('DELETE')
         
                       <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                   </form>
               </td>
           </tr>
           @endforeach
       </table>
   </div>
    {{-- <div class="d-flex justify-content-center pagination-lg">
    {!! $cruiseShips->links('pagination::bootstrap-4') !!}
      </div> --}}
@endsection


{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Company</h1>
        <form method="POST" action="{{ route('cruiseShips.store') }}">
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
