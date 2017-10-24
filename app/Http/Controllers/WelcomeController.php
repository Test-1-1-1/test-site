<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 24.10.2017
 * Time: 21:44
 */



namespace App\Http\Controllers;

class WelcomeController extends Controller
{

    public function test(){
    return view("test");

        }

    public function test1(){
        return view("test1");

    }

}