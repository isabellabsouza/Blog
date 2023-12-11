<x-standard title="{{ $post->title }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid">
                <h1>{{ $post->title }}</h1>
                @php
                    echo $post->article;
                @endphp
            </div>
        </div>
        <button class="btn btn-primary">Teste</button>
    </div>

</x-standard>
