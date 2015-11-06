<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('namespace' => 'panel'), function()
{
   
   Route::get('/panel', array('as' => 'home', function()
  {
       
    if (! Sentry::check()) {
        return redirect()->route('sentinel.login');
    }else {
        return View::make('site');
    }
    
     // return View::make('site');
   }));

});


 Route::get('/', array('as' => 'home', function()
{
     
     return View::make('dashboard');
     
   /*if (! Sentry::check()) {
        return redirect()->route('sentinel.login');
    }else {
        return View::make('dashboard');
    }*/
}));





