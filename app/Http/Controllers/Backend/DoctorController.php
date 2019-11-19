<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Doctor;
use App\Http\Requests\Admin\DoctorRequest;
use File;
use Flash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $doctors = Doctor::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->all();
            $doctors = Doctor::where('name', 'like', $data['name'])->paginate(25);
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
        //
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
        //
        $data = $request->all();
        //dd($data);
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('doctor.index'));
            }
            $data['media_id'] = $media['media_id'];
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
        //
           
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
    public function update(Request $request, $id)
    {
        //
        $doctor = Doctor::find($id);
        if (empty($doctor)) {
            Flash::error('Doctor not found!');
            return redirect(route('doctor.index'));
        }

        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('doctor.index'));
            }
            $data['media_id'] = $media['media_id'];
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
        //
        Doctor::find($id)->delete();
        Flash::success('Successfully delete doctor');
        return redirect(route('doctor.index'));
    }
}
