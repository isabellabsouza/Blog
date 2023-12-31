<x-standard title="Nova Publicação">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h1 class="text-center">Nova Publicação</h1>
                <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @if (isset($post))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Escreva o título aqui"
                            value="{{ isset($post) ? $post->title : old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="article" class="form-label">Conteúdo</label>
                        <textarea class="form-control" id="article" name="article" rows="3"
                            placeholder="Conteúdo da sua publicação">{{ isset($post) ? $post->article : old('article') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Imagem de capa</label>
                        @if (isset($post))
                        <div class="alert " role="alert">
                            Você já tem uma imagem de capa para essa publicação.
                            <br/>
                            Se você carregar uma nova, ela substituirá a atual.
                          </div>
                        @endif
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    </div>

                    
                    <button type="submit" class="btn btn-pink">Publicar</button>
                </form>
            </div>
        </div>
    </div>
</x-standard>
