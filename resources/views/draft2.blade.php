<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <title>Penyiapan SPT Masa | E-Bupot</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: arial;
      font-size: 16px;
      line-height: 1.6;
      background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .content {

      background-repeat: no-repeat;
      background-size: cover;
      height: 1200px;
    }

    .navbar-expand-lg {
      background-color: #191970;
      font-variant: normal;
    }

    .nav-link {
      color: #FFFFFF;
    }

    .container {
      max-width: 1000px;
      margin: 20px auto;
    }


    .body {
      width: 100%;
      height: 100%;
      padding-top: 1%, 1%, 1%;
      position: relative;
    }

    .orangebox {
      width: 100%;
      height: 200px;
      background-color: #FBC127;
      top: 150px;
      position: absolute;
      z-index: 1;
    }

    .form {
      width: 100%;
      height: 600px;
      background-color: white;
      top: 20px;
      position: absolute;
      z-index: 10;
    }

    .header {
      width: 100%;
      height: 130px;
      border-radius: 25px;
      background-color: white;
    }

    .boxitem {
      text-align: center;
      height: 120px;
      width: 100%;
      background-color: white;
    }


    .blockrow {
      margin-top: 20px;
      width: 100%;
      height: 40px;
      padding-left: 20px;
      background-color: #2F0F5F;
    }


    .payments {
      padding: 10px;
      width: 100%;
      height: 80px;
      background-color: white;
    }

    .selecttax {
      background-color: white;
      border: 1px solid gray;
      margin-left: 100px;
      font-size: 12px;
      height: 30px;
      width: 35%;
    }

    .checktax {
      width: 95px;
      height: 30px;
      border-radius: 25px;
      margin-left: 360px;
      margin-top: -30px;
      font-size: 12px;
      background-color: #2F0F5F;
      color: white;
      border: 0px;
      float: left;
    }

    .infotax {
      margin-top: 20px;
      width: 100%;
      height: 280px;
      background-color: white;
      padding: 1%;
    }

    .amounttax {
      width: 100%;
      height: 60px;
      background-color: #A1C4EC;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 10px;
    }

    .boxproof {
      width: 100%;
      height: 500px;
    }

    .headerproof {
      width: 100%;
      height: 40px;
      padding: 10px;
      background-color: #191970;
    }

    .headerproof h5 {
      font-weight: 300;
      color: white;
    }

    .bodyproof {
      margin-top: 20px;
    }

    .buttonproof {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 0;
      background-color: #191970;
    }

    .buttonaddproof {
      width: 100px;
      height: 30px;
      border: 0;
      border-radius: 25px;
      float: right;
      margin-top: -38px;
    }

    .numicon {
      width: 40px;
      height: 40px;
      background-color: #191970;
    }

    .tab_triger ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
    }


    .tab_triger ul li label {
      position: relative;
      display: block;
      padding: 8px 15px;
      cursor: pointer;
      min-width: 150px;
      background: #e6e6e6;
      text-align: center;
      font-weight: 700;
      border-radius: 8px 40px 0 0;
    }

    .tab_triger ul li:nth-child(1) label {
      background: #191970;
      color: #FFFFFF;
    }

    .tab_triger ul li:nth-child(2) label {
      background: #C0C0C0;
      color: #FFFFFF;
    }


    .tab_container_wrap input {
      position: absolute;
      width: 0;
      height: 0;
      margin: 0;
      z-index: -100;
      top: -1000px;


    }

    .tab_container_wrap input:checked+.tab_content_box {
      display: block;
    }

    .tab_content_box {
      background: #F5F5F5;
      padding: 20px;
      display: none;
    }

    .tab_content_box:nth-child(1) {
      background: #f0f0f0;

    }

    .tab_content_box:nth-child(2) {
      background: #f0f0f0;
    }


    .tab_content_box h2 {
      margin: 0 0 20px;
    }


    .text {
      font-size: 12px;
      font-family: Arial;
      text-align: center;
    }

    .text1 {
      font-size: 14px;
      font-family: Arial;
      text-align: center;
    }

    .button1 {
      background-color: white;
      color: rgb(255, 157, 49);
      border: 1px solid rgb(255, 157, 49);
      border-radius: 5px;
    }

    .button1:hover {
      background-color: rgb(255, 157, 49);
      color: white;
    }

    .button2 {
      background-color: white;
      color: grey;
      border: 2px solid lightgray;
      border-radius: 5px;
    }

    .button2:hover {
      background-color: grey;
      color: white;
    }

    header {
      background-color: rgba(0, 0, 0, 0.7);
    }

    header span {
      color: rgb(255, 157, 49)
    }

    .text {
      font-size: 12px;
      font-family: Arial;
      text-align: center;
    }

    .text1 {
      font-size: 14px;
      font-family: Arial;
      text-align: center;
    }

    .media-social {
      font-size: 18px;
      display: inline-block;
      background: #ffb727;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
    }

    .media-social i {
      color: #FFF;
    }

    .copyright {
      font-size: 12px;
      color: #FFF;
      padding-top: 30px;
    }

    @media screen and (max-width : 576px) {
      .content2 {
        max-width: 400px;
        width: 100vw;
      }
    }
  </style>
