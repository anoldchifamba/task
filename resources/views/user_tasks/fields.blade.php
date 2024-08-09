<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Task Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('task_id', 'Task Id:') !!}
    {!! Form::number('task_id', null, ['class' => 'form-control', 'required']) !!}
</div>