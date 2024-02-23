@extends('admin.parent')

@section('content')
    <div class="card">
        <h1 class="m-3">Category index</h1>

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
                    <td>{{ $row->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        <a href="{{ route('category.show', $row->id) }}" class="m-2 btn btn-info">Show</a>
                        <a href="{{ route('category.edit', $row->id) }}" class="m-2 btn btn-warning">update</a>
                        <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="m-2 btn btn-danger">
                            Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
