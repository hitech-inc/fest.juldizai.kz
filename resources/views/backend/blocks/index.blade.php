@extends('layouts.app')

@section('content')
    <section class="content-header">

        <h1 class="pull-left">Blocks</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('backend.blocks.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="text">
            <p><b>ТЕМЫ</b></p>
            <p><b>1 :</b> О мероприятии </p>
            <p><b>2 :</b> Что вы узнаете</p>
            <p><b>3 :</b> Хотите узнать больше</p>
            <p><b>4 :</b> Телефон</p>
            <p><b>5 :</b> Почта</p>
        </div>
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('backend.blocks.table')
            </div>
        </div>

    </div>
@endsection

