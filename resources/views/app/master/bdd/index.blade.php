@extends('layouts.app')
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
                      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Karyawan Baru</button> 
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
                          <span>&times;</span>
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
                             <th class="text-center">Karyawan</th>
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
                            <td><a href="#" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal{{$d->noktp}}">Edit</a>

                               <a href="#" class="btn btn-danger swal-confirm" data-id="{{$d->noktp}}">
                                    <form action="{{ route('karyawan.delete', $d->noktp)}}" id="delete{{$d->noktp}}" 
                                    method="post" class="d-inline">
                                     {{method_field('delete')}}
                                      @csrf
                                    </form>
                               Delete</i> 
                                </a>
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
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault01">Nama Lengkap</label>
                      <input type="text" name="nalen" class="form-control" id="validationDefault01" placeholder="Ujang Maman" autofocus required>
                      <small>
                        <i>Penulisan nama jangan disingkat.</i>
                      </small>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault02">Agama</label>
                      <input type="text" name="alias" class="form-control" id="validationDefault02" placeholder="Ujang" required>
                    </div>
                    <div class="col-md-2 mb-3">
                    <div class="section-title">Jenis Kelamin</div>
                      <label class="form-label"> </label>
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="jk" value="l" class="selectgroup-input" checked="">
                          <span class="selectgroup-button">Lelaki</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="jk" value="p" class="selectgroup-input">
                          <span class="selectgroup-button">Perempuan</span>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault03">Vendor</label>
                      <select name="vendor" class="form-control" id="validationDefault03" required>
                        @foreach($vendors as $vendor)
                          <option value="{{$vendor->idVendor}}"><?php echo ucwords($vendor->vendor) ?> </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault04">Tempat / Tanggal Lahir</label>
                      <div class="input-group">
                        <input type="text" name="tplh" class="form-control" id="validationDefault04" placeholder="Jakarta" aria-describedby="inputGroupPrepend2" required>
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend2">/</span>
                        </div>
                        <input type="date" name="tglah" class="form-control" id="validationDefault04" required>
                      </div>
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
<div class="modal fade" id="exampleModal{{$d->noktp}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('karyawan.update', $d->noktp)}}" method="POST">
        @csrf
        {{method_field('PATCH')}}
        <div class="modal-body">   
          <div class="form-group">
            <label>Karyawan</label>
            <input type="hidden" name="noktp" class="form-control" value="{{$d->noktp}}">
            <input type="text" name="karyawan" class="form-control" value="{{$d->namaKaryawan}}">
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


@endsection

@push('page-scripts')
<script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>

@endpush

@push('after-script')
<script>
$(".swal-confirm").click(function(e){
    noktp = e.target.dataset.id;

  swal({
        title: 'Apakah Anda yakin?',
        text: 'Data',
        icon:'warning',
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete)=> {
      if (willDelete) {
    //   swal('Data berhasil dihapus!', {
    //     icon: 'success',
    // });
       $(`#delete${noktp}`).submit(); 
    }   else {
    swal('Dibatalkan');
    }
    });
    });

// $(".swal-sukses").click(function(){
//       swal('Good Job', 'Data Berhasil Disimpan', 'success');
 
//     });
</script>
@endpush