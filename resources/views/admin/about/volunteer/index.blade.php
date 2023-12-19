@extends('admin.master')
@section('title', 'Manage Volunteers')

@section('content')
    <!-- Page Heading -->


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Volunteers</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Profession</th>
                        <th>Education</th>
                        <th>Last Educational Institution</th>
                        <th>Blood Group</th>
                        <th>Skills</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Status</th>
                        <th style="width: 25%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($volunteers as $volunteer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->email }}</td>
                            <td>{{ $volunteer->phone_number }}</td>
                            <td>{{ $volunteer->gender }}</td>
                            <td>{{ $volunteer->date_of_birth }}</td>
                            <td>{{ $volunteer->profession }}</td>
                            <td>{{ $volunteer->education }}</td>
                            <td>{{ $volunteer->last_educational_institution }}</td>
                            <td>{{ $volunteer->blood_group }}</td>
                            <td>{{ $volunteer->skills }}</td>

                            <td>{{ date('j-M-Y', strtotime($volunteer->created_at)) }}</td>
                            <td>{{ date('j-M-Y', strtotime($volunteer->updated_at)) }}</td>
                            <td>
                                @if($volunteer->status == 1)
                                    <span class="text-success">Successfully Added as Volunteer</span>
                                @else
                                    <span class="bg-warning text-dark">Pending Approval</span>
                                @endif
                            </td>

                            <td>
                                <div class="btn-group" role="group">
                                    @if($volunteer->status == 1)
                                        <a href="{{route('volunteer.status',$volunteer->id)}}" class="btn float-start m-1 btn-dark">Not Approve</a>

                                    @else
                                        <a href="{{route('volunteer.status',$volunteer->id)}}" class="btn float-start m-1 btn-success">Approve</a>
                                    @endif

                                    <form action="{{ route('volunteersDestroy', ['id' => $volunteer->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this item?')">DELETE</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="14" class="text-center">No volunteers found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
