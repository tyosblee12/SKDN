@extends('../admin.layouts.master')
@section('content')
@toastr_css
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
                <form method="post" action="{{ route ('updatemhs',$data->nim) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">NIM</label>
                                    <input type="text" name="nim" class="form-control text-right"
                                        id="exampleInputEmail1" value="{{ $data->nim }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nm_mhs" class="form-control" id="exampleInputEmail1"
                                        value="{{ $data->nm_mhs }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">ID Kelas</label>
                                    <select type="email" name="id_kelas" class="form-control" id="exampleInputEmail1">
                                        <option value="{{ $data->id_kelas }}">{{ $data->id_kelas }}</option>
                                        @foreach($kelas as $kls)
                                        <option class="font-weight-bold" value="{{$kls->id_kelas}}">{{$kls->nm_kelas}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">ID Jurusan</label>
                                    <select type="email" name="id_jurusan" class="form-control" id="exampleInputEmail1">
                                        <option value="{{ $data->id_jurusan }}">{{ $data->id_jurusan }}</option>
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
                                        value="{{ $data->no_telp }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                                        value="{{ $data->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" id="exampleInputPassword1"
                                        value="{{ $data->alamat }}">{{ $data->alamat }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputPassword1">Angkatan</label>
                                    <input type="date" name="TA" class="form-control" id="exampleInputPassword1"
                                        value="{{ $data->TA }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="exampleInputPassword1">Status</label>
                                    <select type="text" name="status" class="form-control" id="exampleInputEmail1">
                                        <option value="">{{ $data->status }}</option>
                                        <option class="font-weight-bold" value="1">Aktif</option>
                                        <option class="font-weight-bold" value="0">Tidak Aktif</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    @jquery
    @toastr_js
    @toastr_render
    @endsection