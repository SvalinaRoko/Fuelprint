@extends('layouts.default')

@section('title', 'Fuelprint')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/default.css') }}">
<link rel="stylesheet" href="{{ asset('css/main/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/main/main.queries.css') }}">
@endpush

@php
$hideNav = true;
@endphp

@php
$hideFooter = true;
@endphp
<!-- <form method="POST" action="{{route('logout')}}" class="">
    @csrf
    <button class="">Logout</button>
</form> -->

@section('content')
<section class="dashboard-section">
    @include('sections.main.sidebar')
    @include('sections.main.dashboard')
</section>
@endsection


@push('scripts')
<script src="/javascript/script.js" defer></script>
<script src="/javascript/main/main-page.js" defer></script>
@endpush