<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Service;
use File;
use Flash;
use App\Model\Category;
use App\Http\Requests\Admin\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::with('category')->orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->all();
            $services = Service::where('title', 'like', $data['title'])->paginate(25);
        }

        return view('admin.service.index', compact('services'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
        return view('admin.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        //
        $data = $request->all();
        //dd($data);
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('service.index'));
            }
            $data['media_id'] = $media['media_id'];
        }
        Service::create($data);
        Flash::success('Successfully created service');
        return redirect(route('service.index'));
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
        //
        $categories = Category::all();
        $service = Service::with('category')->find($id);
        if(empty($service)){
            Flash::error('Service not found');
            return redirect(route('service.index'));
        }
        return view('admin.service.edit',compact('service','categories'));
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
        //
        $category = Category::all();
        $services = Service::find($id);
        if(empty($services)){
            Flash::error('Service not found');
            return redirect(route('service.index'));
        }
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('service.index'));
            }
            $data['media_id'] = $media['media_id'];
        } 
        Service::find($id)->update($data);
        Flash::success('Successfully service update');
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Service::find($id)->delete();
        Flash::success('Successfully service delete');
        return redirect(route('service.index'));
    }
}
