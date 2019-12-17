<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CompanyProfile;
use App\Http\Requests\ProfileRequest;
use Flash;
use File;

class CompanyProfileController extends Controller
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
        //
        $profiles = CompanyProfile::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('title');
            $profiles = CompanyProfile::where('title', 'like', '%'.$data.'%')->paginate(25);
        }
        return view('admin.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        //
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('company_profile.index'));
            }
            $data['media_id'] = $media['media_id'];
        }
        CompanyProfile::create($data);
        Flash::success('Successfully created company profile');
        return redirect(route('company_profile.index'));
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
         $profile = CompanyProfile::find($id);
        if (empty($profile)) {
            Flash::error('Company Profile not found!');
            return redirect(route('company_profile.index'));
        }
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        //
        $profile = CompanyProfile::find($id);
        if (empty($profile)) {
            Flash::error('Company Profile not found!');
            return redirect(route('company_profile.index'));
        }
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('company_profile.index'));
            } else {
            if($request->img != null) {
                $data['media_id'] = null;
            } 
            $data['media_id'] = $media['media_id'];
        }
        CompanyProfile::find($id)->update($data);
        Flash::success('Successfully update Company Profile');
        return redirect(route('company_profile.index'));
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
        CompanyProfile::find($id)->delete();
        Flash::success('Successfully delete Company Profile');
        return redirect(route('company_profile.index'));
    }
}
