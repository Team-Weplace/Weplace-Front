<!DOCTYPE html>
<html lang="en">

<head>
    <title>Produtos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/produtos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- JavaScript do Bootstrap (necessário para interações como o carrossel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <script src="js/produtos.js"></script>


</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3" class="header-brand">YEBERA PARIS</div>
                <div class="col-sm-1">
                    <button class="custom-btn">
                        <i class="bi bi-send"></i>
                    </button>
                    <button class="custom-btn">
                        <i class="fa-solid fa-medal fa-beat"></i>
                    </button>
                </div>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar..." aria-label="Buscar">
                        <button class="input-group-text">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="col-sm-3">
                    <button class="btn-custom">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <button class="btn-custom">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button class="btn-custom">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                </div>
            </div>
        </div>

        <div class="container-header">
            <div class="row">
                <div class="col-sm-2" class="header-brand">
                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                    </a>
                </div>
                <div class="col-sm-2 custom-container">
                    <!-- Título com ícone -->
                    <h1 class="custom-title">
                        Ybera Paris <i class="fa-solid fa-crown"></i>
                    </h1>

                    <!-- Informações com número em cima e texto embaixo -->
                    <div class="information">
                        <div class="col">
                            <div>32.300</div>
                            <div>Seguidores</div>
                        </div>

                        <div class="col">
                            <div>322</div>
                            <div>Postagens</div>
                        </div>
                        <div class="col">
                            <div>102 mil</div>
                            <div>Curtidas</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="banner">
                        <img src="images/yberaParis.jpg" alt=" Banner" class="banner-img">
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3" class="header-brand">YEBERA PARIS</div>

                <div class="col-sm-9">
                    <div id="carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <!-- Primeira "slide" do carrossel -->
                            <div class="carousel-item active">
                                <div class="button-container">
                                    <button class="btn">
                                        <i class="bi bi-percent"></i>
                                        <span class="button-text">Todas as ofertas</span>
                                    </button>
                                    <button class="btn">
                                        <i class="bi bi-lightning"></i>
                                        <span class="button-text">Ofertas relâmpago </span>
                                    </button>
                                    <button class="btn">
                                        <i class="bi bi-megaphone"></i>
                                        <span class="button-text">Salvos</span>
                                    </button>
                                    <button class="btn">
                                        <i class="bi bi-bag-heart"></i>
                                        <span class="button-text">Outlet</span>
                                    </button>
                                    <button class="btn">
                                        <i class="fa-solid fa-brazilian-real-sign"></i>
                                        <span class="button-text">Menos de R$100</span>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <!-- Controles do segundo carrossel -->
                        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                            <i class="bi bi-caret-left-fill" style="font-size: 2rem;"></i>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                            <i class="bi bi-caret-right-fill" style="font-size: 2rem;"></i>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="#">London</a></li>
                <li><a href="#">Paris</a></li>
                <li><a href="#">Tokyo</a></li>
            </ul>
        </nav>

        <article>
            <h1>London</h1>
            <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
            <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
        </article>
    </section>

    <footer>
        <p>Footer</p>
    </footer>

</body>

</html>


<script>
    // Desabilitar o comportamento automático no segundo carrossel
    $('#carousel').carousel({
        interval: false // Desativa a rotação automática
    });

    // Configurar os botões de navegação
    $('#carousel.carousel-control-prev').click(function() {
        $('#carousel').carousel('prev');
    });

    $('#carousel.carousel-control-next').click(function() {
        $('#carousel').carousel('next');
    });
</script>