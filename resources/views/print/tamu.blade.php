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
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            {{-- <h1 class="h3 mb-0 text-gray-800">tamu</h1> --}}
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

              <div class="col-12">
                <div class="card shadow mb-4">
                        <h5 class="m-0 font-weight-bold text-dark text-center">Data Tamu</h5>
                 
                    
                    
                        <div class="table-responsive">
                            <a href="{{ route('tamu.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            <table class="table table-bordered" id="pelanggan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No KTP</th>   
                                        <th>Email</th>                                 
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>alamat</th>
                                        <th>tujuan</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $items as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->no_ktp }}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->umur }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->tujuan_kunjungan }}</td>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                    @empty
                                        <td colspan="5">Data tidak ada</td>
                                    @endforelse
                              
                                </tbody>
                            </table>
                        
                </div>
              </div>
        </div>

          </div>
        </div>
</body>
</html>