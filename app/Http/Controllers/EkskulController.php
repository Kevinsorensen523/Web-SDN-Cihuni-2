<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Ekskul;
use App\Models\Foto;
class EkskulController extends Controller
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
        return view("ekskul.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setThumbnail = 1;
        $ekskul = new Ekskul();
        $ekskul->judul = $request->judul;
        $ekskul->deskripsi = $request->deskripsi;

        foreach ($request->file("foto") as $foto) {
            $path = $foto->storePublicly('photos', "public");
            if ($setThumbnail) {
                $ekskul->thumbnail = $path;
                $ekskul->save();
                $setThumbnail = 0;
            }
            $fotoModel = new Foto();
            $fotoModel->path = $path;
            $fotoModel->tipe = "ekskul";
            $fotoModel->belongsTo = $ekskul->id;
            $fotoModel->save();
        }
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
        $ekskul = Ekskul::find($id);
        $photos = Foto::where("tipe", "ekskul")->where("belongsTo", $id)->get();
        return view("ekskul.show", ["ekskul" => $ekskul, "photos" => $photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekskul = Ekskul::find($id);
        $photos = Foto::where("tipe", "ekskul")->where("belongsTo", $id)->get();
        return view("ekskul.edit", ["ekskul" => $ekskul, "photos" => $photos]);
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
        $ekskul = Ekskul::find($id);
        $ekskul->judul = $request->judul;
        $ekskul->deskripsi = $request->deskripsi;
        $ekskul->thumbnail = $request->thumbnail;
        $ekskul->save();
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
        $ekskul = Ekskul::find($id);
        $photos = Foto::where("tipe", "ekskul")->where("belongsTo", $id)->get();
        $ekskul->delete();
        foreach($photos as $foto)
        {
            File::delete(public_path('storage/'.$foto->path));
            $foto->delete();
        }
        return redirect("/");
    }

    public function deletePhoto($id)
    {
        $photos = Foto::where("tipe", "ekskul")->where("belongsTo", $id)->get();
        return view('deletePhoto', ["photos" => $photos]);
    }

    public function deletePhotoPost(Request $request)
    {
        $foto = Foto::find($request->fotoId);
        $ekskul = Ekskul::find($request->id);
        if($ekskul->thumbnail == $foto->path)
        {
            $newThumbnail = Foto::where("tipe", "ekskul")->where("belongsTo", $ekskul->id)->where("path", "!=", $foto->path)->first();
            $ekskul->thumbnail = $newThumbnail->path;
            $ekskul->save();
        }
        File::delete(public_path('storage/'.$foto->path));
        $foto->delete();
        return redirect("/ekskul/deletePhoto/" . $request->id);
    }
}
