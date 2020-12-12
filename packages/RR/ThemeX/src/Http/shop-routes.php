<?php

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency']], function () {

    Route::get('/themex', 'RR\ThemeX\Http\Controllers\Shop\ThemeXController@index')->defaults('_config', [
        'view' => 'themex::shop.index',
    ])->name('themex.shop.index');

});