<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\SkillController;

Route::group(['prefix' => 'v1'], function () {

    Route::apiResource('skills', SkillController::class);

});