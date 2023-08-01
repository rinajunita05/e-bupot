<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SURAT PEMBERITAHUAN (SPT) MASA PAJAK PENGHASILAN</title>
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

<body class="page">
    <div class="subpage">
        <table>
            <tr>
                <th rowspan="2" style="border-left: 1px solid black; border-right:1px solid black; border-top: 1px solid black; text-align: center">
                    <img src="{{ asset('logo.png') }}" width="140px" style="margin-left: auto">
                </th>
                <th style="text-align: center; border-left: 1px solid black; border-right:1px solid black; border-top: 1px solid black; font-size: 14px; font-weight: bold">SURAT PEMBERITAHUAN (SPT) MASA <br>PAJAK PENGHASILAN</th>
                <th rowspan="3" style="text-align: center; border-left: 1px solid black; border-right:1px solid black; border-top: 1px solid black; border-bottom: 1px solid black; font-size: 13px; font-weight: bold">&ensp;FORMULIR SPT MASA PPh UNIFIKASI&ensp;</th>
            </tr>
            <tr>
                <th style="font-size: 13px; text-align: center; border-top: 1px solid black">&ensp;Formulir ini digunakan untuk melaporkan Pajak Penghasilan Pasal 4 ayat (2), Pasal 15, Pasal 22, Pasal 23, dan Pasal 26&ensp;</th>
            </tr>
            <tr>
                <th style="font-size: 13px; text-align: center; border-left: 1px solid black; border-right:1px solid black; border-top: 1px solid black; border-bottom: 1px solid black">&ensp;Masa Pajak <i style="font-weight: normal">(yy-mm)</i>&ensp;H.1&ensp;<br>
                    {{ $tahun_pajak }}-{{ $masa_pajak }}
                </th>
                <th style="font-size: 13px; border-top: 1px solid black; border-bottom: 1px solid black; text-align: center">&ensp;Bacalah petunjuk pengisian sebelum melaporkan formulir ini&ensp;<br>
                    &ensp; H.2 <input value="X" style="border:1px solid black; width:15px; height: 20px;" />&ensp;SPT Normal&ensp;
                    H.3 <input style="border:1px solid black; width:15px; height: 20px" />&ensp;SPT Pembetulan Ke-
                    <input style="border: 1px solid black; width: 15px; height: 20px" /> H.4
                </th>
            </tr>
        </table>
        <div style="padding: 2px"></div>
        <div style="font-size: 12px; font-weight: bold">A. IDENTITAS PEMOTONG DAN/ATAU PEMUNGUT PPh</div>
        <div class="col-sm-12" style=" border: 1px solid black; background-color:cornsilk; padding: 6px 30px 4px 30px ; border: 1px solid">
            <div class="row">
                <div class="col-3 col-form-label" style="font-size: 12px">A1. NPWP
                    <?php
                    $npwps = str_split($npwp);
                    //var_dump($npwps)
                    ?>
                    <b style="font-size: 12px; margin-left: 80px">:</b>
                </div>
                <span class="text" style="color:black; width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[0] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[1] }} </span>
                &ensp;<span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[2] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[3] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[4] }} </span>
                &ensp;<span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[5] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[6] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[7] }} </span>
                &ensp;<span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[8] }} </span>
                &ensp;<span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[9] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[10] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[11] }} </span>
                &ensp;<span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[12] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[13] }} </span>
                <span class="text" style="width:20px; height: 25px; border:1px solid black; background-color:lavender;">{{ $npwp[14] }} </span>
            </div>
            <div class="row">
                <div class="col-6 col-form-label" style="font-size: 12px">A.2 NAMA
                    <b style="font-size: 12px; margin-left: 79px">:</b>
                    <div style="border-bottom:1px solid black; width:155%; margin-left: 168px ; margin-top : -20px;">
                        {{ $nama }}
                    </div>
                </div>
            </div>
        </div>

        <b style="font-size: 12px; padding-left:5px; font-weight:bold;">B. RESUME PAJAK PENGHASILAN</b>
        <table id="mytable" class="display">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:5%;">
                    NO</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:35%;">
                    URAIAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:5%;">
                    PPh TERUTANG</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:14%;">
                    JUMLAH PPh YANG DITANGGUNG PEMERINTAH</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:14%;">
                    JUMLAH PPh YANG DISETOR (RP)</th>
            </tr>
            <tbody>
                <tr class="text" style="background-color:lavender; text-align:center; font-weight:bold; font-size: 12px">
                    <td style="border:1px solid black;">B.1</td>
                    <td style="border:1px solid black;">B.2</td>
                    <td style="border:1px solid black;">B.3</td>
                    <td style="border:1px solid black;">B.4</td>
                    <td style="border:1px solid black;">B.5</td>
                </tr>
        </table>
        <div style="padding: 1px;"></div>
        <table id="mytable" class="display">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; width:10%;">
                    &ensp;I. PPh YANG DISETOR SENDIRI</th>
            </tr>
        </table>
        <div style="padding: 1px;"></div>
        <table id="mytable" class="display">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%; font-weight: normal">1</th>
                <th style="border: 1px solid black; font-size: 11px; width:280px; text-align:justify; font-weight: normal">PASAL 4 AYAT (2)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%; text-align: center; font-weight: normal">{{ $kode28 }}</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">00,00</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">{{ $kode28 }}</th>
            </tr>
            <tbody>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%; font-weight: normal">2</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify; font-weight: normal">PASAL 15</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center; font-weight: normal">{{ $kode24 }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">{{ $kode24 }}</th>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%; font-weight: normal">3</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify; font-weight: bold">JUMLAH YANG DISETORKAN SENDIRI</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center; font-weight: normal">{{ number_format(((int) str_replace(",","",$kode28) + (int) str_replace(",","",$kode24)),2) }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center; font-weight: normal">{{ number_format(((int) str_replace(",","",$kode28) + (int) str_replace(",","",$kode24)),2) }}</th>
                </tr>
        </table>
        </tbody>
        <div style="padding: 1px;"></div>
        <tbody>
            <table id="mytable" class="display">
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; width:25%;">
                    &ensp;II. PPh YANG TELAH DILAKUKAN PEMOTONGAN/PEMUNGUTAN</th>
            </table>
            <div style="padding: 1px;"></div>
            <table>
                <tr>
                    <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;  font-weight: normal">4</th>
                    <th style="border: 1px solid black; font-size: 11px; width:400px; text-align:justify;  font-weight: normal">PASAL 22</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">{{ $kode22 }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">{{ $kode22 }}</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%;  font-weight: normal">5</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify;  font-weight: normal">PASAL 26</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">0.00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">0.00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">0.00</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%;  font-weight: normal">6</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify;  font-weight: normal">PASAL 23</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">{{ $kode23 }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">{{ $kode23 }}</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%;  font-weight: normal">7</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify;  font-weight: normal">PASAL 4 AYAT (2)</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">{{ $kode28 }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">{{ $kode28 }}</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%;  font-weight: normal">8</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify;  font-weight: normal">PASAL 15</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">{{ $kode24 }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">{{ $kode24 }}</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; font-size: 11px; text-align: center; width:4%;  font-weight: normal">9</th>
                    <th style="border: 1px solid black; font-size: 11px; width:30%; text-align:justify">JUMLAH YANG DIPUNGUT</th>
                    <th style="border: 1px solid black; font-size: 11px; width:6%; text-align:center;  font-weight: normal">{{ number_format(((int) str_replace(",","",$kode28) + (int) str_replace(",","",$kode24) + (int) str_replace(",","",$kode22) + (int) str_replace(",","",$kode23)),0) }}</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">00,00</th>
                    <th style="border: 1px solid black; font-size: 11px; width:12%; text-align:center;  font-weight: normal">{{ number_format(((int) str_replace(",","",$kode28) + (int) str_replace(",","",$kode24) + (int) str_replace(",","",$kode22) + (int) str_replace(",","",$kode23)),0) }}</th>
                </tr>
            </table>

            <b style="font-size: 12px; padding-left:5px; font-weight:bold;">BAGIAN C. PERNYATAAN DAN TANDA TANGAN</b>
            <div class="col-sm-12" style=" border: 1px solid black; background-color:cornsilk; padding: 6px 30px 4px 30px ; border: 1px solid">
                <div class="row">
                    <div style="font-size: 11px">C1.
                        <input class="text" value="X" style=" width:20px; height: 20px; border:1px solid black; background-color:lavender; margin-left: 10px">
                        WAJIB PAJAK/WAKIL WAJIB PAJAK (PENGURUS, DLL)
                    </div>
                    <div style="padding: 2px"></div>
                    <div style="font-size: 11px">C2.
                        <input class="text" style=" width:20px; height: 20px; border:1px solid black; background-color:lavender; margin-left: 10px">
                        KUASA WAJIB PAJAK
                    </div>
                    <div style="padding: 2px"></div>
                    <div class="col-3 col-form-label" style="font-size: 12px">C3.&ensp;&ensp;NAMA
                        <div style="border-bottom:1px solid black; width:155%; margin-left: 160px ; margin-top : -20px;">{{ $penandatangan['nama'] }}
                        </div>
                    </div>
                    <div style="padding: 2px"></div>
                    <div class="col-3 col-form-label" style="font-size: 12px">C3.&ensp;&ensp;TANGGAL
                        <div style="border-bottom:1px solid black; width:155%; margin-left: 160px ; margin-top : -20px;">{{ date('d-m-Y', time()) }}
                        </div>
                    </div>
                    <div style="padding: 10px"></div>
                    <div style="font-size: 11px">C3.&ensp;&ensp;PERNYATAAN WAJIB PAJAK</div>
                    <p style="font-size: 10px; margin-left: 25px">Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan yang berlaku, saya menyatakan bahwa apa yang saya beritahukan di atas beserta lampiran-lampirannya adalah benar, lengkap dan jelas.</p>
                </div>
            </div>
            <p style="font-size: 11px">Sesuai dengan ketentuan yang berlaku, Direktorat Jenderal Pajak mengatur bahwa SPT ini dinyatakan sah dan tidak diperlukan tanda tangan basah pada SPT ini.
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // do something
                        window.print();
                    });
                </script>