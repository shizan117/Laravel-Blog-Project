@extends('admin.master')

@section('title')
    Category
@endsection

@section('content')

    <div class="row">
       <div class="col-md-12">
           <div class="card">
               <form action="{{route('categories.store')}} ">
                   @csrf
                   <div class="mb-3 ">
                       <label for="exampleInputEmail1" class="form-label">Add Category</label>
                       <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                   </div>

                   <button type="submit" class="btn btn-primary">Submit</button>
               </form>
           </div>

       </div>
    </div>




@endsection
