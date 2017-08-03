@extends('layouts.app')

@section('content')
    <div class="col-sm-9 col-md-10 main">
        <h2 class="page-header">Post page</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Preview</th>
                        <th>Time</th>
                        <th>Fullname</th>
                        <th>Picture</th>
                        <th>Detail</th>
                        <th style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                   
                        <tr>
                            <td>{{$post->id }}</td>
                            <td>{{$post->name }}</td>
                            <td>{{$post->preview }}</td>
                            <td>{{$post->time }}</td>
                            <td>{{$post->user->fullname }}</td>
                            <td>{{$post->picture }}</td>
                            <td>{{$post->detail }}</td>
                            <td>
                                <button class="btn btn-success">Edit</button>
                                <button class="btn btn-success">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection