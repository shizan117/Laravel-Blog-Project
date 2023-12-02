@extends('admin.master')
@section('title')
    Manage Event
@endsection

@section('content')
    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Event</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Event Title</th>
                        <th>Date and Time</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th style="width: 5%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{date('j- M- Y H:i', strtotime($event->datetime))}}</td>
                            <td>{{$event->location}}</td>
                            <td>{{substr($event->description,0,30).'[...]'}}</td>
                            <td><img src="{{asset($event->image)}}" width="50px" height="50px" alt=""></td>
                            <td>{{$event->status}}</td>
                            <td>{{date('j- M- Y', strtotime($event->created_at))}}</td>
                            <td>{{date('j- M- Y', strtotime($event->updated_at))}}</td>
                            <td>
                                <a href="{{route('events.edit', $event->id)}}" class="btn btn-success float-start m-1">Edit</a>
                                @if($event->status == 1)
                                    <a href="{{route('events.show', $event->id)}}" class="btn float-start m-1 btn-success">Active</a>
                                @else
                                    <a href="{{route('events.show', $event->id)}}" class="btn float-start m-1 btn-dark">Inactive</a>
                                @endif
                                <form action="{{route('events.destroy', $event->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$event->id}}">
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
