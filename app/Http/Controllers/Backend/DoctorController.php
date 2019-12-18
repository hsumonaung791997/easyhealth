<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Doctor;
use File;
use Flash;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
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
        $doctors = Doctor::with('media')->orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('name','position','education');
            $doctors = Doctor::where('name', 'like', '%'.$data.'%')
                            ->orWhere('position', 'like', '%'.$data.'%')
                            ->orWhere('education', 'like', '%'.$data.'%')
                            ->paginate(25);
        }
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
        }
        Doctor::create($data);
        Flash::success('Successfully created doctor');
        return redirect(route('doctor.index'));
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
        $doctor = Doctor::find($id);
        if(empty($doctor)){
            Flash::error('Doctor not found');
            return redirect(route('doctor.index'));
        }
        return view('admin.doctor.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $doctor = Doctor::find($id);
        if (empty($doctor)) {
            Flash::error('Doctor not found!');
            return redirect(route('doctor.index'));
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
        Doctor::find($id)->update($data);
        Flash::success('Successfully update doctor');
        return redirect(route('doctor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        Flash::success('Successfully delete doctor');
        return redirect(route('doctor.index'));
    }
}
