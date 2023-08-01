<?php
namespace App\Http\Controllers;

// use App\Models\PphSendiri;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Models\PphSendiri;
use App\Models\PphPasal;
use App\Models\PphNon;
use App\Models\DokumenPphPasal;
use App\Models\DokumenPphNon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PPController extends Controller
{
    public function pajakpenghasilan()
    {
        $dokumen_pph= Http::get('http://localhost:8000/api/daftarpphsendiri/'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarpphsendiri' => $dokumen_pph->json() ?? []
        ];
        return view('pajakpenghasilan',$data);
    }  
    
    public function daftarbuktisetorsendiri()
    {
        $dokumen_pph= Http::get('http://localhost:8000/api/daftarpphsendiri/'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarpphsendiri' => $dokumen_pph->json() ?? []
        ];
        // dd($data);
        return view('daftarbuktisetorsendiri',$data);
    } 

    public function rekampphsendiri()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id,

        ];  
        return view('rekampphsendiri',$data);
    } 

    public function proses_tambah_pphsendiri(Request $request){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/tambahpphsendiri/'.$request->user_id,$request->all());
            // dd($response->json());
            return redirect("daftarbuktisetorsendiri")->withSuccess('sukses');
        }
        public function editpphsendiri($id)
        {
            $response = Http::get('http://localhost:8000/api/get_pajakpenghasilan/'.$id);
            $data = [
                'id' => $id,
                'npwp' => auth()->user()->npwp,
                'nama' => auth()->user()->name,
                'pphsendiri' => $response->json(),
            ];
            return view('editpphsendiri',$data);
        } 
        public function proses_edit_pphsendiri(Request $request,$id){
            // dd($request->all());
            
                $response = Http::post('http://localhost:8000/api/proses_edit_pphsendiri/'.$id,$request->all());
                // dd($response->json());
                return redirect("daftarbuktisetorsendiri")->withSuccess('sukses');
            }
        
    public function hapus_pphsendiri($id){
        $response = Http::get('http://localhost:8000/api/pphsendiridelete/'.$id);
        
        return redirect("daftarbuktisetorsendiri")->withSuccess('berhasil dihapus');
    } 



    //bupot pasal----------------------------------------------------
    public function daftarbuktipotongBPPs()
    {
        // $detailimportdata= Http::get('http://localhost:8000/api/get_detail_importdata/'.auth()->user()->id);
        $dokumen_pph= Http::get('http://localhost:8000/api/pphpasal/'.auth()->user()->id);        
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarbupotpasal' => $dokumen_pph->json() ?? [], 
            // 'import_detail' => $detailimportdata->json() ?? []

        ];
        return view('daftarbuktipotongBPPs',$data);
    } 

    public function rekambp1()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id,
        ];
        return view('rekambp1',$data);
    } 

    public function proses_tambah_pphpasal(Request $request){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/tambahpphpasal/',$request->all());
            // dd($response->json());
            return redirect("daftarbuktipotongBPPs")->withSuccess('sukses');
    }

    public function daftardokumen()
    {
        $dokumen_pph= Http::get('http://localhost:8000/api/dokumen/'.auth()->user()->id);
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id.'?status=1');
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id,
            'pengaturan' => $pengaturan->json(),
            'dokumen' => $dokumen_pph->json()
        ];
        // dd($data);
        return view('rekambp1',$data);
    } 

    public function hapus_dokumen($id){
        $response = Http::get('http://localhost:8000/api/dokumendelete/'.$id);
        return redirect("rekambp1")->withSuccess('berhasil dihapus');
    } 

    public function hapus_pphpasal($id){
        $response = Http::get('http://localhost:8000/api/hapus_pphpasal/'.$id);
        return redirect("daftarbuktipotongBPPs")->withSuccess('berhasil dihapus');
    } 

    public function editpphpasal($id)
    {
        $response = Http::get('http://localhost:8000/api/get_pajakpenghasilan/'.$id);
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id);
        $data = [
            'id' => $id,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pphpasal' => $response->json(),
            'pengaturan' => $pengaturan->json(),
        ];
        return view('editpphpasal',$data);
    } 
    public function proses_edit_pphpasal(Request $request,$id){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/proses_edit_pphpasal/'.$id,$request->all());
            // dd($response->json());
            return redirect("daftarbuktipotongBPPS")->withSuccess('sukses');
        }
    
    //bupot non residen-----------------------------------

    public function suratbupotnon($id)
    {
        $pphnon= Http::get('http://localhost:8000/api/get_pajakpenghasilan/'.$id);
        $data = [
            'pphnon' => $pphnon->json(),
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];

        // dd($data['pphnon']);
        return view('suratbupotnon',$data);
    } 

    public function editpphnon($id)
    {
        $response = Http::get('http://localhost:8000/api/get_pajakpenghasilan/'.$id);
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id);
        $data = [
            'id' => $id,
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pphnon' => $response->json(),
            'pengaturan' => $pengaturan->json(),
        ];
        return view('editpphnon',$data);
    } 
    public function proses_edit_pphnon(Request $request,$id){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/proses_edit_pphnon/'.$id,$request->all());
            // dd($response->json());
            return redirect("daftarbupotnon")->withSuccess('sukses');
        }

    public function daftarbupotnon()
    {
        $dokumen_pphnon= Http::get('http://localhost:8000/api/pphnon/'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'daftarbupotnon' => $dokumen_pphnon->json() ?? []

        ];
        return view('daftarbupotnon',$data);
    } 
    
    public function rekambupotnon()
    {
        $dokumen_pphnon= Http::get('http://localhost:8000/api/dokumen_pphnon/'.auth()->user()->id);
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id,
            'pengaturan' => $pengaturan->json(),
            'dokumen_non' => $dokumen_pphnon->json()
        ];
        return view('rekambupotnon',$data);
    } 

       
    public function proses_tambah_pphnon(Request $request){
        // dd($request->all());
        
            $response = Http::post('http://localhost:8000/api/tambahpphnon',$request->all());
            dd($response);
            return redirect("daftarbupotnon")->withSuccess('sukses');
    }
    
    public function daftar_dokumennon()
    {
        $dokumen_pphnon= Http::get('http://localhost:8000/api/dokumen_pphnon/'.auth()->user()->id);
        $pengaturan= Http::get('http://localhost:8000/api/pengaturan/'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json(),
            'dokumen_non' => $dokumen_pphnon->json()
        ];
        // dd($data);
        return view('rekambupotnon',$data);
    } 

    public function hapus_pphnon($id){
        $response = Http::get('http://localhost:8000/api/hapus_pphnon/'.$id);
        
        return redirect("daftarbupotnon")->withSuccess('berhasil dihapus');
    } 

    //impor pph---------------------------------------
    public function impordata()
    {
        $import_data= Http::get('http://localhost:8000/api/import_data'.auth()->user()->id);
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'import_data' => $import_data->json() ?? []
        ];
        return view('impordata',$data);
    } 

    public function hapus_importdata($id){
        $response = Http::get('http://localhost:8000/api/hapus_importdata/'.$id);
        
        return redirect("impordata")->withSuccess('berhasil dihapus');
    } 

    //posting-----------------------------------------
    public function posting()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'user_id' => auth()->user()->id

        ];
        return view('posting',$data);
    } 

    public function suratbupotsendiri()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('suratbupotsendiri',$data);
    } 
    
    public function suratbupotpasal($id)
    {
        $pphpasal= Http::get('http://localhost:8000/api/get_pajakpenghasilan/'.$id);
        $data = [
            'pphpasal' => $pphpasal->json(),
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];

        // dd($data['pphpasal']);
        return view('suratbupotpasal',$data);
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

    public function getDownload(){

        $file = public_path()."/formulir.xlsx";
        return response()->download($file, 'formulir.xlsx');
    }



      
    
}