<nav class=" container-fluid flex flex-wrap justify-between navbar navbar-expand-lg py-4 px-8 border-b-4 border-black bg-white">
    <ul class="navbar-nav flex flex-wrap items-center space-x-3">
        <li class="nav-item">
            <a class="nav-link active hover:text-green focus:text-green font-bold text-2xl ease-in duration-150" aria-current="page" href="{{ route('welcome') }}">MES PROJETS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover:text-green focus:text-green font-bold text-2xl ease-in duration-150" href="{{ route('about') }}">À PROPOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover:text-green focus:text-green font-bold text-2xl ease-in duration-150" href="{{ route('contact') }}">CONTACT</a>
        </li>
    </ul>
    <ul class="navbar-nav items-center absolute right-1/2 top-0 translate-x-1/2 hidden lg:block">
        <li class="nav-item">
            <a class="nav-link active font-bold text-7xl" aria-current="page" href="{{ route('welcome') }}">RF</a>
        </li>
    </ul>
    <ul class="navbar-nav flex items-center">
        <li class="nav-item">
            <a class="nav-link hover:text-green focus:text-green ease-in duration-150" href="mailto:robin.falck57@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg></a>
        </li>
    </ul>
</nav>