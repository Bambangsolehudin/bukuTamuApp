<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">bukuTamuApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                {{-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> --}}
                {{-- <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
              </div>
            </div>
          </nav>
        </div>

      
        <!-- Begin Page Content -->
        <div class="container-fluid">



    

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            {{-- <h1 class="h3 mb-0 text-gray-800">tamu</h1> --}}
          </div>

          {{-- @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif --}}
          <!-- Content Row -->
          <div class="row justify-content-center">
                
                <div class="col-5 m-auto">
                    <h1 class="text-primary text-center">selamat Datang</h1> 
                    <h2 class="text-warning text-center">di Aplikasi Buku Tamu</h2>
                    <h5 class="text-center mt-5"><i class="fas fa-plus"></i>Silahkan Isi Data</h5 class="text-center">

                </div>
                
                <div class="col-5 mt-3">
                    
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                 
                    <form method="POST" action="{{ route('front.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputtext1" class="form-label">Nama tamu</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                        </div>
    
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">No KTP</label>
                            <input type="number" name="no_ktp" class="form-control" id="no_ktp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" required class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                    <option value="laki-laki">
                                        Laki-laki
                                    </option>
                                    <option value="perempuan">
                                        Perempuan
                                    </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>

                        <div class="mb-3">
                            <label for="tujuan_kunjungan" class="form-label">Tujuan Kunjungan</label>
                            <input type="text" name="tujuan_kunjungan" class="form-control" id="tujuan_kunjungan">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>

                        {{-- <div class="mb-3"> --}}
                            {{-- <label for="status" class="form-label">status</label> --}}
                            <input type="hidden" name="status" value="tidak disetujui" >
                        {{-- </div> --}}

           
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        
        <!-- /.container-fluid -->

</body>
</html>