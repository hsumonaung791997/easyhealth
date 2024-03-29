<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use File;
use Flash;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(25);
        if($request->all()){
            $data = $request->all();
            $categories = Category::where('name', 'like', $data['name'])->paginate(25);
        }
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
 
        Category::create($data);
        Flash::success('Successfully created category');
        return redirect(route('category.index'));
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
 
        $category = Category::find($id);
        if (empty($category)) {
            Flash::error('Category not found!');
            return redirect(route('category.index'));
        }
        return view('admin.category.edit', compact('category'));
 
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
 

        $category = Category::find($id);
        if (empty($category)) {
            Flash::error('Category not found!');
            return redirect(route('category.index'));
        }

        $data = $request->all();
        Category::find($id)->update($data);
        Flash::success('Successfully update category');
        return redirect(route('category.index'));
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
        Category::find($id)->delete();
        Flash::success('Successfully delete category');
        return redirect(route('category.index'));

 
    }
}
