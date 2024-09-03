<div class="card mb-3 card-detail px-0 rounded">
    <div class="row g-0 ">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid rounded img-card-detail"
                alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body row">
                <div class="col col-12">
                    <h5 class="card-title">{{ $post->title }}</h5>
                </div>

                <div class="col col-12">
                    <p class="card-text"><small class="text-body-secondary">
                            {{ $post->formattedDate }}
                        </small>
                    </p>
                </div>

                <div class="col col-12 mt-1">
                    
                    <p class="card-text">
                        @php
                            $preview = preg_replace('/<[^>]*>/', '', $post->article);
                            
                            $preview = substr($preview, 0, 100);
                            echo $preview;
                            if (strlen($post->article) > 100) {
                                echo '...';
                            }
                        @endphp
                    </p>
                </div>

                <div class="col col-12 mt-2">
                    <button class="btn btn-pink" onclick="location.href='{{ route('posts.show', $post->id)}}'">
                        <i class="bi bi-eyeglasses"></i>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-body-secondary">Ler </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
