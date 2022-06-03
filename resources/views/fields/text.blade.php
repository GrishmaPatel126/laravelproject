{!! Form::{$attibutes['type']}($attibutes['name'], null, $attibutes['attributes']) !!}


@error($attibutes['name'])
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
