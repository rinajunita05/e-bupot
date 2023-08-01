<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\pengaturan;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Auth;
class PengController extends Controller
{
    public function pengaturan()
    {
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id);
        // dd($pengaturan->json());
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'nik' => auth()->user()->nik,
            'pengaturan' => $pengaturan->json()
        ];
        return view('pengaturan',$data);
    } 
    
    public function ganti_status_peng($id){
        $pengaturan= Pengaturan::find($id);
        $pengaturan->status = $pengaturan->status ? 0 : 1;
        $pengaturan->save(); 
        return redirect("pengaturan")->withSuccess('sukses');   
    }

    public function proses_tambah_pengaturan(Request $request){
        $data = [
            'bertindak_sebagai' => $request->bertindak_sebagai,
            'identitas' => $request->identitas,
            'npwp' => ($request->identitas == 'npwp') ? $request->no_identitas :  $request->nik,
            'nama' =>  $request->nama,
            'status' => $request->status ?? 0,
            'user_id' => auth()->user()->id  
        ];
        // dd($data);
        $response = Http::post('http://localhost:8000/api/pengaturan/'.auth()->user()->id,$data);
        return redirect("pengaturan")->withSuccess('sukses');
    } 

    public function daftarpenandatangan()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'nik' => auth()->user()->nik,
            'daftarpenandatangan' => Pengaturan::get()
        ];
        // dd($data);
        return view('pengaturan',$data);
    } 
    
    public function authkey()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('authkey',$data);
    } 

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('npwp',$request->email)->select('email')->first();
        $credentials = [
            'email' => $user->email,
            'password' => $request->password
        ];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
        //    dd(auth()->user()->email);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('pengaturan',$data);
            // return redirect()->intended('pengaturan')
            //             ->withSuccess('Signed in');
                        
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'npwp' => 'required',
            'nik'=> 'required'
        ]);
        //    dd($request->all());
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'npwp' => $data['npwp'],
        'nik' => $data['nik']
      ]);
    }    
    public function form(){
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('index',$data);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect('login');
    // }
}