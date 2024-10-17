@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-5">
            <div class="card-body">
                <h4>{{ $post->content }}</h4>
                <p class="text-muted">Posted on: {{ $post->created_at }}</p>
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
