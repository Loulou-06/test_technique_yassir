@extends('companies.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Companie</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('companies.create') }}"> Create a new company</a>
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
                <th>Logo</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($companies as $companie)
                <tr>

                    <td>{{ $companie->id }}</td>
                    <td>{{ $companie->name }}</td>
                    <td>{{ $companie->logo }}</td>
                    <td>{{ $companie->description }}</td>
                    <td>
                        <form action="{{ route('companies.destroy', $companie->id) }}" method="POST">

                            <a class="btn btn-outline-primary"
                                href="{{ route('companies.show', $companie->id) }}">Montrer</a>

                            <a class="btn btn-outline-success"
                                href="{{ route('companies.edit', $companie->id) }}">Éditer</a>

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
