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

    <div class="card card-default">
        <div class="card-header bg-cyan">
            <h3 class="card-title">Tambah Data Kelas</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" action="{{route('postkelas')}}">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            @php
                            $dd = substr($idk->id_kelas,1);
                            $hasil = $dd + 1;
                            $hasil1 = str_pad($hasil, 3, "00", STR_PAD_LEFT)
                            @endphp
                            <label>ID Kelas</label>
                            <input type="text" name="id_kelas" value="K{{$hasil1}}" class="form-control select2"
                                placeholder="ID Kelas" style="width: 100%;" readonly>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <!-- /.form-group -->
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" name="nm_kelas" class="form-control select2" style="width: 100%;"
                                placeholder="Masukan Nama Kelas">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control select2" style="width: 100%;">
                                <option value="1" selected="selected">Aktif</option>
                                <option value="2">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>&nbsp</label><br>
                            <button class="btn btn-md btn-primary pl-4 pr-4"><i class="fas fa-plus-circle"></i></button>
                        </div>
                    </div>
                    <!-- /.form-group -->
                </div>
            </form>
            <!-- /.col -->
        </div>
    </div>
    <!-- Main row -->
    <div class="row">
        <!-- right col -->
        <section class="col-lg-12 col-md-12 col-sm-12 tabel-font">
            <div class="card">
                <div class="card-header bg-cyan">
                    <h3 class="card-title p-1">Tabel Kelas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover table-font">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th>ID Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $kls)
                            <tr>
                                <td class="text-center"><a class="btn btn-sm fa fa-edit"></a></td>
                                <td>{{$kls->id_kelas}}</td>
                                <td>{{$kls->nm_kelas}}</td>
                                @if($kls->status == 1)
                                <td>Aktif</td>
                                @else
                                <td>Tidak Aktif</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>ID Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Status</th>
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
@endsection