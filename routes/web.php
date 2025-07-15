<?php

use Illuminate\Support\Facades\Route;
//use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::resource('products', ProductController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/outlets', function () {
    return view('outlets');
}) ;



// user

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// product
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

        Route::middleware('can:isEmployer')->group(function () {
        Route::get('/products/create', [ProductController::class, 'create']);
        Route::post('/products', [ProductController::class, 'store']);
        Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
        Route::put('/products/{id}', [ProductController::class, 'update']);
       
    });
});


Route::middleware(['auth'])->group(function () {
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

});



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

 //Route::get('/products', function () {
 //   return view('products', [
 //       'products' => Product::all()
 //   ]);
//});

//Route::get('/products/{id}', function ($id) {
//  $product = Product::find($id);

//  return view('product-details', ['product' => $product]);
// });



// Route::get('/contact', function () {
//   return view('contact');
// });



// contact

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');


// Order 

Route::resource('orders', OrderController::class)->only(['create', 'store']);

Route::middleware(['auth'])->group(function () {
    Route::get('/order/{id}', [OrderController::class, 'shippingForm'])->name('orders.form');
    Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('orders.place');
    Route::get('/order-success', [OrderController::class, 'success'])->name('orders.success');
});


Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/success', [OrderController::class, 'success'])->name('orders.success');

Route::get('/orders/cart', [OrderController::class, 'showCart'])->name('orders.cart');

Route::get('/orders/{order}/preview', [OrderController::class, 'preview'])->name('orders.preview');
