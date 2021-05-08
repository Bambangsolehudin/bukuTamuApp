@extends('layouts.admin')

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
                        <h6 class="m-0 font-weight-bold text-dark text-center">Laporan</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('laporan.create') }}">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputtext1" class="form-label">tanggal </label>
                              <input type="date" name="date1" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                            </div>
                            <p>sampai</p>
                            <div class="mb-3">
                                <label for="date2" class="form-label">tanggal</label>
                                <input type="date" name="date2" class="form-control" id="date2">
                            </div>

                        <button type="submit" class="btn btn-warning">Cetak</button>

                        </form>
                    </div>
              </div>            
          </div>



        </div>
        </div>
        <!-- /.container-fluid -->
@endsection
