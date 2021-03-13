@extends('../admin.layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-6">

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Mahasiswa</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{route('postmhs')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">NIM</label>
                                    <input type="number" name="nim" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nomor Induk Mahasiswa">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nm_mhs" class="form-control" id="exampleInputEmail1"
                                        placeholder="Masukan Nama Lengkap">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">ID Kelas</label>
                                    <select type="email" name="id_kelas" class="form-control" id="exampleInputEmail1">
                                        <option value="">--Silahkan Pilih--</option>
                                        @foreach($kelas as $kls)
                                        <option class="font-weight-bold" value="{{$kls->id_kelas}}">{{$kls->nm_kelas}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">ID Jurusan</label>
                                    <select type="email" name="id_jurusan" class="form-control" id="exampleInputEmail1">
                                        <option value="">--Silahkan Pilih--</option>
                                        @foreach($jurusan as $jrs)
                                        <option class="font-weight-bold" value="{{$jrs->id_jurusan}}">
                                            {{$jrs->nm_jurusan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Nomor Telepon</label>
                                    <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1"
                                        placeholder="Masukan Nomor Telepon">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                                        placeholder="Masukan Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" id="exampleInputPassword1"
                                        placeholder="alamat"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Angkatan</label>
                                    <input type="date" name="TA" class="form-control" id="exampleInputPassword1"
                                        placeholder="Masukan Tahun Angkatan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    @endsection