@php
$fieldsoption = config('fields');
$fieldcheckbox = config('checkboxfields');
@endphp
@foreach ($fieldsoption as $form)
    <div class='form-group row'>
        @foreach ($form as $type => $attibutes)
            <div class="col-sm-12">
                @if ($type == 'checkbox')
                    @foreach ($attibutes as $checkbox => $attibutes)
                        @foreach ($attibutes as $check => $attibutes)
                            @include('fields.' . $check, $attibutes)
                        @endforeach
                    @endforeach
            </div>
        @else
            <div class="col-sm-12">
                @include('fields.' . $type, $attibutes)
            </div>
        @endif
@endforeach
</div>
@endforeach
<Script src="{{asset('js/checkbox.js')}}"></Script>
