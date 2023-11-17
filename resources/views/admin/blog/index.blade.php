@extends('admin.master')
@section('title')
    Manage Blog
@endsection

@section('content')
    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Tables</h3>

    <!-- DataTales Example -->
    <div class="card  shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr >
                        <th>Sr No.</th>
                        <th>Blog Title</th>
                        <th>Blog Catagory Name</th>
                        <th>Author Name</th>
                        <th>Description </th>
                        <th>Date </th>
                        <th>Image </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->catagory->catagory_name}}</td>
                            <td>{{$blog->author_name}}</td>
                            <td>{{$blog->description}}</td>
                            <td>{{$blog->date}}</td>
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
                                    <button type="submit" class="btn btn-danger float-start m-1">DELETE</button>
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
