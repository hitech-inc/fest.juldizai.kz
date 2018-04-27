@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">ГАЛЕРЕЯ</h1>
        <div class="clearfix"></div>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
{{Form::open(['route' => 'gallery.upload', 'files' => true])}}

                    Выберите изображение:
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Загрузить">

{{ csrf_field() }}
{{Form::close()}}



            </div>
        </div>

            <div class="row" style="height: 200px; width: 100%;"> 
            @foreach($photos as $photo)

                 <div class="col-md-1" style="padding: 3px; height: 100%;">
                    <img src="/img/uploads/{{$photo->path}}" alt="fff" style="width:100%;">
                    <p style="font-size: 0.6em;"><b>ALT :</b> {{$photo->alt}}</p>
                    <p style="font-size: 0.6em;"><b>NAME :</b> {{$photo->path}}</p>
                </div>
                <div class="col-md-1" style="padding: 3px; height: 100%;">
                    <a href="{!! route('backend.gallery.show', [$photo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {!! Form::open(['route' => ['backend.gallery.destroy', $photo->id], 'method' => 'delete']) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!}                       
                </div>
            @endforeach
            </div>

    </div>
 <script>

    </script>

    <script>


    </script>
@endsection
