<?php

Route::get('/', function () {
    return view('index');
});

Route::post('/contact_us', 'EmailsController@sendEmail');