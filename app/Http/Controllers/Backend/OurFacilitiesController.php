<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Facilities;
use Flash;
use File;

class OurFacilitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ourfacilities = Facilities::with('media')->orderBy('id', 'DESC')->paginate(25);
        return view('admin.facilities.index', compact('ourfacilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilities.create');
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
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
        }
        Facilities::create($data);
        Flash::success('Successfully created our facilities');
        return redirect(route('facilities.index'));
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
        $facility = Facilities::find($id);
         if(empty($facility)){
            Flash::error('Facilities not found');
            return redirect(route('facilities.index'));
        }
        return view('admin.facilities.edit',compact('facility'));
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
        $facility = Facilities::find($id);
        if (empty($facility)) {
            Flash::error('Facilities not found!');
            return redirect(route('facilities.index'));
        }
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
        } else {
            if(!empty($data['img'])) {
                $data['media_id'] = null;
            }   
        }
        Facilities::find($id)->update($data);
        Flash::success('Successfully update our facilities');
        return redirect(route('facilities.index'));
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
        Facilities::find($id)->delete();
         Flash::success('Successfully delete our facilities');
        return redirect(route('facilities.index'));
    }
}
