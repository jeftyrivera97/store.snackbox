<?php

use App\Events\OrderStatusChangeEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


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
Auth::routes();



Route::get('/', 'App\Http\Controllers\StoreController@index')->name('/');
Route::get('/home', 'App\Http\Controllers\StoreController@index')->name('/home');

Route::get('/pedido-nuevo', 'App\Http\Controllers\StoreController@pedidoNuevo')->name('/pedido-nuevo');
Route::get('/pedido-cliente-nuevo', 'App\Http\Controllers\StoreController@pedidoClienteNuevo')->name('/pedido-cliente-nuevo');

Route::get('/tendencias-index', 'App\Http\Controllers\ComboController@tendenciaIndex')->name('/tendencias-index');
Route::get('/populares-index', 'App\Http\Controllers\ComboController@popularIndex')->name('/populares-index');
Route::get('/combos-index', 'App\Http\Controllers\ComboController@comboIndex')->name('/combos-index');
Route::get('/promociones-index', 'App\Http\Controllers\ComboController@promocionIndex')->name('/promociones-index');

Route::get('combos-select/{id_combo}', 'App\Http\Controllers\StoreController@comboSelect')->name('combos-select');

Route::get('item-select/{id_categoria}', 'App\Http\Controllers\StoreController@seleccionar')->name('item-select');
Route::post('guardar-pedido', 'App\Http\Controllers\StoreController@guardarPedido')->name('guardar-pedido');
Route::resource('cart', CartController::class);

Route::get('pedido-posponer /{id_pedido}', 'App\Http\Controllers\StoreController@pedidoPosponer')->name('pedido-posponer');
Route::post('pedido-reingreso', 'App\Http\Controllers\StoreController@pedidoReingreso')->name('pedido-reingreso');

Route::post('verificarFecha', 'App\Http\Controllers\StoreController@verificar')->name('verificarFecha');
Route::get('cliente-index', 'App\Http\Controllers\StoreController@clienteIndex')->name('cliente-index');
Route::get('cliente-pedido', 'App\Http\Controllers\StoreController@clientePedido')->name('cliente-pedido');
Route::post('cliente-contraseña', 'App\Http\Controllers\StoreController@clienteNuevaContraseña')->name('cliente-contraseña');
Route::post('cliente-edit', 'App\Http\Controllers\StoreController@clienteEdit')->name('cliente-edit');

Route::get('item-eliminar /{id_item}', 'App\Http\Controllers\CartController@eliminar')->name('item-eliminar');
Route::get('item-agregar /{id_item}', 'App\Http\Controllers\CartController@agregar')->name('item-agregar');

Route::get('descuento-index', 'App\Http\Controllers\StoreController@descuentoIndex')->name('descuento-index');
Route::get('cliente-pedidoImprimir /{id_pedido}', 'App\Http\Controllers\StoreController@pedidoImprimir')->name('cliente-pedidoImprimir');
Route::get('cliente-facturaImprimir /{id_pedido}', 'App\Http\Controllers\StoreController@facturaImprimir')->name('cliente-facturaImprimir');

Route::get('contacto', 'App\Http\Controllers\StoreController@contacto')->name('contacto');
Route::get('envios', 'App\Http\Controllers\StoreController@envios')->name('envios');
Route::get('politicas', 'App\Http\Controllers\StoreController@politicas')->name('politicas');
Route::get('terminos', 'App\Http\Controllers\StoreController@terminos')->name('terminos');

Route::get('catalogo', 'App\Http\Controllers\StoreController@catalogo')->name('catalogo');


Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/cuenta', function () {
    return view('profile.index');
});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create'])->name('/email');
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


//Notificaciones vista
Route::get('leerNotificaciones', 'App\Http\Controllers\StoreController@leerNotificaciones')->name('leerNotificaciones');

//Funcion js para leer todo en la campinita
Route::get('markAsRead', function(){
    Auth::user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');

//leer todo en la vista
Route::post('/mark-as-read', 'App\Http\Controllers\StoreController@leyendoNotificaciones')->name('markNotificationView');

