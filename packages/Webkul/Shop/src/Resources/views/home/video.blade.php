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
        </div>

        <nav class="nav-right">
            <ul>
                <button class="round-icon">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </ul>
        </nav>
    </div>
</body>

</html>