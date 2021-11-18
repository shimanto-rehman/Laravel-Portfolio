<?php

Route::get('/','PagesController@FirstPage');

Route::get('/about','PagesController@AboutPage');

Route::get('/work','PagesController@WorkPage');

Route::get('/contact','PagesController@ContactPage');

Route::get('/gallary','PagesController@Gallery');

Route::get('/music','PagesController@Music');

Route::get('/mail', 'MailController@ContactPage');

Route::post('/send/email', 'MailController@sendemail');

/*
//static route
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});
//dynamic route 
Route::get('/users/{id}/{name}',function($id,$name){
    return 'this is user '.$name.'. And this is his/her id '.$id;
});

*/