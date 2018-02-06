<?php

Route::get('/', 'BaseController@getIndex')->name('index');
Route::post('/next', 'BaseController@postNext')->name('next');
Route::get('/output/{quiz_id}', 'BaseController@getOutput')->name('output');
Route::get('/question/{question_id}', 'BaseController@getQuestion')->name('question');
