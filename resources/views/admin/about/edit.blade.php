@extends('admin.master')
@section('title')
    About Edit
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h3 class="text-center text-primary fs-2 mb-4">Edit About Page</h3>
                    <form action="{{ route('abouts.update', $about->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $about->content }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="background_image" class="form-label">Background Image</label>
                            <input type="file" class="form-control" id="background_image" name="background_image">
                            <img src="{{ asset($about->background_image) }}" alt="Background Image" class="img-fluid mt-2">
                        </div>

                        <div class="mb-3">
                            <label for="about_image" class="form-label">About Image</label>
                            <input type="file" class="form-control" id="about_image" name="about_image">
                            <img src="{{ asset($about->about_image) }}" alt="About Image" class="img-fluid mt-2">
                        </div>

                        <!-- Add a div and input for Volunteer Google Form link -->
                        <div class="mb-3">
                            <label for="volunteer_google_form" class="form-label">Volunteer Google Form Link</label>
                            <input type="text" class="form-control" id="volunteer_google_form" name="volunteer_google_form" value="{{$about->volunteer_google_form}}" placeholder="Enter Google Form Link for Volunteers">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success"  onclick="return confirm('Are you sure you want to update?')">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
