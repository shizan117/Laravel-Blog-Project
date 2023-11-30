@extends('admin.master')
@section('title')
    Category Create
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card py-2">
                    <h3 class="text-center text-primary fs-2">Create Category</h3>
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="mb-3 col-md-8 mx-auto">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name">
                        </div>
                        <div class="mb-3 col-md-4 mx-auto">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
