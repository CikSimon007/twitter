@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-5">
            <div class="card-body">
                <h4>Edit your post</h4>
                <form action="{{ route('post.update', $post->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" name="content" rows="3">{{ $post->content }}</textarea>
                        @error('content')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
