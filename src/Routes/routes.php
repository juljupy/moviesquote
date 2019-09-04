<?php

Route::get('/moviequote', '\Merqueo\MovieQuotes\Controllers\MovieQuotesController@index');
Route::get('/showquote', '\Merqueo\MovieQuotes\Controllers\MovieQuotesController@showQuote');