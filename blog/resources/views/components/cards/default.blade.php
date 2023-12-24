    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid rounded-start img-card-default" alt="...">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    
                    <p class="card-text"><small class="text-body-secondary">
                        {{ $post->formattedDate }}
                    </small></p>

                    <button class="btn btn-pink">
                        <i class="bi bi-eyeglasses"></i> 
                        <a href="{{ route('posts.show', $post->id) }}" class="text-body-secondary">Ler </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

