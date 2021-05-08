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

              <div class="col-10">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-dark text-center">Data Tamu</h6>
                 
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <a href="{{ route('tamu.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                            <table class="table table-bordered" id="pelanggan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        {{-- <th>No KTP</th>   
                                        <th>Email</th>                                 
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>alamat</th> --}}
                                        <th>tujuan kunjungan</th>
                                        <th>status</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $tamus as $item )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> <a href="{{ route('tamu.show', $item->id) }}">{{ $item->nama }}</a></td>
                                        {{-- <td>{{ $item->no_ktp }}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->umur }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->alamat }}</td> --}}
                                        <td>{{ $item->tujuan_kunjungan }}</td>
                                        <td>{{ $item->status }}</td>




                                        <td>
                                            <a href="{{ route('tamu.edit', $item->id) }}" class="badge bg-warning text-dark"> <i class="fas fa-edit"></i></a>
                                            <form method="post" action="{{ route('tamu.destroy', $item->id) }}" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="badge bg-danger text-white"><i class="fas fa-trash"></i></button>
                                            </form>
                                            <a href="{{ route('tamu.send', $item->id) }}" class="badge bg-dark text-white"> <i class="fas fa-share-square"></i></a>
                                        
                                        </td>
                                    </tr>
                                    @empty
                                        <td colspan="5">Data tidak ada</td>
                                    @endforelse
                              
                                </tbody>
                            </table>
                        </div>
                </div>
              </div>
                



          {{-- </div> --}}



        </div>
        <!-- /.container-fluid -->
@endsection
