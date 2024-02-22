@extends('admin.parent')

@section('content')
    <div class="card p-4">

        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- method post = create --}}
            {{-- method delete = delete --}}
            {{-- method put = update --}}
            {{-- method patch = update --}}

            <label for="">Name Category</label>
            <input type="text" value="{{ $category->name }}" class="form-control" name="name">
            
            <button type="submit" class="mt-3 btn btn-warning">update</button>
        </form>

    </div>
@endsection
