<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css"/>
    </head>
    <body style="background-image: url('https://img.freepik.com/free-vector/topographic-contour-lines-map-seamless-pattern_1284-52862.jpg?w=740&t=st=1670415796~exp=1670416396~hmac=943e99f8c8791b8dca671c192b27369116d45fbf9defbd872b617646fd9fa472');">
        <div class="container">
        <form action="/kegiatan/{{$kegiatan->id}}" method="post">
        @method('PUT')
        @csrf
        <div class="container" style="padding-top: 8vh; padding-bottom: 8vh;">
            <div class="row">
                <div class="col-md-8 offset-md-2" style="font-weight: bold;">
                    <div class="card" style="box-shadow: 0 0 10px;">
                        <div class="card-header text-center fw-bold fs-3" style="color: rgb(170, 0, 0);">
                        EDIT KEGIATAN
                        </div>
                        <div class="card-body" style="color: #171136;">
                            <form action="simpan-siswa.php" method="POST">    
                                <div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input type="text" name="judul" placeholder="Masukkan Nama Kegiatan" value="{{$kegiatan->judul}}" class="form-control">
                                </div> <br />
                                <div class="form-group">
                                    <label>Keterangan Kegiatan</label>
                                    <textarea class="form-control" name="deskripsi" placeholder="Masukkan Keterangan Kegiatan" value="{{$kegiatan->deskripsi}}" rows="4"></textarea>
                                </div> <br />
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile01">THUMBNAIL</label> <br />
                                    @foreach($photos as $foto)
                                        @if($foto->path == $kegiatan->thumbnail)
                                            <input type="radio" name="thumbnail" id="{{$foto->id}}" value="{{$foto->path}}" checked/>
                                        @else
                                            <input type="radio" name="thumbnail" id="{{$foto->id}}" value="{{$foto->path}}"/>
                                        @endif
                                        <label for="{{$foto->id}}">
                                            <img src="{{asset('storage/'.$foto->path)}}" width="100px"/>
                                        </label>
                                    @endforeach
                                </div> <br />
                                <button type="submit" class="btn btn-outline-success me-3">SAVE</button>
                                <button type="reset" class="btn btn-outline-danger">RESET</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    </body>
</html>