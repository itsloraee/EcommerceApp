<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// Page d'accueil officielle
Route::get('/', [HomeController::class, 'index'])->name('home');

// Page d'accueil test
Route::get('/home-test', function () {

    $products = [
        (object)[
            'name' => 'Figurine Zayne – Flamme Astrale',
            'slug' => 'figurine-zayne-flamme-astrale', // ← AJOUT SUPER IMPORTANT
            'price' => 39.99,
            'formatted_price' => '39.99 €',
            'image' => 'https://placehold.co/400x600/png?text=Zayne',
            'category' => (object)['name' => 'Figurines']
        ],
        (object)[
            'name' => 'Poster Astra – Crépuscule',
            'slug' => 'poster-astra-crepuscule', // ← PAREIL
            'price' => 19.99,
            'formatted_price' => '19.99 €',
            'image' => 'https://placehold.co/400x600/png?text=Astra',
            'category' => (object)['name' => 'Posters']
        ],
    ];

    $newProducts = $products;

    return view('home-test', compact('products', 'newProducts'));
});

// Catalogue produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Catégories
Route::get('/categories/{category:slug}', [ProductController::class, 'category'])->name('categories.show');

// Panier (authentification requise)
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
});

require __DIR__.'/auth.php';

/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
