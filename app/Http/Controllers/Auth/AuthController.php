<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        session()->forget('noktp');
        session()->forget('name');
        session()->forget('email');
        session()->forget('divisi');
        session()->forget('jabatan');
        session()->forget('level');
        session()->forget('login');
        return redirect('login');
    }

    public function postLogin(Request $request)
    {

        $data = User::where('email', $request->email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($request->password,$data->password)){
                $request->session()->put('noktp',$data->noktp);
                $request->session()->put('name',$data->name);
                $request->session()->put('email',$data->email);
                $request->session()->put('divisi',$data->divisi);
                $request->session()->put('jabatan',$data->jabatan);
                $request->session()->put('level',$data->level);
                $request->session()->put('login',TRUE);
                return redirect('menu');
            }else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }

        // $request->session()->put('data', $request->input());
        // $request->session()->flash('status', 'Berhasil Login');
            // DB::table('users')->where(['email', 'password'], [$request->email, bcrypt($request->password)])->get() ;
        // return redirect('menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
