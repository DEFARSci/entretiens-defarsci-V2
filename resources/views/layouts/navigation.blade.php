
<style>
    /* Styles for Offcanvas */
    #sidebar {
        width: 350px;
        background-color: #fff; /* Utilisez la couleur bleu clair de votre choix */
    }

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
                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('entretiens-create')" :active="request()->routeIs('entretiens')">
                {{ __('Entretien') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
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
    </div>
</nav>
