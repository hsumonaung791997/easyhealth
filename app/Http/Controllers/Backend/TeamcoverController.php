<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teamcover;
use  App\Http\Requests\TeamcoverRequest;
use Flash;

class TeamcoverController extends Controller
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
        $teamcovers = Teamcover::with('media')->orderBy('id', 'DESC')->paginate(25);
        if($request->all()) {
            $data = $request->get('title');
            $teamcovers = Teamcover::where('title', 'like', '%'.$data.'%')->paginate(25);
        }
        return view('admin.teamcover.index', compact('teamcovers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamcover.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamcoverRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image_media')) {
            $media = saveSingleMedia($request, 'image');
            if (TRUE == $media['status']) {
                $data['media_id'] = $media['media_id'];
            }
            
        }
        Teamcover::create($data);
        Flash::success('Successfully created Teamcover');
        return redirect(route('teamcover.index'));
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
         $teamcover = Teamcover::find($id);
        if (empty($teamcover)) {
            Flash::error('Teamcover not found!');
            return redirect(route('teamcover.index'));
        }
        return view('admin.teamcover.edit', compact('teamcover'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamcoverRequest $request, $id)
    {
        
         $teamcover = Teamcover::find($id);
        if (empty($teamcover)) {
            Flash::error('Teamcover not found!');
            return redirect(route('teamcover.index'));
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
        Teamcover::find($id)->update($data);
        Flash::success('Successfully update Teamcover');
        return redirect(route('teamcover.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Teamcover::find($id)->delete();
        Flash::success('Successfully delete Teamcover');
        return redirect(route('teamcover.index'));
    }
}
