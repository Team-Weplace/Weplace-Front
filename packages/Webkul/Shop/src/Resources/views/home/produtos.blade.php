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

<body style="background-color: white;">
    <header class="header">
        <div class="row">
            <div class="col-4">
                <div class="title-container">
                    <div class="title">YBERA PARIS</div>
                    <button class="inclinado">
                        <i class="bi bi-send"></i>
                    </button>
                </div>
            </div>


            <div class="col-4">
                <div class="search-container">
                    <input type="text" id="search" class="search-input" placeholder="">
                    <button class="search-btn">
                        <i class="fa-solid fa-search"></i>
                    </button>

                </div>
            </div>
            <div class="col-4">
                <div class="icons-container">
                    <button>
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <button>
                        <i class="fa-solid fa-plus"></i></button>

                    <button>
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <header class="header1">
        <div class="row">
            <div class="col-4">
                <a href="{{ route('perfil-Lojista') }}" class="profile-container">
                    <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                    <button class="btn-top-right">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </a>
            </div>

            <div class="col-2">
                <h4 style="color: black;">YBERA PARIS <i class="fa-solid fa-crown"></i></h4>

                <!-- Informações abaixo do título -->
                <div class="profile-info">
                    <div class="row g-0">
                        <div class="col">32.300</div>
                        <div class="col">Seguidores</div>

                    </div>
                    <div class="row-2 g-0">
                        <div class="col">322</div>
                        <div class="col">Postagens</div>
                    </div>

                    <div class="row-3 g-0">
                        <div class="col">102 mil</div>
                        <div class="col">Curtidas</div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="profile-container-row">
                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>

                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>
                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>
                    <a href="" class="profile-container">
                        <img src="images/download (2).png" alt="Foto de Perfil" class="profile-img">
                        <button class="btn-top-right">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </a>
                </div>

            </div>

        </div>

    </header>


    <header class="header2">
        <div class="row">
            <div class="col-4">
                <button class="button-crown">
                    <i class="fa-solid fa-crown"></i>
                </button>

                <button class="button-trophy">
                    <i class="fa-solid fa-trophy"></i>
                </button>

                <button class="button-rocket">
                    <i class="fa-solid fa-rocket"></i>
                </button>

                <button class="button-trophy">
                    <i class="fa-solid fa-trophy"></i>
                </button>
            </div>


            <!-- Coluna para os botões -->
            <div class="col-8">
                <div id="carousel2" class="carousel slide mt-5">
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

                        <!-- Segunda "slide" do carrossel -->
                        <div class="carousel-item">
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
    </header>



    <section>
        <!-- <nav>
            <div class="filters">
                <h3>Filtros</h3>

          
                <div class="filter-item">
                    <label>Preço (R$):</label>
                    <div class="price-filter">
                        <button class="price-option" data-price="0">Até R$ 0</button>
                        <button class="price-option" data-price="50">R$ 50</button>
                        <button class="price-option" data-price="100">R$ 100</button>
                        <button class="price-option" data-price="200">R$ 200</button>
                        <button class="price-option" data-price="500">R$ 500</button>
                        <button class="price-option" data-price="1000">R$ 1000+</button>
                    </div>
                </div>

    
                <div class="filter-item">
                    <label>Categoria:</label>
                    <div class="category-filter">
                        <button class="category-option" data-category="todos">Todos</button>
                        <button class="category-option" data-category="eletronicos">Eletrônicos</button>
                        <button class="category-option" data-category="moda">Moda</button>
                        <button class="category-option" data-category="livros">Livros</button>
                    </div>
                </div>

         
                <div class="filter-item">
                    <label>Marca:</label>
                    <div class="brand-filter">
                        <button class="brand-option" data-brand="todos">Todos</button>
                        <button class="brand-option" data-brand="samsung">Samsung</button>
                        <button class="brand-option" data-brand="nike">Nike</button>
                        <button class="brand-option" data-brand="apple">Apple</button>
                    </div>
                </div>

                <div class="filter-item">
                    <label>Avaliação:</label>
                    <div class="rating-filter">
                        <button class="rating-option" data-rating="todos">Todos</button>
                        <button class="rating-option" data-rating="5">⭐⭐⭐⭐⭐</button>
                        <button class="rating-option" data-rating="4">⭐⭐⭐⭐</button>
                        <button class="rating-option" data-rating="3">⭐⭐⭐</button>
                    </div>
                </div>
            </div>
        </nav> -->


        <div class="container">
            <div class="row text-center">
                <div class="col-4">
                    <button class="btn btn-block" id="produtos-btn"><i class="fa-solid fa-bag-shopping"></i> Produtos</button>
                </div>
                <div class="col-4">
                    <button class="btn  btn-block" id="posts-btn"><i class="fa-solid fa-camera-retro"></i> Posts</button>
                </div>
                <div class="col-4">
                    <button class="btn  btn-block" id="salvos-btn"><i class="fa-solid fa-bookmark"></i> Salvos</button>
                </div>
            </div>
        </div>


        <article id="produtos-content">
            <div class="row">
                <!-- Primeira imagem com detalhes -->
                <div class="col-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/camisa.jpg" alt="Primeiro produto">
                            </div>
                            <div class="card-back">
                                <h3>Camisa de Algodão</h3>
                                <p>Camisa confortável para o dia a dia.</p>
                                <p class="price">R$ 79,90</p>
                                <button class="buy-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda imagem com detalhes -->
                <div class="col-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/terno.jpg" alt="Segundo produto">
                            </div>
                            <div class="card-back">
                                <h3>Terno Slim Fit</h3>
                                <p>Terno elegante para ocasiões especiais.</p>
                                <p class="price">R$ 299,90</p>
                                <button class="buy-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terceira imagem com detalhes -->
                <div class="col-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/polo.jpg" alt="Terceiro produto">
                            </div>
                            <div class="card-back">
                                <h3>Polo Casual</h3>
                                <p>Excelente para um look descontraído.</p>
                                <p class="price">R$ 59,90</p>
                                <button class="buy-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/polo.jpg" alt="Terceiro produto">
                            </div>
                            <div class="card-back">
                                <h3>Polo Casual</h3>
                                <p>Excelente para um look descontraído.</p>
                                <p class="price">R$ 59,90</p>
                                <button class="buy-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagem adicional -->
            <div class="row">
                <div class="col-3">
                    <div class="image-container">
                        <div class="card">
                            <div class="card-front">
                                <img class="d-block w-100" src="images/polo.jpg" alt="Terceiro produto">
                            </div>
                            <div class="card-back">
                                <h3>Polo Casual</h3>
                                <p>Excelente para um look descontraído.</p>
                                <p class="price">R$ 59,90</p>
                                <button class="buy-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article id="posts-content" style="display:none;">
            <!-- Conteúdo dos posts -->
            <div class="row">
                <div class="col-4">
                    <img class="d-block w-100" src="images/polo.jpg" alt="Terceiro produto">
                </div>
                <div class="col-4">
                    <img class="d-block w-100" src="images/terno.jpg" alt="Segundo produto">
                </div>
                <div class="col-4">
                    <img class="d-block w-100" src="images/camisa.jpg" alt="Primeiro produto">
                </div>
            </div>
        </article>

        <article id="salvos-content" style="display:none;">
            <!-- Conteúdo dos salvos -->
            <div class="row">
                <div class="col-4">
                    <img class="d-block w-100" src="images/terno.jpg" alt="Segundo produto">
                </div>

            </div>
        </article>

    </section>

</body>

</html>
<script>
    // Desabilitar o comportamento automático no segundo carrossel
    $('#carousel2').carousel({
        interval: false // Desativa a rotação automática
    });

    // Configurar os botões de navegação
    $('#carousel2.carousel-control-prev').click(function() {
        $('#carousel2').carousel('prev');
    });

    $('#carousel2.carousel-control-next').click(function() {
        $('#carousel2').carousel('next');
    });
</script>