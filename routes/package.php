<?php

$namespaceController =  'Khapu\LaravelCurd\Http\Controllers';
Route::group(['prefix'=>'/','namespace'=>$namespaceController],function(){
    Route::get('test','TestController@index')->name('test');
});

