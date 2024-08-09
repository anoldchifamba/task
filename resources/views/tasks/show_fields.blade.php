<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $task->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $task->description }}</p>
</div>

<!-- Duedate Field -->
<div class="col-sm-12">
    {!! Form::label('duedate', 'Duedate:') !!}
    <p>{{ $task->duedate }}</p>
</div>

<!-- Priority Field -->
<div class="col-sm-12">
    {!! Form::label('priority', 'Priority:') !!}
    <p>{{ $task->priority }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $task->status }}</p>
</div>

