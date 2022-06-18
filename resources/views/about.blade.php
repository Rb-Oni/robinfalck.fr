@extends('layouts.app')

@section('title')
À propos - Robin FALCK
@endsection

@section('content')
<div class="container mx-auto px-5 lg:px-0 mb-5 w-screen lg:w-1/3">
    <h1 class="text-center my-16 font-bold text-white text-6xl lg:text-8xl">À PROPOS</h1>
    <div class="flex flex-col text-white font-semibold">
        <p class="mb-10 text-md lg:text-lg text-center">Robin, 24 ans, Développeur web junior. J'essaye de coder des sites web quand je code pas des sites web. En ce moment je travaille sur plusieurs projets Laravel / Symfony / Vue.js que vous pouvez retrouver sur mon <a href="https://github.com/Rb-Oni" target="_blank" class="font-bold">GitHub</span></a>
        <ul class="text-center my-5 lg:my-16">
            <li class="font-bold text-xl lg:text-3xl text-white">FORMATIONS : </li>
            <li class="my-5 text-md lg:text-lg"><span class="font-bold text-lg lg:text-xl">TITRE PRO Développeur web et web mobile</span><br> Front-end</li>
            <li class="my-5 text-md lg:text-lg"><span class="font-bold text-lg lg:text-xl">BTS Systèmes Numériques</span><br> option Électronique et Communications</li>
            <li class="text-md lg:text-lg"><span class="font-bold text-lg lg:text-xl">BAC PRO Systèmes Électroniques Numériques</span><br> option Télécommunications et Réseaux</li>
        </ul>
    </div>
</div>
@endsection