@extends('layouts.app')
@section('content')
    <h2 class="text-center">Teacher Data</h2>

    <div class="container">
<a name="create" id="create" class="btn btn-primary" href="{{ route('teachers.create') }}" role="button">Create</a>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Student Name</th>
                    <th>Student Number</th>
                    <th>Student Email</th>
                    <th>Student Subject</th>
                    <th>Teacher Name</th>
                    <th>Teacher Number</th>
                    <th>Teacher Email</th>
                    <th>Teacher Subject</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->Stu_name }}</td>
                        <td>{{ $teacher->Stu_number }}</td>
                        <td>{{ $teacher->Stu_email }}</td>
                        <td>{{ $teacher->Stu_subject }}</td>
                        <td>{{ $teacher->tech_name }}</td>
                        <td>{{ $teacher->tech_number }}</td>
                        <td>{{ $teacher->tech_email }}</td>
                        <td>{{ $teacher->tech_subject }}</td>
                        <td><a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
