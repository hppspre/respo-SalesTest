<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newSalesperson;

class newSalesRepController extends Controller
{
    function index()
    {
        return view('pages.AddNew');
    }

    function addNewSalesPerson(Request $request)
    {
        
        # I got the help 
        # 01 https://stackoverflow.com/questions/58725526/laravel-validation-email-address
        # 02 https://stackoverflow.com/questions/32541163/date-validation-in-laravel-5

        $request->validate([
            'full_name'=>'required',
            'email_address' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'teliphone' => 'required|min:10|max:12',
            'joind_date'=> 'required|date',
            'current_route'=>'required',
            'Comments'=>'required',
        ]);

        // dd($request);

        # create new recode 
        newSalesperson::create([
            'full_name'=>$request->full_name,
            'Email_address'=>$request->email_address,
            'Teliphone'=>$request->teliphone,
            'joind_date'=>$request->joind_date,
            'current_route'=>$request->current_route,
            'Comments'=>$request->Comments
            ]
        );


        return back()->with('msg', 'Successfuly Added');



    }


}
