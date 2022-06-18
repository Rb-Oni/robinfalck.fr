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

<div class="container-fluid flex flex-col md:flex-row h-75vh">
    <a href="https://hokusai.robinfalck.fr" class="bg-hokusai bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
    <a href="https://leslutinstournés.com" class="bg-leslutinstournes bg-cover flex-1 opacity-50 hover:opacity-100 ease-in duration-200"></a>
</div>
@endsection