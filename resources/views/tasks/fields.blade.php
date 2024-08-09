<!-- User Id Field -->


<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Duedate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duedate', 'Duedate:') !!}
    <!-- {!! Form::text('duedate', null, ['class' => 'form-control','id'=>'duedate']) !!} -->
    <input type="date" name="duedate" class="form-control" required="">
</div>



<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', 'Priority:') !!}
    <!-- {!! Form::number('priority', null, ['class' => 'form-control', 'required']) !!} -->
    <select name="priority" class="form-control" required="">
        <option value="">---Choose Priority</option>
        <option value="3">normal</option>
        <option value="2">2nd</option>
        <option value="1">1st</option>
    </select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <!-- {!! Form::number('status', null, ['class' => 'form-control', 'required']) !!} -->
     <select name="status" class="form-control" required="">
        <!-- <option value="">---Choose Status</option> -->
        <option value="3">to do</option>
        <option value="2">pending</option>
        <option value="1">completed</option>

    </select>
</div>

<div class="form-group col-sm-6">
    <!-- {!! Form::label('user_id', 'User Id:') !!} -->
    <!-- {!! Form::number('user_id', null, ['class' => 'form-control' ,'value'=>'8']) !!} -->
    <input type="number" name="user_id" hidden value="{{ Auth::user()->id }}">
</div>