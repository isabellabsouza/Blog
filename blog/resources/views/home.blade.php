<x-standard title="Home">

    <div>
        <img class="img-fluid" src="assets/banner.png">
    </div>

    <div class="container mt-3">
        <div>
            <h3 class="text-center">Destaques</h3>

            <div id="carouselPosts" class="carousel slide mt-3">
                <div class="carousel-inner">
                    @foreach ($posts as $key => $post)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <x-cards.default :post="$post" />
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPosts"
                    data-bs-slide="prev">
                    <span class="bi bi-chevron-compact-left icon-carousel fs-4" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPosts"
                    data-bs-slide="next">

                    <span class="bi bi-chevron-compact-right icon-carousel fs-4" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div>
            <h3 class="text-center mt-3">Sobre a Naty</h3>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="assets/avatar-flower.png">
                </div>
                <div class="col-md-6 align-self-center">
                    <p class="text-center mt-3">
                        Oi gente, nesse bolg eu vou falar um pouco de mim, sobre minha opinião, e claro, fofocas.
                        <br/>
                        Espero que gostem, mas se não gostarem também não tô nem aí, beijinhos beijinhos 💋
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-standard>
