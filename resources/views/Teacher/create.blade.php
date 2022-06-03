@extends('layouts.app')
@section('content')

<h2 class="text-center">Create Student</h2>
<div class="container">
    {!! Form::open([
        'route' => ['students.store'],
        'method' => 'post'
    ]) !!}
    @csrf

    @include('Student.form')

    <div class="form-group">
        <br>
        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('students.index')}}" class="btn btn-primary">Back</a>
    </div>

   {!! Form::close() !!}
</div>

@endsection
