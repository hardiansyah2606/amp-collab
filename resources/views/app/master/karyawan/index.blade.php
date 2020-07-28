@extends('layouts.app')

<?php 
  
  $agamas = array('Islam','Kristen','Katolik','Budha','Hindu','Konghucu');
  $pendidikans = array('S3', 'S2', 'S1', 'D4', 'D3', 'D2', 'SMA', 'MAN', 'SMK', 'SMP', 'MTS', 'SD');
  $statusNikahs = array('Belum Menikah', 'Kawin Anak 0', 'Kawin Anak 1', 'Kawin Anak 2', 'Kawin Anak 3',
'Janda', 'Duda');
  $statusRumahs = array('Milik Sendiri', 'Kontrak', 'Rumah Dinas', 'Rumah Orang Tua');
  $statusKaryawans = array('Aktif', 'Harian', 'Honor', 'Kontrak', 'Magang', 'PKL', 'Tetap', 'Reposisi', 'Rotasi', 'Tidak
  Aktif', 'Upgrade');
  $sektors = array('Sektor Formal', 'Sektor Informal', 'Sektor Formal', 'Informal');
  $statusHubunganKerjas = array('Kontrak', 'Magang', 'Percobaan','Tetap');
  $statusMutasi = array('-','Demosi', 'Mutasi', 'Rotasi');
  $statusResign = array('-','Black List', 'Ikut Orangtua', 'Ikut Suami', 'Mengundurkan Diri', 'Meninggal Dunia',
'Non Aktif');



?>
@section('content')
        <section class="section">
          <div class="section-header">
            <h1>Karyawan</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Karyawan</h4>
                  </div>
                  <div class="card-body">
                    <form action="" method="post">
                      <div class="form-row">
                        <div class="form-group col-md-2">
                          <label>Bulan</label>
                          <select class="form-control" name="bulan">
                            <option value="0">Semua</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>                    
                        </div>
                        <div class="form-group col-md-2">
                          <label>Tahun</label>
                          <select class="form-control" name="tahun">
                            <option>2020</option>
                          </select>                    
                        </div>
                        <div class="form-group col-md-2">
                          <label><a href="" style="color: white">-</a></label>
                          <input type="submit" name="lihat"  class="form-control btn-primary" value="Lihat">
                        </div>
                      </div> 
                    
                  </div>
                </form>
                  <div class="card-body">
                    <div class="buttons">
                      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data Baru</button> 
                      <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Cetak</button>
                    </div>
                  </div>
                   
                  <div class="card-body">
                    <div class="table-responsive"> 
                     <table class="table table-striped"  id="table-1">
                       @if(session('message'))
                      <div class="alert alert-success alert-dismissible show fade col-12 col-md-12 col-lg-12">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Data berhasil disimpan.
                      </div>
                    </div>
                    @endif
                     @if(session('delete'))
                      <div class="alert alert-warning alert-dismissible show fade col-12 col-md-12 col-lg-12">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        Data berhasil dihapus.
                      </div>
                    </div>
                    @endif
                      @if(session('updatediv'))
                      <div class="alert alert-primary alert-dismissible show fade col-12 col-md-12 col-lg-12">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>a
                        </button>
                        Data berhasil di update.
                      </div>
                    </div>
                    @endif
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              No.
                            </th>
                             <th class="text-center">Karyawan </th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                         <tbody>
                             @php
                              $no = 1
                             @endphp
                             @foreach ($value as $d)
                          <tr class="text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->namaKaryawan }}</td>
                            <td><a href="#" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal{{$d->idKaryawan}}">Detail</a>
                            <a href="#"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldel{{$d->idKaryawan}}">Delete</a>
                            </td> 
                              
                          </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </section>



  
  <!-- Modal Insert -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Input Karyawan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('karyawan.store')}}" method="post">
              @csrf
              <div class="modal-body">
                  <div class="form-row">
                    <div class="col-md-12 mb-3" style="background-color: red; border-radius: 8px;color:white;">
                      <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Biodata / Data Diri</h4>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault01">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="validationDefault01" placeholder="Maman" autofocus required>
                      <small>
                        <i>Penulisan nama jangan disingkat.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault02">Agama</label>
                      <select name="agama" class="form-control" required>
                      @foreach($agamas as $agama)
                        <option>{{ $agama }}</option>
                      @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label class="form-label"> Jenis Kelamin</label>
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="jk" value="Lelaki" class=" selectgroup-input" checked="">
                          <span class="selectgroup-button">Lelaki</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="jk" value="Perempuan" class="selectgroup-input">
                          <span class="selectgroup-button">Perempuan</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault03">Pendidikan</label>
                      <select name="pendidikan" class="form-control" required>
                      @foreach($pendidikans as $pendidikan)
                        @if($pendidikan== 'S1')
                          <option selected="">{{$pendidikan}}</option>
                        @else
                          <option>{{$pendidikan}}</option>
                        @endif
                      @endforeach
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault04">Tempat / Tanggal Lahir</label>
                      <div class="input-group">
                        <input type="text" name="tplh"  class="form-control" id="validationDefault04" placeholder="Jakarta" aria-describedby="inputGroupPrepend2" required>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">/</span>
                        </div>
                        <input type="date" name="tglah" class="form-control" id="validationDefault04" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault03">No. KTP (Identitas Diri)</label>
                      <input type="text" name="noktp" class="form-control" id="validationDefault03" placeholder="12719291xxxxx" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault03">No. KK</label>
                      <input type="text" name="kk" class="form-control" id="validationDefault03" placeholder="12719291xxxxx" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault07">Status Kepemilikan Rumah</label>
                      <select name="statrumah" class="form-control" required>
                        @foreach($statusRumahs as $statusRumah)
                          <option>{{$statusRumah}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault08">NPWP</label>
                      <input type="text" name="npwp" class="form-control" id="validationDefault08" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault05">Status Nikah</label>
                      <select class="custom-select" name="status" id="validationDefault05" required>
                        @foreach($statusNikahs as $statusNikah)
                          <option>{{$statusNikah}}</option>
                        @endforeach
                      </select>
                      <small>
                        <i>Pekerjaan anda saat ini.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault08">Nomor Handphone</label>
                      <input type="text" name="nohp" class="form-control" id="validationDefault08" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-5 mb-3">
                      <label for="validationDefault06">Alamat Sesuai KTP</label>
                      <textarea name="alkt" class="form-control" id="validationDefault06" required></textarea>
                      <small>
                        <i>Alamat Sesuai dengan KTP saat ini.</i>
                      </small>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault09">Alamat Sesuai Domisili</label>
                      <textarea name="aldo" class="form-control" id="validationDefault09" required></textarea>
                      <small>
                        <i>Alamat Sesuai tempat tinggal saat ini.</i>
                      </small>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault12">Email</label>
                      <input type="text" name="email"  class="form-control" id="validationDefault12" required>
                      <small>
                        <i>Diisi dengan Email yang Aktif.</i>
                      </small>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3" style="background-color: blue; border-radius: 8px;color:white;">
                      <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Mengenai Pribadi, Fisik dan Pekerjaan</h4>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault12">Nama Gadis Ibu Kandung</label>
                      <input type="text" name="nmibu" class="form-control" id="validationDefault12" required>
                      <small>
                        <i>Wajib Diisi jangan disingkat.</i>
                      </small>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault12">No KTP Ibu Kandung</label>
                      <input type="text" name="noktpibu"  class="form-control" id="validationDefault12" required>
                      <small>
                        <i>Wajib Diisi jangan disingkat.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault12">Terhitung Mulai Tanggal</label>
                      <input type="date" name="tmt"  class="form-control" id="validationDefault12" required>
                      <small>
                        <i>Mohon isi tanggal dengan benar.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault12">Terhitung Kerja Tanggal</label>
                      <input type="date" name="tkt"  class="form-control" id="validationDefault12" required>
                      <small>
                        <i>Mohon isi tanggal dengan benar.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault12">Status Karyawan</label>
                      <select type="text" name="statuskaryawan" class="form-control" id="validationDefault12" required>
                        @foreach($statusKaryawans as $statusKaryawan)
                          <option>{{$statusKaryawan}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault13">Keterangan</label>
                      <textarea name="keterangan" class="form-control" id="validationDefault13" required></textarea>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault14">Referensi</label>
                      <input type="text" name="referensi" placeholder="Minal Sholihin" class="form-control" id="validationDefault14" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault14">Direkrut Oleh</label>
                      <input type="text" name="direkrutoleh" placeholder="Dr Pramono" class="form-control" id="validationDefault14" required>
                    </div>
                    <div class="col-md-1 mb-3">
                      <label for="validationDefault14">Gol Darah</label>
                      <select name="goldarah" placeholder="O" class="form-control">
                        <option>O</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault14">Tinggi Badan</label>
                      <input type="number" name="tinggibadan" maxlength="3" min="100" placeholder="170" class="form-control" id="validationDefault14" required>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault14">Berat Badan</label>
                      <input type="number" name="beratbadan" maxlength="3" min="30" placeholder="65" class="form-control" id="validationDefault14" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault18">Vendor</label>
                      <select name="vendor" class="form-control" required>
                        @foreach($vendors as $vendor)
                          <option value="{{$vendor->idVendor}}"> {{strtoupper($vendor->vendor)}} </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault18">Mitra</label>
                      <select name="mitra" id="mitra" class="form-control input-lg dynamic" data-dependent="lokasi" required> 
                        @foreach($mitras as $mitra)
                        <option value="{{$mitra->idMitra}}">{{strtoupper($mitra->Mitra)}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault18">Lokasi Kerja</label>
                      <select name="loker" id="lokasi" class="form-control input-lg" required> 
                        @foreach($lokasikerjas as $lokasikerja)
                        <option value="{{$lokasikerja->idLok}}">{{strtoupper($lokasikerja->lokasiKerja)}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault18">Divisi</label>
                      <select name="divisi" class="form-control" required>
                        @foreach($divisis as $divisi)
                        <option value="{{$divisi->iddivisi}}">{{strtoupper($divisi->divisi)}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationDefault18">Jabatan</label>
                      <select name="jabatan" class="form-control" required>
                        @foreach($jabatans as $jabatan)
                        <option value="{{$jabatan->idjabatan}}">{{strtoupper($jabatan->jabatan)}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3" style="background-color: #2b8c30; border-radius: 8px;color:white;">
                      <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Data Rekening</h4>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault18">Bank</label>
                      <select name="bank" class="form-control" required>
                        @foreach($banks as $bank)
                        <option value="{{$bank->idBank}}">{{strtoupper($bank->bank)}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault18">No Rekening</label>
                      <input type="text" name="norek" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault18">Pemilik Rekening</label>
                      <input type="text" name="perek" class="form-control" required>
                    </div>
                  </div>
                </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- //Modal Insert -->
      <!-- Modal Delete -->
   
@foreach($value as $d)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$d->idKaryawan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('karyawan.update', $d->idKaryawan)}}" method="POST">
        @csrf
        {{method_field('PATCH')}}
          <div class="modal-body">
            <div class="form-row">
              <div class="col-md-12 mb-3" style="background-color: red; border-radius: 8px;color:white;">
                <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Biodata / Data Diri</h4>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="validationDefault01">Nama Lengkap</label>
                <input type="hidden" name="idkaryawan" class="form-control" value="{{$d->idKaryawan}}">
                <input type="text" name="nama" class="form-control" value="{{ $d->namaKaryawan }}" id="validationDefault01" placeholder="Ujang Maman" autofocus required>
                <small>
                  <i>Penulisan nama jangan disingkat.</i>
                </small>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault02">Agama</label>
                <select name="agama" class="form-control" required>
                  <option>{{ $d->agama }}</option>
                @foreach($agamas as $agama)
                  <option>{{ $agama }}</option>
                @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="selectgroup w-100">
                @if($d->jantina == 'Lelaki')
                  <label class="selectgroup-item">
                    <input type="radio" name="jk" value="Lelaki" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Lelaki</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="jk" value="Perempuan" class="selectgroup-input">
                    <span class="selectgroup-button">Perempuan</span>
                  </label>
                @elseif($d->jantina == 'Perempuan')
                  <label class="selectgroup-item">
                    <input type="radio" name="jk" value="Lelaki" class="selectgroup-input">
                    <span class="selectgroup-button">Lelaki</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="jk" value="Perempuan" class="selectgroup-input" checked="">
                    <span class="selectgroup-button">Perempuan</span>
                  </label>
                @endif
                </div>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault03">Pendidikan</label>
                <select name="pendidikan" class="form-control" required>
                  <option selected="">{{ $d->pendidikan }}</option>
                @foreach($pendidikans as $pendidikan)
                  <option>{{$pendidikan}}</option>
                @endforeach
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault04">Tempat / Tanggal Lahir</label>
                <div class="input-group">
                  <input type="text" name="tplh" value="{{ $d->tempatLahir }}" class="form-control" id="validationDefault04" placeholder="Jakarta" aria-describedby="inputGroupPrepend2" required>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">/</span>
                  </div>
                  <input type="date" name="tglah" class="form-control" value="{{ $d->tanggalLahir }}" id="validationDefault04" required>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-2 mb-3">
                <label for="validationDefault03">No. KTP (Identitas Diri)</label>
                <input type="text" name="noktp" class="form-control" value="{{ $d->noktp }}" id="validationDefault03" placeholder="12719291xxxxx" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault03">No. KK</label>
                <input type="text" name="kk" class="form-control" value="{{ $d->noKK }}" id="validationDefault03" placeholder="12719291xxxxx" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault07">Status Kepemilikan Rumah</label>
                <select name="statrumah" class="form-control" required>
                    <option>{{ $d->statRumah }}</option>
                  @foreach($statusRumahs as $statusRumah)
                    <option>{{$statusRumah}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault08">NPWP</label>
                <input type="text" name="npwp" class="form-control" id="validationDefault08" value="{{ $d->npwp }}" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault05">Status Nikah</label>
                <select class="custom-select" name="status" id="validationDefault05" required>
                    <option>{{ $d->statusNikah }}</option>
                  @foreach($statusNikahs as $statusNikah)
                    <option>{{$statusNikah}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault08">Nomor Handphone</label>
                <input type="text" name="nohp" value="{{ $d->noHP }}" class="form-control" id="validationDefault08" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-5 mb-3">
                <label for="validationDefault06">Alamat Sesuai KTP</label>
                <textarea name="alkt" class="form-control" id="validationDefault06" required>{{ $d->alamatSesuaiKTP }}</textarea>
                <small>
                  <i>Alamat Sesuai dengan KTP saat ini.</i>
                </small>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault09">Alamat Sesuai Domisili</label>
                <textarea name="aldo" class="form-control" id="validationDefault09" required>{{ $d->AlamatDomisili }}</textarea>
                <small>
                  <i>Alamat Sesuai tempat tinggal saat ini.</i>
                </small>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault12">Email</label>
                <input type="text" name="email" value="{{ $d->email }}" class="form-control" id="validationDefault12" required>
                <small>
                  <i>Diisi dengan Email yang Aktif.</i>
                </small>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3" style="background-color: blue; border-radius: 8px;color:white;">
                <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Mengenai Pribadi, Fisik dan Pekerjaan</h4>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationDefault12">Nama Gadis Ibu Kandung</label>
                <input type="text" name="nmibu" class="form-control" value="{{ $d->namaIbuKandung }}" id="validationDefault12" required>
                <small>
                  <i>Wajib Diisi jangan disingkat.</i>
                </small>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault12">No KTP Ibu Kandung</label>
                <input type="text" name="noktpibu"  class="form-control" value="{{ $d->noktpibukandung }}" id="validationDefault12" required>
                <small>
                  <i>Wajib Diisi jangan disingkat.</i>
                </small>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault12">Terhitung Mulai Tanggal</label>
                <input type="date" name="tmt"  class="form-control" id="validationDefault12" value="{{ $d->tmt }}" required>
                <small>
                  <i>Mohon isi tanggal dengan benar.</i>
                </small>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault12">Terhitung Kerja Tanggal</label>
                <input type="date" name="tkt"  class="form-control" id="validationDefault12" value="{{ $d->tkt }}" required>
                <small>
                  <i>Mohon isi tanggal dengan benar.</i>
                </small>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault12">Status Karyawan</label>
                <select type="text" name="statuskaryawan" class="form-control" id="validationDefault12" required>
                    <option>{{ $d->statusKaryawan }}</option>
                  @foreach($statusKaryawans as $statusKaryawan)
                    <option>{{$statusKaryawan}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationDefault13">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="validationDefault13" required>{{ $d->keterangan }}</textarea>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault14">Referensi</label>
                <input type="text" name="referensi" placeholder="Minal Sholihin" value="{{ $d->referensi }}" class="form-control" id="validationDefault14" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault14">Direkrut Oleh</label>
                <input type="text" name="direkrutoleh" placeholder="Dr Pramono" value="{{ $d->direkrutOleh }}" class="form-control" id="validationDefault14" required>
              </div>
              <div class="col-md-1 mb-3">
                <label for="validationDefault14">Gol Darah</label>
                <select name="goldarah" placeholder="O" class="form-control"> 
                  <option>{{ strtoupper($d->golonganDarah) }}</option>
                  <option>O</option>
                  <option>A</option>
                  <option>B</option>
                  <option>AB</option>
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault14">Tinggi Badan</label>
                <input type="number" name="tinggibadan" maxlength="3" min="100" placeholder="170" value="{{ $d->tinggiBadan }}" class="form-control" id="validationDefault14" required>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault14">Berat Badan</label>
                <input type="number" name="beratbadan" maxlength="3" min="30" placeholder="65" value="{{ $d->beratBadan }}" class="form-control" id="validationDefault14" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationDefault18">Vendor</label>
                <select name="vendor" class="form-control" required>
                  @foreach($vendors as $vendor)
                    @if($d->idVendor == $vendor->idVendor)
                      <option value="{{$vendor->idVendor}}" selected=""> {{strtoupper($vendor->vendor)}} </option>
                    @else
                      <option value="{{$vendor->idVendor}}"> {{strtoupper($vendor->vendor)}} </option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault18">Mitra</label>
                <select name="mitra" class="form-control" required> 
                  @foreach($mitras as $mitra)
                    @if($d->idMitra == $mitra->idMitra)
                      <option value="{{$mitra->idMitra}}" selected="">{{strtoupper($mitra->Mitra)}}</option>
                    @else
                      <option value="{{$mitra->idMitra}}">{{strtoupper($mitra->Mitra)}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault18">Lokasi Kerja</label>
                <select name="loker" class="form-control" required> 
                  @foreach($lokasikerjas as $lokasikerja)
                    @if($d->idLok == $lokasikerja->idLok)
                      <option value="{{$lokasikerja->idLok}}" selected="">{{strtoupper($lokasikerja->lokasiKerja)}}</option>
                    @else
                      <option value="{{$lokasikerja->idLok}}">{{strtoupper($lokasikerja->lokasiKerja)}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="col-md-2 mb-3">
                <label for="validationDefault18">Divisi</label>
                <select name="divisi" class="form-control" required>
                  @foreach($divisis as $divisi)
                    @if($d->idDivisi == $divisi->iddivisi)
                      <option value="{{$divisi->iddivisi}}" selected="">{{strtoupper($divisi->divisi)}}</option>
                    @else
                      <option value="{{$divisi->iddivisi}}">{{strtoupper($divisi->divisi)}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault18">Jabatan</label>
                <select name="jabatan" class="form-control" required>
                  @foreach($jabatans as $jabatan)
                    @if($d->idJab == $jabatan->idjabatan)
                      <option value="{{$jabatan->idjabatan}}">{{strtoupper($jabatan->jabatan)}}</option>
                    @else
                      <option value="{{$jabatan->idjabatan}}">{{strtoupper($jabatan->jabatan)}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3" style="background-color: #2b8c30; border-radius: 8px;color:white;">
                <h4 style="padding: 10px 10px 10px 10px" align="center">Isian Data Rekening</h4>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault18">Bank</label>
                <select name="bank" class="form-control" required>
                  @foreach($banks as $bank)
                    @if($d->idBank == $bank->idBank)
                      <option value="{{$bank->idBank}}">{{strtoupper($bank->bank)}}</option>
                    @else
                      <option value="{{$bank->idBank}}">{{strtoupper($bank->bank)}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault18">No Rekening</label>
                <input type="text" value="{{$d->noRekening}}" name="norek" class="form-control" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault18">Pemilik Rekening</label>
                <input type="text" value="{{$d->PemilikRekening}}" name="perek" class="form-control" required>
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->

@endforeach

 @foreach($value as $d)      
      <!-- Modal Delete -->
         <div class="modal fade" id="exampleModaldel{{$d->idKaryawan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <form action="{{ route('karyawan.delete', $d->idKaryawan)}}" method="post" class="d-inline">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
              </div>
              {{method_field('delete')}}
              @csrf              
              <div class="modal-body">
                  <p>{{$d->namaKaryawan}} akan dihapus</p>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
              </div>
              </form>
            </form>
          </div>
        </div>
      </div>
  @endforeach
<!-- Modal Delete -->

@endsection
