<x-standard title="{{ $post->title }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid mt-3">
                <h1 class="mt-3 text-center">{{ $post->title }}</h1>
                @php
                    echo $post->article;
                @endphp
            </div>
        </div>
    </div>

</x-standard>
