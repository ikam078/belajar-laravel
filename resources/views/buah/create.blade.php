@extends('admin.create')
@section('content')
    <div class="card p-4">

        <h1>Create buah</h1>

        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="buah" name="name">
                <label for="floatingInput">nama buah</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="harga" name="name">
                <label for="floatingInput">harga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="warna" name="name">
                <label for="floatingInput">warna</label>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
@endsection
