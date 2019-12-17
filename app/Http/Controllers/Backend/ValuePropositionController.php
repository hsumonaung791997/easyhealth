<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ValueProposition;
use File;
use Flash;
use App\Http\Requests\ValuePropositionRequest;

class ValuePropositionController extends Controller
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
        
        $values = ValueProposition::orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('title');
            $values = ValueProposition::where('title', 'like', '%'.$data.'%')->paginate(25);
        }

        return view('admin.value.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.value.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValuePropositionRequest $request)
    {
        $data = $request->all();
        if($request->hasFile('image_media')){
           $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            } 
        }
        ValueProposition::create($data);
        Flash::success('Successfully created Value Proposition');
        return redirect(route('value.index'));
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
        $value = ValueProposition::find($id);
        if (empty($value)) {
            Flash::error('Value Proposition not found!');
            return redirect(route('value.index'));
        }
        return view('admin.value.edit', compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValuePropositionRequest $request, $id)
    {

        $value = ValueProposition::find($id);
        if (empty($value)) {
            Flash::error('Value Proposition not found!');
            return redirect(route('value.index'));
        }
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
        }
        ValueProposition::find($id)->update($data);
        Flash::success('Successfully update Value Proposition');
        return redirect(route('value.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ValueProposition::find($id)->delete();
        Flash::success('Successfully deleted Value Proposition');
        return redirect(route('value.index'));
    }
}

