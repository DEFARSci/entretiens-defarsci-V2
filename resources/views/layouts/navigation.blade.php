<<<<<<<<< Temporary merge branch 1
<style>
    /* Styles for Offcanvas */
    #sidebar {
        width: 350px;
        background-color: #fff; /* Utilisez la couleur bleu clair de votre choix */
    }
=========
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed top-0 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
>>>>>>>>> Temporary merge branch 2

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

<<<<<<<<< Temporary merge branch 1
    .nav-link {
        padding: 8px 20px; /* Ajustez le rembourrage selon vos besoins */
        color: #fff; /* Couleur du texte des liens */
        text-decoration: none; /* Supprime la décoration de texte par défaut */
        display: block;
        text-align: left; /* Alignement du texte à droite */
        font-weight: bold; /* Gras pour un meilleur contraste */
    }
=========
                    <x-slot name="content">
                        <!-- Authentication -->

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
>>>>>>>>> Temporary merge branch 2

    /* Styles for Admin Section */
    .btn-sm {
        position: relative;
        margin-top: 5px; /* Ajustez l'espacement entre le texte et le bouton selon vos besoins */
    }
</style>

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
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('entretiens-create') }}">Entretien</a>
        </li>
        @if (Auth::user()->name == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Ajouter Utilisateur</a>
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

<<<<<<<<< Temporary merge branch 1
    <!-- Footer with Social Icons -->
    <div class="mt-4">
        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="fab fa-tiktok"></i></a>
        <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
=========

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
>>>>>>>>> Temporary merge branch 2
    </div>
</div>

<!-- Button to toggle sidebar -->
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
    <span class="navbar-toggler-icon"></span>
</button>
