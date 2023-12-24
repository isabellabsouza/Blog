<x-standard title="{{ $post->title }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 text-center">{{ $post->title }}</h1>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid mt-3">
                <p class="mt-2">{{ $post->formattedDate }}</p>

                @php
                    echo $post->article;
                @endphp
            </div>
        </div>
    </div>

</x-standard>
