<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
        crossorigin="anonymous">
        <title>Details Page</title>
    </head>

    <body style="background-image: url('https://img.freepik.com/free-vector/topographic-contour-lines-map-seamless-pattern_1284-52862.jpg?w=740&t=st=1670415796~exp=1670416396~hmac=943e99f8c8791b8dca671c192b27369116d45fbf9defbd872b617646fd9fa472');
                opacity: 100%;">
            <div class="container">
                <div class="container-fluid mt-5 mb-5 mx-auto">
                    <div class="card border-dark">
                        <div class="card-body">
                            <div class="text-end">
                                <button onclick="" class="btn mx-auto border-dark"><a href="{{ url('/') }}" style="text-decoration: none; color: black;">Go Back</a> |
                                <a href="/ekskul/{{$ekskul->id}}/edit" style="text-decoration: none; color: black;">Edit</a> |
                                <a href="/addPhoto/ekskul/{{$ekskul->id}}" style="text-decoration: none; color: black;">Add Foto</a> |
                                <a href="/ekskul/deletePhoto/{{$ekskul->id}}" style="text-decoration: none; color: black;">Delete Foto</a> 
                            </div>
                            <h1 class="card-title">
                                {{$ekskul->judul}}
                            </h1>
                            <p class="card-text" style="color: #4e4e4e">
                                {{$ekskul->deskripsi}}
                            </p>
                        </div>
                        <hr />
                        <div class="row justify-content-center mx-0">
                            @foreach($photos as $foto)
                            <div class="col-md-4 mb-5">
                                <div class="card">
                                <img src="{{asset('storage/'.$foto->path)}}" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
                                </div>  
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>