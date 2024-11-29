<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaginaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('Home', [PaginaController::class, 'Home']);

Route::get('Blog', [PaginaController::class, 'Blog']);

Route::get('Juegos', [PaginaController::class, 'Juegos']);

Route::get('Musica', [PaginaController::class, 'Musica']);

Route::get('rcss',[PaginaController::class,'rcss']);

Route::get('a1', [PaginaController::class, 'a1']);

Route::get('a2', [PaginaController::class, 'a2']);

Route::get('a4', [PaginaController::class, 'a4']);

Route::get('ab1', [PaginaController::class, 'ab1']);

Route::get('PCbuild', [PaginaController::class, 'PCbuild']);

Route::get('Intel', [PaginaController::class, 'Intel']);

Route::get('Ryzen', [PaginaController::class, 'Ryzen']);

Route::get('PCIntel', [PaginaController::class, 'PCIntel']);

Route::get('PCRyzen',[PaginaController::class, 'PCRyzen']);

Route::get('Productos',[PaginaController::class, 'Productos']);

Route::get('Proyect', [PaginaController::class, 'Proyect']);

Route::get('Pblog', [PaginaController::class, 'Pblog']);

Route::get('dbd', [PaginaController::class, 'dbd']);

Route::get('music', [PaginaController::class, 'music']);

Route::get('about', [PaginaController::class, 'about']);