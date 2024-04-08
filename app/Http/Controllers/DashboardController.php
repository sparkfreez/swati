<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $ideas = Idea::orderBy('created_at', 'desc');
       //check if there is a search
       //if there is search ,check search value with our database
       if(request()->has('search')){
        //SQL we do (where content = "test" )say (id >5) 
        //in our case we want where content like %hello%
        $ideas = $ideas->where('content','like','%' .request()->get('search','') .'%');
       }  
    

        return view('dashboard',[
            //this way you can import all the contents from idea model table save it to ideas key variable
            //code :'ideas' => Idea::all()
            //another way to do this if you want to display by orders supose created at decendning way
             //get is for to get the recoreds like all()

            'ideas' => $ideas->paginate(5)
        ]);

    }
}
