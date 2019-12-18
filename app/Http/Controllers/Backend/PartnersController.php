<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Partner;
use File;
use Flash;
use App\Http\Requests\PartnerRequest;

class PartnersController extends Controller
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
        $partners = Partner::with('media')->orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('title');
            $partners = Partner::where('name', 'like', '%'.$data.'%')->paginate(25);
        }
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
        $partners = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $partners['media_id'] = $media['media_id'];
            }   
        }
        Partner::create($partners);
        Flash::success('Partner create successfully');
        return redirect(route('partner.index'));
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
         $partner = Partner::find($id);
        if (empty($partner)) {
            Flash::error('Partner not found!');
            return redirect(route('partner.index'));
        }
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerRequest $request, $id)
    {
        $partner = Partner::find($id);
        if (empty($partner)) {
            Flash::error('Partner not found!');
            return redirect(route('partner.index'));
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
        Partner::find($id)->update($data);
        Flash::success('Successfully update partner');
        return redirect(route('partner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::find($id)->delete();
        Flash::success('Successfully delete partner');
        return redirect(route('partner.index'));
    }
}
