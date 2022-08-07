@extends('layouts.app')

@section('title')
Robin FALCK
@endsection

@section('content')
<div class="container-fluid bg-black">
    <div class="container flex flex-wrap ml-auto h-50vh items-center px-2 lg:px-0">
        <ul>
            <li class="nav-item">
                <h1 class="font-bold text-6xl lg:text-8xl text-white">Robin FALCK</h1>
            </li>
            <li class="nav-item">
                <h2 class="text-2xl lg:text-4xl text-white">Développeur web</h2>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid grid grid-row md:grid-cols-2">
    <a href="https://mltoiturecreation.fr" class="h-75vh bg-mltoiturecreation bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
    <a href="https://hokusai.robinfalck.fr" class="h-75vh bg-hokusai bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
</div>

<div class="container-fluid grid grid-row md:grid-cols">
    <a href="https://leslutinstournés.com" class="h-75vh bg-leslutinstournes bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
</div>

@endsection