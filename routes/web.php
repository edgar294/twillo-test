<?php

use Illuminate\Support\Facades\Route;
use Twilio\TwiML\VoiceResponse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('redirect/call', function () {
    $twiml = new VoiceResponse();
    $twiml->say("Gracias por llamar");
    $twiml->say("Sera redireccionado a su llamada final");
    $twiml->dial("+584168593648");

    dd($twiml);
});
