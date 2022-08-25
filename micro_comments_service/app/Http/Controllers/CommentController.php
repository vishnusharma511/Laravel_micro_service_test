<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index($id){
        return Comment::where(['post_id'=>$id])->get();
    }

    public function store(Request $request){
        return Comment::create([
            'post_id' => $request->input('post_id'),
            'comment' => $request->input('comment')
        ]);
    }
}
