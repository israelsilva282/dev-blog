<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)->group(function () {
    Route::get("/categories", "index");
    Route::get("/category/{category}", "show");
    Route::post("/categories", "store");
    Route::delete("/category/{category}", "destroy");
    Route::put("/category/{category}", "update");
});
