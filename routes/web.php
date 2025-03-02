<?php

use App\Http\Controllers\API\V1\VersionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('version', [VersionController::class, 'index']);
});
