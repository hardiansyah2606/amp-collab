<?php

namespace App\Http\Controllers;

use App\Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MasterController extends Controller
{
 
    public function index()
    {

        // return view('app.master.index');
    }

 //Divisi Start   
    public function divisiIndex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu divisi dari menu master',
            'created_at' => now()
         ]);

        $div = DB::table('mdivisi')->get();
        return view('app.master.divisi.index', compact('div'));
    }

    public function divisistore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data divisi baru dengan nama '.$request->divisi.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mdivisi')->insert([
        'divisi' => $request->divisi ]);
         return redirect('divisi')->with('message', 'berhasil menyimpan');
      
    }

    public function update(Request $request, Master $master)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data divisi dengan menjadi '.$request->divisi.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mdivisi')->where('iddivisi', $request->iddivisi)->update([
        'divisi' => $request->divisi
        
    ]);

       return redirect('divisi')->with('updatediv', 'berhasil mengupdate');
    }

    public function delete($master)
    {

     DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data divisi dengan nama '.$request->divisi.' dari menu master',
        'created_at' => now()
     ]);
      
      DB::table('mdivisi')->where('iddivisi', $master)->delete();
      return redirect('divisi')->with('delete', 'berhasil menghapus');
    }
 //Divisi End

 //Provinsi Start   
    public function provIndex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu provinsi dari menu master',
            'created_at' => now()
         ]);
        $prov = DB::table('mprovinsi')->get();
        return view('app.master.provinsi.index', compact('prov'));
    }


    public function provinsistore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data provinsi baru dengan nama '.$request->provinsi.' dari menu master',
            'created_at' => now()
         ]);
         DB::table('mprovinsi')->insert([
        'provinsi' => $request->provinsi ]);
         return redirect('provinsi')->with('message', 'berhasil menyimpan');
      
    }


    public function updateprov(Request $request, Master $master)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data provinsi dengan menjadi '.$request->provinsi.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mprovinsi')->where('idprovinsi', $request->idprovinsi)->update([
        'provinsi' => $request->provinsi
        
    ]);

       return redirect('provinsi')->with('updatediv', 'berhasil mengupdate');
    }

    public function deleteprov($master)
    { 
       DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data provinsi '.$request->provinsi.' dari menu master',
        'created_at' => now()
     ]);
      DB::table('mprovinsi')->where('idprovinsi', $master)->delete();
      return redirect('provinsi')->with('delete', 'berhasil menghapus');
    }
 //Provinsi End   

 //Jabatan Start   
    public function jabIndex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu jabatan dari menu master',
            'created_at' => now()
         ]);
        $jab = DB::table('mjabatan')->get();
        return view('app.master.jabatan.index', compact('jab'));
    }

    public function jabatanstore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data jabatan baru dengan nama '.$request->jabatan.' dari menu master',
            'created_at' => now()
         ]);
         DB::table('mjabatan')->insert([
        'jabatan' => $request->jabatan,

    ]);
         return redirect('jabatan')->with('message', 'berhasil menyimpan');  
    }

    public function updatejab(Request $request, Master $master)
    {
          DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data jabatan dengan menjadi '.$request->jabatan.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mjabatan')->where('idjabatan', $request->idjabatan)->update([
        'jabatan' => $request->jabatan
        
    ]);

       return redirect('jabatan')->with('updatediv', 'berhasil mengupdate');
    }

    public function deletejab($master)
    {
      DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus jabatan '.$request->jabatan.' dari menu master',
        'created_at' => now()
     ]); 
      DB::table('mjabatan')->where('idjabatan', $master)->delete();
      return redirect('jabatan')->with('delete', 'berhasil menghapus');
    }
 //Jabatan End   
    
 //Mitra Start   
    public function mitIndex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu mitra dari menu master',
            'created_at' => now()
         ]);

        $mit = DB::table('mmitra')->get();
        return view('app.master.mitra.index', compact('mit'));
    } 


    public function mitrastore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data mitra baru dengan nama '.$request->Mitra.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mmitra')->insert([
        'Mitra' => $request->Mitra,
        'Alamat' => $request->Alamat,
        'telp' => $request->telp,
        'fax' => $request->fax,
        'kota' => $request->kota, 
        'namaKaCabang' => $request->namaKaCabang, 
        'email' => $request->email, 
        'kategoriMitra' => $request->kategoriMitra  
    ]);
         return redirect('mitra')->with('message', 'berhasil menyimpan');  
    }

    public function updatemit(Request $request, Master $master)
    {
       DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data mitra dengan menjadi '.$request->Mitra.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mmitra')->where('idmitra', $request->idmitra)->update([
        'Mitra' => $request->Mitra,
        'Alamat' => $request->Alamat,
        'telp' => $request->telp,
        'fax' => $request->fax,
        'kota' => $request->kota, 
        'namaKaCabang' => $request->namaKaCabang, 
        'email' => $request->email, 
        'kategoriMitra' => $request->kategoriMitra  
        
    ]);

       return redirect('mitra')->with('updatediv', 'berhasil mengupdate');
    }
    
    public function deletemit($master)
    {
       DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data mitra dengan nama '.$request->Mitra.' dari menu master',
        'created_at' => now()
     ]);
      DB::table('mmitra')->where('idmitra', $master)->delete();
      return redirect('mitra')->with('delete', 'berhasil menghapus');
    }
 //Mitra End   
    
 //Bidang Pekerjaan Start   
    public function bidangpekerjaanindex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu bidang pekerjaan dari menu master',
            'created_at' => now()
         ]);

        $value = DB::table('mbidangpekerjaan')->get();
        return view('app.master.bidangpekerjaan.index', compact('value'));
    } 


    public function bidangpekerjaanstore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data bidang pekerjaan baru dengan nama '.$request->bidangpekerjaan.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mbidangpekerjaan')->insert([
        'bidangpekerjaan' => $request->bidangpekerjaan
    ]);
         return redirect('bidangpekerjaan')->with('message', 'berhasil menyimpan');  
    }

    public function bidangpekerjaanupdate(Request $request, Master $master)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data bidang pekerjaan dengan menjadi '.$request->bidangpekerjaan.' dari menu master',
            'created_at' => now()
         ]);
   

         DB::table('mbidangpekerjaan')->where('idbidangpekerjaan', $request->idbidangpekerjaan)->update([
        'bidangpekerjaan' => $request->bidangpekerjaan
        ]);

       return redirect('bidangpekerjaan')->with('updatediv', 'berhasil mengupdate');
    }
    
    public function bidangpekerjaandelete($master)
    {
      DB::table('mbidangpekerjaan')->where('idbidangpekerjaan', $master)->delete();
      return redirect('bidangpekerjaan')->with('delete', 'berhasil menghapus');
    }
 //Bidang Pekerjaan End   
    
 //Bank Start   
    public function bankindex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu bank dari menu master',
            'created_at' => now()
         ]);

        $value = DB::table('mbank')->get();
        return view('app.master.bank.index', compact('value'));
    } 


    public function bankstore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data bank baru dengan nama '.$request->bank.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mbank')->insert([
        'bank' => $request->bank,
        'alamat' => $request->alamat  
    ]);
         return redirect('bank')->with('message', 'berhasil menyimpan');  
    }

    public function bankupdate(Request $request, Master $master)
    {
          DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data bank dengan menjadi '.$request->bank.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mbank')->where('idBank', $request->idBank)->update([
        'bank' => $request->bank,
        'alamat' => $request->alamat  
    ]);

       return redirect('bank')->with('updatediv', 'berhasil mengupdate');
    }
    
    public function bankdelete($master)
    {
       DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data bank dengan nama '.$request->bank.' dari menu master',
        'created_at' => now()
     ]);
      
      DB::table('mbank')->where('idBank', $master)->delete();
      return back()->with('delete', 'berhasil menghapus');
    }
 //Bank End   
    
 //Lokasi Kerja Start   
    public function lokasikerjaindex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses lokasi kerja divisi dari menu master',
            'created_at' => now()
         ]);

      $value = DB::table('mlokasikerja')
              ->join('mmitra', 'mlokasikerja.idMitra', '=', 'mmitra.idMitra')
              ->select('mlokasikerja.*', 'mmitra.Mitra')
              ->get();
      $mitras = DB::table('mmitra')->get();
        return view('app.master.lokasikerja.index', compact('value','mitras'));
    } 


    public function lokasikerjastore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data lokasi kerja baru dengan nama '.$request->lokasikerja.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mlokasikerja')->insert([
        'idMitra' => $request->idMit,
        'lokasikerja' => $request->lokasikerja  
    ]);
         return redirect('lokasikerja')->with('message', 'berhasil menyimpan');  
    }

    public function lokasikerjaupdate(Request $request, Master $master)
    {
          DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data lokasi kerja menjadi '.$request->lokasikerja.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mlokasikerja')->where('idmitra', $request->idmitra)->update([
        'lokasikerja' => $request->lokasikerja,
        'idmitra' => $request->idmitra  
    ]);

       return redirect('lokasikerja')->with('updatediv', 'berhasil mengupdate');
    }
    
    public function lokasikerjadelete($master)
    {
      DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data lokasi kerja  '.$request->lokasikerja.' dari menu master',
        'created_at' => now()
     ]); 
      
      DB::table('mlokasikerja')->where('idlokasikerja', $master)->delete();
      return redirect('lokasikerja')->with('delete', 'berhasil menghapus');
    }
 //Lokasi Kerja End   
    
 //Vendor Start   
    public function vendorindex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu vendor dari menu master',
            'created_at' => now()
         ]);

        $value = DB::table('mvendor')->get();
        return view('app.master.vendor.index', compact('value'));
    } 


    public function vendorstore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data vendor baru dengan nama '.$request->vendor.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mvendor')->insert([
        'vendor' => $request->vendor,
        'alamat' => $request->alamat,
        'kota' => $request->kota,  
        'email' => $request->email 
    ]);
         return redirect('vendor')->with('message', 'berhasil menyimpan');  
    }

    public function vendorupdate(Request $request, Master $master)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data vendor dengan menjadi '.$request->vendor.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('mvendor')->where('idmitra', $request->idmitra)->update([
        'vendor' => $request->vendor,
        'alamat' => $request->alamat,
        'kota' => $request->kota,  
        'email' => $request->email 
    ]);

       return redirect('vendor')->with('updatediv', 'berhasil mengupdate');
    }

    public function vendordelete($master)
    {
       DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data vendor dengan nama '.$request->vendor.' dari menu master',
        'created_at' => now()
     ]);
      DB::table('mvendor')->where('idvendor', $master)->delete();
      return redirect('vendor')->with('delete', 'berhasil menghapus');
    }
 //Vendor End 
    
 //Karyawan Start   
    public function karyawanindex()
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' Mengakses menu karyawan dari menu master',
            'created_at' => now()
         ]);

        $value = DB::table('karyawan')->get();
        $banks = DB::table('mbank')->get();
        $mitras = DB::table('mmitra')->get();
        $lokasikerjas = DB::table('mlokasikerja')->get();
        $divisis = DB::table('mdivisi')->get();
        $jabatans = DB::table('mjabatan')->get();
        $vendors = DB::table('mvendor')->get();
        return view('app.master.karyawan.index', compact('value', 'banks', 'mitras', 'lokasikerjas', 'divisis', 'jabatans', 'vendors'));
    } 


    public function karyawanstore(Request $request)
    {
         DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' menambahkan data karyawan baru dengan nama '.$request->nama.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('users')->insert([
            'noktp' => $request->noktp,
            'name' => $request->nama,
            'email' => $request->email,  
            'divisi' => $request->divisi, 
            'jabatan' => $request->jabatan,
            'level' => 0,
            'password' => bcrypt('12345678'),
            'remember_token' => str_random(60),
            'created_at' => now()
         ]);

         DB::table('karyawan')->insert([
        'noktp' => $request->noktp,
        'namaKaryawan' => $request->nama,
        'agama' => $request->agama,
        'jantina' => $request->jk,
        'idVendor' => $request->vendor,
        'idMitra' => $request->mitra, 
        'idLok' => $request->loker, 
        'idDivisi' => $request->divisi, 
        'idJab' => $request->jabatan, 
        'pendidikan' => $request->pendidikan,  
        'noKK' => $request->kk,  
        'alamatSesuaiKTP' => $request->alkt,  
        'AlamatDomisili' => $request->aldo,  
        'statRumah' => $request->statrumah,  
        'npwp' => $request->npwp,  
        'statusNikah' => $request->status,  
        'tempatLahir' => $request->tplh,  
        'tanggalLahir' => $request->tglah,  
        'noHP' => $request->nohp,  
        'email' => $request->email,  
        'idBank' => $request->bank,  
        'noRekening' => $request->norek,  
        'PemilikRekening' => $request->perek,  
        'namaIbuKandung' => $request->nmibu,  
        'noktpibukandung' => $request->noktpibu,  
        'tmt' => $request->tmt,  
        'tkt' => $request->tkt,  
        'keterangan' => $request->keterangan,  
        'statusKaryawan' => $request->statuskaryawan,  
        'referensi' => $request->referensi,  
        'direkrutOleh' => $request->direkrutoleh,  
        'golonganDarah' => $request->goldarah,  
        'tinggiBadan' => $request->tinggibadan,  
        'beratBadan' => $request->beratbadan, 
    ]);
         return redirect('karyawan')->with('message', 'berhasil menyimpan');  
    }

    public function karyawanupdate(Request $request, Master $master)
    {
          DB::table('log')->insert([
            'noktp' => session('noktp'),
            'nm_log' => session('name').' mengubah data karyawan dengan menjadi '.$request->nama.' dari menu master',
            'created_at' => now()
         ]);

         DB::table('karyawan')->where('idKaryawan', $request->idkaryawan)->update([
        'noktp' => $request->noktp,
        'namaKaryawan' => $request->nama,
        'agama' => $request->agama,
        'jantina' => $request->jk,
        'idVendor' => $request->vendor,
        'idMitra' => $request->mitra, 
        'idLok' => $request->loker, 
        'idDivisi' => $request->divisi, 
        'idJab' => $request->jabatan, 
        'pendidikan' => $request->pendidikan,  
        'noKK' => $request->kk,  
        'alamatSesuaiKTP' => $request->alkt,  
        'AlamatDomisili' => $request->aldo,  
        'statRumah' => $request->statrumah,  
        'npwp' => $request->npwp,  
        'statusNikah' => $request->status,  
        'tempatLahir' => $request->tplh,  
        'tanggalLahir' => $request->tglah,  
        'noHP' => $request->nohp,  
        'email' => $request->email,  
        'idBank' => $request->bank,  
        'noRekening' => $request->norek,  
        'PemilikRekening' => $request->perek,  
        'namaIbuKandung' => $request->nmibu,  
        'noktpibukandung' => $request->noktpibu,  
        'tmt' => $request->tmt,  
        'tkt' => $request->tkt,  
        'keterangan' => $request->keterangan,  
        'statusKaryawan' => $request->statuskaryawan,  
        'referensi' => $request->referensi,  
        'direkrutOleh' => $request->direkrutoleh,  
        'golonganDarah' => $request->goldarah,  
        'tinggiBadan' => $request->tinggibadan,  
        'beratBadan' => $request->beratbadan,  
        
    ]);

       return redirect('karyawan')->with('updatediv', 'berhasil mengupdate');
    }

    public function karyawandelete($master)
    {
     
      DB::table('log')->insert([
        'noktp' => session('noktp'),
        'nm_log' => session('name').' menghapus data karyawan  dengan nama '.$request->nama.' dari menu master',
        'created_at' => now()
     ]); 
      DB::table('karyawan')->where('idKaryawan', $master)->delete();
      return redirect('karyawan')->with('delete', 'berhasil menghapus');
    }
 //Karyawan End  





     


    
    

    
    
}



