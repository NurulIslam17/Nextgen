<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = DB::table('todo')->orderBy('id', 'desc')->get();
        return view('usersPanel.Ajax.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usersPanel.Ajax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'wtd' => 'required|unique:todo',
                's_date' => 'required',
                'e_date' => 'required',
            ],
            [
                'wtd.required' => 'Enter To do list',
                'wtd.unique' => 'List already exist',

                's_date.Enter To do list' => 'Enter Starting date',
                'e_date.Enter To do list' => 'Enter Deadline',
            ]
        );

        DB::table('todo')->insert([
            'wtd' => $request->wtd,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
        ]);

        return response()->JSON([
            'status' => 1,
        ]);
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
        //update
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
    }


    //updateList
    public function updateList(Request $request)
    {
        $upId = $request->id;

        DB::table('todo')->where('id', $upId)->update([
            'wtd' => $request->wtd,
            's_date' => $request->s_date,
            'e_date' => $request->e_date,
        ]);

        return response()->JSON([
            'status' => 1,
        ]);
    }
    //deleteList
    public function deleteList(Request $request)
    {
        $upId = $request->id;

        DB::table('todo')->where('id', $upId)->delete();

        return response()->JSON([
            'status' => 1,
        ]);
    }
}
