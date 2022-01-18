@extends('layouts.app')
@section('content')


    <div class="container">
        <h1>Edit Users</h1>

        <div class="row">
            <div class="col-sm-3">
                <img height="150px" src="/images/{{$user->photo? $user->photo->file : '/images/user.png'}}" alt="" class="img-responsive img-rounded">
            </div>

            <div class="col-sm-9">
                {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true])  !!}
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
                    {!! Form::submit('Edit User', ['class'=>'btn btn-primary mt-3']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::model($user, ['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ])  !!}
                    {{csrf_field()}}

                    <div class="form-group">
                        {!! Form::submit('Delete User', ['class'=>'btn btn-danger mt-3 col-sm-3']) !!}
                    </div>

                {!! Form::close() !!}

                

                <div class="row">
                    @include('includes.form_error')
                </div>
            </div>
        </div>
    </div>
@stop
