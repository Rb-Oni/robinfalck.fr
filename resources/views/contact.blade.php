@extends('layouts.app')

@section('title')
Contact - Robin FALCK
@endsection

@section('content')
<div class="container mx-auto px-5 lg:px-0 mb-5 w-screen lg:w-1/3">
    <h1 class="text-center mt-16 lg:my-16 font-bold text-white text-6xl lg:text-8xl">CONTACT</h1>
    <div class="flex flex-wrap justify-between text-white invisible lg:visible">
        <a href="tel:0648526812" class="font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
            </svg> 06 48 52 68 12</a>
        <a href="mailto:robin.falck57@gmail.com" class="font-semibold">robin.falck57@gmail.com <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg></a>
    </div>

    <form action="{{ route('contact.mailreq') }}" method="POST" class="text-center font-semibold flex flex-col">
        @csrf
        @include('partials.success')
        @yield('success')
        <label for="object" class="text-white text-2xl mt-10">Objet <span class="text-red">*</span></label>
        <input type="text" name="object" id="object" class="mt-5 p-3" placeholder="Saisissez un objet" maxlength="255" required>
        @if($errors->has('object'))
        <div class="text-red">{{ $errors->first('object') }}</div>
        @endif
        <label for="mail" class="text-white text-2xl mt-10">E-Mail <span class="text-red">*</span></label>
        <input type="email" name="mail" id="mail" class="mt-5 p-3" placeholder="Saisissez votre adresse mail" required>
        @if($errors->has('mail'))
        <div class="text-red">{{ $errors->first('mail') }}</div>
        @endif
        <label for="msg" class="text-white text-2xl mt-10">Message <span class="text-red">*</span></label>
        <textarea name="msg" id="msg" class="mt-5 p-3" rows="6" placeholder="Saisissez un message..." maxlength="1000" required></textarea>
        @if($errors->has('msg'))
        <div class="text-red">{{ $errors->first('msg') }}</div>
        @endif
        <p class="text-white"><span class="text-red">*</span> champs obligatoires</p>
        @if(config('services.recaptcha.key'))
        <div class="g-recaptcha flex justify-center mt-2" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
        @endif
        <div class="justify-center mb-5">
            <button type="submit" class="text-3xl font-bold bg-green hover:bg-white hover:text-black mt-10 text-white py-3 px-6 ease-in duration-150" name="submit">ENVOYER</button>
        </div>
    </form>
</div>
@endsection