<div class="card my-5">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <!-- Post details can go here -->
            </div>
            <div>
                <form action="{{ route('post.destroy', $post->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
                <a href="{{ route('post.view', $post->id) }}">VIEW</a>
                <a href="{{ route('post.edit', $post->id) }}">EDIT</a>
            </div>
        </div>        
    </div>
    <div class="card-body">
        <p class="fs-6 fw-light text-muted">
            {{ $post -> content }}
        </p>
        <div class="d-flex justify-content-between">
            <div>
                <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                    </span> {{ $post -> likes}} </a>
            </div>
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                {{ $post -> created_at }} </span>
            </div>
        </div>
        <div>
            <form action="{{ route('post.comments.store', $post->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1" name="content" required></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" type="submit"> Post Comment </button>
                </div>
            </form>
            <hr>
            @foreach ($post->comments as $comment)
                <div class="d-flex align-items-start">
                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                        alt="Luigi Avatar">
                    <div class="w-100">
                        <div class="d-flex justify-content-between">
                            <h6 class="">Luigi
                            </h6>
                            <small class="fs-6 fw-light text-muted">{{ $comment->created_at }}</small>
                        </div>
                        <p class="fs-6 mt-3 fw-light">
                            {{ $comment->content }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>