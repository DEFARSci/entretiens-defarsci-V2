




<style>
    /* Styles for Offcanvas */
    #sidebar {
    width: 300px;
    background-color: #add8e6; /* Utilisez la couleur bleu clair de votre choix */
}


.offcanvas-header {
    padding-bottom: 0;
}

.offcanvas-title {
    font-size: 1rem; /* Ajustez la taille de la police selon vos besoins */
    margin-bottom: 1rem;
    margin-right: 20px; /* Ajoutez une marge à gauche pour déplacer le titre */
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
  margin-bottom: 20px;
}

.nav-link {
  padding: 8px 20px;
  color: #fff;
  text-decoration: none;
  display: block;
  text-align: center;
  font-weight: bold;
  transition: margin-top 0.3s ease; /* Ajout de l'effet de transition */
  margin-top: 0; /* Initial margin-top pour que la barre soit en haut */
}

/* Styles for fixed navigation */
nav.fixed {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: #333;
  padding: 10px 0;
  z-index: 1000;
}

body.fixed-nav {
  padding-top: 60px; /* Ajustez la valeur selon la hauteur de votre barre de navigation */
}

/* Add a class to the navigation when scrolling down */
nav.scrolled {
  margin-top: -52px; /* La barre de navigation remonte de sa hauteur */
}

/* Optional: Style for the main content to ensure it's not hidden behind the fixed navigation */
body {
  transition: padding-top 0.3s ease; /* Ajout de l'effet de transition pour le contenu principal */
}


/* Styles for Admin Section */
.btn-sm {
    margin-top: 4px; /* Ajustez l'espacement entre le texte et le bouton selon vos besoins */
}

/* Styles for Social Icons */
.fa-facebook, .fa-tiktok, .fa-whatsapp {
    font-size: 1.5rem; /* Ajustez la taille de la police des icônes sociales selon vos besoins */
    margin-right: 8px; /* Ajustez l'espacement entre les icônes selon vos besoins */
    color: #fff; /* Couleur des icônes sociales */
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
        <h1 class="offcanvas-title" id="sidebarLabel">DEFARSCI</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

        <!-- Navigation Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}"></i>Dashboard</a>
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

        <!-- Footer with Social Icons -->
        <div class="mt-4">
            <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-tiktok"></i></a>
            <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</div>


<!-- Button to toggle sidebar -->
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
    <span class="navbar-toggler-icon"></span>
</button>

