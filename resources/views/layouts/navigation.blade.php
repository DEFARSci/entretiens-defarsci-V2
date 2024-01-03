<style>
    /* Styles for Offcanvas */
    #sidebar {
        width: 350px;
        background-color: #fff; /* Utilisez la couleur bleu clair de votre choix */
    }

    .offcanvas-header {
        padding-bottom: 0;
    }

    .offcanvas-title {
        font-size: 1rem; /* Ajustez la taille de la police selon vos besoins */
        margin-bottom: 1rem;
        margin-right: 20px; /* Ajoutez une marge à gauche pour déplacer le titre */
        font-weight: bold; /* Gras pour un meilleur contraste */
    }

    /* Style for Logo */
    .shrink-0 {
        margin-right: 20px; /* Ajustez la marge selon vos besoins */
    }

    /* Styles for Navigation Links */
    .navbar-nav {
        padding-left: 0;
    }

    .nav-item {
        margin-bottom: 20px; /* Ajustez l'espacement entre les éléments selon vos besoins */
    }

    .nav-link {
        padding: 8px 20px; /* Ajustez le rembourrage selon vos besoins */
        color: #fff; /* Couleur du texte des liens */
        text-decoration: none; /* Supprime la décoration de texte par défaut */
        display: block;
        text-align: left; /* Alignement du texte à droite */
        font-weight: bold; /* Gras pour un meilleur contraste */
    }

    /* Styles for Admin Section */
    .btn-sm {
        position: relative;
        margin-top: 5px; /* Ajustez l'espacement entre le texte et le bouton selon vos besoins */
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofdaHt+2T9U7Z3qI3/2GuqzEL4y" crossorigin="anonymous">

<!-- Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header">
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
            </a>
        </div>
        <h1 class="offcanvas-title" id="sidebarLabel">ENTRETIENS RH</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <!-- Navigation Links -->
    <ul class="navbar-nav mx-5">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('entretiens-create') }}">
                <i class="bi bi-wrench"></i> Entretien</a>
        </li>
        @if (Auth::user()->name == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="bi bi-person-fill fs-4"></i> Ajouter Utilisateur</a>
            </li>
            <!-- Admin Section -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Admin
                    <button class="btn btn-light btn-sm ml-2">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-sm">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
                        @endif
                    </button>
                </a>
            </li>
        @endif
    </ul>

    <!-- Footer with Social Icons -->
    <div class="mt-4">
        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="fab fa-tiktok"></i></a>
        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
    </div>
</div>

<!-- Button to toggle sidebar -->
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
    <span class="navbar-toggler-icon"></span>
</button>
