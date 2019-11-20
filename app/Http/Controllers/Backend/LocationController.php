<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Location;
use File;
use Flash;
use App\Http\Requests\Admin\LocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $locations = Location::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->all();
            $locations = Location::where('title', 'like', $data['title'])->paginate(25);
        }

        return view('admin.location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
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

        Location::create($data);
        Flash::success('Successfully created loction');
        return redirect(route('location.index'));
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
        $location = Location::find($id);
        if (empty($location)) {
            Flash::error('Location not found!');
            return redirect(route('location.index'));
        }
        return view('admin.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocationRequest $request, $id)
    {

        $location = Location::find($id);
        if (empty($location)) {
            Flash::error('Location not found!');
            return redirect(route('location.index'));
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

        Location::find($id)->update($data);
        Flash::success('Successfully update location');
        return redirect(route('location.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find($id)->delete();
        Flash::success('Successfully delete location');
        return redirect(route('location.index'));

    }
}

