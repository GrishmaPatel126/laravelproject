@extends('layouts.app')
@section('content')
<h2 class="text-center">Create </h2>
<div class="container ">

    <form action="{{ route('quarries.update',$quarry->id)}}" method="post">
        @csrf
        @method('PATCH')
    @include('Quarry.form')
        <div class="form-group">
            <br>
            <button class="btn btn-primary" type="submit">Save</button>
            <a href="{{ route('quarries.index')}}" class="btn btn-primary">Back</a>
        </div>
    </form>
</div>
@endsection
