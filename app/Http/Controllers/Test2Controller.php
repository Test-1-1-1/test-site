<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 18.10.2017
 * Time: 21:34
 */

namespace App\Http\Controllers;


class Test2Controller extends Controller

{
    public function test()
    {
        return view('test2', ["message" => "New class"]);
    }

}