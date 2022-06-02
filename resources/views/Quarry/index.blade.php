@extends('layouts.app')
@section('content')

<h1 class="text-center"> Index Page</h1>

    <a href="{{ route('quarries.create')}}">Create</a>

<table class="table" id="myTable">
    <thead class="thead-inverse">
        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Address</th>
            <th colspan="2" class="text-center" >Material</th>
            <th colspan="3" class="text-center">Weight</th>
            <th colspan="2" class="text-center">Payment</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($quarries as $quarry )
            @php
                $net_weight = $quarry->gross_weight + $quarry->tar_weight;
            @endphp
            <tr>

                <td scope="row"><a href="{{ route('quarries.show',$quarry->id) }}">{{ $quarry->name }}  </a></td>
                <td>{{ $quarry->number }}</td>
                <td>{{ $quarry->address }}</td>
                <td>{{ $quarry->material }}</td>
                <td>{{ $quarry->material_type }}</td>
                <td>{{ $quarry->gross_weight }}</td>
                <td>{{ $quarry->tar_weight }}</td>
                <td>{{ $net_weight }}</td>
                <td>{{ $quarry->payment }}</td>
                <td>{{ $quarry->payment_status }}</td>
                <td>{{ $quarry->material_delivery_status }}</td>
                <td>
                    <form action="{{ route('quarries.destroy',$quarry->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger ">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
@endsection
<Script src="{{asset('js/table.js')}}"></Script>
