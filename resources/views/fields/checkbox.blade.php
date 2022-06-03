@foreach ($form as $checkbox )
@dd($form,$checkbox )

{!! Form::{$attibutes['type']}($attibutes['name'], $attibutes['value'], $attibutes['attributes']) !!}
@endforeach

