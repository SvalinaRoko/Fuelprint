@extends('layouts.default')

@section('title', 'Fuelprint - Create Listing')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/default.css') }}">
<link rel="stylesheet" href="{{ asset ('css/create/create.css') }}">
<link rel="stylesheet" href="{{ asset ('css/create/create.queries.css')}}">
@endpush

@php
$hideNav = true;
@endphp

@php
$hideFooter = true;
@endphp

@section('content')
<section class="create-listing-section flex">
    @include('sections.create.sidebar')
    @include('sections.create.listing')
    @include('sections.create.animation')
    <x-copyright />
</section>
@endsection

@push('scripts')
<script src="/javascript/script.js" defer></script>
<script src="/javascript/create/create-form.js" defer></script>
@endpush