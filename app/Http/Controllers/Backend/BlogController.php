<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use File;
use Flash;
use App\Http\Requests\Admin\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $blogs = Blog::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->all();
            $blogs = Blog::where('title', 'like', $data['title'])->paginate(25);
        }

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        // $radio = $request->get('status');

        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('blog.index'));
            }
            $data['media_id'] = $media['media_id'];
        }

        Blog::create($data);
        Flash::success('Successfully created blog');
        return redirect(route('blog.index'));
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
        $blog = Blog::find($id);
        if (empty($blog)) {
            Flash::error('Blog not found!');
            return redirect(route('blog.index'));
        }
        return view('admin.blog.edit', compact('blog'));
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

        $blog = Blog::find($id);
        if (empty($blog)) {
            Flash::error('Blog not found!');
            return redirect(route('blog.index'));
        }

        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('blog.index'));
            }
            $data['media_id'] = $media['media_id'];
        }

        Blog::find($id)->update($data);
        Flash::success('Successfully update blog');
        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        Flash::success('Successfully delete blog');
        return redirect(route('blog.index'));

    }
}

