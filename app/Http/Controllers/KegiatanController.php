<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Kegiatan;
use App\Models\Foto;

class KegiatanController extends Controller
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
        return view("kegiatan.create");
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
        $kegiatan = new Kegiatan();
        $kegiatan->judul = $request->judul;
        $kegiatan->deskripsi = $request->deskripsi;

        foreach ($request->file("foto") as $foto) {
            $path = $foto->storePublicly('photos', "public");
            if ($setThumbnail) {
                $kegiatan->thumbnail = $path;
                $kegiatan->save();
                $setThumbnail = 0;
            }
            $fotoModel = new Foto();
            $fotoModel->path = $path;
            $fotoModel->tipe = "kegiatan";
            $fotoModel->belongsTo = $kegiatan->id;
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
        $kegiatan = Kegiatan::find($id);
        $photos = Foto::where("tipe", "kegiatan")->where("belongsTo", $id)->get();
        return view("kegiatan.show", ["kegiatan" => $kegiatan, "photos" => $photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        $photos = Foto::where("tipe", "kegiatan")->where("belongsTo", $id)->get();
        return view("kegiatan.edit", ["kegiatan" => $kegiatan, "photos" => $photos]);
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
        $kegiatan = Kegiatan::find($id);
        $kegiatan->judul = $request->judul;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->thumbnail = $request->thumbnail;
        $kegiatan->save();
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
        $kegiatan = Kegiatan::find($id);
        $photos = Foto::where("tipe", "kegiatan")->where("belongsTo", $id)->get();
        $kegiatan->delete();
        foreach($photos as $foto)
        {
            File::delete(public_path('storage/'.$foto->path));
            $foto->delete();
        }
        return redirect("/");
    }

    public function deletePhoto($id)
    {
        $photos = Foto::where("tipe", "kegiatan")->where("belongsTo", $id)->get();
        return view('deletePhoto', ["photos" => $photos]);
    }

    public function deletePhotoPost(Request $request)
    {
        $foto = Foto::find($request->fotoId);
        $kegiatan = Kegiatan::find($request->id);
        if($kegiatan->thumbnail == $foto->path)
        {
            $newThumbnail = Foto::where("tipe", "kegiatan")->where("belongsTo", $kegiatan->id)->where("path", "!=", $foto->path)->first();
            $kegiatan->thumbnail = $newThumbnail->path;
            $kegiatan->save();
        }
        File::delete(public_path('storage/'.$foto->path));
        $foto->delete();
        return redirect("/kegiatan/deletePhoto/" . $request->id);
    }
}
