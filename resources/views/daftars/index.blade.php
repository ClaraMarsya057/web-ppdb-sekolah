@include('header')
@include('navbar')
@include('sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Formulir Pendaftaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Formulir Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <table id="formulir_pendaftaran" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>No. Tlp/WhatsApp</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Asal Sekolah</th>
                    <th>Nama Orang Tua/Wali</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($posts as $row)
                <tr>
                    <td>{{$row->nama_lengkap}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>{{$row->tempat_lahir}}</td>
                    <td>{{$row->tanggal_lahir}}</td>
                    <td>{{$row->no_tlp_whatsapp}}</td>
                    <td>{{$row->jenis_kelamin}}</td>
                    <td>{{$row->agama}}</td>
                    <td>{{$row->asal_sekolah}}</td>
                    <td>{{$row->nama_orang_tua_wali}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('pendaftaran.destroy', $row->id) }}" method="post">
                        <a href="{{ route('pendaftaran.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                </td>
                </tr>
                @empty
                    Data Tidak Ditemukan
                @endforelse
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
@include('footer')