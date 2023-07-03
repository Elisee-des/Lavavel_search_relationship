@extends('layouts.app')

@section('title', 'Home posts')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List posts</h1>
        <a href="" class="btn btn-primary">Add post</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}</div>       
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($posts->count() > 0)

                @foreach ($posts as $post )
                    <tr>
                        <td class="align-middle">{{ $post->id }}</td>
                        <td class="align-middle">{{ $post->title }}</td>
                        <td class="align-middle">{{ $post->category->name }}</td>
                        <td class="align-middle">{{ $post->user->name }}</td>
                        <td class="align-middle">{{ $post->decription }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group">
                                <a href="" type="button" class="btn btn-secondary">Détail</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <a href="" type="button" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

                @else
                    <tr>
                        <td class="text-center" colspan="5">post not found</td>
                    </tr>
                
            @endif
        </tbody>
    </table>
@endsection