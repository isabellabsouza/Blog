<x-standard title="Publicações">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 text-center">Publicações</h1>
                <a href="{{ route('posts.create') }}" class="btn btn-pink mt-4">Nova Publicação</a>




                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Capa</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <a class="text-wrap" href="{{ route('posts.show', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </td>

                                <td>
                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                                        class="img-fluid" width="100">
                                </td>
                                <td>
                                    <div class="row d-flex">
                                        <div class="col">

                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-pink">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                        </div>
                                        <div class="col mt-2">

                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-pink"
                                                    onclick="return confirm('Tem certeza que deseja excluir?')">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-standard>
