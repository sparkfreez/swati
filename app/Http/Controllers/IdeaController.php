<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    //
    public function store(){
             // $idea = new Idea();
      // $idea->content = 'test';
      // $idea->likes =0;
      // $idea->save();
      //shorter way to do above code need to set fillable property idea model
    // $idea = new Idea([
    //     'content' => 'hello',
    //   ]);
    //   $idea->save();
//----------------------------------------------------------------
    // $idea = new Idea([
    //     'content' => request()->get('idea','')
    // ]);
    // $idea->save();
//there is much shorter way for above code 
    $idea = Idea::create([
        'content' => request()->get('idea',''),
    ]);
    return redirect(route('dashboard'))->with('success','Idea Created Successfully');
    }
}
