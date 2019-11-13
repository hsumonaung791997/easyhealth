<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Support\Facades\Input;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        // $imagepath = null;
        // if (Input::hasFile('image')) {
        //     $image = Input::file('image');
        //     $name = time() . '.' . $image->getClientOriginalName();
        //     $name = str_replace(' ', '', $name);
        //     $name = preg_replace('/\s+/', '', $name);
        //     $path = public_path('uploads/avatars' .'/' . $name);  
        //     Image::make($image->getRealPath())->resize(400, 400)->save($path);
        //     $imagepath = 'uploads/avatars' . '/' . $name;
        // }

        // $data['image'] = $imagepath;
        // Post::create($data);
        // return redirect('post.index')->with('success', 'Post has been added successfully!');

        $data = $request->all();
        // dd($data);
        Post::create($data);
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
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
        $data = $request->all();
        Post::find($id)->update($data);
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect(route('post.index'));
    }
}
