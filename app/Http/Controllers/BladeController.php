<?php
/**
 * Created by PhpStorm.
 * User: mylitboy
 * Date: 2017-4-17
 * Time: 23:08
 */

namespace App\Http\Controllers;


class BladeController extends Controller
{
    public function section1(){
        return view('student.section1');
    }
}