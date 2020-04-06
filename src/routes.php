<?php
/**
 * Created by PhpStorm.
 * User: qd_008
 * Date: 2020/4/6
 * Time: 14:22
 */
use Illuminate\Routing\Route;

Route::prefix('sys')->group(function () {
    Route::get('/', function () {
        return '-------欢迎光临------';
    });
});
