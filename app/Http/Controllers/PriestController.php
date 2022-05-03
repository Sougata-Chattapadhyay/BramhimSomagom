<?php

namespace App\Http\Controllers;

use App\Models\priest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('priests')->get();
        //  dd($data);
        return view('priest',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // dd('i am here');
        $p = new priest;
        $p->Name = $r->name;
        $p->Experience = $r->exp;
        $p->Email = $r->email;
        $p->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\priest  $priest
     * @return \Illuminate\Http\Response
     */
    public function show(priest $priest)
    {
        $data = DB::table('priests')->get();
        return view('admin_priest',['data'=>$data]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\priest  $priest
     * @return \Illuminate\Http\Response
     */
    public function edit(priest $priest,$id)
    {
        $data = DB::table('priests')->where('id',$id)->get();
        // dd($data);
        return view('priest_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\priest  $priest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r,priest $priest,$id)
    {
        // dd('Hey');
        DB::table('priests')->where('id',$id)->update([
            'Name' => $r->name,
            'Experience' => $r->exp,
            'Email' => $r->email,
        ]);
        return redirect('/admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\priest  $priest
     * @return \Illuminate\Http\Response
     */
    public function destroy(priest $priest,$id)
    {
        DB::table('priests')->where('id',$id)->delete();
        return redirect('/admin');
    }
}
