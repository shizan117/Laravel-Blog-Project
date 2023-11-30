@extends('admin.master')
@section('title')
    Blog Create
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card py-2">
                    <h3 class="text-center text-primary fs-2"> Create Blog</h3>
                    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-md-10 mx-auto">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" class="form-control mx-auto" id="title" name="title">
                        </div>

                        <div class="mb-3 col-md-10 mx-auto">
                            <label for="category_name" class="form-label">Category Name</label>
                            <select type="text" class="form-control mx-auto" id="category_name" name="category_id">
                                <option value="" selected> Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-10 mx-auto">
                            <label class="form-label">Blog Author</label>
                            <input type="text" class="form-control mx-auto" name="author_name">
                        </div>
                        <div class="mb-3 col-md-10 mx-auto">
                            <label class="form-label">Blog description</label>
                            <textarea type="text" class="form-control mx-auto" name="description"></textarea>
                        </div>
                        <div class="mb-3 col-md-10 mx-auto">
                            <label class="form-label">Blog Posting Date</label>
                            <input type="date" class="form-control mx-auto" name="date">
                        </div>
                        <div class="mb-3 col-md-10 mx-auto">
                            <label class="form-label">Blog Image</label>
                            <input type="file" class="form-control mx-auto" name="image">
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
