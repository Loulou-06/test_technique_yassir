@extends('cabins.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Cabins</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('cabins.create') }}"> Create a new cabin</a>
            </div>
        </div>
    </div>

    @if (Session::has('success'))
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
                        <form action="{{ route('cabins.destroy', $cabin->id) }}" method="POST">

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
@endsection
