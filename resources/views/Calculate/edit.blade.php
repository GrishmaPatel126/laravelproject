@extends('layouts.app')
@section('content')

<h2 class="text-center">Edit Teacher Data</h2>
<div class="container">
    {!! Form::model($teacher, [
        'route' => ['teachers.update', $teacher->id],
        'method' => 'post'
    ]) !!}
    @csrf
    @method('PATCH')

    @include('Teacher.form')        

    <div class="form-group">
        <br>
        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('teachers.index')}}" class="btn btn-primary">Back</a>
    </div>

   {!! Form::close() !!}
</div>

@endsection
