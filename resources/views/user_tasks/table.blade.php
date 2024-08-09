<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="user-tasks-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Task Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userTasks as $userTask)
                <tr>
                    <td>{{ $userTask->user_id }}</td>
                    <td>{{ $userTask->task_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['userTasks.destroy', $userTask->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('userTasks.show', [$userTask->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('userTasks.edit', [$userTask->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $userTasks])
        </div>
    </div>
</div>
