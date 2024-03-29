<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Http\Requests\UserRequest;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.index', compact('data'))->with('i',($request->input('page', 1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        return redirect()->route('users.index')
                                ->with('success','User created successfully');

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
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
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
        $this->validate($request, [
                   'name' => 'required',
                   'email' => 'required|email|unique:users,email,'.$id,
                   'password' => 'same:confirm-password',
               ]);

        $input = $request->all();
               if(!empty($input['password'])){ 
                   $input['password'] = Hash::make($input['password']);
               }else{
                   $input = array_except($input,array('password'));    
               }


        $user = User::find($id);
        $user->update($input);
        return redirect()->route('users.index')
                               ->with('success','User updated successfully');
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
         User::find($id)->delete();
               return redirect()->route('users.index')
                               ->with('success','User deleted successfully');
    }
}
