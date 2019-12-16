<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Whyus;
use File;
use Flash;
use App\Http\Requests\Admin\WhyusRequest;

class WhyusController extends Controller
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
        
        $whyus_s = Whyus::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('title');
            $whyus_s = Whyus::where('title', 'like', '%'.$data.'%')->paginate(25);
        }

        return view('admin.whyus.index', compact('whyus_s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whyus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WhyusRequest $request)
    {
        $data = $request->all();
        //dd($data);
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('whyus.index'));
            }
            $data['media_id'] = $media['media_id'];
        }
        Whyus::create($data);
        Flash::success('Successfully created Page');
        return redirect(route('whyus.index'));
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
        $whyus = Whyus::find($id);
        if (empty($whyus)) {
            Flash::error('whyus not found!');
            return redirect(route('whyus.index'));
        }
        return view('admin.whyus.edit', compact('whyus'));
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

        $whyus = Whyus::find($id);
        if (empty($whyus)) {
            Flash::error('whyus not found!');
            return redirect(route('whyus.index'));
        }

        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE != $media['status']) {
                Flash::error($media['message']);
                return redirect(route('whyus.index'));
            }
            $data['media_id'] = $media['media_id'];
        }

        Whyus::find($id)->update($data);
        Flash::success('Successfully update Page');
        return redirect(route('whyus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Whyus::find($id)->delete();
        Flash::success('Successfully delete Page');
        return redirect(route('whyus.index'));

    }
}

