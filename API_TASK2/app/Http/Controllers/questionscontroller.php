<?php

namespace App\Http\Controllers;

use App\Http\Requests\questionsrequest;
use App\Http\Resources\questionsresources;
use App\Models\questions;
use App\Models\answers;
use Illuminate\Http\Request;

class questionscontroller extends Controller
{
    //
    public function index()
    {
        // order all posts by ids and paginagte them
        $post= questions::orderBy('id')->paginate(10);
        return questionsresources ::collection($post);
    }

    public function add(questionsrequest $request)
    {
            // add new post for database after checking valdition
        // echo $request;
        $post=   questions::create($request->validated());
        return $post;

        # code...
    }
    public function show(Request $request, questions $questions)
    {

        return new questionsresources($questions);
    }
    public function deletequestions(Request $request, questions $questions)
    {

   return $questions->delete();

    }
}
