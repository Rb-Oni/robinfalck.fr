<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="container-fluid border-b-4 border-black bg-white">
    <div x-data="{ open: true }" class="flex flex-col px-4 md:items-center md:justify-between md:flex-row md:px-8 lg:px-12">
        <div class="flex flex-row justify-between py-2">
            <a class="font-bold text-6xl" aria-current="page" href="{{ route('welcome') }}">RF</a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
            <a class="hover:text-green focus:text-green font-bold text-2xl ease-in duration-150 md:mt-0 md:ml-4" href="{{ route('welcome') }}">MES PROJETS</a>
            <a class="hover:text-green focus:text-green font-bold text-2xl ease-in duration-150 md:mt-0 md:ml-4" href="{{ route('about') }}">À PROPOS</a>
            <a class="hover:text-green focus:text-green font-bold text-2xl ease-in duration-150 md:mt-0 md:ml-4" href="{{ route('contact') }}">CONTACT</a>
        </nav>
    </div>
</div>

<!-- <nav class="container-fluid flex flex-wrap justify-between navbar navbar-expand-lg py-4 px-8 border-b-4 border-black bg-white">
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
</nav> -->