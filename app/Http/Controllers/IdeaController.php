<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function update(Idea $idea){
        request()->validate([
            //key varaible idea is from content attribute to get text  entered for validation
            'content' => 'required|min:3|max:240'
         ]);

        $idea->content = request()->get("content", ''); 
        $idea->save();

        //return redirect()->route('ideas.show',$idea->id);
        //or
        return redirect(route('ideas.show',$idea->id))->with('success','Idea updated Successfully');
    } 
    //edit the content idea
    public function edit(Idea $idea){

        $editing = true;

        return view("ideas.show",compact("idea",'editing'));
    } 
    //show perticular idea on page
    public function show(Idea $idea){
    
        //return view('ideas.show',[
        //    'idea' => $idea,
        //]);
       //you can use sorter code for above method 
       return view('ideas.show', compact('idea'));
    }
    //save an idea to database
    public function store(){

        request()->validate([
            //key varaible idea is from content attribute to get text  entered for validation
            'content' => 'required|min:3|max:240'
         ]);
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
    //this below code renders the idea from form and save it in database
    // $idea = new Idea([
    //     'content' => request()->get('idea','')
    // ]);
    // $idea->save();
//there is much shorter way for above code 
    $idea = Idea::create([
        //paramete in get should match with the attiibute name in form content area
        'content' => request()->get('content',''),
    ]);
    return redirect(route('dashboard'))->with('success','Idea Created Successfully');
    }

    //delete idea
    public function destroy(Idea $idea){
      //$idea = Idea::where('id',$id)->firstOrFail();
      //$idea->delete();
      //you can do the above code in one line 
      //Idea::where('id', $id)->firstOrFail()->delete();
      //you can do above code using laravel Route model binding 
      //were we have add idea model in destroy parameter and second 
      //parameter should match with route url eg Route::delete('/ideas/{idea}'
    $idea->delete();
      return redirect(route('dashboard'))->with('success','Idea Deleted Successfully');
    }
}
