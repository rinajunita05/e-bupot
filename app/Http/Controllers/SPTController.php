<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\RekamSPT;
use Illuminate\Support\Facades\Auth;

class SPTController extends Controller
{


    public function tambah()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('tambah', $data);
    }
    // create data
    public function proses_tambah_rekam_buktisetor(Request $request)
    {
        // dd($request->all());

        $response = Http::post('http://localhost:8000/api/tambah_buktisetor', $request->all());
        // dd($response->json());
        return redirect("sptmasa")->withSuccess('sukses');
    }

    public function sptmasa(Request $request)
    {
        $sptmasa = Http::get('http://localhost:8000/api/get_sptmasa/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        //    dd('http://localhost:8000/api/get_sptmasa/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $data = [
            'daftarbuktisetor' => $sptmasa->json()['pajak_penghasilan'],
            'sptmasa' => $sptmasa->json()['sptmasa'],
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'nama' => auth()->user()->name,
        ];
        // dd ($data);
        return view('sptmasa', $data);
    }
    public function dashboard(Request $request)
    {
        if (Auth::check()) {

            $sptmasa = Http::get('http://localhost:8000/api/get_dashboard/' . auth()->user()->id);
            //    dd('http://localhost:8000/api/get_sptmasa/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
            $data = [
                'sptmasa' => $sptmasa->json()['sptmasa'],
                'nama' => auth()->user()->name,
            ];
            // dd ($data);
            return view('dashboard', $data);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function penyiapanspt(Request $request)
    {
        $sptmasa = Http::get('http://localhost:8000/api/get_penyiapansptmasa/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $data = [
            'daftarbuktisetor' => $sptmasa->json(),
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'nama' => auth()->user()->name,
        ];
        // dd ($data);
        return view('penyiapanspt', $data);
    }

    public function lengkapispt(Request $request, $id)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $sptmasa = Http::get('http://localhost:8000/api/get_sptmasa/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $data = [
            'id' => $id,
            'sptmasa' => $sptmasa->json()['sptmasa'],
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json()

        ];
        // dd ($data);
        return view('draft2', $data);
    }

    public function kirimspt(Request $request)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $sptmasa = Http::get('http://localhost:8000/api/get_lengkapispt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $dopp = Http::get('http://localhost:8000/api/get_dopp/' . $request->id);
        $doss = Http::get('http://localhost:8000/api/get_doss/' . $request->id);
        $data = [
            'id' => $request->id,
            'daftarbuktisetor' => $sptmasa->json(),
            'dopp' => $dopp->json(),
            'doss' => $doss->json(),
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json()

        ];
        // dd ($data); 
        return view('kirimspt', $data);
    }

    public function indukspt(Request $request)
    {
        $kode28 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=28');
        $kode22 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=22');
        $kode23 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=23');
        $kode24 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=24');
        $data = [
            'id' => $request->id,
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'kode28' => $kode28->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode22' => $kode22->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode23' => $kode23->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode24' => $kode24->json()[0]['total_jumlah_setor'] ?? '0,00'

        ];
        // dd($data, $kode28->json());
        return view('indukspt', $data);
    }

    public function surat_induk(Request $request)
    {
        $kode28 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=28');
        $kode22 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=22');
        $kode23 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=23');
        $kode24 = Http::get('http://localhost:8000/api/get_indukspt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak . '&kode_objek_pajak=24');
        $penandatangan = Http::get('http://localhost:8000/api/get_penandatangan' . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak );
        $data = [
            'id' => $request->id,
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'kode28' => $kode28->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode22' => $kode22->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode23' => $kode23->json()[0]['total_jumlah_setor'] ?? '0,00',
            'kode24' => $kode24->json()[0]['total_jumlah_setor'] ?? '0,00',
            'penandatangan' => $penandatangan->json()[0]['pengaturan']

        ];
        // dd($data, $kode28->json());
        return view('suratinduk', $data);
    }

    public function uploadspt(Request $request)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $data = [
            'id' => $request->id,
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json(),
            'passphrase' => $this->randomStringLetterNumber12Char()
        ];
        // dd($data);
        return view('uploadspt', $data);
    }

    public function update_id_billing(Request $request, $sptmasa_id)
    {
        $sptmasa = Http::get('http://localhost:8000/api/update_id_billing/' . $sptmasa_id);
        // dd($pengaturan->json());

        return redirect("sptmasa?tahun_pajak=$request->tahun_pajak&masa_pajak=$request->masa_pajak");
    }
    public function surat_billing($sptmasa_id)
    {
        $sptmasa = Http::get('http://localhost:8000/api/surat_billing/' . $sptmasa_id);
        // dd($pengaturan->json());
        $data = [
            'sptmasa' => $sptmasa->json(),
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'terbilang' => $this->convert_currency_to_words($sptmasa->json()['jumlah_setor'])
        ];
        // dd($data['sptmasa']);
        return view('suratbilling', $data);
    }
    public function convert_to_words($number)
    {
        $units = ['', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'];
        if ($number < 12) {
            return $units[$number];
        } elseif ($number < 20) {
            return $units[$number % 10] . ' belas';
        } elseif ($number < 100) {
            return $units[floor($number / 10)] . ' puluh ' . $units[$number % 10];
        } elseif ($number < 200) {
            return 'seratus ' . $this->convert_to_words($number % 100);
        } elseif ($number < 1000) {
            return $units[floor($number / 100)] . ' ratus ' . $this->convert_to_words($number % 100);
        } elseif ($number < 2000) {
            return 'seribu ' . $this->convert_to_words($number % 1000);
        } elseif ($number < 1000000) {
            return $this->convert_to_words(floor($number / 1000)) . ' ribu ' . $this->convert_to_words($number % 1000);
        } elseif ($number < 2000000) {
            return 'satu juta ' . $this->convert_to_words($number % 1000000);
        } elseif ($number < 1000000000) {
            return $this->convert_to_words(floor($number / 1000000)) . ' juta ' . $this->convert_to_words($number % 1000000);
        } elseif ($number < 1000000000000) {
            return $this->convert_to_words(floor($number / 1000000000)) . ' miliar ' . $this->convert_to_words($number % 1000000000);
        } else {
            return 'Angka terlalu besar';
        }
    }

    public function convert_currency_to_words($currency)
    {
        $number = (int)str_replace(',', '', $currency);
        return $this->convert_to_words($number) . ' rupiah';
    }
    public function surat_bpe($sptmasa_id)
    {
        $sptmasa = Http::get('http://localhost:8000/api/surat_bpe/' . $sptmasa_id);
        // dd($pengaturan->json());
        $data = [
            'sptmasa' => $sptmasa->json(),
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
        ];

        return view('suratbpe', $data);
    }


    public function dbp(Request $request)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $data = [
            'id' => $request->id,
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json(),
            'passphrase' => $this->randomStringLetterNumber12Char()
        ];
        // dd($data);
        return view('dbp', $data);
    }

    public function randomStringLetterNumber12Char($length = 12)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomStringLetterNumber12Char = '';
        for ($i = 0; $i < $length; $i++) {
            $randomStringLetterNumber12Char .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomStringLetterNumber12Char;
    }


    public function dopp(Request $request)
    {
        $dopp = Http::get('http://localhost:8000/api/get_dopp/' . $request->id);
        $data = [
            'id' => $request->id,
            'dopp' => $dopp->json(),
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,

        ];
        // dd ($data);
        return view('dopp', $data);
    }

    public function dbp1(Request $request)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $sptmasa = Http::get('http://localhost:8000/api/get_lengkapispt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $data = [
            'daftarbuktisetor' => $sptmasa->json(),
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json()

        ];
        // dd ($data);
        return view('dbp1', $data);
    }

    public function hapus_buktisetor($id)
    {
        $response = Http::get('http://localhost:8000/api/hapus_buktisetor/' . $id);

        return redirect("sptmasa")->withSuccess('berhasil dihapus');
    }

    public function simpan_doss_dopp(Request $request)
    {
        // dd($request->all());
        $data_penandatangan = [
            'pengaturan_id' => $request->pengaturan_id,
            'tahun_pajak' => $request->tahun_pajak,
            'masa_pajak' => $request->masa_pajak
        ];
        // dd($data_penandatangan);
        $response = Http::post('http://localhost:8000/api/simpan_doss_dopp', $request->all());
        $response2 = Http::post('http://localhost:8000/api/simpan_penandatangan', $data_penandatangan);
        return redirect("kirimspt?id=$request->pajak_penghasilan_id&masa_pajak=$request->masa_pajak&tahun_pajak=$request->tahun_pajak")->withSuccess('sukses');
    }


    public function previewspt(Request $request)
    {
        $pengaturan = Http::get('http://localhost:8000/api/pengaturan/' . auth()->user()->id . '?status=1');
        $sptmasa = Http::get('http://localhost:8000/api/get_lengkapispt/' . auth()->user()->id . '?tahun_pajak=' . $request->tahun_pajak . '&masa_pajak=' . $request->masa_pajak);
        $dopp = Http::get('http://localhost:8000/api/get_dopp/' . $request->id);
        $doss = Http::get('http://localhost:8000/api/get_doss/' . $request->id);
        $data = [
            'id' => $request->id,
            'daftarbuktisetor' => $sptmasa->json(),
            'dopp' => $dopp->json(),
            'doss' => $doss->json(),
            'tahun_pajak' => $request->tahun_pajak ?? '',
            'masa_pajak' => $request->masa_pajak ?? '',
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name,
            'pengaturan' => $pengaturan->json()

        ];
        // dd ($data);
        return view('previewspt', $data);
    }

    public function tambah_spt(Request $request)
    {
        // dd($request->all());

        $response = Http::post('http://localhost:8000/api/tambah_spt/' . auth()->user()->id, $request->all());
        // dd($response->json());
        return redirect("sptmasa?tahun_pajak=$request->tahun_pajak&masa_pajak=$request->masa_pajak")->withSuccess('sukses');
    }
}
