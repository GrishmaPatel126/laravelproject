@extends('layouts.app')
@section('content')
    <h2 class="text-center">Student Data</h2>

    <div class="container">
<a name="create" id="create" class="btn btn-primary" href="{{ route('students.create') }}" role="button">Create</a>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th>Clubs</th>
                    <th>Hobby</th>
                    <th>Games</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->subject }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->clubs }}</td>
                        <td>{{ $student->hobby }}</td>
                        <td>{{ $student->games }}</td>
                        <td><a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a></td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
