<x-standard title="Publicações">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Publicações</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Nova Publicação</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Imagem de capa</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td> 
                                    @php
                                        echo $post->article;
                                    @endphp
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                        class="img-fluid" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-standard>
