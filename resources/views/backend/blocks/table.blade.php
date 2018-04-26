<table class="table table-responsive" id="blocks-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Text</th>
        <th>Theme Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blocks as $block)
        <tr>
            <td>{!! $block->title !!}</td>
            <td>{!! $block->text !!}</td>
            <td>{!! $block->theme_id !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.blocks.destroy', $block->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.blocks.show', [$block->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.blocks.edit', [$block->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>