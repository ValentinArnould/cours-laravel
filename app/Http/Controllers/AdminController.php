<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Voyage;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $voyages = Voyage::all();
        $vid = 1;
        foreach ($voyages as $voyage) {
            if($voyage->id != $vid) {
                $voyage->id = $vid;
                $voyage->save();
            }
            $vid++;
        }
        return view('admin.index',['voyages'=>$voyages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'libelle' => 'required|min:2'
          ]);
          
        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $voyage = new Voyage;
            $voyage->libelle = $request->libelle;
            $voyage->save();
            return redirect('/admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $voyage = Voyage::find($id);
        return view('admin.update',['voyage'=>$voyage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(),[
            'libelle' => 'required|min:2'
          ]);
          
        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $voyage = Voyage::find($id);
            $voyage->libelle = $request->libelle;
            $voyage->save();
            return redirect('/admin');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        //
        $voyage = Voyage::find($id);
        return view('admin.delete',['voyage'=>$voyage]);
    } 
    public function destroy(Request $request,$id)
    {
        //
        $voyage = Voyage::find($id);
        $voyage->delete();
        return redirect('/admin');
        
    }
}
