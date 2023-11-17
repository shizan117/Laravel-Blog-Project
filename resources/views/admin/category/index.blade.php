@extends('admin.master')
@section('title')
    Manage Catagory
@endsection

@section('content')
    <!-- Page Heading -->
    <h3 class="h3 mb-2 text-gray-800">Tables</h3>

    <!-- DataTales Example -->
    <div class="card col-sm-8 offset-sm-2 shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                   <tr >
                       <th>Sr No.</th>
                       <th>Catagory Name</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($catagories as $catagory)
                       <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$catagory->catagory_name}}</td>
                           <td>{{$catagory->status}}</td>
                           <td>
                               <a href="{{route('catagories.edit',$catagory->id)}}" class="btn btn-success float-start m-1">Edit</a>
                               @if($catagory->status==1)
                                   <a href="{{route('catagories.show',$catagory->id)}}" class="btn float-start m-1 btn-success">Active</a>
                               @else
                                   <a href="{{route('catagories.show',$catagory->id)}}" class="btn float-start m-1 btn-dark">Inactive</a>
                              @endif
                               <form action="{{route('catagories.destroy',$catagory->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <input type="hidden" name="id" value="{{$catagory->id}}">
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
