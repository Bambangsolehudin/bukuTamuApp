@extends('layouts.app')

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            {{-- <h1 class="h3 mb-0 text-gray-800">tamu</h1> --}}
          </div>

          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <!-- Content Row -->
          <div class="row justify-content-center">
              

                <div class="col-8">
                    <h5 class="text-center"><i class="fas fa-plus"></i>Edit Tamu</h5 class="text-center">
                    <form method="POST" action="{{ route('tamu.update', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                          <label for="exampleInputtext1" class="form-label">Nama tamu</label>
                          <input type="text" name="nama" value="{{ $item->nama }}" class="form-control" id="exampleInputtext1" aria-describedby="textHelp">
                        </div>
    
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">No KTP</label>
                            <input type="number" name="no_ktp" value="{{ $item->no_ktp }}" class="form-control" id="no_ktp">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $item->email }}" class="form-control" id="email">
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="text" name="umur" value="{{ $item->umur }}" class="form-control" id="umur">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" required class="form-control">
                                <option value="{{ $item->jenis_kelamin }}">jangan diubah</option>
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
                            <input type="text" value="{{ $item->alamat }}" name="alamat" class="form-control" id="alamat">
                        </div>

                        <div class="mb-3">
                            <label for="tujuan_kunjungan" class="form-label">tujuan_kunjungan</label>
                            <input type="text" value="{{ $item->tujuan_kunjungan }}" name="tujuan_kunjungan" class="form-control" id="tujuan_kunjungan">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">foto</label>
                            <input type="text" name="foto" value="{{ $item->foto }}" class="form-control" id="foto">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">status</label>
                            <select name="status" required class="form-control">
                                <option value="{{ $item->status }}">Jangan dirubah</option>
                                    <option value="disetujui">
                                        disetujui
                                    </option>
                                    <option value="tidak disetujui">
                                        tidak disetujui
                                    </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jam" class="form-label">jam</label>
                            <input type="time" name="jam" value="{{ $item->jam }}" class="form-control" id="jam">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">tanggal</label>
                            <input type="date" name="tanggal" value="{{ $item->tanggal }}" class="form-control" id="tanggal">
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
@endsection
