<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MIngredientPizzaController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MPizzaController;
use App\Http\Controllers\MUnitController;
use App\Http\Controllers\MIngredientController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/log', function () {
    return view ('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/order',[PizzaController::class, 'index'])->name('pizzas.index');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/checkout/create', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/crudmedewerkers', function () {
    //return view('crudmedewerkers');
//})->name('crudmedewerkers.index')->middleware('staff');
//Route::delete('/crudmedewerkers/pizza/{pizza}', [MPizzaController::class, 'deleteIngredient'])->name('pizza_ingredient.delete');
//Route::delete('/crudmedewerkers/pizza/{pizza}', [MPizzaController::class, 'deleteIngredient_pizza'])->name('pizza_ingredient.delete');

Route::post('/crudmedewerkers/ingredients/{ingredient}/pizza/{pizza}', [MPizzaController::class, 'storeIngredient'])->name('pizza_ingredient.store');
Route::delete('/crudmedewerkers/ingredients/{ingredient}/pizza/{pizza}', [MPizzaController::class, 'deleteIngredient_pizza'])->name('pizza_ingredient.delete');
Route::resource('/crudmedewerkers/pizza', MPizzaController::class);
Route::resource('/crudmedewerkers/ingredient', MIngredientController::class);

Route::resource('/manager', ManagerController::class)
    ->middleware('manager')
->parameters(['manager' => 'employee']);

route::get('staff/dashboard', [StaffController::class, 'index'])->name('staff.dashboard')->middleware('staff');

Route::get('staff/{order}', [StaffController::class, 'show'])->name('staff.show')->middleware('staff');

Route::put('staff/{order}', [StaffController::class, 'update'])->name('staff.update');


Route::get('/customer/{customer_id}', [CustomerOrderController::class, 'index'])->name('customer.order');

Route::delete('/orders/{order}', 'App\Http\Controllers\CheckoutController@destroy')->name('orders.destroy');

Route::get('/test', function () {
    return view('test');
});
