@extends('admin.parent')

@section('content')
    <div class="card">
        <h1>fruit index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('buah.create') }}" class="btn btn-success">Create fruit</a>
        </div>

    </div>
@endsection
