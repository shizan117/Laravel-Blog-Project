@extends('admin.master')
@section('title')
    Manage About
@endsection

@section('content')
    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage About</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Background Image</th>
                        <th>About Image</th>
                        <th>Volunteer Google Form Link</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th style="width: 15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($abouts as $about)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $about->title }}</td>
                            <td>{{ Str::limit($about->content, 50) }}</td>
                            <td><img src="{{ asset($about->background_image) }}" class="img-thumbnail" alt=""></td>
                            <td><img src="{{ asset($about->about_image) }}" class="img-thumbnail" alt=""></td>
                            <td>{{ $about->volunteer_google_form }}</td>
                            <td>{{ date('j-M-Y', strtotime($about->created_at)) }}</td>
                            <td>{{ date('j-M-Y', strtotime($about->updated_at)) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('abouts.destroy', $about->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $about->id }}">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this item?')">DELETE</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
