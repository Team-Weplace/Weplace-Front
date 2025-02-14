<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/paginaHome.css">
    <script src="js/index.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript do Bootstrap (necessário para interações como o carrossel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        .tela {
            display: none;
        }

        .ativa {
            display: block;
        }
    </style>
</head>

<body style="background-color: rgb(255, 255, 255);">
    <!-- Container dos menus -->
    <div class="menu-container">
        <div class="button-container" onclick="window.location.href='{{route('index')}}'">
            <i class="fa-solid fa-house btn-tra"></i>
        </div>

        <!-- Campo de busca -->
        <div class="search-container">
            <input type="text" id="search" class="search-input" placeholder="Buscar No Weplace">
            <button class="search-btn">
                <i class="fa-solid fa-search"></i>
            </button>
        </div>

        <!-- Segundo menu -->
        <nav class="second">
            <ul>
                <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </nav>
    </div>

    <div class="status-container">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
        <img src="images/usuario.png" alt="usuario">
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicadores do carrossel -->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>

        <!-- Conteúdo do carrossel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/woman-6174830.jpg" alt="Primeiro slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/1-f7f0b507.jpg" alt="Segundo slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/pc-de-futebol-150.jpg" alt="Terceiro slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/ai-generated-8327632_640.jpg" alt="Quarto slide">
            </div>
        </div>

        <!-- Controles do carrossel -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <div class="menu-horizontal">
        <ul>
            <li><a onclick="mostrarTela('produtos')">Home</a><i class="fa-solid fa-house"></i></li>
            <li><a onclick="mostrarTela('image')">imagens</a><i class="fa-solid fa-image"></i></li>
            <li><a onclick="mostrarTela('video')">Videos</a><i class="fa-solid fa-video"></i></li>
            <li><a href="#contact">Em Destaque</a></li>
            <li>
                <select id="sort-by" class="sort-select">
                    <option value="preco">Preço</option>
                    <option value="">$50 a $100</option>
                    <option value="">$100 a $200</option>
                    <option value="">$200 a $500</option>
                    <option value="">$500 a $1000</option>
                </select>
            </li>
        </ul>
    </div>

    <section>

        <article>
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
        </article>
    </section>
</body>

</html>

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