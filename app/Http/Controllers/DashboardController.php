<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
 
    

        return view('dashboard',[
            //this way you can import all the contents from idea model table save it to ideas key variable
            //code :'ideas' => Idea::all()
            //another way to do this if you want to display by orders supose created at decendning way
            'ideas' => Idea::orderBy('created_at', 'desc')->get(), //get is for to get the recoreds like all()
        ]);

    }
}
