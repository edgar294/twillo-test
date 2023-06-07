<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Twilio\TwiML\VoiceResponse;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('redirect/call', function () {
    $twiml = new VoiceResponse();
    $twiml->say("Gracias por llamar");
    $twiml->say("Sera redireccionado a su llamada final");
    $twiml->dial("+573118905560");

    return $twiml;
});
