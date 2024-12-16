<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\staff;
use App\Models\Foto;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->nama = $request->nama;
        $staff->job = $request->job;
        $path = $request->file("foto")->storePublicly('photos', "public");
        $staff->foto = $path;
        $staff->save();

        return redirect("/");
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
        $staff = Staff::find($id);
        return view("staff.edit", ["staff" => $staff]);
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
        $staff = Staff::find($id);
        $staff->nama = $request->nama;
        $staff->job = $request->job;
        if($request->hasFile("foto"))
        {
            File::delete(public_path('storage/'.$staff->foto));
            $path = $request->file("foto")->storePublicly('photos', "public");
            $staff->foto = $path;
        }
        $staff->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        File::delete(public_path('storage/'.$staff->foto));
        $staff->delete();
        return redirect("/");
    }
}
