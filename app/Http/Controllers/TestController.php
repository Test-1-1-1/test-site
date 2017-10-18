<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 18.10.2017
 * Time: 21:15
 */

namespace App\Http\Controllers;


class TestController extends Controller
{

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('test', ["message" => "LOL"]);
    }

}