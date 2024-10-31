<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LotteryService;

class TestController extends Controller
{
    private $serviceLotery;

    public function __construct()
    {
        $this->serviceLotery = app()->make(LotteryService::class);
    }
    public function all() {

        return $this->serviceLotery->allLotery();
    }

    public function allLotteryResult($lottery)
    {
        return $this->serviceLotery->allLotteryResult($lottery);

    }

    public function lotteryResult($lottery)
    {
        return $this->serviceLotery->latestResult($lottery);

    }

    public function contestLottery($lottery, $contest)
    {
        return $this->serviceLotery->contestLotteryResult($lottery, $contest);
    }


}
