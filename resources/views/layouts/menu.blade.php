<li class="{{ Request::is('textBlocks*') ? 'active' : '' }}">
    <a href="{!! route('backend.textBlocks.index') !!}"><i class="fa fa-edit"></i><span>Тексты в красных блоках</span></a>
</li>

<li class="{{ Request::is('blocks*') ? 'active' : '' }}">
    <a href="{!! route('backend.blocks.index') !!}"><i class="fa fa-edit"></i><span>Текстовые блоки</span></a>
</li>

