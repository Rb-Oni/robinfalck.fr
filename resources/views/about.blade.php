@extends('layouts.app')

@section('title')
À propos - Robin FALCK
@endsection

@section('content')
<div class="container mx-auto mb-5 w-screen md:w-1/3">
    <h1 class="text-center my-16 font-bold text-white text-6xl lg:text-8xl">À PROPOS</h1>
    <div class="flex flex-col text-white font-semibold">
        <p class="mb-10 text-md lg:text-lg text-center">Robin, 24 ans, Développeur web junior. J'essaye de coder des sites web quand je code pas des sites web, en ce moment j'apprends Laravel.</p>
        <ul class="text-center mb-5">
            <li class="font-bold text-lg lg:text-2xl text-white">FORMATIONS : </li>
            <li class="my-5 text-md lg:text-lg"><span class="font-bold">BTS Systèmes Numériques</span><br> option Électronique et Communications</li>
            <li class="text-md lg:text-lg"><span class="font-bold">BAC PRO Systèmes Électroniques Numériques</span><br> option Télécommunications et Réseaux</li>
        </ul>
    </div>
</div>
@endsection