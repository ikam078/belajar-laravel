@extends('admin.parent')

@section('content')
    <div class="card">
        <h1>Category index</h1>

        <hr>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr>
                    <td>no</td>
                    <td>name</td>
                    <td>action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($category as $row)
                <tr>
                    <td>{{ $row->loop }}1</td>
                    <td>{{ $row->name }}category 1</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
