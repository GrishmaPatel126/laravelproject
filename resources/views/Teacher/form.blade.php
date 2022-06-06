<div class='form-group row'>
    {!! Form::label('name', 'Name') !!}
    <div class="col-sm-11">
        {!! Form::text('name', '', [
            'class' => 'form-control',
            'id' => 'name',
            'placeholder' => 'Name',
         ]) !!}
    </div>
</div>

<div class='form-group row'>
    {!! Form::label('number', 'Phone Number') !!}
    <div class="col-sm-11">
        {!! Form::text('number', '', [
            'class' => 'form-control',
            'id' => 'number',
            'placeholder' => 'Phone Number',
         ]) !!}
    </div>
</div>

<div class='form-group row'>
    {!! Form::label('email', 'Email') !!}
    <div class="col-sm-11">
        {!! Form::email('email', '', [
            'class' => 'form-control',
            'id' => 'email',
            'placeholder' => 'Email',
         ]) !!}
    </div>
</div>

<div class='form-group row'>
    {!! Form::label('address', 'Address') !!}
    <div class="col-sm-11">
        {!! Form::textarea('address', '', [
            'class' => 'form-control',
            'id' => 'address',
            'placeholder' => 'Address',
            'rows' => '2',
         ]) !!}
    </div>
</div>

<div class='form-group row'>
    {!! Form::label('subject', 'Subject') !!}
    <div class="col-sm-11">
       {!! Form::select('subject', ['Maths' => 'Maths','English' => 'English' ,'Science' => 'Science','History' => 'History','Art' => 'Art'],null,['class' => 'form-control', 'id' => 'subject','placeholder' => 'Select Subject']) !!}
    </div>
</div>

