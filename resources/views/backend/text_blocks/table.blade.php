<table class="table table-responsive" id="textBlocks-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Desc</th>
        <th>Icon</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($textBlocks as $textBlock)
        <tr>
            <td>{!! $textBlock->title !!}</td>
            <td>{!! $textBlock->desc !!}</td>
            <td>{!! $textBlock->icon !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.textBlocks.destroy', $textBlock->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.textBlocks.edit', [$textBlock->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>