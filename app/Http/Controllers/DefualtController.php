<?php

namespace App\Http\Controllers;

use App\Models\country;
use App\Models\first_form;
use Illuminate\Http\Request;

class DefualtController extends Controller
{
    //
    public function Default()
    {
        return view('test_front');
    }

    public function Rensyuu()
    {
        return view('Rensyuu');
    }

    public function Rensyuu2()
    {
        return view('Rensyuu2');
    }

    public function test_table()
    {

        //DBからデータを取得する
        $data = country::all();

        return view('test_table')->with([
            'data' => $data
        ]);
    }

    public function Test_Coordinate()
    {
        return view('test_coordinate');
    }

    public function Test_Form(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $data = $request->all();

           first_form::create($data);
        }
        return view('test_form');
    }

    //U22用PHP↓
    public function Home()
    {
        return view('home');
    }
    public function Memo(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $data = $request->all();

           first_form::create($data);
        }
        return view('memo');
    }

    //デバッグ用
    public function welcome()
    {
        return view('welcome');
    }
}