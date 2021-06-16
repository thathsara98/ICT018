<?php

namespace App\Http\Controller;

use App\regform;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function store(Request $request){

        $details = new regform;

        $details->details=$request->name;
        $details->save();
        $data=regform::all();
        return view('name')->with('name',$data);
        return view('dateOfBirth')->with('dateOfBirth',$data);
        return view('telephoneNo')->with('telephoneNo',$data);
        return view('NIC')->with('NIC',$data);
        return view('gender')->with('gender',$data);

    }

}
