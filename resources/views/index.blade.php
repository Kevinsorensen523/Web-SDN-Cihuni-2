<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Dashboard Page | SDN Cihuni 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="/css/style.css"/>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
        <div class="navbar">
            <header>
                <div class="inner-width" style="height: 65px;">
                    <div class="mt-2" style="display: flex;">
                      <div>
                        <img src="gambar/sdn.png" alt="" style="height: 35px;">
                      </div>
                      <div style="margin-left: 10%; margin-top: 6%;">
                        <h1 style="font-size: 15px; font-weight: bold;">SDNCIHUNI2</h1>
                      </div>
                    </div>
                    <div class="">
                      <div class="row">
                          @auth
                            <div class="col">
                              <div class="row-md-4">
                                <div class="dropdown show" style="margin-top: 10px;">
                                  <a style="font-size: 10px;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown link
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('/admin') }}" style="font-size: 10px;">Admin</a>
                                    <a class="dropdown-item" href="{{ url('/dashboard') }}" style="font-size: 10px;">Leave</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endauth
                          <div class="col mt-1" style="width:20px;">
                            <div class="menu-icon">
                                <i class="fas fa-bars"></i>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </header>
            <div class="navigation-menu" style="line-height: normal;">
                <nav>
                    <div style="height: 13vh;"></div>
                    <li><a href="#" style="text-decoration: none; font-size: 140%;">Dashboard</a></li>
                    <li><a href="#profil" style="text-decoration: none; font-size: 140%;">Profil</a></li>
                    <li><a href="#denah" style="text-decoration: none; font-size: 140%;">Denah</a></li>
                    <li><a href="#ekskul" style="text-decoration: none; font-size: 140%;">Ekskul</a></li>
                    <li><a href="#kegiatan" style="text-decoration: none; font-size: 140%;">Kegiatan</a></li>
                    <li><a href="#fasilitas" style="text-decoration: none; font-size: 140%;">Fasilitas</a></li>
                    <li><a href="#staff" style="text-decoration: none; font-size: 140%;">staff</a></li>
                </nav>
            </div>
        </div>
        <div>
            @auth
              <div id="fiturAdmin" class="my-1">
                <div id="content-size">
                <section>
                      <div class="container">
                        <div class="row text-center mx-0  ">
                          <div class="col mb-4 mt-5">
                            <h1>CREATE NEW POSTS</h1>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          <div class="col mb-3">
                            <div>
                              <a href="kegiatan/create" class="postsAdmin"><button type="button" class="btn btn-primary" style="width: 100%;">KEGIATAN</button></a>
                            </div>
                          </div>
                          <div class="col mb-3">
                              <div>
                                <a href="ekskul/create" class="postsAdmin"><button type="button" class="btn btn-primary" style="width: 100%;">EKSKUL</button></a>
                              </div>
                            </div>
                            <div class="col mb-3">
                              <div>
                                <a href="staff/create" class="postsAdmin"><button type="button" class="btn btn-primary" style="width: 100%;">FASILITAS</button></a>
                              </div>
                            </div>
                            <div class="col mb-3">
                              <div>
                                <a href="staff/create" class="postsAdmin"><button type="button" class="btn btn-primary" style="width: 100%;">STAFF</button></a>
                              </div>
                            </div>
                        </div>
                      </div>
                  </section>
                </div>
              </div>
            @endauth
            <div id="utama">
              <div id="content-size">
                <div class="container">
                  <div id="slogan" class="row mx-0" style="height: 100vh;">
                      <div style="height: 15vh;"></div>
                      <div class="col-md-6 text-center mt-3">
                          <img src="/gambar/BANTEN.png" class="img" style="height: 300px; width: auto; border-radius: 0;">
                      </div>
                      <div class="col-md-6 text-center mb-2" style="margin-top: -2%;">
                          <div class="rounded-3 p-4" style="margin-top: 70px; background-color: black; border-radius: 10%; opacity: 0.7;">
                              <h1 style="font-weight: bold; color: white;">SLOGAN PENDIDIKAN</h1>
                              <h3 style="font-weight: bold; color: yellow;">"Ibadah Terjaga,<br/>Belajar Penuh Suka Cita."</h3>
                          </div>
                      </div>
                      <div style="height: 8vh;"></div>
                      <div id="profil"></div>
                  </div>
              </div>
              </div>
            </div>
            <div id="dua">
              <div id="content-size">
                <div class="container">
                  <div id="profil" class="row mb-2 text-center mx-0 justify-content-between">
                    <div class="mt-2 justify-content-between" style="display: flex;">
                      <div style="margin-top: 4%;">
                        <h1 style="font-weight: bold; width: auto;">PROFIL SEKOLAH</h1>
                      </div>
                      <div style="margin-left: 10%;">
                        <img src="/gambar/BANTEN.png" class="img" style="height: 90px; width: auto; border-radius: 0;">
                      </div>
                    </div>
                  </div>
                  <div id="profil" class="row mb-5 text-center mx-0 justify-content-between">
                    <div class="col-md-5 my-4 text-start">
                      <div class="row" style="padding-left: 14px;background-color: darkblue; color: white; border-radius: 10px;">
                        <div class="col-md-10">
                          <div style="height: 4vh;"></div>
                          <h1 style="font-weight: bold;">VISI</h1>
                          <div style="height: 4vh;"></div>
                          <h3 style="font-weight: bold; width: 47%;">"Terwujudnya  generasi yang sehat, beriman, bertaqwa, dan berilmu"</h3>
                          <div style="height: 4vh;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 mt-4" style="text-align: start; font-weight: bold;">
                      <div style="padding: 14px 14px 14px; background-color: darkblue; color: white; border-radius: 10px;">
                        <h1 style="font-weight: bold;">MISI</h1>
                        <p style="font-weight: bold;">
                          1.	Menanamkan keyakinan/ akidah melalui pengamalan ajaran agama.<br />
                          2.	Mengoptimalkan proses pembelajaran dan bimbingan.<br />
                          3.	Mengembangkan pengetahuan di bidang IPTEK, bahasa, olahraga dan seni budaya sesuai dengan bakat, minat dan potensi siswa.<br />
                          4.	Menjalin kerjasama yang harmonis antara warga sekolah dan lingkungan.<br />
                          5.	Meningkatkan mutu pendidikan dalam upaya mencerdaskan kehidupan generasi yang bermoral, kreatif, maju dan mandiri.<br />
                        </p>
                      </div>
                    </div>
                    <div id="denah"></div>
                  </div>
              </div>
              </div>
            </div>
            <div id="tiga">
              <div id="content-size">
                <div id="denah" class="row my-5 text-center mx-0" style="margin-left: 3%;">
                    <div class="row mb-3 mx-0">
                        <h1 style="text-shadow: 0 0 10px black; color: white; font-weight: bold;">DENAH SEKOLAH</h1>
                    </div>
                    <div class="row mb-3 text-center mx-0">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                        <img src="/gambar/denah.png" class="img" style="width: 100%; object-fit: cover; box-shadow: 0 0 20px grey;">
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                    <div id="ekskul"></div>
                </div>
              </div>
            </div>
            <div id="empat">
              <div id="content-size">
                <div id="ekskul" class="row my-5 mx-0">
                  <section class="col">
                      <div class="">
                            <div class="row text-center mx-0">
                              <div class="col my-3">
                                <h1 style="text-shadow: 0 0 10px black; color: white; font-weight: bold;">EKSTRAKULIKULER</h1>
                              </div>
                            </div>
                            <div class="row justify-content-center mx-0">
                              @foreach($ekskul as $ekskul2)
                                <div class="col-md-4 mb-5">
                                  <div class="container-fluid">
                                    <div class="card">
                                      <img src="{{asset('storage/'.$ekskul2->thumbnail)}}" class="card-img-top" alt="ekskul 1">
                                      <div class="card-body">
                                        @auth
                                          <div class="mb-2 text-end">
                                            <a href="/ekskul/{{$ekskul2->id}}/edit" class="fiturAdmin">Edit</a> | 
                                            <a href="/addPhoto/ekskul/{{$ekskul2->id}}" class="fiturAdmin">Add Foto</a> |
                                            <a href="/ekskul/deletePhoto/{{$ekskul2->id}}" class="fiturAdmin">Delete Foto</a>
                                            <div class="mt-1"></div>
                                            <form action="/ekskul/{{$ekskul2->id}}" class="fiturAdmin" method="post" style="margin-bottom: 5%;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit">Delete</button>
                                            </form>
                                          </div>
                                        @endauth
                                        <h5 class="card-title"><a href="/ekskul/{{$ekskul2->id}}" class="fiturAdmin" style="font-weight: bold;">{{$ekskul2->judul}}</a></h5>
                                      </div >
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>    
                        <div id="kegiatan"></div>
                      </div>
                  </section>
                </div>
              </div>
            </div>
            <div id="lima">
              <div id="content-size">
                <div id="kegiatan" class="my-5">
                  <section>
                      <div class="container">
                        <div class="row text-center mx-0">
                          <div class="col mb-3">
                            <h1 style="text-shadow: 0 0 10px black; color: white; font-weight: bold;">KEGIATAN</h1>
                          </div>
                        </div>
                        @foreach($kegiatan as $kegiatan2)
                          <div class="mb-4">
                            <div class="card mb-6" style="border: 8px white;">
                              <div class="row">
                                <div class="col-md-4">
                                  <img src="{{asset('storage/'.$kegiatan2->thumbnail)}}" class="img-fluid rounded-start align-items-md-center" alt="...">
                                </div>
                                <div class="col-md-8">
                                  <div class="card-body">
                                    @auth
                                      <div class="text-end">
                                        <a href="/kegiatan/{{$kegiatan2->id}}/edit" class="fiturAdmin">Edit</a> |
                                        <a href="/addPhoto/kegiatan/{{$kegiatan2->id}}" class="fiturAdmin">Add Foto</a> |
                                        <a href="/kegiatan/deletePhoto/{{$kegiatan2->id}}" class="fiturAdmin">Delete Foto</a>
                                        <div class="mt-1"></div>
                                        <form action="/kegiatan/{{$kegiatan2->id}}" method="post">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit">Delete</button>
                                        </form>
                                      </div>
                                    @endauth
                                    <h5 class="card-title"><a href="/kegiatan/{{$kegiatan2->id}}" style="font-weight: bold; text-decoration: none; color: black;">{{$kegiatan2->judul}}</a></h5>
                                    <p class="card-text">{{$kegiatan2->deskripsi}}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                        <div id="fasilitas"></div>
                      </div>
                  </section>
                </div>
              </div>
            </div>
            <div id="enam">
              <div id="content-size">
                <div id="fasilitas">
                  <section>
                      <div class="container">
                        <div class="row text-center mx-0">
                          <div class="col mb-4 mt-5">
                            <h1 style="text-shadow: 0 0 10px black; color: white; font-weight: bold;">FASILITAS PENDIDIKAN</h1>
                          </div>
                        </div>
                        <div class="row justify-content-center mx-0">
                          @foreach($staff as $staff2)
                          <div class="col-md-3 mb-5">
                            <div class="card">
                              <img src="{{asset('storage/'.$staff2->foto)}}" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
                              <div class="card-body">
                                @auth
                                <div class="text-end">
                                  <a href="/staff/{{$staff2->id}}/edit" class="fiturAdmin">Edit</a>
                                  <div class="mt-1"></div>
                                  <form action="/staff/{{$staff2->id}}" method="post" style="margin-bottom: 5%;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Delete</button>
                                  </form>
                                </div>
                                @endauth
                                <h5 class="card-title" style="font-weight: bold;">{{$staff2->nama}}</h5>
                                <p class="card-text">{{$staff2->job}}</p>
                              </div>
                            </div>
                          </div>
                          @endforeach
                          <div id="staff" style="padding-bottom: 6vh;"></div>
                        </div>
                      </div>
                  </section>
                </div>
              </div>
            <div id="tujuh" style="padding-bottom: 8vh;">
              <div id="content-size">
                <div id="staff">
                  <section>
                      <div class="container">
                        <div class="row text-center mx-0">
                          <div class="col mb-4 mt-5">
                            <h1 style="text-shadow: 0 0 10px black; color: white; font-weight: bold;">STAFF PENDIDIKAN</h1>
                          </div>
                        </div>
                        <div class="row justify-content-center">
                          @foreach($staff as $staff2)
                          <div class="col-md-3 mb-5">
                            <div class="card">
                              <img src="{{asset('storage/'.$staff2->foto)}}" class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
                              <div class="card-body">
                                @auth
                                <div class="text-end">
                                  <a href="/staff/{{$staff2->id}}/edit" class="fiturAdmin">Edit</a>
                                  <div class="mt-1"></div>
                                  <form action="/staff/{{$staff2->id}}" method="post" style="margin-bottom: 5%;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Delete</button>
                                  </form>
                                </div>
                                @endauth
                                <h5 class="card-title" style="font-weight: bold;">{{$staff2->nama}}</h5>
                                <p class="card-text">{{$staff2->job}}</p>
                              </div>
                            </div>  
                          </div>
                          @endforeach
                        </div>
                      </div>
                  </section>
                </div>
              </div>
            </div>
        </div>
        <div class="container-fluid">
          <div id="footer" class="row justify-content-between bg-dark text-white p-4">
            <div class="col-md-5 txt-md-start my-4">
              <h4 class="fs-5">SDN CIHUNI 02</h4>
              <br>
              <p>Jalan Desa Curug Tangerang No.47, RT.2/RW.5, Curug Sangereng,<br>Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810</p>
              <p>Tel.: (021) 123456789</p>
            </div>
            <div class="col-md-5 txt-md-end my-4">
              <div class="row justify-content-end me-4">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=sdn cihuni 2&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://formatjson.org/">format json</a>
                  </div>
                  <style>.mapouter{position:relative;text-align:right;width:300px;height:200px;}.gmap_canvas {overflow:hidden;background:none!important;width:300px;height:200px;}.gmap_iframe {width:300px!important;height:200px!important;}</style>
                </div>
              </div>
              <br/>
              <div id="sosmed" class="text-end" style="margin-right: 2%;">
                <img src="gambar/facebook.png" class="img-fluid">
                <img src="gambar/instagram.png" class="img-fluid">
                <img src="gambar/youtube.png" class="img-fluid">
              </div>
              <div class="text-white text-end opacity-50 my-2" style="margin-right: 2%;" >
                <p>Copyright &copy; 2022, All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
        <script src="app.js"></script>
        <script>
            $(".menu-icon").click(function(){
                $(this).toggleClass("active");
                $(".navigation-menu").toggleClass("active");
                $(".menu-icon i").toggleClass("fa-times");
            })
        </script>
    </body>
</html>