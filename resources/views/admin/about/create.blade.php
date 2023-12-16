@extends('admin.master')
@section('title')
    About Create
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h3 class="text-center text-primary fs-2 mb-4">Create About Page</h3>
                    <form action="{{ route('abouts.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="background_image" class="form-label">Background Image</label>
                            <input type="file" class="form-control" id="background_image" name="background_image" required>
                        </div>

                        <div class="mb-3">
                            <label for="about_image" class="form-label">About Image</label>
                            <input type="file" class="form-control" id="about_image" name="about_image" required>
                        </div>

                        <!-- Add a div and input for Volunteer Google Form link -->
                        <div class="mb-3">
                            <label for="volunteer_google_form" class="form-label">Volunteer Google Form Link</label>
                            <input type="text" class="form-control" id="volunteer_google_form" name="volunteer_google_form" placeholder="Enter Google Form Link for Volunteers">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
