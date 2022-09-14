<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MiembroController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('miembro.home');
});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*Route::get('miembro/{miembro}/ver', [MiembroController::class, 'show'])->name('miembro.show');
Route::get('miembro/registrar', [MiembroController::class, 'create'])->name('miembro.create');
Route::post('miembro/guardar', [MiembroController::class, 'store'])->name('miembro.store');
Route::get('miembro/listar', [MiembroController::class, 'index'])->name('miembro.index');
Route::get('miembro/{miembro}/editar', [MiembroController::class, 'edit'])->name('miembro.edit');
Route::put('miembro/{miembro}/actualizar', [MiembroController::class, 'update'])->name('miembro.update');
Route::delete('miembro/{miembro}/eliminar', [MiembroController::class, 'destroy'])->name('miembro.destroy');
*/
Route::get('/', [MiembroController::class, 'home'])->name('miembro.home');
Route::resource('miembro', MiembroController::class);