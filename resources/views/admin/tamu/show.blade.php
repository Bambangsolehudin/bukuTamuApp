@extends('layouts.app')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            {{-- <h1 class="h3 mb-0 text-gray-800">tamu</h1> --}}
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

              <div class="col-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Detail Tamu</h6>
                    </div>
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="col-9">
                          <img src="{{ url('storage/'.$tamu->foto) }}" alt="" style="width: 400px" class="img-thumbnail d-flex justify-content-center " >
                        <p>Nama : {{ $tamu->nama }}</p>
                        <p>No KTP : {{ $tamu->no_ktp }}</p>   
                        <p>Email : {{ $tamu->email }}</p>                                 
                        <p>Umur : {{ $tamu->umur }}</p>
                        <p>Jenis Kelamin : {{ $tamu->jenis_kelamin }}</p>
                        <p>Tujuan Kunjungan : {{ $tamu->tujuan_kunjungan }}</p>
                        <p>alamat : {{ $tamu->alamat }}</p>
                        <p>tujuan kunjungan: {{ $tamu->kunjungan }}</p>
                        <p>status : {{ $tamu->status }}</p>
                        <p>jam : {{ $tamu->jam }}</p>
                        <p>tanggal : {{ $tamu->tanggal }}</p>
                        </div>
                      </div>
                      


                                   
                </div>
              </div>
                



          {{-- </div> --}}



        </div>
        <!-- /.container-fluid -->
@endsection
