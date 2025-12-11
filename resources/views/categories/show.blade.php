@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- En-tête de la catégorie -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <div class="flex items-center gap-6">
            @if($category->image)
                <img src="{{ $category->image_url }}" 
                     alt="{{ $category->name }}"
                     class="w-24 h-24 object-cover rounded-full shadow-lg">
            @else
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center shadow-lg">
                    <span class="text-4xl">📦</span>
                </div>
            @endif
            
            <div>
                <h1 class="text-4xl font-bold mb-2">{{ $category->name }}</h1>
                @if($category->description)
                    <p class="text-gray-600 text-lg">{{ $category->description }}</p>
                @endif
                <p class="text-sm text-gray-500 mt-2">
                    {{ $products->total() }} produits dans cette catégorie
                </p>
            </div>
        </div>
    </div>

    <!-- Produits de la catégorie -->
    @if($products->isEmpty())
        <div class="bg-white rounded-lg shadow p-12 text-center">
            <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <p class="text-gray-500 text-lg mb-4">Aucun produit disponible dans cette catégorie pour le moment.</p>
            <a href="{{ route('products.index') }}" 
               class="text-blue-600 hover:text-blue-800 font-semibold">
                Voir tous les produits →
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-8">
            @foreach($products as $product)
                @include('products.partials.product-card', ['product' => $product])
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $products->links() }}
        </div>
    @endif

</div>
@endsection