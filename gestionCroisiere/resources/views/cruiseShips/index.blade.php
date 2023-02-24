@extends('cruiseShips.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Cruise-ship</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('cruiseShips.create') }}"> Create a new boat</a>
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
                        <form action="{{ route('cruiseShips.destroy', $cruiseShip->id) }}" method="POST">

                            <a class="btn btn-outline-primary"
                                href="{{ route('cruiseShips.show', $cruiseShip->id) }}">Montrer</a>

                            <a class="btn btn-outline-success"
                                href="{{ route('cruiseShips.edit', $cruiseShip->id) }}">Éditer</a>

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
