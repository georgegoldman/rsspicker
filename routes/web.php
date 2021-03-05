<?php

use App\Http\Controllers\RssController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use Vedmant\FeedReader\Facades\FeedReader;





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

Route::get('/', RssController::class);


Route::get('/home', function(){
    $f = FeedReader::read('https://news.google.com/news/rss');

    return Response()->json([
        $f
    ]);
});