</head>

<body>
  <div>
    <header class=" mb-3 border-bottom">
      <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;"><img src="{{ asset('taxcentre1.png') }}" alt="" srcset="">
        <div class="d-flex align-items-center">
          <form class="w-100 me-3">
          </form>
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <span>{{ $nama }} &nbsp;</span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABL0lEQVR4nOXTMUoDQRQG4BWtjV5AL2Ay7+2CrQYE8QB2IRaJSS0Woo13EBGWebOBiAhewVSpNK2CuYCI8Q75RaMBJW52ZqcJPvibKfabf3YmCP7d4HRjAaLK0LQHrTZxszvvF0iiIgz3YRjjCD1BSmt+gIviMoRefgDj0DNaaik/YuhwMsDfOfCBtNMRaudHhM6nIGc+mmylIqLKuZFRG9aTAYq9AJ8IgjmI2ofhewi/QugOhmof68HMDaTE0NyE8BFM2EBLkb+PG9qB4cc/fvwDknA75+7pBMLD9NvFQ2g6dm1QnfLS8SsVOyCOCjD0ZoUID3C5vmjRImxYtsDX66/ZHNW1G8JX2RGhrhMi1LVAuOeGcM/muDqOyK1Nk1UkVB9dgIxJqI44WsmMzOS8AyPtL+e6fM6uAAAAAElFTkSuQmCC"> </a>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class='content1'>
      <div class="content2" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px; margin: 0px auto">
        <nav class="navbar navbar-inverse navbar-fixed-top height-auto" role="navigation" style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px; border-bottom:0px">
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link" type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" id="nav-pajak-tab" data-bs-toggle="tab" data-bs-target="#nav-pajak" type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link active" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
        <div style="padding:10px;"></div>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABt0lEQVRYhe2VPWsUURSGn3NnwxZBLHZSmA+JkFJs7CT/ICCkE9NvkRDsBFkZ13VVsAwhmFZ/QBrBP5DSVCFVCCk2JBA3oiaFiZlzLDLrDvulFyZJMw8Mc3mHc99zzxzOhZycnGtGWos4Cu0qjYNaUwDcVZr2otBHbwS15u0sjeIobADjnXqvCjTUSTlLcwBDysBep95Vgf85uVVKY1qQdxgzifTJOZ5KtbnfL6ZQ+/oZmOjsNe8esOpoqAHrGI+Bm8kzp8q6PbtR8t3POwHV0+cgkwZfnLopp24K2ADu6FCxkmkCcTTyJo7Ck/hF6XVblVmAwGxe6oc7Uj/ccWYLF99sdnCsZwJgi8AwJosp8RYAQXHrrxIUN5PkRv8R65mA2BJwAraUUg8uXqd329Kve4lpuwl7x3bRbw4AELw8qgAd/9XWQJ6oyopVRx5xjqjacuK6NjjWM4FeuN9nr3So+BC4r2rbqRruOndW997PN0DeHh85xzTwEfgBfEfkg3PyQKo/v3nv11qkBsSeIeVkcGTGeRTOCKwCYzD4MhoXbDVLcwCB9y3zNP16oGtkXhbXfh3n5OTk/AEs1JCpQGpYDQAAAABJRU5ErkJggg==" style="width: 25px; margin: 0px 0px 0px 170px">
                <h6 class="card-title" style="padding: 0px 0px 0px 0px"></h6>
                <a href="{{url('/sptmasa')}}" class="btn btn-outline-light" style="margin: 0px 0px 0px 55px; font-weight: bold; color: black">Perekaman Bukti Penyetoran</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABs0lEQVRIie2VvW4TQRSFv3t3CQ/ADoifBinp0iAKBAQJngAJ6qQgisgToCAZszJvEQkJuYcnQEoREmjoqCIQDY6UrPMACO+9FFmjtWPHE8clp5o9M/udmXv3R5ihvHHlpku56cJdcT5LUq7KzOB5mDfzLeBG3xPno84qoAfzQBgIFe6k5wUf75xnStEoyZ4KvAcuAgjyJfWcOfPsDc4ycPVUGOykre7SIPy4LGZZlmh3vSQ8EfMPQCGmz1Oz0AJ/EblhGwWvrDWzjESL9R6XH6fqP6R18DMFXwZQ1fuSH+7Gl2Wwof9CPBxdaB2+7BsKXAOIhjfCwhg4wC8V3taNMzXZG2HB1LeA6yPhKo8kL77XzejHdBp4dMC08OiAUu3dGHjnNHhUgOfMCXJ7DPxhH95rXtrpNbNPw4simpwtUr2ZNZ0oiyD3Rt098QSlya3a5W/HdyeVpa6JJ0jUt8uStQT5ykHxTTb5EwOODpC8uwfsnQVa18w+1/8DzhWwD+B5WJqwdqz8VXhQDTvDcykibdw3zHy7bGZTBRhejaR9IkCleG0EcF+h+jdMoQ5IW7XIhyf+AseUuIUD94SdAAAAAElFTkSuQmCC" style="width: 20px; margin: 0px 0px 0px 180px">
                <h6 class="card-title" style="padding: 0px 0px 0px 0px"></h6>
                <a href="{{url('/penyiapanspt')}}" class="btn btn-outline-light" style="margin: 0px 0px 0px 40px; font-weight: bold; color:black">Penyiapan SPT Masa PPh Unifikasi</a>
              </div>
            </div>
          </div>
        </div>
        <div style="padding:1%"></div>
        <div class="card">
          <div class="card-body" style="background-color:#f0f0f0">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                  <span style="color: #FFFFFF; font-weight: bold;">
                    <img style="width: 20px; margin:0px 0px 5px 0px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC7ElEQVRoge2aO2tUQRiGny8kaqExkRittFew0agYrJYkqAFBVNKk8C/o31Dsogg2ghcQLEIUvIGFIRo3pLFPUsYL8Va4aV6Lc45M1nOZk8zZBdkHFia733zzvme+mXMLdGgv1m4BeUg6CZyK/5w1s/ft1OONpD5JT/UvM5J2t1tfLpL6JdVTxP810W6NmXiITziR9OkuSgjUgANATwCNv4F7ZraW8fs4cNQjzzCQvR4kDUq6I2nd42iU5UGeMknXPHJczUtwWNJKBcIT7jeN1y9ptKSJ40lsd1PHQeAZUckkvAPmgPW8I+fJZ+CuKx54CRyRNGFmTwDM7IYkgOspOWbMbD41u6KySViTdCaA6KyxmhfsuqQLTTHNM1GX1JeX0K35Vor3MVGPZywz6UUn0VwbxOeZmMwVHwe505VWe60Qn2kiiy6nvctp/worfcOC9dnne4BHksaKAruKAkIQL7zn+IlP+AjUi4IqNxCLfwEMlei2CIyY2deiwEoNVC0eKjTQCvFQkYF4wb6inPgFoJaIj3esh/En/eRFwdXoZii52yQsEB159yr1CjARt+eBm2kdg86ApG1EZbNV8QC9TjvzLix0CV0GjpWIzxLvTRUGfFkExrYiHgIakNQLjHiGl95tsgg5A+eBHR5xwcRDWAOXPGKCiodABuLyGS0Iq+Ps86EINQM1YHvK9w1gGpgEhre6YNMIdSL75LQbRFeej4FpM/sRaIxUghgws1lJp4E9wJuqRbsEu5Qws7ehcpWhJTc0VdIx0G46BtrNf2Xgp9Pe2WohKbg3NJnnFdfAstMeDi6nPK6GpcJoRS/W3Ie7Z6vTVqhl3NHRkO+LPUm3nY7fJJ2rWGuahvF47ISpvPgN74kl7QU+AAedr+eBWWA1uNqN7CcqG/dRzDIwZGZfvLMoesW07PEEuWqWJB3a1KGQNCDplqL6azUNSVOSBny05v6rgaLFUyMqqX2bOhr+rAIrwGsz+17xWB2C8Qcjc2gawHJhagAAAABJRU5ErkJggg==">
                    Lengkapi SPT
                  </span>
                </div>
                <div>
                  <form>
                    <div class="container">
                      <div class="row">
                        <div class="col-3" style="padding: 8px; ">
                          <label style="font-size: 15px">Nama</label>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="" value="{{ $nama }}" style="width: 100%;">
                        </div>
                        <div class="col-3">
                          <label style="font-size: 15px">Tahun/Masa Pajak</label>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="" value="{{ $tahun_pajak }}-{{ $masa_pajak }}" style="width: 100%;">
                        </div>
                        <div class="col-3">
                          <label style="font-size: 15px">NPWP</label>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="" value="{{ $npwp }}" style="width: 100%;">
                        </div>
                        <div class="col-3">
                          <label style="font-size: 15px">Pembetulan</label>
                        </div>
                        <div class="col-3">
                          <input type="text" placeholder="" value="0" style="width: 100%;">
                        </div>
                      </div>
                  </form>
                </div>
              </div>
              <!--LAMPIRAN DOSS-->
              <form action="/simpan_doss_dopp" method="POST">
                @csrf
                <div style="background-color: #FFFFFF">
                  <div class="accordion" id="accordion">
                    <div class="accordion-item"></div>
                    <h6 class="accordion-header" id="headingOne">
                      <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Perekaman Lampiran DOSS
                      </button>
                    </h6>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <div id="form1">
                          <p>Imbalan yang Diterima/Diperoleh Sehubungan dengan Pengangkutan Orang dan/atau Barang Termasuk Penyewaan Kapal Laut Oleh Perusahaan Pelayaran Dalam Negeri</p>
                        </div>
                        <div class="container">
                          <div class="row justify-content-start">
                            <div class="col-4"></div>
                            <div class="col-4">
                              <label style="font-size: 15px">Jumlah Dasar Pengenaan Pajak (RP)</label>
                            </div>
                            <div class="col-4">
                              <label style="font-size: 15px; padding: 0px 0px 5px 40px">Jumlah PPh (RP)</label>
                            </div>
                            <div class="col-4" style="padding: 3px">
                              <label style="font-size: 15px">a. Penghasilan dari Indonesia</label>
                            </div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_dpp1" oninput="oninput_doss_dopp()"  id="jumlah_dpp1" placeholder="0" style="width: 70%;">
                            </div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_pph1" oninput="oninput_doss_dopp()"  id="jumlah_pph1" placeholder="0" style="width: 70%;">
                            </div>

                            <div class="col-4" style="padding: 3px">
                              <label style="font-size: 15px">b. Penghasilan dari Luar Indonesia</label>
                            </div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_dpp2"  id="jumlah_dpp2" oninput="oninput_doss_dopp()" placeholder="0" style="width: 70%;">
                            </div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_pph2"  id="jumlah_pph2" oninput="oninput_doss_dopp()" placeholder="0" style="width: 70%;">
                            </div>

                            <div class="col-4" style="padding: 3px">
                              <label style="font-size: 15px">c. PPh Pasal 24 yang dapat diperhitungkan</label>
                            </div>
                            <div class="col-4" style="padding: 3px"></div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_pph3" oninput="oninput_doss_dopp()"  id="jumlah_pph3" placeholder="0" style="width: 70%;">
                            </div>

                            <div class="col-4" style="padding: 3px">
                              <label style="font-size: 15px">d. PPh Pasal yang dipotong Pihak Lain</label>
                            </div>
                            <div class="col-4" style="padding: 3px"></div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_pph4" oninput="oninput_doss_dopp()"  id="jumlah_pph4" placeholder="0" style="width: 70%;">
                            </div>

                            <div class="col-4" style="padding: 3px">
                              <label style="font-size: 15px">e. PPh yang disetor sendiri</label>
                            </div>
                            <div class="col-4" style="padding: 3px"></div>
                            <div class="col-4" style="padding: 3px">
                              <input type="text" name="jumlah_pph5" oninput="oninput_doss_dopp()" id="jumlah_pph5" placeholder="0" style="width: 70%;">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--LAMPIRAN DOPP-->
                <div style="padding:5px;"></div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingTwo">
                    <button class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Perekaman Lampiran DOPP
                    </button>
                  </h6>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div class="container">
                        <div class="row justify-content-start">
                          <div class="col-6"></div>
                          <div class="col-3">
                            <label style="font-size: 15px; text-align:center">Jumlah Dasar Pengenaan Pajak (RP)</label>
                          </div>
                          <div class="col-2">
                            <label style="font-size: 15px;  text-align:center">Jumlah PPh (RP)</label>
                          </div>

                          <div class="col-6">
                            <label value='22-101-01' data-percent="0.0025" style="font-size: 15px">22-101-01 - Penghasilan Sehubungan dengan Transaksi Penjualan Barang, Penyerahan Jasa, dan/atau Persewaan serta Penghasilan Lain Sehubungan dengan Penggunaan Harta yang Dilakukan Melalui Pihak Lain dalam Sistem Informasi Pengadaan</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="hidden" name="pajak_penghasilan_id"  id="pajak_penghasilan_id" value="{{ $id}}">

                            <input type="text" name="jumlah_dpp6" oninput="oninput_doss_dopp()" id="jumlah_dpp6" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph6" oninput="oninput_doss_dopp()" id="jumlah_pph6" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='22-405-01' data-percent="0.0025" style="font-size: 15px">22-405-01 - Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Merupakan Pedagang Fisik Aset Kripto</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp7" oninput="oninput_doss_dopp()" id="jumlah_dpp7" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph7" oninput="oninput_doss_dopp()" id="jumlah_pph7" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='22-405-02' data-percent="0.0025" style="font-size: 15px">22-405-02 - Penghasilan Sehubungan dengan Aset Kripto yang dipungut oleh Penyelenggara Perdagangan Melalui Sistem Elektronik yang Bukan Merupakan Pedagang Fisik Aset Kripto</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp8" oninput="oninput_doss_dopp()" id="jumlah_dpp8" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph8" oninput="oninput_doss_dopp()" id="jumlah_pph8" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='27-100-07' data-percent="0.0025" style="font-size: 15px">27-100-07 - Penghasilan dari Penjualan/Pengalihan Saham (PPh Pasal 26)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp9" oninput="oninput_doss_dopp()" id="jumlah_dpp9" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph9" oninput="oninput_doss_dopp()" id="jumlah_pph9" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='27-102-03' data-percent="0.0025" style="font-size: 15px">27-102-03 - Bunga Obiligasi (PPh Pasal 26)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp10" oninput="oninput_doss_dopp()" id="jumlah_dpp10" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp10" oninput="oninput_doss_dopp()" id="jumlah_dpp10" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-401-01' data-percent="0.0025" style="font-size: 15px">28-401-01 - Bunga Obligasi, Surat Utang Negara, atau Obligasi Daerah yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap.</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp11" oninput="oninput_doss_dopp()" id="jumlah_dpp11" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph11" oninput="oninput_doss_dopp()" id="jumlah_pph11" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-401-04' data-percent="0.0025" style="font-size: 15px">28-401-04 - Diskonto Surat Perbendaharaan Negara yang diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp12" oninput="oninput_doss_dopp()" id="jumlah_dpp12" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph12" oninput="oninput_doss_dopp()" id="jumlah_pph12" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-401-05' data-percent="0.0025" style="font-size: 15px">28-401-05 - Diskonto Surat Perbendaharaan Negara yang Diterima Wajib Pajak Penduduk/Berkedudukan di Luar Negeri</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp13" oninput="oninput_doss_dopp()" id="jumlah_dpp13" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph13" oninput="oninput_doss_dopp()" id="jumlah_pph13" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-401-06' data-percent="0.0025" style="font-size: 15px">28-401-06 - Bunga Obligasi yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp14" oninput="oninput_doss_dopp()" id="jumlah_dpp14" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph14" oninput="oninput_doss_dopp()" id="jumlah_pph14" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-01' data-percent="0.0025" style="font-size: 15px">28-404-01 - Bunga Tabungan dan Bunga Diskonto yang Ditempatkan di Dalam Negeri yang Dananya Bersumber Selain dari Devisa Hasil Ekspor (DHE)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp15" oninput="oninput_doss_dopp()" id="jumlah_dpp15" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph15" oninput="oninput_doss_dopp()" id="jumlah_pph15" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-02' data-percent="0.0025" style="font-size: 15px">28-404-02 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 1 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp16" oninput="oninput_doss_dopp()" id="jumlah_dpp16" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph16" oninput="oninput_doss_dopp()" id="jumlah_pph16" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-03' data-percent="0.0025" style="font-size: 15px">28-404-03 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 3 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp17" oninput="oninput_doss_dopp()" id="jumlah_dpp17" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph17" oninput="oninput_doss_dopp()" id="jumlah_pph17" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-04' data-percent="0.0025" style="font-size: 15px">28-404-04 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang IDR bersumber dari DHE tenor 6 bulan atau lebih)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp18" oninput="oninput_doss_dopp()" id="jumlah_dpp18" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph18" oninput="oninput_doss_dopp()" id="jumlah_pph18" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-05' data-percent="0.0025" style="font-size: 15px">28-404-05 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 1 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp19" oninput="oninput_doss_dopp()" id="jumlah_dpp19" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph19" oninput="oninput_doss_dopp()" id="jumlah_pph19" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-06' data-percent="0.0025" style="font-size: 15px">28-404-06 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 3 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp20" oninput="oninput_doss_dopp()" id="jumlah_dpp20" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph20" oninput="oninput_doss_dopp()" id="jumlah_pph20" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-07' data-percent="0.0025" style="font-size: 15px">28-404-07 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor 6 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp21" oninput="oninput_doss_dopp()" id="jumlah_dpp21" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph21" oninput="oninput_doss_dopp()" id="jumlah_pph21" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-08' data-percent="0.0025" style="font-size: 15px">28-404-08 - Bunga Deposito yang Ditempatkan di Dalam Negeri (mata uang USD bersumber dari DHE tenor lebih 6 bulan)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp22" oninput="oninput_doss_dopp()" id="jumlah_dpp22" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph22" oninput="oninput_doss_dopp()" id="jumlah_pph22" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-09' data-percent="0.0025" style="font-size: 15px">28-102-09 - Bunga Deposito/Tabungan yang Ditempatkan di Luar Negeri Melalui Bank yang Didirikan atau Bertempat Kedudukan di Indonesia atau Cabang Bank Luar Negeri di Indonesia</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp23" oninput="oninput_doss_dopp()" id="jumlah_dpp23" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph23" oninput="oninput_doss_dopp()" id="jumlah_pph23" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-10' data-percent="0.0025" style="font-size: 15px">28-404-10 - Diskonto Sertifikat Bank Indonesia</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp24" oninput="oninput_doss_dopp()" id="jumlah_dpp24" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph24" oninput="oninput_doss_dopp()" id="jumlah_pph24" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-404-11' data-percent="0.0025" style="font-size: 15px">28-404-11 - Jasa Giro</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp25" oninput="oninput_doss_dopp()" id="jumlah_dpp25" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph25" oninput="oninput_doss_dopp()" id="jumlah_pph25" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-406-01' data-percent="0.0025" style="font-size: 15px">28-406-01 - Transaksi Penjualan Saham di Bursa Efek (Bukan Saham Pendiri)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp26" oninput="oninput_doss_dopp()" id="jumlah_dpp26" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph26" oninput="oninput_doss_dopp()"  id="jumlah_pph26" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-407-01' data-percent="0.0025" style="font-size: 15px">28-407-01 - Transaksi Penjualan Saham di Bursa Efek (Saham Pendiri)</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp27" oninput="oninput_doss_dopp()" id="jumlah_dpp27" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_pph27" oninput="oninput_doss_dopp()" id="jumlah_pph27" placeholder="0" style="width: 60%;">
                          </div>

                          <div class="col-6">
                            <label value='28-408-01' data-percent="0.0025" style="font-size: 15px">28-408-01 - Transaksi Penjualan Saham Milik Perusahaan Modal Ventura Tidak di Bursa Efek</label>
                          </div>
                          <div class="col-3" style="padding: 5px">
                            <input type="text" name="jumlah_dpp28" oninput="oninput_doss_dopp()" id="jumlah_dpp28" placeholder="0" style="width: 60%; margin: 0px 0px 0px 45px">
                          </div>
                          <div class="col-3" style="padding: 5px"> 
                            <input type="text" name="jumlah_pph28" oninput="oninput_doss_dopp()" id="jumlah_pph28" placeholder="0" style="width: 60%;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--DAFTAR BUKTI SETOR-->
                <div style="padding:5px;"></div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingThree">
                    <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Daftar Bukti Setor
                    </button>
                  </h6>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div style="padding:5px;"></div>
                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                          <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
                          <table class="table table-bordered">
                            <div style="padding: 0px 15px;">
                              <table class="table w-100 table-bordered table-hover">
                                <thead>
                                  <tr style="background-color: rgb(4, 153, 195);">
                                    <th class="text" style="color: #FFFFFF;" scope="col">NO</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">NOMOR BUKTI</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">JENIS PAJAK</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">JENIS SETORAN</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">MASA TAHUN PAJAK</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">TANGGAL SETOR</th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">JUMLAH SETOR</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($sptmasa as $data)
                                  <tr style="font-weight: 200; font-size: 15px; text-align: center;">
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $data['nomor_bukti']}}</td>
                                    <td>{{ $data['jenis_pajak'] }}</td>
                                    <td>{{ $data['jenis_setoran'] }}</td>
                                    <td>{{ $masa_pajak }}-{{ $tahun_pajak }}</td>
                                    <td>{{ $data['tanggal_setor']}}</td>
                                    <td>{{ $data['jumlah_setor'] }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--PENANDATANGAN-->
                  <div style="padding:5px;"></div>
                  <div class="accordion-item">
                    <h6 class="accordion-header" id="headingFour">
                      <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Penandatangan
                      </button>
                    </h6>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                      <div class="accordion-body">
                        <div class="col-md-4">
                          <label for="validationDefault04" class="form-label">Penandatangan
                            Sebagai</label>
                          <select id="pilihsebagai" name="pilihsebagai" class="form-select" required>
                            <option value="kuasa">Kuasa</option>
                            <option value="pengurus">Pengurus</option>
                          </select>
                        </div>
                        <div class="col-md-4" id="kuasa">
                          <label for="validationDefault04" class="form-label">Penandatangan
                            Bukti Potong</label>
                          <select  class="form-select" name="pengaturan_id" id="pengaturan_id" required>
                            <option selected disabled value="">Pilih Penandatangan
                            </option>
                            @foreach ($pengaturan as $p)
                            <option value="{{ $p['id'] }}">{{ $p['nama'] }}</option>
                            @endforeach
                          </select>
                        </div>
                        
                        <div class="container">
                          <div class="row" style="padding: 0% 0% 10% 41%">
                            <div class="col">
                              <input type="hidden" name="tahun_pajak" id="tahun_pajak" value="{{ $tahun_pajak}}">
                              <input type="hidden" name="masa_pajak" id="masa_pajak" value="{{ $masa_pajak}}">
                              <button class="button button1"  type="submit">
                                <span style="font-size: 18px">Simpan</span></button>
                              <button class="button button2" type="reset">
                                <span style="font-size: 18px">Batal</span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div style="padding: 1%"></div>
      </div>
    </div>
  </div>
  </div>
  <!-- Footer -->
  <div class="shadow-sm" id="footer" style="background-color: rgba(0,0,0,0.7); height:auto">
    <div class="container text-center text-md-start mt-5">
      <img src="{{ asset('taxcentre.png') }}" alt="">
      <div>
        <span style="color: #FFF;"><i>Alamat: <br>
            Jl. Ahmad Yani Batam Kota. Kota Batam. <br>
            Kepulauan Riau. Indonesia <br><br>
            Email : info@polibatam.ac.id <br>
            Phone : +62-778-469858 Ext.1017 <br>
            Fax : +62-778-463620 <br>
            Email : info@polibatam.ac.id</i></span>
      </div>
    </div>
    <div class="text-center">
      <span style="color: #FFF; font-size: 36px; font-family:'Satisfy',serif;"><i>Tax Center</span><br>
      <span style="color: #FFF; font-size: 14px">Politeknik Negeri Batam</i></span><br>

      <div class="media-social">
        <a href=""><i class="fa-brands fa-twitter"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-instagram"></i></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-skype"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
      </div>

      <div class="copyright">
        <i class="fa-regular fa-copyright"></i> Copyright
        <strong>Polibatam Software Team</strong>
        All Rights Reserved
      </div>
    </div>
  </div>
  <!-- End Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>
<script>
function simpan1() {
      var tahun_pajak = document.getElementById("tahun_pajak");
      var masa_pajak = document.getElementById("masa_pajak");
      // var oke = document.getElementById("oke");
      location.href = `kirimspt?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`

    }

  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";
  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("button-check").style.display = "inline-block";
    document.getElementById("valid").style.display = "inline-block";
    document.getElementById("invalid").style.display = "inline-block";

  }

  function changeFormat() {
    const dpp1 = document.getElementById("dpp1");
    // const myElement2 = document.getElementById("jumlah_setor");
    document.getElementById("jumlah_dpp1").value = numeral(dpp1).format();
    // myElement2.value = formatPercent(newVal);
  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }

  function oninput_doss_dopp () {
    jumlah_dpp1_val = document.querySelector('#jumlah_dpp1').value
    document.getElementById('jumlah_dpp1').value = numeral(jumlah_dpp1_val).format();

    jumlah_dpp2_val = document.querySelector('#jumlah_dpp2').value
    document.getElementById('jumlah_dpp2').value = numeral(jumlah_dpp2_val).format();

    // jumlah_dpp3_val = document.querySelector('#jumlah_dpp3').value
    // document.getElementById('jumlah_dpp3').value = numeral(jumlah_dpp3_val).format();

    // jumlah_dpp4_val = document.querySelector('#jumlah_dpp4').value
    // document.getElementById('jumlah_dpp4').value = numeral(jumlah_dpp4_val).format();

    // jumlah_dpp5_val = document.querySelector('#jumlah_dpp5').value
    // document.getElementById('jumlah_dpp5').value = numeral(jumlah_dpp5_val).format();

    jumlah_dpp6_val = document.querySelector('#jumlah_dpp6').value
    document.getElementById('jumlah_dpp6').value = numeral(jumlah_dpp6_val).format();

    jumlah_dpp7_val = document.querySelector('#jumlah_dpp7').value
    document.getElementById('jumlah_dpp7').value = numeral(jumlah_dpp7_val).format();

    jumlah_dpp8_val = document.querySelector('#jumlah_dpp8').value
    document.getElementById('jumlah_dpp8').value = numeral(jumlah_dpp8_val).format();

    jumlah_dpp9_val = document.querySelector('#jumlah_dpp9').value
    document.getElementById('jumlah_dpp9').value = numeral(jumlah_dpp9_val).format();

    jumlah_dpp10_val = document.querySelector('#jumlah_dpp10').value
    document.getElementById('jumlah_dpp10').value = numeral(jumlah_dpp10_val).format();

    jumlah_dpp11_val = document.querySelector('#jumlah_dpp11').value
    document.getElementById('jumlah_dpp11').value = numeral(jumlah_dpp11_val).format();

    jumlah_dpp12_val = document.querySelector('#jumlah_dpp12').value
    document.getElementById('jumlah_dpp12').value = numeral(jumlah_dpp12_val).format();

    jumlah_dpp13_val = document.querySelector('#jumlah_dpp13').value
    document.getElementById('jumlah_dpp13').value = numeral(jumlah_dpp13_val).format();

    jumlah_dpp14_val = document.querySelector('#jumlah_dpp14').value
    document.getElementById('jumlah_dpp14').value = numeral(jumlah_dpp14_val).format();

    jumlah_dpp15_val = document.querySelector('#jumlah_dpp15').value
    document.getElementById('jumlah_dpp15').value = numeral(jumlah_dpp15_val).format();

    jumlah_dpp16_val = document.querySelector('#jumlah_dpp16').value
    document.getElementById('jumlah_dpp16').value = numeral(jumlah_dpp16_val).format();

    jumlah_dpp17_val = document.querySelector('#jumlah_dpp17').value
    document.getElementById('jumlah_dpp17').value = numeral(jumlah_dpp17_val).format();

    jumlah_dpp18_val = document.querySelector('#jumlah_dpp18').value
    document.getElementById('jumlah_dpp18').value = numeral(jumlah_dpp18_val).format();

    jumlah_dpp19_val = document.querySelector('#jumlah_dpp19').value
    document.getElementById('jumlah_dpp19').value = numeral(jumlah_dpp19_val).format();

    jumlah_dpp20_val = document.querySelector('#jumlah_dpp20').value
    document.getElementById('jumlah_dpp20').value = numeral(jumlah_dpp20_val).format();

    jumlah_dpp21_val = document.querySelector('#jumlah_dpp21').value
    document.getElementById('jumlah_dpp21').value = numeral(jumlah_dpp21_val).format();

    jumlah_dpp22_val = document.querySelector('#jumlah_dpp22').value
    document.getElementById('jumlah_dpp22').value = numeral(jumlah_dpp22_val).format();

    jumlah_dpp23_val = document.querySelector('#jumlah_dpp23').value
    document.getElementById('jumlah_dpp23').value = numeral(jumlah_dpp23_val).format();

    jumlah_dpp24_val = document.querySelector('#jumlah_dpp24').value
    document.getElementById('jumlah_dpp24').value = numeral(jumlah_dpp24_val).format();

    jumlah_dpp25_val = document.querySelector('#jumlah_dpp25').value
    document.getElementById('jumlah_dpp25').value = numeral(jumlah_dpp25_val).format();

    jumlah_dpp26_val = document.querySelector('#jumlah_dpp26').value
    document.getElementById('jumlah_dpp26').value = numeral(jumlah_dpp26_val).format();

    jumlah_dpp27_val = document.querySelector('#jumlah_dpp27').value
    document.getElementById('jumlah_dpp27').value = numeral(jumlah_dpp27_val).format();

    jumlah_dpp28_val = document.querySelector('#jumlah_dpp28').value
    document.getElementById('jumlah_dpp28').value = numeral(jumlah_dpp28_val).format();

    jumlah_pph1_val = document.querySelector('#jumlah_pph1').value
    document.getElementById('jumlah_pph1').value = numeral(jumlah_pph1_val).format();

    jumlah_pph2_val = document.querySelector('#jumlah_pph2').value
    document.getElementById('jumlah_pph2').value = numeral(jumlah_pph2_val).format();

    jumlah_pph3_val = document.querySelector('#jumlah_pph3').value
    document.getElementById('jumlah_pph3').value = numeral(jumlah_pph3_val).format();

    jumlah_pph4_val = document.querySelector('#jumlah_pph4').value
    document.getElementById('jumlah_pph4').value = numeral(jumlah_pph4_val).format();

    jumlah_pph5_val = document.querySelector('#jumlah_pph5').value
    document.getElementById('jumlah_pph5').value = numeral(jumlah_pph5_val).format();

    jumlah_pph6_val = document.querySelector('#jumlah_pph6').value
    document.getElementById('jumlah_pph6').value = numeral(jumlah_pph6_val).format();

    jumlah_pph7_val = document.querySelector('#jumlah_pph7').value
    document.getElementById('jumlah_pph7').value = numeral(jumlah_pph7_val).format();

    jumlah_pph8_val = document.querySelector('#jumlah_pph8').value
    document.getElementById('jumlah_pph8').value = numeral(jumlah_pph8_val).format();

    jumlah_pph9_val = document.querySelector('#jumlah_pph9').value
    document.getElementById('jumlah_pph9').value = numeral(jumlah_pph9_val).format();

    jumlah_pph10_val = document.querySelector('#jumlah_pph10').value
    document.getElementById('jumlah_pph10').value = numeral(jumlah_pph10_val).format();

    jumlah_pph11_val = document.querySelector('#jumlah_pph11').value
    document.getElementById('jumlah_pph11').value = numeral(jumlah_pph11_val).format();

    jumlah_pph12_val = document.querySelector('#jumlah_pph12').value
    document.getElementById('jumlah_pph12').value = numeral(jumlah_pph12_val).format();

    jumlah_pph13_val = document.querySelector('#jumlah_pph13').value
    document.getElementById('jumlah_pph13').value = numeral(jumlah_pph13_val).format();

    jumlah_pph14_val = document.querySelector('#jumlah_pph14').value
    document.getElementById('jumlah_pph14').value = numeral(jumlah_pph14_val).format();

    jumlah_pph15_val = document.querySelector('#jumlah_pph15').value
    document.getElementById('jumlah_pph15').value = numeral(jumlah_pph15_val).format();

    jumlah_pph16_val = document.querySelector('#jumlah_pph16').value
    document.getElementById('jumlah_pph16').value = numeral(jumlah_pph16_val).format();

    jumlah_pph17_val = document.querySelector('#jumlah_pph17').value
    document.getElementById('jumlah_pph17').value = numeral(jumlah_pph17_val).format();

    jumlah_pph18_val = document.querySelector('#jumlah_pph18').value
    document.getElementById('jumlah_pph18').value = numeral(jumlah_pph18_val).format();

    jumlah_pph19_val = document.querySelector('#jumlah_pph19').value
    document.getElementById('jumlah_pph19').value = numeral(jumlah_pph19_val).format();

    jumlah_pph20_val = document.querySelector('#jumlah_pph20').value
    document.getElementById('jumlah_pph20').value = numeral(jumlah_pph20_val).format();

    jumlah_pph21_val = document.querySelector('#jumlah_pph21').value
    document.getElementById('jumlah_pph21').value = numeral(jumlah_pph21_val).format();

    jumlah_pph22_val = document.querySelector('#jumlah_pph22').value
    document.getElementById('jumlah_pph22').value = numeral(jumlah_pph22_val).format();

    jumlah_pph23_val = document.querySelector('#jumlah_pph23').value
    document.getElementById('jumlah_pph23').value = numeral(jumlah_pph23_val).format();

    jumlah_pph24_val = document.querySelector('#jumlah_pph24').value
    document.getElementById('jumlah_pph24').value = numeral(jumlah_pph24_val).format();

    jumlah_pph25_val = document.querySelector('#jumlah_pph25').value
    document.getElementById('jumlah_pph25').value = numeral(jumlah_pph25_val).format();

    jumlah_pph26_val = document.querySelector('#jumlah_pph26').value
    document.getElementById('jumlah_pph26').value = numeral(jumlah_pph26_val).format();

    jumlah_pph27_val = document.querySelector('#jumlah_pph27').value
    document.getElementById('jumlah_pph27').value = numeral(jumlah_pph27_val).format();

    jumlah_pph28_val = document.querySelector('#jumlah_pph28').value
    document.getElementById('jumlah_pph28').value = numeral(jumlah_pph28_val).format();
} 
</script>

</html>