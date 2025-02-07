<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/paginaHome.css">
    <script src="js/index.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript do Bootstrap (necessário para interações como o carrossel) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Adicionando o JavaScript para abrir o mapa -->
    <script>
        function openMap() {
            // Redireciona para o Google Maps com uma localização específica
            window.open("https://www.google.com/maps?q=40.748817,-73.985428", "_blank"); // Exemplo com coordenadas de Nova York
        }
    </script>
</head>

<body style="background-color: rgb(255, 255, 255);">
    <!-- Container dos menus -->
    <div class="menu-container">
        <div class="button-container">
            <i class="fa-solid fa-house btn-tra" id="menu-toggle"></i>
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
            <li><a href="#home">Home</a></li>
            <li><a href="#news">Popular</a></li>
            <li><a href="#contact">Mais Recente</a></li>
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
        <article id="produtos-content">
            <div class="row">
                <!-- Produto 1 -->
                <div class="col-12 col-md-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/escova.webp" alt="Escova">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Escova Profissional</span>
                                <span class="product-likes">
                                    132 <i class="fas fa-heart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="col-12 col-md-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/337438-300x300.jpg.webp" alt="Produto 2">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Produto 2</span>
                                <span class="product-likes">
                                    132 <i class="fas fa-heart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-12 col-md-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/escova.webp" alt="Produto 3">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Produto 3</span>
                                <span class="product-likes">
                                    132 <i class="fas fa-heart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-12 col-md-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/combo.webp" alt="Produto 4">
                            </div>
                            <div class="product-info">
                                <span class="product-name">Combo Completo</span>
                                <span class="product-likes">
                                    132 <i class="fas fa-heart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</body>

</html>