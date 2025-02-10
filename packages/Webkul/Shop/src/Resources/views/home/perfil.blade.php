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


</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 custom-column">YEBERA PARIS</div>
                <div class="col-sm-1">
                    <button class="custom-btn">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                    <button class="custom-btn">
                        <i class="fa-solid fa-medal"></i>
                    </button>
                </div>
                <div class="col-sm-5 search-container">
                    <div class="input-group">
                        <div class="search-container">
                            <input type="text" id="search" class="search-input" placeholder="Buscar No Weplace">
                            <button class="search-btn">
                                <i class="fa-solid fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 btn-container">
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

            <div class="container-header">
                <div class="row">
                    <div class="col-sm-2" class="header-brand">
                        <a href="" class="profile-container">
                            <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        </a>
                        <div><Strong>Ybera Paris</Strong></div>
                        <div>Beleza, cosméticos e cuidados pessoais </div>
                        <div>Made for Succes</div>
                        <div>Presente em mais de 50 países <img src="icons/icons8-terra-32.png" alt="" class="earth-icon"></div>
                        <div>Uma marca do <a href="https://www.instagram.com/grupoyberaprais/" target="_blank">@grupoyberaparis</a></div>
                        <div>Compre aqui <a href="https://bit.ly/3BFrtCw" target="_blank">bit.ly/3BFrtCw</a></div>

                    </div>
                    <div class="col-sm-3 custom-container">
                        <!-- Título com ícone -->
                        <h1 class="custom-title">
                            Ybera Paris <i class="fa-solid fa-crown"></i>
                        </h1>

                        <!-- Informações com número em cima e texto embaixo -->
                        <div class="information">
                            <div class="col">
                                <div>Seguidores</div>
                                <div>32.300</div>

                            </div>

                            <div class="col">
                                <div>Postagens</div>
                                <div>322</div>

                            </div>
                            <div class="col">
                                <div>Curtidas</div>
                                <div>102 mil</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div id="carouselPropaganda" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores do carrossel -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselPropaganda" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselPropaganda" data-slide-to="1"></li>
                                <li data-target="#carouselPropaganda" data-slide-to="2"></li>
                                <li data-target="#carouselPropaganda" data-slide-to="3"></li>
                            </ol>

                            <!-- Conteúdo do carrossel -->
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

                </div>

            </div>

            <div class="container-classificacao">
                <div class="row">
                    <div class="col-sm-3" class="classificacao">
                        <button class="btn-classificacao">
                            <img src="icons/icons8-coroa-94.png" alt="">
                        </button>
                        <button class="btn-classificacao">
                            <img src="icons/icons8-emoji-troféu-96.png" alt="">
                        </button>
                        <button class="btn-classificacao">
                            <img src="icons/icons8-foguete-emji-96.png" alt="">
                        </button>
                        <button class="btn-classificacao">
                            <img src="icons/icons8-tênis-96.png" alt="">
                        </button>

                        <button type="button" class="btn btn-primary btn-3d">Seguir</button>
                        <button type="button" class="btn btn-secondary btn-3d">Enviar mensagem</button>

                        <button class="btn-classificacao">
                            <i class="fa-solid fa-ellipsis"></i>
                        </button>

                    </div>
                    <div class="col-sm-9">
                        <div id="wrapper">
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
                                    <button class="btn" data-target="#offerCarousel" data-slide="next">
                                        <i class="fa-solid fa-brazilian-real-sign"></i>
                                        <span class="button-text">Até R$50</span>
                                    </button>
                                    <button class="btn" data-target="#offerCarousel" data-slide="next">
                                        <i class="fa-solid fa-brazilian-real-sign"></i>
                                        <span class="button-text">Até R$50</span>
                                    </button>
                                    <button class="btn" data-target="#offerCarousel" data-slide="next">
                                        <i class="fa-solid fa-brazilian-real-sign"></i>
                                        <span class="button-text">Até R$50</span>
                                    </button>
                                </div>
                            </div>
                            <button id="prev">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z" />
                                    <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                                </svg>
                            </button>
                            <button id="next">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z" />
                                    <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

    </header>

    <section>
        <article id="produtos-content">
            <!-- Botões de cabeçalho (por exemplo, para ações globais) -->
            <div class="row">
                <div class="col-12">
                    <div class="buttons-header">
                        <button class="btn-header">
                            <img src="icons/icons8-sacolas-de-compras-96.png" alt="">
                        </button>
                        <button class="btn-header">
                            <img src="icons/icons8-caneta-esferográfica-96.png" alt="">
                        </button>
                        <button class="btn-header">
                            <img src="icons/icons8-vídeo-96.png" alt="">
                        </button>
                        <button class="btn-header">
                            <img src="icons/3dicons-bookmark-front-color.png" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div class="row">
                <!-- Produto 1 -->
                <div class="col-12 col-md-3">
                    <div class="image-container">
                        <div class="product-card">
                            <div class="product-image">
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="">
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
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="">
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
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="">
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
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="">
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
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="">
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