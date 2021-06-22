<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function main(){
        $posts = Posts::paginate(10);

        return view('posts.index',compact('posts'));
    }

    public function show($id){
       $post = Posts::findOrFail($id);
       return view('posts.post',compact('post'));

    }




   public function create(){
        return view('posts.create');
   }

  public function Shop(Request $request){
       Posts::create([
           'title'=>$request->get('title'),
           'author_name'=>$request->get('author_name'),
           'post_text'=>$request->get('post_text')
       ]);

       return redirect()->back();
  }

  public function edit($id){
        $post = Posts::findOrFail($id);
        return view('posts.edit',compact('post'));
  }

  public function update(Request $request,$id){
      $post = Posts::findOrFail($id);
      $post->update($request->all());
      return redirect()->back();
  }

  public function delete($id){
      $post = Posts::findOrFail($id);
      $post->delete();
      return redirect()->back();
  }
}
