@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Create Users</h1>

        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true])  !!}
                {{csrf_field()}}

                <div class="form-group">
                    {!! Form::label('name','Name : ') !!}
                    {!! Form::text('name', null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','Email : ') !!}
                    {!! Form::email('email', null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('role_id','Role : ') !!}
                    {!! Form::select('role_id',[''=>'Choose Options' , $roles], null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('is_active','Status : ') !!}
                    {!! Form::select('is_active',array(1=> 'Active',0=>'Not Active'),null, ['class'=>'form-control mb-3']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password','Password : ') !!}
                    {!! Form::password('password', null, ['class'=>'form-control mb-5']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('photo_id','Photo : ') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create User', ['class'=>'btn btn-primary mt-3']) !!}
                </div>

        {!! Form::close() !!}



        @include('includes.form_error')


    </div>
@stop
