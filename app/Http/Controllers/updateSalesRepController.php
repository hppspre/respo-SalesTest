<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class updateSalesRepController extends Controller
{
    //

    function getupdateSalesPersonData(Request $request)
    {
        $data=DB::table('new_salespeople')->where([['id','=',(int) $request->id]])->get();
        return view('pages.update')->with('data',$data);

    }


    function updateSalesRepData(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'email_address' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'teliphone' => 'required|min:10|max:12',
            'joind_date'=> 'required|date',
            'current_route'=>'required',
            'Comments'=>'required',
        ]);

        DB::table('new_salespeople')->where([['id','=',$request->id]])
        ->update(array('full_name' => $request->full_name,
                     'Email_address' => $request->email_address,
                     'Teliphone' => $request->teliphone,
                     'joind_date' => $request->joind_date,
                     'current_route' => $request->current_route,
                     'Comments' => $request->Comments)); 

        return back()->with('msg', 'Successfuly Updated');
    }

    function dropSalesPerson(Request $request)
    {
        DB::table('new_salespeople')->where([['id','=',$request->id]])->delete();
        echo 'ok';
    }
}
