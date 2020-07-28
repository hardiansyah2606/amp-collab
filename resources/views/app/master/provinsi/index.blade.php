@extends('layouts.app')
@section('content')

        <section class="section">
          <div class="section-header">
            <h1>Provinsi</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Provinsi</h4>
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
                      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Provinsi</button> 
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
                             <th class="text-center">Provinsi</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                         <tbody>
                              @php
                            $no = 1
                           @endphp
                           @foreach ($prov as $d)
                          <tr class="text-center">
                            <td>{{ $no++ }}</td>
                            <td>{{$d->provinsi}}</td>
                            <td><a href="#" class="btn btn-primary edit" data-toggle="modal" data-target="#exampleModal{{$d->idprovinsi}}">Edit</a>
                                 <a href="#"  class="btn btn-danger swal-confirm" data-toggle="modal" data-target="#exampleModaldel{{$d->idprovinsi}}">Delete</a>
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
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Input Provinsi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('provinsi.store')}}" method="post">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                <label for="provinsi">Provinsi</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="provinsi"></textarea>
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
       @foreach($prov as $d)      
      <!-- Modal Delete -->
         <div class="modal fade" id="exampleModaldel{{$d->idprovinsi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <form action="{{ route('provinsi.delete', $d->idprovinsi)}}" method="post" class="d-inline">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
              </div>
              {{method_field('delete')}}
              @csrf              
              <div class="modal-body">
                  <p>{{$d->provinsi}} akan dihapus</p>
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
   
@foreach($prov as $d)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$d->idprovinsi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('provinsi.update', $d->idprovinsi)}}" method="POST">
        @csrf
        {{method_field('PATCH')}}
        <div class="modal-body">   
          <div class="form-group">
            <label>Provinsi</label>
            <input type="hidden" name="idprovinsi" class="form-control" value="{{$d->idprovinsi}}">
            <input type="text" name="provinsi" class="form-control" value="{{$d->provinsi}}">
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

</script>
@endpush