@extends('layouts.app')

@section('title')
À propos - Robin FALCK
@endsection

@section('content')
<div class="container mx-auto mb-5 w-1/3 h-screen">
    <h1 class="text-center my-16 font-bold text-white text-8xl break-words">À PROPOS</h1>
    <div class="flex flex-col text-white font-semibold">
        <p class="mb-10 text-lg text-center">Robin, 24 ans, Développeur web junior. J'essaye de coder des sites web quand je code pas des sites web, en ce moment j'apprends Laravel.</p>
        <ul class="text-center mb-5">
            <li class="font-bold text-2xl text-white">FORMATIONS : </li>
            <li class="my-5 text-lg"><span class="font-bold">BTS Systèmes Numériques</span><br> option Électronique et Communications</li>
            <li class="text-lg"><span class="font-bold">BAC PRO Systèmes Électroniques Numériques</span><br> option Télécommunications et Réseaux</li>
        </ul>
    </div>
</div>
@endsection