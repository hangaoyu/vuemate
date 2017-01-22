@extends('backend.blog.layout')
@section('content')
    @include('editor::head')
    <div class="container" style="width: 90%;margin-top: 40px;margin-left: 5%">
        <div class="row">
            <div class="row col-md-7 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> 检查是否填写完整.<br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @elseif(!empty(session('success')))
                    <div class="alert alert-success">
                        <strong>Whoops!</strong> {{session('success')}}.<br>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-md-12 " role="main">
                {!! Form::open(['url'=>'/post'])!!}

                <div class="form-group">
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('abstract','Abstract:') !!}
                    {!! Form::textarea('abstract',null,['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    <div class="editor" style="width: 100%">
                        {!! Form::textarea('body', null, ['class' => '','id'=>'myEditor']) !!}
                    </div>
                </div>
                {!! Form::submit('发表帖子',['class'=>'btn btn-success  pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
