<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/themex', 'RR\ThemeX\Http\Controllers\Admin\ThemeXController@index')->defaults('_config', [
        'view' => 'themex::admin.index',
    ])->name('themex.admin.index');

});