<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Video</title>
    <link rel="stylesheet" href="css/video.css">
    <script src="js/index.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="main-container">
        <nav class="nav-left">
            <header>
                <h1>Waplace</h1>
            </header>
            <ul>
                <h2>Menu</h2>
                <li><a href="#"><i class="fa-brands fa-safari"></i>Browse</a></li>
                <li><a href="#"><i class="fa-solid fa-heart"></i>Watchlist</a></li>
                <li><a href="#"><i class="fa-solid fa-calendar-days"></i>Coming soon</a></li>
            </ul>

            <ul>
                <h2>Social</h2>
                <li><a href="#"><i class="fa-solid fa-user"></i>Friends</a></li>
                <li><a href="#"><i class="fa-solid fa-user-group"></i>Parties</a></li>
            </ul>

            <ul>
                <h2>General</h2>
                <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
                <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i>Log out</a></li>
            </ul>
        </nav>




        <div class="content">
            <header>
                <div class="container">
                    <div class="row">
                        <!-- Search Column -->
                        <div class="col-md-6">
                            <div class="search-container">
                                <input type="text" id="search" class="search-input" placeholder="Buscar No Weplace">
                                <button class="search-btn">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Icons and Profile Column -->
                        <div class="col-md-6 icons-and-profile">
                            <div class="icons-column">
                                <button class="icon-btn">
                                    <i class="fa-solid fa-bell"></i>
                                </button>
                                <button class="icon-btn">
                                    <i class="fa-solid fa-message"></i>
                                </button>
                            </div>
                            <img src="images/do-utilizador.png" alt="Imagem de perfil" class="profile-image">
                        </div>
                    </div>
                </div>
            </header>


            <!-- Carrossel -->
            <div class="col">
                <div id="carouselPropaganda" class="carousel slide" data-ride="carousel">
                    <!-- Conteúdo do carrossel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/deixesua-imaginacao-voar-zq751ts9t0ellayx.webp" alt="Primeiro slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/michaeljordan-lendario-jogador-de-basquete-4f7jxr6ci1lavvvm.webp" alt="Segundo slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/pokemon-lucario-3840-x-2160-e12rr1gh94j1yr9i.webp" alt="Terceiro slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/dois-animais-selvagens-zebra-j7rnq9gb60rpr4sr.webp" alt="Quarto slide">
                        </div>
                    </div>

                    <!-- Indicadores personalizados no rodapé -->
                    <div class="custom-indicators">
                        <img src="images/deixesua-imaginacao-voar-zq751ts9t0ellayx.webp" data-target="#carouselPropaganda" data-slide-to="0" class="active" alt="Slide 1">
                        <img src="images/michaeljordan-lendario-jogador-de-basquete-4f7jxr6ci1lavvvm.webp" data-target="#carouselPropaganda" data-slide-to="1" alt="Slide 2">
                        <img src="images/copia.jpg" data-target="#carouselPropaganda" data-slide-to="2" alt="Slide 3">
                        <img src="images/dois-animais-selvagens-zebra-j7rnq9gb60rpr4sr.webp" data-target="#carouselPropaganda" data-slide-to="3" alt="Slide 4">
                    </div>

                    <!-- Controles do carrossel -->
                    <a class="carousel-control-prev" href="#carouselPropaganda" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselPropaganda" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <!-- Cards abaixo do carrossel -->
                <div class="row mt-4">
                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/michaeljordan-lendario-jogador-de-basquete-4f7jxr6ci1lavvvm.webp" class="card-img">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/dois-animais-selvagens-zebra-j7rnq9gb60rpr4sr.webp" class="card-img">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/deixesua-imaginacao-voar-zq751ts9t0ellayx.webp" class="card-img">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/dois-animais-selvagens-zebra-j7rnq9gb60rpr4sr.webp" class="card-img">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/deixesua-imaginacao-voar-zq751ts9t0ellayx.webp" class="card-img">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="card">
                            <img src="images/michaeljordan-lendario-jogador-de-basquete-4f7jxr6ci1lavvvm.webp" class="card-img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Novo Nav à Direita -->
        <nav class="nav-right">
            <ul>
                <li><button class="round-icon"><i class="fa-solid fa-plus"></i></button></li>
                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>
                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>

                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>

                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>
                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>
                <li>
                    <button class="round-icon">
                        <img src="images/D_NQ_NP_616002-MLB32340307266_092019-W.webp" alt="Perfil" class="profile-icon">
                    </button>
                </li>


            </ul>
        </nav>
    </div>
</body>

</html>
<script>
    // Atualiza os indicadores quando o slide muda
    document.getElementById('carouselPropaganda').addEventListener('slide.bs.carousel', function(event) {
        const targetIndex = event.to; // Índice do slide que será exibido
        const indicators = document.querySelectorAll('.custom-indicators img');

        // Remove a classe 'active' de todas as miniaturas
        indicators.forEach(img => img.classList.remove('active'));

        // Adiciona a classe 'active' à miniatura correspondente
        indicators[targetIndex].classList.add('active');
    });

    // Navegação ao clicar nas miniaturas
    document.querySelectorAll('.custom-indicators img').forEach((img, index) => {
        img.addEventListener('click', () => {
            const carousel = new bootstrap.Carousel(document.getElementById('carouselPropaganda'));
            carousel.to(index); // Navega para o slide correspondente
        });
    });
</script>