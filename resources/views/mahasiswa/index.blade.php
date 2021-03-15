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
    @toastr_css
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-12 col-md-12 col-sm-12 tabel-font">
            <div class="card">
                <div class="card-header bg-success">
                    <h3 class="card-title pt-2">Tabel Mahasiswa</h3>
                    <a href="{{ route ('tambahmhs') }}" class="btn btn-md bg-dark float-lg-right"><i
                            class="fa fa-user-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-font">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Angkatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $mhs)
                            <tr>
                                <td class="text-center"><a class="btn btn-sm fa fa-edit"></a></td>
                                <td>{{$mhs->nim}}</td>
                                <td>{{$mhs->nm_mhs}}</td>
                                <td>{{$mhs->alamat}}</td>
                                <td>{{$mhs->no_telp}}</td>
                                <td>{{$mhs->email}}</td>
                                <td>{{$mhs->haveKelas->nm_kelas}}</td>
                                <td>{{$mhs->haveJurusan->nm_jurusan}}</td>
                                <td>{{date('Y', strtotime($mhs->TA))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Angkatan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>


    </div>
    <!-- /.row (main row) -->
</div>
@jquery
@toastr_js
@toastr_render
@endsection