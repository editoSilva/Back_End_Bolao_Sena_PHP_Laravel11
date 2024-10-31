<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class LotteryService
{
    private $baseUrl;
    private $arr;

    public function __construct()
    {
        $this->baseUrl = $baseUrl = env('BASE_URL_LOTERY');
        $this->arr = $arr = array();

    }

    public function allLotteryResult($lottery)
    {
        $response = Http::get($this->baseUrl.'api/'.$lottery);

        if($response->status()) {

            return $response->json();
        }

        return response()->json([
            'message' => 'not found lottery'
        ], 401);
    }

    public function allLotery()
    {
        $response = Http::get($this->baseUrl.'/api');

        if($response->status()) {

            return $response->json();
        }

        return response()->json([
            'message' => 'not found lottery'
        ], 401);



    }

    public function latestResult($lottery)
    {
        $response = Http::get($this->baseUrl.'api/'.$lottery.'/latest');

        if($response->status()) {

            return $response->json();
        }

        return response()->json([
            'message' => 'not found lottery'
        ], 401);
    }

    public function contestLotteryResult($lottery, $contest)
    {

        $response = Http::get($this->baseUrl.'api/'.$lottery.'/'.$contest);

        if($response->status()) {

            return $response->json();
        }

        return response()->json([
            'message' => 'not found lottery'
        ], 401);
    }



}
