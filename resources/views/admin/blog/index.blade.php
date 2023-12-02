@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('content')
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card  shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Blogs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                        <th>Sr No.</th>
                        <th>Blog Title</th>
                        <th>Blog Category Name</th>
                        <th>Author Name</th>
                        <th>Description </th>
                        <th>Selected Date </th>
                        <th>Created Date </th>
                        <th>Updated Date </th>
                        <th>Image </th>
                        <th>Status</th>
                        <th style="width: 5%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->category_name}}</td>
                            <td>{{$blog->author_name}}</td>
                            <td>{{substr($blog->description,0,30).'[...]' }}</td>
                            <td>{{date('j- M- Y',strtotime($blog->date))}}</td>
                            <td>{{date('j- M- Y',strtotime($blog->created_at))}}</td>
                            <td>{{date('j- M- Y',strtotime($blog->updated_at))}}</td>
                            <td><img src="{{asset($blog->image)}}"  width="50px" height="50px" alt=""></td>
                            <td>{{$blog->status}}</td>
                            <td>
                                <a href="{{route('blogs.edit',$blog->id)}}" class="btn btn-success float-start m-1">Edit</a>
                                @if($blog->status==1)
                                    <a href="{{route('blogs.show',$blog->id)}}" class="btn float-start m-1 btn-success">Active</a>
                                @else
                                    <a href="{{route('blogs.show',$blog->id)}}" class="btn float-start m-1 btn-dark">Inactive</a>
                                @endif
                                <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$blog->id}}">
                                    <button type="submit" class="btn btn-danger float-start m-1"onclick="return confirm('Are you sure to delete this item?')">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
