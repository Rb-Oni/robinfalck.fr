@extends('layouts.app')

@section('title')
Robin FALCK
@endsection

@section('content')
<div class="container-fluid bg-white">
    <div class="container flex flex-wrap ml-auto h-50vh items-center">
        <ul>
            <li class="nav-item">
                <h1 class="font-bold text-8xl">Robin FALCK</h1>
            </li>
            <li class="nav-item">
                <h2 class="text-4xl">Développeur web</h2>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid flex flex-wrap h-75vh">
    <a href="https://hokusai.robinfalck.fr" class="bg-hokusai bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
    <a href="https://leslutinstournés.com" class="bg-leslutinstournes bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
</div>
@endsection