<?php
/**
 * Created by PhpStorm.
 * User: qd_008
 * Date: 2020/4/6
 * Time: 14:22
 */
use Illuminate\Support\Facades\Route;

Route::prefix('sys')->group(function () {
    Route::get('/', function () {
        return '-------ACMECMS 欢迎您------';
    });
});
