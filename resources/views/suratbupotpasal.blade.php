<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Surat Bukti Potong Pasal 4(2), 15, 21, 22</title>
    <style>
        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 10px;
            margin: 10mm auto;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 5px;
            border: 2px white solid;
            height: 297mm;
            outline: 2cm white solid;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="subpage">
            <div class="row" style="border-bottom: 2px solid black;">
                <div class="col">
                    <img src="{{ asset('logo.png') }}" width="160px" style="margin-left: auto">
                </div>
                <div class="col-6" style="border-left: 2px solid black; border-right:2px solid black; text-align: center">
                    <b style="font-size: 12px; font-weight: bold">BUKTI PEMOTONGAN/PEMUNGUTAN</b>
                    <p style=" font-size: 10px; font-weight: bold; border-bottom: 2px solid black">
                        PPh PASAL 4 AYAT (2), PASAL 15, PASAL 22 DAN PASAL 23</p>

                    <div class="row">
                        <div class="col-1" style="font-weight:bold; font-size: 10px">H.1</div>
                        <div class="col-1" style="font-weight:bold; font-size: 10px">Nomor</div>
                        <div class="col-1" style="padding-left:30px; font-weight:bold; font-size: 10px">:</div>
                        <div class="col-6" style="padding-left:10px;">
                            <table>
                                <tr style="text-align:center">
                                    <?php
                                    $Nomor = date('Ymd', time()) . str_pad(((int)$pphpasal['id'] ?? 0), 3, '0', STR_PAD_LEFT);
                                    ?>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold">{{ $Nomor[0] }}</td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[1] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[2] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[3] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[4] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[5] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[6] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[7] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[8] }}</small></td>
                                    <td style="border:1px solid black; width:20px; font-size: 10px; font-weight:bold"><small>{{ $Nomor[9] }}</small></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-1" style="font-weight:bold; font-size: 10px">H.2</div>
                            <div class="col-6" style="border:1px solid black; width: 15px; margin-left: 14px; font-size: 10px; text-align: center">X</div>
                            <div class="col-4" style="font-weight:bold; font-size: 10px">Pembetulan ke-</div>
                            <div class="col-1" style="border-bottom:1px solid black; font-size: 10px">0</div>
                            <div style="padding:3px;"></div>
                            <div class="col-1" style="font-weight:bold; font-size: 10px">H.3</div>
                            <div class="col-1" style="border:1px solid black; width:15px; margin-left: 14px; font-size: 10px; text-align: center"></div>
                            <div class="col" style="font-weight:bold; font-size: 10px; margin-right: 195px">Pembatalan</div>
                            <div style="padding:3px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p style="font-size: 12px; font-weight: bold;  text-align: center;">FORMULIR BPBS</p>
                    <div class="row"></div>
                    <div class="col-4"></div>
                    <div class="col-sm-12 height: 30px">
                        <div class="input-group mb-6">
                            <div class="input-group-prepend">
                                <div class="row">
                                    <div class="col-1" style="font-weight:bold; font-size: 10px">H.4</div>
                                    <div class="col-1" style="border:1px solid black; width:10px; margin-left:14px; font-size: 10px">{{ (explode('-',$pphpasal['kode_objek_pajak'] )[0] == 28 || explode('-',$pphpasal['kode_objek_pajak'])[0] == 29) ? 'X' : '' }}</div>
                                    <div class="col" style="font-weight:bold; font-size: 10px">PPh Final</div>
                                    <div style="padding:3px"></div>
                                    <div class="col-1" style="font-weight:bold; font-size: 10px">H.5</div>
                                    <div class="col-1" style="border:1px solid black; width:10px; margin-left:14px; font-size: 10px">{{ (explode('-',$pphpasal['kode_objek_pajak'])[0] >= 28 && explode('-',$pphpasal['kode_objek_pajak'])[0] <= 29) ? '' : 'X' }}</div>
                                    <div class="col" style="font-weight:bold; font-size: 10px">PPh Tidak Final</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <b style="font-size: 12px; padding-left:5px; font-weight:bold;">A. IDENTITAS WAJIB PAJAK YANG DIPOTONG/DIPUNGUT</b>
            <div class="col-sm-12" style=" border: 1px solid black; background-color:cornsilk; padding: 6px 30px 4px 30px ; border: 2px solid">
                <div class="row">
                    <label class="col-6 col-form-label" style="font-size: 10px; font-weight:bold;">NPWP</label>
                    <div class="col-6">
                        <input class="form-control" type="text" style="border: 1px solid black; height: 25px; border-radius: 1px; background:lavender; font-weight:bold; font-size: 10px" placeholder="{{ $pphpasal['no_identitas'] ?? '' }}" disabled="disabled">
                    </div>
                </div>
                <div class="row">
                    <label class="col-6 col-form-label" style="font-size: 10px; font-weight:bold;">NIK</label>
                    <div class="col-6">
                        <input class="form-control" type="text" style="border: 1px solid black; height: 25px; border-radius: 1px; background:lavender; font-weight:bold; font-size: 10px" placeholder="{{ $pphpasal['nik'] ?? '' }}" disabled="disabled">
                    </div>
                </div>
                <div class="row">
                    <label class="col-6 col-form-label" style="font-size: 10px;font-weight:bold;">NAMA</label>
                    <div class="col-6">
                        <input class="form-control" type="text" style="border: 1px solid black; height: 25px; border-radius : 1px; background:lavender; font-weight:bold; font-size: 10px" placeholder="{{ $pphpasal['nama'] ?? '' }}" disabled="disabled">
                    </div>
                </div>
            </div>
            <div style="padding: 2px"></div>
            <h6 style="font-size: 12px; font-weight:bold;">B. PAJAK PENGHASILAN YANG DIPOTONG/DIPUNGUT</h6>
            <table id="mytable" class="display">
                <tr>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:25%; height: 30px">
                        Masa Pajak (mm-yyyy)</th>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:20%;">
                        Kode Objek Pajak</th>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:20%;">
                        Dasar Pengenaan Pajak(Rp)</th>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:20%;">
                        Dikenakan Tarif Lebih Tinggi(tidak memiliki NPWP)</th>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:20%;">
                        Tarif(%)</th>
                    <th style="border: 1px solid black; font-size: 10px; font-weight: bold; background-color:lavender; text-align: center; width:19%;">
                        PPh yang Dipotong/Dipungut/DTP(Rp)</th>
                </tr>
                <tbody>
                    <tr class="text" style="background-color:lavender; text-align:center; font-weight:bold;">
                        <td style="border:1px solid black; font-size: 12px">B.1</td>
                        <td style="border:1px solid black; font-size: 12px">B.2</td>
                        <td style="border:1px solid black; font-size: 12px">B.3</td>
                        <td style="border:1px solid black; font-size: 12px">B.4</td>
                        <td style="border:1px solid black; font-size: 12px">B.5</td>
                        <td style="border:1px solid black; font-size: 12px">B.6</td>
                    </tr>
                    <tr>
                    <tr class="text" style="background-color:white; text-align:center;">
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px">{{ $pphpasal['masa_pajak']  ?? '' }}</td>
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px">{{ $pphpasal['kode_objek_pajak']  ?? '' }}</td>
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px">{{ $pphpasal['jumlah_penghasilan_bruto']  ?? '' }}</td>
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px"><input class="text" style="width: 50%; border: 1px solid black"></td>
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px">{{ $pphpasal['tarif']  ?? '' }}</small></td>
                        <td style="border:1px solid black; font-weight: bold; font-size: 9px">{{ $pphpasal['jumlah_setor']  ?? '' }}</td>
                    </tr>
            </table>
            <div style="padding: 2px;"></div>
            <div class="row">
                <div class="col-4" style="font-weight:bold; font-size: 10px">Keterangan Kode Objek Pajak</div>
                <div class="col-4" style="font-weight:bold; font-size: 10px">:
                    <div class="col-4" style=" border-bottom:1px solid black; width:200%; margin-left: 10px">{{ $pphpasal['objek_pajak']['nama_pajak']  ?? '' }}</div>
                </div>
                <div style="padding:2px;"></div>
                <div class="row">
                    <div style="font-size: 10px; font-weight:bold; padding-bottom: 4px">B.7 &ensp; Nomor Referensi : Nomor Dokumen <input class="text" style="font-size: 9px; font-weight: bold; width:25%; border:1px solid black" value="{{ $pphpasal['no_dokumen'] ?? '' }}"></div>
                    {{-- <input class="text" style="width: 25%; margin-left: 9px; border: 1px solid black" value="{{ $dokumen_pphpasal['no_dokumen'] ?? '' }}">
                </div> --}}
                <div style="font-size: 10px; font-weight:bold; padding:0px 0px 4px 77px; margin-left: 48px">Nama Dokumen <input class="text" style="margin-left: 5px; font-size: 9px; font-weight: bold; width: 27%; border: 1px solid black" value="{{ $pphpasal['nama_dokumen'] ?? '' }}">
                    Tanggal<input class="text" style="font-size: 9px; font-weight: bold; width: 27%; margin-left: 10px; border: 1px solid black" value="{{ $pphpasal['tgl_dokumen'] ?? '' }}"></div>
            </div>
            <div class="row">
                <div style="font-size:10px; font-weight:bold">B.8 &ensp; Dokumen Referensi untuk Fatur Pajak, apabila ada:
                    <div style="padding:2px;"></div>
                    <div style="font-size:10px; font-weight:bold; margin-left:26px">Nomor Faktur Pajak :
                        <input class="text" style="width:25%; border:1px solid black"> Tanggal <input class="text" style="font-size: 10px; margin-left: 10px; width:25%; border:1px solid black;">
                    </div>
                </div>
                <div style="padding:4px;"></div>
                <div class="row">
                    <div style="font-weight:bold; font-size:10px;">B.9 &ensp;
                        <input style="border:1px solid black; width:20px;font-weight: bold; font-size: 9px" value="<?= ($pphpasal['fasilitas_pajak_penghasilan'] == 'surat keterangan bebas' ? 'X' : '') ?>">&ensp; PPh dibebankan berdasarkan Surat Keterangan Bebas(SKB).
                    </div>
                    <div class="row">
                        <div style="font-size:10px; font-weight:bold; padding-left: 65px; ">Nomor : &ensp;<input class="text" value="<?= (($pphpasal['fasilitas_pajak_penghasilan'] == 'surat keterangan bebas' && $pphpasal['no_fasilitas']) ? $pphpasal['no_fasilitas'] : '') ?>" style="font-weight: bold; font-size: 9px; width:35%; border:1px solid black;">
                            Tanggal &ensp;<input class="text" value="{{ $pphpasal['tgl_dokumen'] ?? '' }}" style="width:25%; border:1px solid black; font-weight: bold; font-size: 9px">
                        </div>
                    </div>
                </div>
                <div style="padding:4px;"></div>
                <div class="row">
                    <div style="font-weight:bold; font-size:10px;">B.10&ensp;
                        <input style="border:1px solid black; width:20px" value="<?= ($pphpasal['fasilitas_pajak_penghasilan'] == 'pph ditanggung pemerintah' ? 'X' : '') ?>">&ensp; PPh yang ditanggung oleh pemerintah (DTP) berdasarkan :
                        <div style="border-bottom:1px solid black; width:56%; margin-left: 338px"></div>
                        <div style="padding: 8px"></div>
                        <div style="border-bottom:1px solid black; width:100%; margin-left: 25px"></div>

                    </div>
                </div>
                <div style="padding:4px;"></div>
                <div class="row">
                    <div style="font-weight:bold; font-size:10px">B.11&ensp;<input style="border:1px solid black; width: 20px" value="<?= ($pphpasal['fasilitas_pajak_penghasilan'] == 'surat keterangan berdasarkan pp no 23' ? 'X' : '') ?>">&ensp;PPh dalam hal transaksi menggunakan Surat Keterangan berdasarkan PP Nomor 23 Tahun 2018 dengan Nomor :</div>
                    <div style="padding:8px;"></div>
                    <div style="border-bottom:1px solid black; width:97%; margin-left: 37px"></div>
                </div>
            </div>
            <div style="padding:4px;"></div>
            <div class="row">
                <div style="font-weight:bold; font-size:10px;">B.12&ensp;<input style="border:1px solid black; width:20px" value="<?= ($pphpasal['fasilitas_pajak_penghasilan'] == 'fasilitas lainnya berdasarkan' ? 'X' : '') ?>">
                    PPh yang dipotong/dipungut yang diberikan fasilitas PPh berdasarkan:
                    <div style="padding:8px;"></div>
                    <div style="border-bottom:1px solid black; width:97%; margin-left: 26px"></div>
                </div>
                <div style="padding:10px;"></div>
                <p style="font-size: 12px; margin-left:6px; font-weight:bold;">C. IDENTITAS PEMOTONG/PEMUNGUT</p>
                <div class="col-sm-12" style="border: 1px solid black; background-color:cornsilk; padding: 0px 20px 10px 20px; height: auto; border: 2px solid; margin-left: 10px">
                    <div style="padding: 4px"></div>
                    <div class="row">
                        <div style="font-size: 10px; font-weight:bold">C.1&ensp; &ensp; &ensp;NPWP<input class="text" style="margin-left: 173px; font-weight: bold; font-size: 9px; border: 1px solid black; width: 30%; height: 20px; background:lavender;" placeholder="{{ $npwp }}" disabled="disabled">
                        </div>
                        <div style="padding: 4px"></div>
                        <div class="row">
                            <div style="font-size: 10px; font-weight:bold;">C.2&ensp; &ensp; &ensp;NAMA WAJIB PAJAK
                                <input type="text" style="margin-left: 102px; font-size: 10px; border: 1px solid black; width: 31%; height: 20px; font-weight: bold; font-size: 9px; border-radius: 1px; background:lavender;" placeholder="{{ $nama }}" disabled="disabled">
                            </div>
                            <div style="padding: 4px"></div>
                            <div class="row">
                                <div style="font-size: 10px; font-weight:bold;">C.3&ensp; &ensp; &ensp;TANGGAL
                                    <input type="text" style="margin-left: 154px; font-size: 10px; border: 1px solid black; width: 31%; height: 20px; border-radius: 1px; background:lavender; font-weight: bold; font-size: 9px" value="{{ $pphpasal['tgl_dokumen'] ?? '' }}" disabled="disabled">
                                </div>
                                <div style="padding: 4px"></div>
                                <div class="row">
                                    <div style="font-size: 10px; font-weight:bold;">C.4&ensp; &ensp; &ensp;NAMA PENANDATANGAN <input type="text" style="width: 32%; margin-left: 76px; font-size: 10px; border: 1px solid black; background:lavender; font-weight: bold; font-size: 9px" placeholder="{{ $pphpasal['pengaturan']['nama']  ?? '' }}" disabled="disabled">
                                    </div>
                                </div>
                                <div style="padding: 4px"></div>
                                <div class="row">
                                    <div style="font-size: 10px"><b>C.5&ensp; &ensp; &ensp;PERNYATAAN WAJIB PAJAK</b>&ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;Dengan ini saya mengatakan bahwa bukti Pemotongan/Pemungutan Unifikasi telah saya isi <br>
                                        <p style="margin-left: 236px"> dengan benar dan telah saya tandatangani secara electronik</p>
                                    </div>
                                    <div class="row">
                                        <p style="font-size: 10px; margin-left: 236px">Apabila terdapat kesalahan/pembatalan dalam pembuatan Bukti Pemotongan/Pemungutan Unifikasi yang <br style="font-size: 10px; margin-left: 230px">menyebabkan kelebihan pemotongan/pemungutan PPh atau pembayaran, atas kelebihan tersebut akan <br>diajukan: </p>
                                    </div>
                                    <div class="row" style="font-size: 10px; margin-left: 235px">
                                        <input style="border:1px solid black; width: 20px; font-size: 10px; background:black" value="X">&ensp;Pengembalian atas kelebihan pembayaran pajak yang tidak seharusnya terutang oleh Pemotong <p style="margin-left: 17px">dan/atau Pemungut PPh </p>
                                    </div>
                                    <div class="row" style="font-size: 10px; margin-left: 235px">
                                    </div>
                                    <div class="row" style="font-size: 10px; margin-left: 235px">
                                        <input style="border:1px solid black; width: 20px; font-size: 10px; background:lavender" value="<?= ($pphpasal['kelebihan_pemotongan'] == 'pemindahbukuan' ? 'X' : '') ?>">&ensp;Pemindahbukuan oleh Pemotong dan/ atau Pemungut PPh
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding:2%"></div>
                    </div>
                    <!-- Option 1: Bootstrap Bundle with Popper -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                    </script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
                    </script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function(){
    // do something
    window.print();
});

                        let tr = 1;
                        let tr2 = 1;
                        let tr3 = 1;

                        function myFunction($this) {
                            var tableBody = $('#mytable');
                            trLast = tableBody.find("tr:last");
                            trNew = trLast.clone();
                            tr += 1;
                            trLast.after(trNew);
                        }

                        function deleteTable($this) {
                            var tableBody = $('#mytable');
                            trLast = tableBody.find("tr:last");
                            console.log(tableBody);
                            if (tr > 1) {
                                tr -= 1;
                                trLast.remove();
                            }
                        }

                        function myFunction2($this) {
                            var tableBody = $('#mytable2');
                            trLast = tableBody.find("tr:last");
                            trNew = trLast.clone();
                            tr += 1;
                            trLast.after(trNew);
                        }

                        function deleteTable2($this) {
                            var tableBody = $('#mytable2');
                            trLast = tableBody.find("tr:last");
                            console.log(tableBody);
                            if (tr > 1) {
                                tr -= 1;
                                trLast.remove();
                            }
                        }

                        function myFunction3($this) {
                            var tableBody = $('#mytable3');
                            trLast = tableBody.find("tr:last");
                            trNew = trLast.clone();
                            tr += 1;
                            trLast.after(trNew);
                        }

                        function deleteTable3($this) {
                            var tableBody = $('#mytable3');
                            trLast = tableBody.find("tr:last");
                            console.log(tableBody);
                            if (tr > 1) {
                                tr -= 1;
                                trLast.remove();
                            }
                        }
                    </script>

                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

</body>

</html>