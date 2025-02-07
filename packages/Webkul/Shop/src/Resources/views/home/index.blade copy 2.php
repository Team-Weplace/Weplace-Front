<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/indexInicial.css">
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
        <div class="logo">

            <img class="logo" src="images/logo.png" alt="Logo">

        </div>
        <div class="button-container">
            <i class="fa-solid fa-bars btn-tra" id="menu-toggle"></i>
        </div>

        <!-- Menu lateral (oculto inicialmente) -->
        <div id="menu" class="menu">
            <i class="fa-solid fa-times menu-close" id="close-menu"></i>

            <div class="logo">
                <img class="logo" src="images/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="{{ route('perfil-Lojista') }}">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>

            </ul>
        </div>
        <!-- Campo de busca -->
        <div class="search-container">
            <input type="text" id="search" class="search-input" placeholder="Buscar No Weplace">
            <button class="search-btn">
                <i class="fa-solid fa-search"></i>
            </button>
        </div>

        <div class="button-container">
            <!-- Botão que abre o mapa -->
            <i class="fa-solid fa-map-location btn-loc" onclick="openMap()"></i>
        </div>

        <!-- Segundo menu -->
        <nav class="second">
            <ul>
                <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href=""><i class="fa-solid fa-bell"></i></a></li>
                <li><a href=""><i class="fa-solid fa-comment"></i></a></li>
                <li><a href=""><i class="fa-solid fa-house"></i></a></li>
            </ul>
        </nav>
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

    <footer>
        <div class="footer-buttons">
            <button class="footer-btn btn-1" onclick="window.location.href='{{ route('produtos') }}'"><i class="fa-solid fa-house"></i></button>

            <button class="footer-btn btn-2" onclick="startLiveStream()">
                <i class="fa-solid fa-video"></i>
            </button>

            <button class="footer-btn btn-3">
                <i class="fa-light fa-hexagon-vertical-nft"></i>
                <span class="nft-text">NFT</span>
            </button>

            <button class="footer-btn btn-4"><i class="fa-solid fa-store"></i></button>
            <button class="footer-btn btn-5">
                <i class="fa-solid fa-cart-shopping"></i>
            </button>

        </div>
    </footer>
</body>

</html>

<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("menu").style.left = "0"; // Mostra o menu
    });

    document.getElementById("close-menu").addEventListener("click", function() {
        document.getElementById("menu").style.left = "-250px"; // Esconde o menu
    });
</script>

<script>
    function startLiveStream() {
        // Exemplo simples de como você poderia iniciar um processo de transmissão
        alert("A transmissão ao vivo foi iniciada!");
        // Aqui, você pode incluir a lógica para iniciar o streaming em uma plataforma como YouTube, Twitch, etc.
        window.location.href = "https://www.youtube.com/live_dashboard"; // Exemplo de redirecionamento
    }
</script>