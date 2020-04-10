<?php
/**
 * Created by PhpStorm.
 * User: qd_008
 * Date: 2020/4/6
 * Time: 16:42
 */

namespace Acme\Sys\Controllers;


class IndexController extends Controller
{
    public function index(){
        return view('sys::index');
    }
}
