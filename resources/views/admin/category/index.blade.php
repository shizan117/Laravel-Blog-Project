@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('content')
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card col-sm-8 offset-sm-2 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                   <tr >
                       <th>Sr No.</th>
                       <th>Category Name</th>
                       <th>Status</th>
                       <th>Created Date</th>
                       <th>Updated Date</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($categories as $Category)
                       <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$Category->category_name}}</td>
                           <td>{{$Category->status}}</td>
                           <td>{{$Category->created_at}}</td>
                           <td>{{$Category->updated_at}}</td>
                           <td>
                               <a href="{{route('categories.edit',$Category->id)}}" class="btn btn-success float-start m-1">Edit</a>
                               @if($Category->status==1)
                                   <a href="{{route('categories.show',$Category->id)}}" class="btn float-start m-1 btn-success">Active</a>
                               @else
                                   <a href="{{route('categories.show',$Category->id)}}" class="btn float-start m-1 btn-dark">Inactive</a>
                              @endif
                               <form action="{{route('categories.destroy',$Category->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <input type="hidden" name="id" value="{{$Category->id}}">
                                   <button type="submit" class="btn btn-danger float-start m-1" onclick="return confirm('Are you sure to delete this item?')">DELETE</button>
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
