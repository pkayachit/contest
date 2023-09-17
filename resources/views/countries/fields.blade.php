<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control','maxlength' => 2,'maxlength' => 2]) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Symbol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('symbol', 'Symbol:') !!}
    {!! Form::text('symbol', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Capital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capital', 'Capital:') !!}
    {!! Form::text('capital', null, ['class' => 'form-control','maxlength' => 80,'maxlength' => 80]) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', 'Currency:') !!}
    {!! Form::text('currency', null, ['class' => 'form-control','maxlength' => 3,'maxlength' => 3]) !!}
</div>

<!-- Continent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('continent', 'Continent:') !!}
    {!! Form::text('continent', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Continent Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('continent_code', 'Continent Code:') !!}
    {!! Form::text('continent_code', null, ['class' => 'form-control','maxlength' => 2,'maxlength' => 2]) !!}
</div>

<!-- Alpha 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alpha_3', 'Alpha 3:') !!}
    {!! Form::text('alpha_3', null, ['class' => 'form-control','maxlength' => 3,'maxlength' => 3]) !!}
</div>

<!-- Created By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_by', 'Created By:') !!}
    {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
</div>