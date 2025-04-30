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
            <h1 class="m-0">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
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
                <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="example">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                    </div> 
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <div input="input-group">
                        <input type="text" class="form-control datetimepicker-input" id="date" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No. Tlp/WhatsApp</label>
                        <input type="text" class="form-control" placeholder="No. Tlp/WhatsApp" name="no_tlp_whatsapp" value="{{ old('no_tlp_whatsapp') }}">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" class="custom-radio">
                        <label for="perempuan">Perempuan</label><br>
                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-Laki" class="custom-radio">
                        <label for="laki-laki">Laki-Laki</label><br>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control select select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option selected="selected">Pilih Agama</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Protestan">Protestan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Asal Sekolah</label>
                        <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" value="{{ old('asal_sekolah') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Orang Tua/Wali</label>
                        <input type="text" class="form-control" placeholder="Nama Orang Tua/Wali" name="nama_orang_tua_wali" value="{{ old('nama_orang_tua_wali') }}">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
      </div>
    </section>
  </div>
@include('footer')