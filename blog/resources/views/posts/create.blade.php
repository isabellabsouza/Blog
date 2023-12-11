<x-standard title="Nova Publicação">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nova Publicação</h1>
                <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @if (isset($post))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título"
                            value="{{ isset($post) ? $post->title : old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="article" class="form-label">Conteúdo</label>
                        <textarea class="form-control" id="article" name="article" rows="3"
                            placeholder="Conteúdo da publicação">{{ isset($post) ? $post->article : old('article') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Imagem de capa</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </form>
            </div>
        </div>
    </div>
</x-standard>
