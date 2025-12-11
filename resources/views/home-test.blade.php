@extends('layouts.boutique')

@section('content')

    {{-- Hero section test --}}
    <x-love-and-deepspace.hero-space/>

    {{-- Produits vedettes test --}}
    <x-love-and-deepspace.produit-vedette :products="$products" />

    {{-- Nouveautés --}}
    <x-love-and-deepspace.produit-en-avant :products="$newProducts" title="Nouveautés" />

@endsection