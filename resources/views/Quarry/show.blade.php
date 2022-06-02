@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="list-group">
        <a class="list-group-item list-group-item-action">Name : {{ $quarry->name }}</a>
        <a class="list-group-item list-group-item-action">Number : {{ $quarry->number }}</a>
        <a class="list-group-item list-group-item-action">Address : {{ $quarry->address }}</a>
        <a class="list-group-item list-group-item-action">Material : {{ $quarry->material }}</a>
        <a class="list-group-item list-group-item-action">Material Type : {{ $quarry->material_type }}</a>
        <a class="list-group-item list-group-item-action">Gross Weight: {{ $quarry->gross_weight }}</a>
        <a class="list-group-item list-group-item-action">Tar Weight: {{ $quarry->tar_weight }}</a>
        <a class="list-group-item list-group-item-action">Net Weight: {{ $quarry->net_weight }}</a>
        <a class="list-group-item list-group-item-action">Payment : {{ $quarry->payment }}</a>
        <a class="list-group-item list-group-item-action">Payment Status : {{ $quarry->payment_status }}</a>
        <a class="list-group-item list-group-item-action">Material Delivery Status : {{ $quarry->material_delivery_status }}</a>
        <a href="{{ route('quarries.edit',$quarry->id) }}" class="list-group-item list-group-item-action active border border-3 border-light">
            Edit
          </a>
          <a href="{{ route('quarries.index') }}" class="list-group-item list-group-item-action active border border-3 border-light">
          Back
        </a>
      </div>
</div> --}}

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
