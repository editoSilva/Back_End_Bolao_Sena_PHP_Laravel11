<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('all-lotery', [TestController::class, 'all']);

Route::get('lottery-result/{lottery}', [TestController::class, 'lotteryResult']);

Route::get('all-result-lottery/{lottery}', [TestController::class, 'allLotteryResult']);

Route::get('contest-lottery-result/{lottery}/{contest}', [TestController::class, 'contestLottery']);





