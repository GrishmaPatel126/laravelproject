@php
$fieldsoption = config('fields');

@endphp
@foreach ($fieldsoption as $form)
<div class='form-group row'>
  
            @foreach ($form as $type => $attibutes)
                <div class="col-sm-11">
                    @include('fields.' . $type, $attibutes)
                </div>
            @endforeach
    </div>
@endforeach
