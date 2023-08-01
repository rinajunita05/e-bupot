<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cetakan ID Billing</title>
    <style>
        .bg-grey {
            font-family: arial;
            background-color:#fff;
        }
    
        .verticaltext {
            writing-mode: vertical-lr;
            text-orientation: use-glyph-orientation;
        }

        .year {
            border: 1px solid black;
            width: 20px;
            font-size: 25px;
        }

        table tr th {
            border: 1px solid black;
            font-size: 25px;
        }
    
    
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    
    @media print {
        html, body {
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

<body class="bg-grey">
    <div class="container" style="background-color: #fff">
        <div class="row" style="border-bottom: 2px solid white;">
            <div class="col-3" style="padding: 60px 0px 30px 10px">
                <img src="{{ asset('logo.png') }}" width="160px" height="90px" style="margin-left: 35px">
            </div>
            <div class="col-5" style="border-left: 2px solid white; border-right:2px solid white;">
                <div class="row">
                    <div style="text-align: center; margin:70px 0px 0px 0px">
                        <h4 style="font-weight:bold">TAX CENTER</h4>
                        <h4 style="font-weight:bold">POLITEKNIK NEGERI BATAM</h4>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <h6 style="font-weight:bold; text-align: center; margin: 80px 0px 0px 0px">KODE BILLING</h6>
                </div>
                <div class="col-sm-12" style="padding: 4px 10px 40px 10px ; height: 30px">
                    <div class="input-group mb-6">
                        <div class="input-group-prepend">
                                <div class="row">     
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <table style="margin-left: 30px">
                <tr>
                    <td style="width: 53%; font-weight: bold">NPWP</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $npwp }}</td>
                </tr>
                <tr>
                    <td style="width: 53%; font-weight: bold">Nama</td>
                    <td style="width: 5%">:</td>
                    <td style="width: 65%">{{ $nama }}</td>
                </tr>
                <tr>
                    <td style="width: 53%; vertical-align: top; font-weight: bold">Negara</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%">Indonesia</td>
                </tr>
            </table>
            <br>
            <table style="margin-left: 30px">
                <tr>
                    <td style="width: 32%; font-weight: bold">Jenis Pajak</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['jenis_pajak'] }}</td>
                </tr>
                <tr>
                    <td style="width: 32%; font-weight: bold">Jenis Setoran</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['jenis_setoran'] }}</td>
                </tr>
                <tr>
                    <td style="width: 32%; font-weight: bold">Masa Pajak</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['masa_pajak'] }}</td>
                </tr>
                <tr>
                    <td style="width: 32%; font-weight: bold">Tahun Pajak</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['tahun_pajak'] }}</td>
                </tr>
                <tr>
                    <td style="width: 32%; font-weight: bold">Jumlah Setor</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['jumlah_setor'] }}</td>
                </tr>
                <tr>
                    <td style="width: 32%; font-weight: bold">Terbilang</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $terbilang }}</td>
                </tr>
            </table>
            <br>
            <!-- <table style="margin-left: 30px">
                <tr>
                    <td style="width: 30%; font-weight: bold">Uraian</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%"></td>
                </tr>
            </table> -->
            <br>
            <table style="margin-left: 30px">
                <tr>
                    <td style="width: 51%; font-weight: bold">NPWP Penyetor</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['no_identitas'] }}</td>
                </tr>
                <tr>
                    <td style="width: 51%; font-weight: bold">Nama Penyetor</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['nama'] }}</td>
                </tr>
            </table>
            <br>
            <p style="font-weight: bold; margin-left: 30px">GUNAKAN KODE BILLING DIBAWAH INI UNTUK MELAKUKAN PEMBAYARAN</p>
            <table style="margin-left: 30px">
                <tr>
                    <td style="width: 51%; font-weight: bold">Id Billing</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['id_billing'] }}</td>
                </tr>
                <tr>
                    <td style="width: 51%; font-weight: bold">Masa Aktif</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%">{{ $sptmasa['billing_expired'] }}</td>
                </tr>
            </table>
            <br>
            <p style="font-weight:bold; text-align:center; color:red">Catatan: Apabila ada kesalahan dalam isian Kode Billing atau masa berlakunya berakhir, Kode Billing dapat dibuat kembali. Tanggung jawab isian Kode Billing ada pada Wajib Pajak yang namanya tercantum di dalamnya.
            </p>
        </div>
        </div>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
                // do something
                window.print();
            });
        </script>
</body>

</html>