@extends('admin.master')
@section('title')
    Category Edit
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card py-2">
                    <h3 class="text-center text-primary fs-4"> Create Category</h3>
                    <form action="{{route('categories.update',$category->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category_name" value="{{$category->category_name}}" name="category_name">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success w-100 " >Submit Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
