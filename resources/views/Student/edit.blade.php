@extends('layouts.app')
@section('content')

<h2 class="text-center">Edit Data</h2>
<div class="container">
    {!! Form::model($student, [
        'route' => ['students.update', $student->id],
        'method' => 'post'
    ]) !!}
    @csrf
    @method('PATCH')

    @include('Student.form')

    <div class="form-group">
        <br>
        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('students.index')}}" class="btn btn-primary">Back</a>
    </div>

   {!! Form::close() !!}
</div>

@endsection
