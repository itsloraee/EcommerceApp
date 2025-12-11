<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Catalogue produits
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');

// Catégories
Route::get('/categories/{category:slug}', [ProductController::class, 'category'])->name('categories.show');

// Panier (authentification requise)
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Afficher les produits aux panier
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add'); // Ajouter les produits au panier
    Route::patch('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update'); // Modifier les produits au panier
    Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])->name('cart.remove'); // Supprimer les produits du panier
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
