@extends('layouts.boutique')

@section('content')

    {{-- 🌌 HERO SECTION – Love & Deepspace mix aesthetic --}}
    <x-hero-space />

    {{-- 💫 PRODUITS VEDETTES --}}
    <x-produit-vedette :products="$featuredProducts" />

    {{-- 🌸 NOUVEAUTÉS --}}
    <x-produit-en-avant :products="$newProducts" title="Nouveautés" />

    {{-- 🌟 EN PROMOTION --}}
    <x-produit-en-avant :products="$saleProducts" title="En promotion" />

    {{-- 🪐 CATÉGORIES --}}
    <x-categories-grid :categories="$categories" />

@endsection