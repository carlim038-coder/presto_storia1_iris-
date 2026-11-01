<footer class="text-center text-lg-start bg-dark text-white pt-4">
    <!-- Section: Links -->
    <section class="container text-center text-md-start mt-5">
        <div class="row mt-3">
            <!-- Grid column: Brand / Info -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Presto.it
                </h6>
                <p>
                    Il portale di annunci di compravendita semplice, veloce e sicuro. Liberati di ciò che non usi o trova quello che cerchi.
                </p>
            </div>

            <!-- Grid column: Categorie -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    Categorie
                </h6>
                <p>
                    <a href="#!" class="text-reset text-decoration-none">Elettronica</a>
                </p>
                <p>
                    <a href="#!" class="text-reset text-decoration-none">Abbigliamento</a>
                </p>
                <p>
                    <a href="#!" class="text-reset text-decoration-none">Casa e Giardino</a>
                </p>
                <p>
                    <a href="#!" class="text-reset text-decoration-none">Sport</a>
                </p>
            </div>

            <!-- Grid column: Link utili -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    Link utili
                </h6>
                <p>
                    <a href="{{ route('homepage') }}" class="text-reset text-decoration-none">Home</a>
                </p>
                @auth
                    <p>
                        <a href="{{ route('create.article') }}" class="text-reset text-decoration-none">Pubblica annuncio</a>
                    </p>
                @else
                    <p>
                        <a href="{{ route('login') }}" class="text-reset text-decoration-none">Accedi</a>
                    </p>
                    <p>
                        <a href="{{ route('register') }}" class="text-reset text-decoration-none">Registrati</a>
                    </p>
                @endauth
            </div>

            <!-- Grid column: Contatti -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
                <p><i class="fas fa-home me-3"></i> Via Roma 123, Milano</p>
                <p><i class="fas fa-envelope me-3"></i> info@presto.it</p>
                <p><i class="fas fa-phone me-3"></i> + 39 02 1234567</p>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2026 Copyright:
        <span class="fw-bold">Presto.it</span>
    </div>
</footer>