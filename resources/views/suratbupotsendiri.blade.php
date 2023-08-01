<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Surat Bupot PPh disetor sendiri</title>
    <style>
        .bg-grey {
            font-family: arial;
            background-color: #ccc;
            padding: 1% 10% 1% 10%;
        }
    
        .vericaltext {
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
    </style>
</head>

<body class="bg-grey">
    <div class="container " style="width : 90%; height:auto; background-color: #fff;">
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-3" style="padding: 60px 0px 30px 10px">
                <img src="{{ asset('logo.png') }}" width="160px" height="90px" style="margin-left: 35px">
            </div>
            <div class="col-5" style="border-left: 2px solid black; border-right:2px solid black;">
                <div class="row">
                    <b style="font-size: 14px; text-align: center; margin-top: 20px;">DAFTAR RINCIAN</b>
                    <p style=" font-size: 12px; font-weight: bold;  text-align: center; border-bottom: 2px solid black">
                        PAJAK PENGHASILAN YANG DISETOR SENDIRI</p>
                </div>
                <div class="row">
                <div class="col-1"style="font-weight:bold"><small>H.1</small></div>
                    <div class="col-1" style="font-weight:bold"><small>NPWP </small></div>
                    <div class="col-1" style="padding-left:36px;font-weight:bold;"><small>:</small></div>
                    <div class="col-8" style="padding-left:15px;">
                        <table>
                            <tr style="text-align:center;">
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>
                                <td style="border:1px solid black; width:20px; font-weight:bold;"><small>0</small></td>

                            </tr>
                        </table>
                    </div>
                    <div style="padding:3px;"></div>
                    <div class="row">
                    <div class="col-1"style="font-weight:bold"><small>H.2</small></div>
                    <div class="col-6"style="font-weight:bold"><small>Masa Pajak(mm-yyyy)</small></div>
                    <div class="col-4">
                    <input class="form-control" type="text" style="border: 1px solid black; height: 25px; border-radius: 1px; background:light;"value="{{ date('M-Y',time()) }}" readonly>
                </div>
                </div>
                </div>
            </div>

            <div class="col-4" style="padding: 36px 10px 20px 10px">
            <div class="row">
                    <p style="font-size: 15px; font-weight: bold;  text-align: center;">
                        FORMULIR DOSS</p>
                </div>
                <div class="row" style="padding: 1% 10%;"></div>
                    <div class="col-4"></div>
                <div class="col-sm-12" style="padding: 4px 10px 10px 10px ; height: 30PX">
                    <div class="input-group mb-6">
                        <div class="input-group-prepend">
                            <div style="margin-left: 48px">
                            <div class="row">
                            <div class="col-1"style="border:2px solid black; width:15px; height: 20px; margin-left:14px;"></div>
                            <div class="col-1"style="border:2px solid black; width:15px; height: 20px; margin-left:14px;"></div>
                            <div class="col-1"style="border:2px solid black; width:15px; height: 20px; margin-left:14px;"></div>
                            <div class="col-1"style="border:2px solid black; width:15px; height: 20px; margin-left:14px;"></div>
                            <div class="col-1"style="border:2px solid black; width:15px; height: 20px; margin-left:14px;"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <b style="font-size: 12px; padding-left:5px; font-weight:bold;">RINCIAN PPh YANG DISETOR SENDIRI</b>
        <table id="mytable" class="display">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:4%;">
                    No</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:32%;">
                    Uraian</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:6%;">
                    Kode Objek Pajak</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:13%;">
                    Jumlah dasar pengenaan pajak (Rp)</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; background-color:lavender; text-align: center; width:13%;">
                    Jumlah PPh(Rp)</th>
                </tr>
                 <tbody>
                    <tr class="text" style="background-color:lavender; text-align:center; font-weight:bold;">
                      <td style="border:1px solid black;"><small>A.1</small></td>
                      <td style="border:1px solid black;"><small>A.2</small></td>
                      <td style="border:1px solid black;"><small>A.3</small></td>
                      <td style="border:1px solid black;"><small>A.4</small></td>
                      <td style="border:1px solid black;"><small>A.5</small></td>
                    </tr>
                    </table>
                <div style="padding: 2px;"></div>
                <table id="mytable" class="display">
                <tr>
                <th style="border: 1px solid black; font-size: 13px; font-weight: bold; background-color:lavender; width:25%;">
                    I. OBJEK PAJAK PENGHASILAN PASAL 4 AYAT (2) YANG DISETOR SENDIRI</th>
                </tr>
                </table>
                <table id="mytable" class="display">
                <tr>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">
                    1</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">a. Pengalihan Hak atas Tanah dan/atau Bangunan</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-402-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">
                    </th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">b. Pengalihan Rumah Sederhana dan Rumah Susun Sederhana yang Dilakukan oleh WP
                        yang Usaha Pokoknya Mengalihkan Hak atas Tanah dan/atau Bangunan</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-402-02</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th> 
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">
                    </th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">c. Pengalihan Hak atas Tanah dan/atau Bangunan kepada Pemerintah, BUMN yang Mendapat
                    Penugasan Khusus dari Pemerintah, atau BUMND yang Mendapatkan Penugasan Khusus </th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-402-02</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th> 
                 </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">2</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Jasa Konstruksi &ensp; a. Perencanaan Konstruksi (Dengan Kualifikasi Usaha)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; b. Perencanaan Konstruksi (Tanpa Kualifikasi Usaha)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-02</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; c. Pelaksanaan Konstruksi (Kualifikasi Usaha Kecil)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-03</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                d. Pelaksanaan Konstruksi (Dengan Kualifikasi Usaha  
                <p> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; Menengah dan Besar)</p></th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-04</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; e. Pelaksanaan Konstruksi (Tanpa Kualifikasi Usaha)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-05</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; f. Pengawasan Konstruksi (Dengan Kualifikasi Usaha)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-06</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; g. Pengawasan Konstruksi (Tanpa Kualifikasi Usaha)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-408-07</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">3</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Persewaan Tanah dan/atau Bangunan</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-403-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">4</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"><i>Participating Interest Eksplorasi Hulu Migas secara tidak langsung</i></th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-421-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">5</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"><i>Participating Interest Eksploitasi Hulu Migas secara tidak langsung</i></th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-421-02</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"><b>6</b></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"><b>Jumlah (Jumlah Angka 1 s.d. Angka 6)</b></th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 12px; width:6%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                </table>
                <div style="padding: 2px;"></div>
                <table id="mytable" class="display">
                <tr>
                <th style="border: 1px solid black; font-size: 13px; font-weight: bold; background-color:lavender; width:25%;">
                    II. OBJEK PAJAK PENGHASILAN PASAL 15 YANG DISETOR SENDIRI</th>
                </tr>
                </table>
                <table id="mytable" class="display">
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">7</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Imbalan yang Diterima/Diperoleh Sehubungan dengan Pengangkutan
                Orang dan/atau Barang Termasuk Penyewaan Kapal Laut Oleh Perusahaan Pelayaran Dalam Negeri</th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:6%;"></th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> a. Penghasilan dari Indonesia</th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:6%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> b. Penghasilan dari Luar Indonesia</th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:6%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">c. PPh Pasal 24 yang dapat diperhitungkan</th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:6%;"></th>
                <th style="border: 1px solid black; background-color:lavender;font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> d. PPh yang dipotong pihak lain</th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 11px; width:6%;"></th>
                <th style="border: 1px solid black; background-color:lavender;font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"> e. PPh yang disetor sendiri(a+b)-(c+d)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-410-01</th>
                <th style="border: 1px solid black; background-color:lavender;font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">8</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Imbalan Yang Dibayarkan/Terutang kepada Perusahaan Pelayaran dan/atau Penerbangan Luar Negeri
                Sehubungan dengan Pengangkutan Orang dan/atau Barang (Selain Berdasarkan Perjanjian Charter)</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">26-411-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">9</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Penghasilan Wajib Pajak Luar Negeri yang Mempunyai Kantor Perwakilan Dagang di Indonesia.</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-413-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;">10</th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;">Penghasilan Wajib Pajak yang Melakukan Kegiatan Usaha Jasa(Contact Manufacturing) 
                Internasional di Bidang Produksi Mainan Anak-Anak.</th>
                <th style="border: 1px solid black; font-size: 11px; width:6%;">28-499-01</th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                <tbody>
                <th style="border: 1px solid black; font-size: 12px; text-align: center; width:4%;"><b>11</b></th>
                <th style="border: 1px solid black; font-size: 11px; width:30%;"><b>Jumlah (Jumlah Angka 7 s.d. Angka 10)</b></th>
                <th style="border: 1px solid black; background-color:lavender; font-size: 12px; width:6%;"></th>
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>  
                <th style="border: 1px solid black; font-size: 11px; width:12%;"></th>    
                </tbody>
                </table>
                <div style="padding:17px;"></div>
            </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
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
                tr-=1;  
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
                tr-=1; 
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
                tr-=1; 
                trLast.remove();
            }
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

</body>

</html>