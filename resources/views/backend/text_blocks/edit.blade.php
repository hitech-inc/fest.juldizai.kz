@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Text Block
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($textBlock, ['route' => ['backend.textBlocks.update', $textBlock->id], 'method' => 'patch']) !!}

                        @include('backend.text_blocks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection