<?php

namespace App\Http\Controllers;

use App\Http\Requests\answersrequest;
use App\Http\Resources\answersresources;
use App\Models\answers;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class answerscontroller extends Controller
{
    //
       //not working welll
       public function ShowQuestion()
       {
       return questions::join('answers', 'answers.questions_id', '=', 'questions.id')
        ->select( 'answers.title','answers.descrition','questions.title','questions.descrition')
        ->get();
           # code...
       }
       public function index()
       {
           // order all posts by ids and paginagte them
           $post=answers::orderBy('id')->paginate(10);
           return answersresources ::collection($post);
       }
       public function add(answersrequest $request)
       {
               // add new post for database after checking valdition
        if(   answers::where('questions_id','=',$request->questions_id)->count()<5)
        {
                 $post=   answers::create($request->validated());
           return $post;
        }
        else
        return "We can't add more answers";


           # code...
       }
       public function show(Request $request, answers $answers)
       {

           # code...
           // show specific post
           return new answersresources($answers);
       }
       public function deleteanswers(Request $request, answers $answers)
       {

           # code...
           // show specific post
          return  $answers->delete();


       }

}
