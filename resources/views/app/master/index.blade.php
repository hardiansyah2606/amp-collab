@extends('layouts.app')
@section('content')
	<section class="section">
          <div class="row">
            <div class="col-md-12"> 
                <div class="card" style="background-color: #f1f2f6;"> 
                  <div class="card-body"> 
                    <h2 align="center"> Selamat Datang di {{ env('APP_NAME') }}</h2>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card"  style="background-color: #f1f2f6;">
                <div class="card-header">
                  <h4><?php echo date('d M Y') ?></h4>
                  <div class="card-header-action">
                    <a href="?hd=transaksi&fd=pengajuan" class="btn btn-primary">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body container">
                  <h3 align="center">Penempatan Tenaga Kerja Dalam dan Luar Negeri, Outsourcing Business Provider, Security Guard Services & Training, General Trading, Tour & Travel, Haji dan Umrah, Lembaga Pendidikan dan Keterampilan</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
