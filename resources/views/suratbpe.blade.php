<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bukti Penerimaan Elektronik</title>
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
                <th rowspan="2" style="border: 1px solid black; text-align: center">
                    <img src="{{ asset('logo.png') }}" width="140px" style="margin-left: auto">
                </th>
                <th style="text-align: center; border-left: 1px solid black; border-right:1px solid black; border-top: 1px solid black; font-size: 15px; font-weight: bold">TAX CENTER<br>POLITEKNIK NEGERI BATAM</th>
            </tr>
            <tr>
                <th style="text-align: center; border-left: 1px solid black; border-right:1px solid black;border-bottom:1px solid black; font-size: 13px; font-weight: bold; width: 85%; padding-top: 15px">LAYANAN INFORMASI DAN PENGADUAN KRING PAJAK (021)1500200<br>email: pengaduan@pajak.go.id ; informasi@pajak.go.id</th>
            </tr>
        </table>
        <div style="padding: 2px"></div>
        <div style="font-size: 13px; font-weight: bold; text-align: center">BUKTI PENERIMAAN ELEKTRONIK</div>
        <div class="card">
            <div class="card-body">
                <div style="font-size: 12px; font-weight: bold; text-align: center; padding: 2px">NOMOR TANDA TERIMA ELEKTRONIK :
                    <span>{{ $sptmasa['nomor_bukti'] }}</span>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Nama</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>{{ $nama }}</span>
                    </div>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Jenis Pajak</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>{{ $sptmasa['jenis_pajak'] }}
                    </div>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Pembetulan Ke-</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>0</span>
                    </div>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Tanggal Terima</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>{{ $sptmasa['billing_expired'] }}</span>
                    </div>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Tahun Pajak</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>{{ $sptmasa['tahun_pajak'] }}</span>
                    </div>
                </div>
                <div style="padding:1%"></div>
                <div class="row">
                    <div class="col-2" style="font-size: 13px; font-weight:bold">Masa Pajak</div>
                    <div class="col-7" style="padding-left:30px; font-size: 13px; font-weight:bold">:
                        <span>{{ $sptmasa['masa_pajak'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="font-size: 12px; font-weight: bold; text-align: center; padding: 2px; border: 1px solid black; margin-top: 30px">Terima Kasih telah menyampaikan Laporan SPT Anda</div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // do something
                window.print();
            });
        </script>