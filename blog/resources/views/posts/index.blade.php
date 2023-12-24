<x-standard title="Publicações">
    <div class="container">
        <h1 class="text-center mt-3">Publicações</h1>
        <div class="row justify-content-center">
            @foreach($posts as $post)
                <x-cards.detail :post="$post" />
            @endforeach
        </div>
    </div>
</x-standard>
