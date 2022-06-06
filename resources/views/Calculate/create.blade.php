@extends('layouts.app')
@section('content')

<h2 class="text-center">Create Teacher</h2>
<div class="container">
    {!! Form::open([
        'route' => ['teachers.store'],
        'method' => 'post'
    ]) !!}
    @csrf

    @include('Teacher.form')

    <div class="form-group">
        <br>
        <button class="btn btn-primary" type="submit">Save</button>
        <a href="{{ route('teachers.index')}}" class="btn btn-primary">Back</a>
    </div>

   {!! Form::close() !!}
</div>

@endsection
