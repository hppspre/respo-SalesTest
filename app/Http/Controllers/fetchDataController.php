<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fetchDataController extends Controller
{
    function index()
    {

        $data=DB::table('new_salespeople')->get();
        return view('pages.index')->with('data',$data);

    }
}
