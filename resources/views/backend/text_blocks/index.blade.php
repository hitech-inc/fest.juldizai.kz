@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Text Blocks</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.text_blocks.table')
            </div>
        </div>
        <div class="text-center">
           <b>Тут ровно 4 записи<br>
           </b>
        </div>
    </div>
@endsection

