<!-- User Id Field -->
<!-- <div class="col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $task->user_id }}</p>
</div> -->

<!-- Title Field -->
<div class="col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $task->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $task->description }}</p>
</div>

<!-- Duedate Field -->
<div class="col-sm-6">
    {!! Form::label('duedate', 'Duedate:') !!}
    <p>{{ $task->duedate }}</p>
</div>

<!-- Priority Field -->
<div class="col-sm-6">
    {!! Form::label('priority', 'Priority:') !!}
    <p>
          @if ($task->priority==1)
                             1st
                        @elseif($task->priority==2)
                              2nd
                        @else
                             Normal
                        @endif
    </p>
</div>

<!-- Status Field -->
<div class="col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <!-- <p>{{ $task->status }}</p> -->


@if ($task->status==1)

        Completed


        {!! Form::open(['route' => ['tasks.pending'], 'method' => 'post']) !!}
         <div class='btn-group'>
   
         <input type="text" name="task_id" hidden  value="{{$task->id}}">


         {!! Form::button('<i class="fa fa-thumbs-down"></i>Click to pending status', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to unpublish?')"]) !!}
                       

         </div>
         {!! Form::close() !!}
    

    @else
        Pending


        {!! Form::open(['route' => ['tasks.complete'], 'method' => 'post']) !!}
                        <div class='btn-group'>
   
        <input type="text" name="task_id" hidden  value="{{$task->id}}">

        {!! Form::button('<i class="far fa-thumbs-up"></i>Click to complete status', ['type' => 'submit', 'class' => 'btn btn-success btn-xs', 'onclick' => "return confirm('Are you sure you want to completed?')"]) !!}
                       

        </div>
        {!! Form::close() !!}
        @endif




</div>

