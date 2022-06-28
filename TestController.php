<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class TestController extends Controller
{
    public function index1()
    {
        $text = "建物です";
        return view('test',['text' => $text]);
    }
    public function index2($room)
    {
        $text = "部屋番号は".$room."です";
        return view('test',['text' => $text]);
    }
}