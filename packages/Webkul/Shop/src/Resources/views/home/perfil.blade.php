<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- JavaScript do Bootstrap (necessário para interações como o carrossel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <script src="app.js"></script>

    <style>
        .tela {
            display: none;
        }

        .ativa {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h1 class="custom-title">
                        Ybera Paris <i class="fa-solid fa-crown"></i>
                    </h1>
                </div>
                <div class="col-sm-2">
                    <button class="custom-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                    <button class="custom-btn">
                        <i class="fa-solid fa-medal"></i>
                    </button>
                </div>
                <div class="col-sm-6">
                    <div class="search-container">
                        <input type="text" id="search" class="search-input" placeholder="Buscar No Weplace">
                        <button class="search-btn">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-sm-2">
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
    </header>

    <div class="profile-and-carousel-container">
        <!-- Informações do perfil -->
        <div class="col-sm-2 header-brand">
            <div class="profile-container">
                <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                <div class="profile-metrics">
                    <div class="metric">
                        <div class="metric-value">32.300</div>
                        <div class="metric-label">Seguidores</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">322</div>
                        <div class="metric-label">Postagens</div>
                    </div>
                    <div class="metric">
                        <div class="metric-value">102 mil</div>
                        <div class="metric-label">Curtidas</div>
                    </div>
                </div>
            </div>
            <div class="profile-info">
                <div><strong>Ybera Paris</strong></div>
                <div>Beleza, cosméticos e cuidados pessoais</div>
                <div>Made for Success</div>
                <div class="global-presence">
                    Presente em mais de 50 países <img src="icons/icons8-terra-32.png" alt="Ícone Terra" class="earth-icon">
                </div>
                <div class="social-link">
                    Uma marca do <a href="https://www.instagram.com/grupoyberaprais/" target="_blank">@grupoyberaparis</a>
                </div>
                <div class="buy-link">
                    Compre aqui <a href="https://bit.ly/3BFrtCw" target="_blank">bit.ly/3BFrtCw</a>
                </div>
            </div>
            <div class="profile-buttons">
                <button class="btn-follow">
                    <i class="fa-solid fa-user-plus"></i> Seguir
                </button>
                <button class="btn-share">
                    <i class="fa-solid fa-share"></i> Compartilhar
                </button>
                <button class="btn-favorite">
                    <i class="fa-solid fa-heart"></i> Favoritar
                </button>
            </div>
        </div>


        <!-- Conteúdo do carrossel -->
        <div id="carouselPropaganda" class="carousel slide" data-ride="carousel">
            <!-- Indicadores do carrossel -->
            <ol class="carousel-indicators">
                <li data-target="#carouselPropaganda" data-slide-to="0" class="active"></li>
                <li data-target="#carouselPropaganda" data-slide-to="1"></li>
                <li data-target="#carouselPropaganda" data-slide-to="2"></li>
                <li data-target="#carouselPropaganda" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/oscar-menswear-banner-principal.png" alt="Primeiro slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/IMG_CAPA.jpg" alt="Segundo slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/copia.jpg" alt="Terceiro slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/oscar-menswear-banner-principal.png" alt="Quarto slide">
                </div>
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
    </div>


    <!-- Carrossel de botões -->
    <div class="button-carousel-container">
        <div id="carousel">
            <div id="content">
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-percent"></i>
                    <span class="button-text">Todas as ofertas</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-lightning"></i>
                    <span class="button-text">Ofertas relâmpago</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-megaphone"></i>
                    <span class="button-text">Salvos</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-bag-heart"></i>
                    <span class="button-text">Outlet</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="fa-solid fa-brazilian-real-sign"></i>
                    <span class="button-text">Menos de R$100</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-percent"></i>
                    <span class="button-text">Promoções de Verão</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-lightning"></i>
                    <span class="button-text">Descontos Exclusivos</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-megaphone"></i>
                    <span class="button-text">Novidades</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="bi bi-bag-heart"></i>
                    <span class="button-text">Novos Itens</span>
                </button>
                <button class="btn" data-target="#offerCarousel" data-slide="next">
                    <i class="fa-solid fa-brazilian-real-sign"></i>
                    <span class="button-text">Até R$50</span>
                </button>
            </div>

        </div>
    </div>

    <section>
        <article id="produtos-content">

            <div class="row">
                <div class="col-12">
                    <hr>
                    <div class="buttons-header">
                        <button class="btn-header" onclick="mostrarTela('produtos')">
                            <img src="images/3dicons-bag-iso-color.png" alt="Bag">
                        </button>
                        <button class="btn-header" onclick="mostrarTela('video')">
                            <img src="images/3dicons-play-front-color.png" alt="Play">
                        </button>
                        <button class="btn-header" onclick="mostrarTela('tela3')">
                            <img src="images/3dicons-bookmark-front-color.png" alt="Bookmark">
                        </button>
                        <button class="btn-header" onclick="mostrarTela('image')">
                            <img src="images/camera.png" alt="camera">
                        </button>

                    </div>
                </div>
            </div>


            <div id="produtos" class="tela">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="image-container">
                            <div class="product-card">
                                <div class="product-image">
                                    <img class="d-block w-100" src="images/6fc32edce6f361b6553d447dece04451.jpg" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Shampoo e Mascara</h3>

                                    <div class="product-price">
                                        <span class="original-price">R$ 78,90</span>
                                        <span class="discounted-price">R$ 66,27</span>
                                        <span class="discount">16% OFF</span>
                                    </div>
                                    <div class="installment">
                                        <span>em 12x R$ 6,50</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="free-shipping">Frete grátis</span>
                                        <span class="shipping-detail">por ser sua primeira compra</span>
                                    </div>
                                    <div class="button-icons">
                                        <button class="btn-heart"><i class="fa-regular fa-heart"></i></button>
                                        <button class="btn-heart"><i class="fa-regular fa-message"></i></button>
                                        <button class="btn-heart"><i class="fa-solid fa-paper-plane"></i></button>
                                        <button class="btn-bookmark"><i class="fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-container">
                            <div class="product-card">
                                <div class="product-image">
                                    <img class="d-block w-100" src="images/8e325eed654659f84d35c6c452da1fbd.jpg" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Shampoo e Mascara</h3>

                                    <div class="product-price">
                                        <span class="original-price">R$ 78,90</span>
                                        <span class="discounted-price">R$ 66,27</span>
                                        <span class="discount">16% OFF</span>
                                    </div>
                                    <div class="installment">
                                        <span>em 12x R$ 6,50</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="free-shipping">Frete grátis</span>
                                        <span class="shipping-detail">por ser sua primeira compra</span>
                                    </div>
                                    <div class="button-icons">
                                        <button class="btn-heart"><i class="fa-regular fa-heart"></i></button>
                                        <button class="btn-heart"><i class="fa-regular fa-message"></i></button>
                                        <button class="btn-heart"><i class="fa-solid fa-paper-plane"></i></button>
                                        <button class="btn-bookmark"><i class="fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-container">
                            <div class="product-card">
                                <div class="product-image">
                                    <img class="d-block w-100" src="images/6fc32edce6f361b6553d447dece04451.jpg" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Shampoo e Mascara</h3>

                                    <div class="product-price">
                                        <span class="original-price">R$ 78,90</span>
                                        <span class="discounted-price">R$ 66,27</span>
                                        <span class="discount">16% OFF</span>
                                    </div>
                                    <div class="installment">
                                        <span>em 12x R$ 6,50</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="free-shipping">Frete grátis</span>
                                        <span class="shipping-detail">por ser sua primeira compra</span>
                                    </div>
                                    <div class="button-icons">
                                        <button class="btn-heart"><i class="fa-regular fa-heart"></i></button>
                                        <button class="btn-heart"><i class="fa-regular fa-message"></i></button>
                                        <button class="btn-heart"><i class="fa-solid fa-paper-plane"></i></button>
                                        <button class="btn-bookmark"><i class="fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-container">
                            <div class="product-card">
                                <div class="product-image">
                                    <img class="d-block w-100" src="images/8e325eed654659f84d35c6c452da1fbd.jpg" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Shampoo e Mascara</h3>

                                    <div class="product-price">
                                        <span class="original-price">R$ 78,90</span>
                                        <span class="discounted-price">R$ 66,27</span>
                                        <span class="discount">16% OFF</span>
                                    </div>
                                    <div class="installment">
                                        <span>em 12x R$ 6,50</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="free-shipping">Frete grátis</span>
                                        <span class="shipping-detail">por ser sua primeira compra</span>
                                    </div>
                                    <div class="button-icons">
                                        <button class="btn-heart"><i class="fa-regular fa-heart"></i></button>
                                        <button class="btn-heart"><i class="fa-regular fa-message"></i></button>
                                        <button class="btn-heart"><i class="fa-solid fa-paper-plane"></i></button>
                                        <button class="btn-bookmark"><i class="fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-container">
                            <div class="product-card">
                                <div class="product-image">
                                    <img class="d-block w-100" src="images/8e325eed654659f84d35c6c452da1fbd.jpg" alt="">
                                </div>
                                <div class="product-info">
                                    <h3 class="product-title">Shampoo e Mascara</h3>

                                    <div class="product-price">
                                        <span class="original-price">R$ 78,90</span>
                                        <span class="discounted-price">R$ 66,27</span>
                                        <span class="discount">16% OFF</span>
                                    </div>
                                    <div class="installment">
                                        <span>em 12x R$ 6,50</span>
                                    </div>
                                    <div class="shipping">
                                        <span class="free-shipping">Frete grátis</span>
                                        <span class="shipping-detail">por ser sua primeira compra</span>
                                    </div>
                                    <div class="button-icons">
                                        <button class="btn-heart"><i class="fa-regular fa-heart"></i></button>
                                        <button class="btn-heart"><i class="fa-regular fa-message"></i></button>
                                        <button class="btn-heart"><i class="fa-solid fa-paper-plane"></i></button>
                                        <button class="btn-bookmark"><i class="fa-solid fa-bookmark"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="video" class="tela">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/5937383-uhd_2160_3840_24fps.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/1704712-hd_1920_1080_30fps.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/0902-383991325_small.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/ssstik.io_@poviolinist_1739540113425.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/5937383-uhd_2160_3840_24fps.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/1704712-hd_1920_1080_30fps.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/0902-383991325_small.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <video controls>
                            <source src="videos/ssstik.io_@poviolinist_1739540113425.mp4" type="video/mp4">
                        </video>
                    </div>
                 
                </div>
            </div>


            <div id="tela3" class="tela">
                <h1>Tela 3</h1>
                <p>Conteúdo da Tela 3</p>
            </div>

            <div id="image" class="tela">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/3b3f87715c96026db1732e3038c55757.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/3b3f87715c96026db1732e3038c55757.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/3b3f87715c96026db1732e3038c55757.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/3b3f87715c96026db1732e3038c55757.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="image-view">
                            <div class="view-card">
                                <div class="view-image">
                                    <img class="d-block w-100" src="images/39bd305f161a465381641260f991bba5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </article>

    </section>


</body>

</html>

<script>
    const gap = 16;

    const carousel = document.getElementById("carousel"),
        content = document.getElementById("content"),
        next = document.getElementById("next"),
        prev = document.getElementById("prev");

    next.addEventListener("click", e => {
        carousel.scrollBy(width + gap, 0);
        if (carousel.scrollWidth !== 0) {
            prev.style.display = "flex";
        }
        if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "none";
        }
    });
    prev.addEventListener("click", e => {
        carousel.scrollBy(-(width + gap), 0);
        if (carousel.scrollLeft - width - gap <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "flex";
        }
    });

    let width = carousel.offsetWidth;
    window.addEventListener("resize", e => (width = carousel.offsetWidth));
</script>




<script>
    function mostrarTela(idTela) {
        // Esconde todas as telas
        const telas = document.querySelectorAll('.tela');
        telas.forEach(tela => tela.classList.remove('ativa'));

        // Mostra a tela correspondente ao ID
        const telaAtiva = document.getElementById(idTela);
        if (telaAtiva) {
            telaAtiva.classList.add('ativa');
        }
    }

    // Mostra a primeira tela por padrão
    mostrarTela('produtos');
</script>