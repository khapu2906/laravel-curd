<?php

$namespaceController =  'Khapu\LaravelCurd\Http\Controllers';
Route::group(['prefix'=>'khapu','namespace'=>$namespaceController],function(){
    Route::get('/','TestController@index')->name('khapu.index');
});

