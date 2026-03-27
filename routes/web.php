<?php

use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('Reportes',[GeneralController::class,'reportes'])->name('reportes');
    Route::get('Admin/Usuarios',[GeneralController::class,'admin_usuarios'])->name('admin.usuarios');
    Route::get('Admin/Empleados',[GeneralController::class,'admin_empleados'])->name('admin.empleados');

    Route::get('Inv/Contenedores',[GeneralController::class,'inv_contenedores'])->name('inv.contenedores');

    /*Route::get('Repartos',[GeneralController::class,'repartos_registro'])->name('repartos.registro');
    Route::get('Repartos/{id}/pdf', [DeliveryController::class, 'pdf'])->name('deliveries.pdf');*/

    Route::get('/repartos', [DeliveryController::class, 'index'])->name('deliveries.index');
    Route::get('/repartos/{id}/pdf', [DeliveryController::class, 'pdf'])->name('deliveries.pdf');
    Route::get('/repartos/{id}/sheet', [DeliveryController::class,'sheetPdf'])->name('deliveries.sheet.pdf');
    Route::get('/repartos-calendar', [DeliveryController::class, 'calendar'])->name('deliveries.calendar');
    Route::get('/yard', [DeliveryController::class, 'yard'])->name('deliveries.yard');
    Route::get('/releases', [DeliveryController::class, 'index_releases'])->name('releases.index');

    Route::get('Finanzas/Invoice', [DeliveryController::class, 'finvoice'])->name('finanzas.invoice');

    Route::get('Reportes/Drivers', [DeliveryController::class, 'reportes_drivers'])->name('reportes.drivers');

    Route::post('/yard-receipt/pdf', [DeliveryController::class,'pdf_yard'])
    ->name('yard.pdf');
    


});
