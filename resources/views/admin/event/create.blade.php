@extends('admin.master')
@section('title')
    Event Create
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Event Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="datetime" class="col-md-4 col-form-label text-md-right">Event Date and Time</label>

                                <div class="col-md-6">
                                    <input id="datetime" type="datetime-local" class="form-control" name="datetime" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right">Event Location</label>

                                <div class="col-md-6">
                                    <input id="location" type="text" class="form-control" name="location"  required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Event Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control"  name="description" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Event Image</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control " name="image" accept="image/*" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Event
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
