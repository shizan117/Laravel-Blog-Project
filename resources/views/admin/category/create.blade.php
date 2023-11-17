@extends('admin.master')
@section('title')
    Catagory Create
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card py-2">
                <h3 class="text-center text-primary fs-4"> Create Catagory</h3>
                <form action="{{route('catagories.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="catagory_name" class="form-label">Catagory Name</label>
                        <input type="text" class="form-control" id="catagory_name" name="catagory_name">
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
