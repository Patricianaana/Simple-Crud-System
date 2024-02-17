<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    function addData(Request $req){
        $user = new Employee;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->contact=$req->contact;
        $user->save();
        return redirect('users');

    }
}
