@extends('layouts.default')

@section('title', 'Fuelprint — Home')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/default.css') }}">
<link rel="stylesheet" href="{{ asset('css/landing/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/landing/landing.queries.css') }}">
@endpush

@section('nav-left-links')
<li><a href="#about" class="btn-link" id="nav-link" aria-label="">About</a></li>
<li><a href="#functionality" class="btn-link" id="nav-link" aria-label="">How it works</a></li>
<li><a href="#values" class="btn-link" id="nav-link" aria-label="">What we offer</a></li>
<li><a href="#faq" class="btn-link" id="nav-link" aria-label="">FaQ</a></li>
<div class="mobile-cta-container flex ">
    <ul class=" mobile-cta flex dir-col">
        <li><a href="{{route('login')}}" class="btn-link" id="mobile-login" aria-label="Login button">Login</a></li>
        <li><a href="{{route('register')}}" class="btn-link cta" id="mobile-cta" aria-label="">Sign up</a></li>
    </ul>
</div>
@endsection
@section('nav-right-links')
<li><a href="{{route('login')}}" class="btn-link" id="login-btn" aria-label="Login button">Login</a></li>
<li><a href="{{route('register')}}" class="btn-link cta" id="register-button" aria-label="">Sign up</a></li>
@endsection

@section('hero')
@include('sections.hero')
@endsection

@section('footprints')
@include('sections.footprints')
@endsection

@section('content')
@include('sections.partners')
@include('sections.about')
@include('sections.functionality')
@include('sections.values')
@include('sections.faq')
@include('sections.cta')
@endsection

@push('scripts')
<script src="/javascript/script.js" defer></script>
<script src="/javascript/landing/landing-sections.js" defer></script>
@endpush