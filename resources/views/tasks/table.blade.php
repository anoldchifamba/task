<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tasks-table">
            <thead>
            <tr>
                <!-- <th>User Id</th> -->
                <th>Task</th>
               
                <th>Duedate</th>
                <th>Priority</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                 @if( $task->user_id==Auth::user()->id) 

                <tr>
                    <!-- <td> -->

                       
                    <!-- </td> -->
                    <td>
                        <a href="{{ route('tasks.show', [$task->id]) }}"
                               >
                              <h4> {{ $task->title }}</h4> <br>
                          <h5>
                        {{ $task->description }}
                    </h5>
                        </a>
                    </td>
                    <td>{{ $task->duedate }}</td>
                    <td>
                        @if ($task->priority==1)
                             1st
                        @elseif($task->priority==2)
                              2nd
                        @else
                             Normal
                        @endif  
                    </td>
                    <td>
                  
                         @if ($task->status ==1)
                             Completed
                        @else
                             Pending
                        @endif


                    </td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tasks.show', [$task->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tasks.edit', [$task->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $tasks])
        </div>
    </div>
</div>
