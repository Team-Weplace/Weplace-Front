<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilBoasVindasController;
use App\Http\Controllers\PerfilLojistaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutosController;
/**
 * Store front routes.
 */
require 'store-front-routes.php';

/**
 * Customer routes. All routes related to customer
 * in storefront will be placed here.
 */
require 'customer-routes.php';

/**
 * Checkout routes. All routes related to checkout like
 * cart, coupons, etc will be placed here.
 */
require 'checkout-routes.php';
Route::get('/Index', [IndexController::class, 'index'])->name('index');
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/perfil-Lojista', [PerfilLojistaController::class, 'index'])->name('perfil-Lojista');



