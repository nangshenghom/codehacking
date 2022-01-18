@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row mb-3">
        
            {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store','files'=>true])  !!}
                {{csrf_field()}}

                <div class="form-group">
                    {!! Form::label('title','Title : ') !!}
                    {!! Form::text('title', null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category','Category : ') !!}
                    {!! Form::select('category_id',array('1'=>'PHP','0'=>'Javascript'), null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo','Photo : ') !!}
                    {!! Form::file('photo_id',null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body','Description : ') !!}
                    {!! Form::textarea('body',null, ['class'=>'form-control mb-3', 'rows'=>3]) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Create Post', ['class'=>'btn btn-primary mt-3']) !!}
                </div>

            {!! Form::close() !!}
        </div>


    </div>

@stop