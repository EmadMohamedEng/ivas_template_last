<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Content;
use App\Country;
use App\Operator;
use App\Post;

use Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::all();
        return view('post.index',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $contents  = Content::all();
      $operators = Operator::all();
      $post      = NULL;
      return view('post.form',compact('contents','operators','post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
                  'published_date' => 'required|date',
                  'patch_number' => 'required',
                  'content_id' => 'required',
                  'active' => 'required',
                  'operator_id'=> 'required'
          ]);

      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }


      $content = Content::findOrFail($request->content_id);

      foreach ($request->operator_id as  $operator_id) {
        $operator = $content->operators()->attach([$operator_id => ['url' => url('user/content/'.$request->content_id.'?op_id='.$operator_id) ,
        'published_date' => $request->published_date,'active' => $request->active,'patch_number' => $request->patch_number , 'user_id' => 1]]);
      }

      $posts = Post::where('content_id',$request->content_id)->whereIn('operator_id',$request->operator_id)->get();

      foreach ($posts as $post) {
        Post::find($post->id)->update([
          'url' => url('user/content/'.$request->content_id.'?op_id='.$operator_id.'&post_id='.$post->id)
        ]);
      }

      \Session::flash('success', 'post created Successfully');
      return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $operator =  Operator::findOrFail($id);
      // $place_id = [];
      // foreach ($operator->posts as $post) {
      //   array_push($place_id,$post->place_id);
      // }
      // $places = Content::whereIn('id',$place_id)->get();
      // return view('front.place_in_post' , compact('operator','places','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
      $post = Post::findOrFail($id);
      $contents= Content::all();
      $operators = Operator::all();
      return view('post.form',compact('post','contents','operators'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
              'published_date' => 'required|date',
              'patch_number' => 'required',
              'content_id' => 'required',
              'active' => 'required',
              'operator_id'=> 'required'
          ]);

      if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
      }
      $input =$request->only('published_date','active','patch_number','content_id');
      $post = Post::findOrFail($id);
      $content = Content::findOrFail($request->content_id);
      $post->update($input+['operator_id' => $request->operator_id[0]]);

      \Session::flash('success', 'Post Update Successfully');
      return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
      $post = Post::findOrFail($id);
      $post->delete();
      \Session::flash('success', 'Post Delete Successfully');
      return back();
    }
}
