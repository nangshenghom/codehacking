@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Posts</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>User</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($posts)
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'No files'}}"/></td>
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->category? $post->category->name : 'Uncategorized'}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td> 
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    @include('includes.form_error')


@stop