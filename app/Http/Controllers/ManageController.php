<?php

namespace App\Http\Controllers;

use App\Models\Manage;
use App\Models\Status;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manages = Manage::all();
        $status  = Status::all();

        return view('manages.list', compact('manages', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('manages.create', compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manage = new Manage();
        $manage->fill($request->all());
        $manage->save();

        return redirect()->route('manages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function show(Manage $manage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manage = Manage::findOrFail($id);
        $status = Status::all();
        return view('manages.edit', compact('manage', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $manage = Manage::findOrFail($id);
        $manage->fill($request->all());
        $manage->save();
        return redirect()->route('manages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manage = Manage::findOrFail($id);
        $manage->delete();
        return redirect()->route('manages.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('manages.index');
        }

        $manages = Manage::where('agent_name','LIKE', '%'. $search . '%')->paginate(5);
        return view('manages.list', compact('manages'));

    }



}
