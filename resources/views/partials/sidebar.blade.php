<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class=""><a class="nav-link" href="/menu"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
    <li class="menu-header">Master</li>
    <li class="nav-item dropdown {{ request()->is('divisi') || request()->is('provinsi')|| request()->is('user') || request()->is('jabatan') || request()->is('mitra') || request()->is('bidangpekerjaan') || request()->is('lokasikerja') || request()->is('bank') || request()->is('vendor') || request()->is('karyawan') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Master</span></a>
        <ul class="dropdown-menu">

          <li class="{{ request()->is('bank') ? 'active' : '' }}"><a href="{{ url('/bank') }}"><i class="fas fa-money-check-alt"></i> <span>Bank</span></a></li>

          <li class="{{ request()->is('bidangpekerjaan') ? 'active' : '' }}"><a href="{{ url('/bidangpekerjaan') }}"><i class="fas fa-users-cog"></i><span>Bidang Pekerjaan</span></a></li>

          <li class="{{ request()->is('divisi') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/divisi') }}"><i class="fas fa-sitemap" aria-hidden="true"></i> <span>Divisi</span></a></li>
                   
          <li class="{{ request()->is('jabatan') ? 'active' : '' }}"><a href="{{ url('/jabatan') }}"><i class="fas fa-user-tag"></i> <span>Jabatan</span></a></li>
          
          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-users"></i> <span>Karyawan</span></a></li>

          <li class="{{ request()->is('lokasikerja') ? 'active' : '' }}"><a href="{{ url('/lokasikerja') }}"><i class="fas fa-map-marked-alt"></i><span>Lokasi Kerja</span></a></li>
          
          <li class="{{ request()->is('mitra') ? 'active' : '' }}"><a href="{{ url('/mitra') }}"><i class="fas fa-handshake"></i> <span>Mitra</span></a></li>

          <li class="{{ request()->is('provinsi') ? 'active' : '' }}"><a href="{{ url('/provinsi') }}"><i class="fas fa-map-marker-alt"></i> <span>Provinsi</span></a></li>
          
          <li class="{{ request()->is('user') ? 'active' : '' }}"><a href="{{ url('/user') }}"><i class="fas fa-user"></i> <span>User</span></a></li>

          <li class="{{ request()->is('vendor') ? 'active' : '' }}"><a href="{{ url('/vendor') }}"><i class="fas fa-people-carry"></i> <span>Vendor</span></a></li>

       </ul>
    </li>
    <li class="nav-item dropdown {{ request()->is('bdd') || request()->is('provinsi') || request()->is('jabatan')|| request()->is('mitra') ? 'active' : '' }}">
        <a href="{{ url('/bdd') }}" class="nav-link has-dropdown"><i class="fas fa-mail-bulk"></i> <span>BDD</span></a>
       
    </li>

      <li class="menu-header">General Maniskum</li>
    <li class="nav-item dropdown {{ request()->is('divisi') || request()->is('provinsi')|| request()->is('user') || request()->is('jabatan') || request()->is('mitra') || request()->is('bidangpekerjaan') || request()->is('lokasikerja') || request()->is('bank') || request()->is('vendor') || request()->is('karyawan') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>General Maniskum</span></a>
        <ul class="dropdown-menu">

          <li class="{{ request()->is('bank') ? 'active' : '' }}"><a href="{{ url('/bank') }}"><i class="fas fa-money-check-alt"></i> <span>Data Problem Instansi</span></a></li>

          <li class="{{ request()->is('bidangpekerjaan') ? 'active' : '' }}"><a href="{{ url('/bidangpekerjaan') }}"><i class="fas fa-users-cog"></i><span>Data Problem PIC/Supervisor</span></a></li>

          <li class="{{ request()->is('divisi') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/divisi') }}"><i class="fas fa-sitemap" aria-hidden="true"></i> <span>Data Problem Karyawan</span></a></li>
                   
          <li class="{{ request()->is('jabatan') ? 'active' : '' }}"><a href="{{ url('/jabatan') }}"><i class="fas fa-user-tag"></i> <span>Data Problem User/Mitra</span></a></li>
          
          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-users"></i> <span>Direct Transaction Information</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-envelope-open-text"></i> <span>Format Adm. & Dok</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-users"></i> <span>GCP Adm. & Sdm</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Informasi Data PIC </span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Informasi Data SDM </span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Informasi Masuk </span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Informasi Keluar </span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i><span>Follow Up Disposisi</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Pengelolaan Katalog</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-info-circle" aria-hidden="true"></i> <span>Penyelesain Problem Solving</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-boxes"></i> <span>Inventaris</span></a></li>

           <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-chart-line"></i> <span>Kinerja Karyawan</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-truck-moving"></i> <span>Mutasi Inventaris</span></a></li>

           <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-user-tie"></i><span>Notulen Rapat</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-sitemap" aria-hidden="true"></i> <span>Regulasi Bid. Div</span></a></li>

           <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-address-book"></i> <span>Rekap Kinerja Karyawan</span></a></li>

          <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-users-cog"></i> <span>SOP Divisi</span></a></li>

           <li class="{{ request()->is('karyawan') ? 'active' : '' }}"><a href="{{ url('/karyawan') }}"><i class="fas fa-envelope-open-text"></i> <span>SPPD</span></a></li>
       </ul>
    </li>
   
  </ul>
</aside>
