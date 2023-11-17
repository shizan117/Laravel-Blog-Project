@extends('admin.master')
@section('title')
    Blog Create
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card py-2">
                    <h3 class="text-center text-primary fs-4"> Create Blog</h3>
                    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>


                        <div class="mb-3">
                            <label for="catagory_name" class="form-label">Catagory Name</label>
                            <select type="text" class="form-control" id="catagory_name" name="catagory_id">
                                <option value="" selected> Select Catagory</option>
                                @foreach($catagories as $catagory)
                                    <option value="{{$catagory->id}}">{{$catagory->catagory_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Blog Author</label>
                            <input type="text" class="form-control"  name="author_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Blog description</label>
                            <textarea type="text" class="form-control"  name="description"> </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Blog Posting Date</label>
                            <input type="date" class="form-control"  name="date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Blog Image</label>
                            <input type="file" class="form-control"  name="image">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success w-100 " >Submit Catagory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
