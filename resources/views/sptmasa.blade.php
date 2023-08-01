<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>SPT Masa | E-Bupot</title>
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
            <span>{{ $nama }} &nbsp;</span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABL0lEQVR4nOXTMUoDQRQG4BWtjV5AL2Ay7+2CrQYE8QB2IRaJSS0Woo13EBGWebOBiAhewVSpNK2CuYCI8Q75RaMBJW52ZqcJPvibKfabf3YmCP7d4HRjAaLK0LQHrTZxszvvF0iiIgz3YRjjCD1BSmt+gIviMoRefgDj0DNaaik/YuhwMsDfOfCBtNMRaudHhM6nIGc+mmylIqLKuZFRG9aTAYq9AJ8IgjmI2ofhewi/QugOhmof68HMDaTE0NyE8BFM2EBLkb+PG9qB4cc/fvwDknA75+7pBMLD9NvFQ2g6dm1QnfLS8SsVOyCOCjD0ZoUID3C5vmjRImxYtsDX66/ZHNW1G8JX2RGhrhMi1LVAuOeGcM/muDqOyK1Nk1UkVB9dgIxJqI44WsmMzOS8AyPtL+e6fM6uAAAAAElFTkSuQmCC">            </a>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class='content1'>
    <div class="content2" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px; margin: 0px auto">
      <nav class="navbar navbar-inverse navbar-fixed-top height-auto" role="navigation" style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px; border-bottom:0px">
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link" type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" id="nav-pajak-tab"  type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link active" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
      <div class="container">
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
                <button id="penyiapanspt" onclick="penyiapanspt()" class="btn btn-outline-light" style="margin: 0px 0px 0px 40px; font-weight: bold; color:black">Penyiapan SPT Masa PPh Unifikasi</button>
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
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAAA/0lEQVRYhe2VO07DQBCGx5QpMUVkSqCL6KJcIRHnImWEuAGInAafwVacKCmDwE3SfBQeS8vD68XgpdlPWs3q1zz+YrQrEggE/pmovgB4HRxFkYjIic+hVvhI0UP/tTnAZqAApj0YmJkmGg04NjsHlsCLnicgcaz9nQHgDMj5SgbEPgzcaeozcKEnVW3xpwaAOVACt4a20tSxoU1Uy221XQy8qfxqaEfVBoY2UO1gq/1uTts7cC8ipcaancaRoV1r3LbUNtNhB1LgErjqbQcaGsRUG/+ZDDjt3YDmJsAj1RuwBx6AoWOt3QDVazVzafYTgBtg42IAPP4F4TsOBAKBd4enA1OrbkVoAAAAAElFTkSuQmCC" style="width: 20px">
                    <span style="color: #FFFFFF; font-weight: bold">Perekaman Bukti Penyetoran</span>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-3">
                      <label style="font-size: 15px">Tahun Pajak</label>
                    </div>
                    <div class="col" style="width: 40%">
                      <select class="form-select" id="tahun_pajak" required>
                        <option value="2022" @if ($tahun_pajak=='2022' ) selected="selected" @endif>2022</option>
                        <option value="2023" @if ($tahun_pajak=='2023' ) selected="selected" @endif>2023</option>
                        <option value="2024" @if ($tahun_pajak=='2024' ) selected="selected" @endif>2024</option>
                      </select>
                    </div>
                    <div class="col">
                      <label style="font-size: 15px">Masa Pajak</label>
                    </div>
                    <div class="col" style="width: 30%">
                      <select class="form-select" id="masa_pajak" required>
                        <option value="Januari" @if ($masa_pajak=='Januari' ) selected="selected" @endif>Januari</option>
                        <option value="Februari" @if ($masa_pajak=='Februari' ) selected="selected" @endif>Februari</option>
                        <option value="Maret" @if ($masa_pajak=='Maret' ) selected="selected" @endif>Maret</option>
                        <option value="April" @if ($masa_pajak=='April' ) selected="selected" @endif>April</option>
                        <option value="Mei" @if ($masa_pajak=='Mei' ) selected="selected" @endif>Mei</option>
                        <option value="Juni" @if ($masa_pajak=='Juni' ) selected="selected" @endif>Juni</option>
                        <option value="Juli" @if ($masa_pajak=='Juli' ) selected="selected" @endif>Juli</option>
                        <option value="Agustus" @if ($masa_pajak=='Agustus' ) selected="selected" @endif>Agustus</option>
                        <option value="September" @if ($masa_pajak=='September' ) selected="selected" @endif>September</option>
                        <option value="Oktober" @if ($masa_pajak=='Oktober' ) selected="selected" @endif>Oktober</option>
                        <option value="November" @if ($masa_pajak=='November' ) selected="selected" @endif>November</option>
                        <option value="Desember" @if ($masa_pajak=='Desember' ) selected="selected" @endif>Desember</option>
                      </select>
                    </div>
                    <div class="col">
                      <button class="button button1" onclick="cek()">Cek</button>
                    </div>
                  </div>
                </div>

                <!--JUMLAH TAGIHAN PER MASA PAJAK-->
                <div class="accordion" id="accordion">
                  <div class="accordion-item"></div>
                  <h6 class="accordion-header" id="headingOne">
                    <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Jumlah Tagihan Per Masa Pajak
                    </button>
                  </h6>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div id="form1">
                        <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; margin: 10px 0px 10px 0px; padding: 10px">
                          <span style="color: #FFFFFF; font-weight: bold;">
                            <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                            Daftar Tagihan Pemotongan atas Bukti Pemotongan PPh Unifikasi
                          </span>
                        </div>
                        <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">Tampilkan</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
                        <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">entri</label>
                        <table class="table table-bordered">
                          <div style="padding: 0px 15px;">
                            <table class="table w-100 table-bordered table-hover">
                              <thead>
                                <tr style="background-color: rgb(4, 153, 195);">
                                  <th class="text" style="color: #FFFFFF;" scope="col">JENIS PAJAK</th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">JENIS SETORAN</th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">PPH YANG DIPOTONG</th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">ID BILLING</th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($sptmasa as $data)
                                <tr style="font-weight: 200; font-size: 15px; text-align: center;">
                                  <td>{{ $data['jenis_pajak'] }}</td>
                                  <td>{{ $data['jenis_setoran'] }}</td>
                                  <td>{{ $data['total_pajak_penghasilan'] }}</td>
                                  <td>{{ $data['id_billing'] }}</td>
                                  <td>
                                    <a href="{{url('/update_id_billing/'.$data['id'].'?'.'masa_pajak='.$masa_pajak.'&'.'tahun_pajak='.$tahun_pajak )}}" class="button">
                                      <img src="billing.png" style="width: 20px"></a>
                                    <a  href="{{url('/surat_billing/'.$data['id'])}}" class="button">
                                      <img src="print.png" style="width: 20px"></a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--BUKTI REKAM PENYETORAN-->
                <div style="padding:5px;"></div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingTwo">
                    <button class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Bukti Rekam Penyetoran
                    </button>
                  </h6>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 5px">
                        <span style="color: #FFFFFF; font-weight: bold">
                          <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                          Daftar Bukti Setor
                        </span>
                        <span><a href="tambah" type="button" style=" margin-left: 430px; color:white; text-decoration: none; font-weight:bold">
                          Tambah</a></span>
                        
                      </div>
                      <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">Tampilkan</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
                      <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">entri</label>
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
                              @foreach ($daftarbuktisetor as $data)
                              <tr style="font-weight: 200; font-size: 15px; text-align: center;">
                                <td>{{ $loop->iteration}}</td>
                                <td> {{ randomStringLetterNumber12Char() }}</td>
                                <td>{{ $data['jenis_pajak'] }}</td>
                                <td>{{ $data['jenis_setoran'] }}</td>
                                <td>{{ $masa_pajak }}-{{ $tahun_pajak }}</td>
                                <td>{{ date('d-m-Y', time()) }}</td>
                                <td>{{ $data['total_jumlah_setor'] }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
                <!--DAFTAR RINGKASAN PEMBAYARAN-->
                <div style="padding:5px;"></div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingThree">
                    <button class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Ringkasan Pembayaran
                    </button>
                  </h6>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">Tampilkan</label>
                      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
                      <label class="mr-sm-2" for="inlineFormCustomSelect" style="font-size: 15px">entri</label>
                      <table class="table table-bordered">
                        <div style="padding: 0px 15px;">
                          <table class="table w-100 table-bordered table-hover">
                            <thead>
                              <tr style="background-color: rgb(4, 153, 195);">
                                <th class="text" style="color: #FFFFFF;" scope="col">JENIS PAJAK</th>
                                <th class="text" style="color: #FFFFFF;" scope="col">JENIS SETORAN</th>
                                <th class="text" style="color: #FFFFFF;" scope="col">PPH YANG DIPOTONG</th>
                                <th class="text" style="color: #FFFFFF;" scope="col">PPH YANG DISETOR</th>
                                <th class="text" style="color: #FFFFFF;" scope="col">SELISIH</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($sptmasa as $data)
                              <tr style="font-weight: 200; font-size: 15px; text-align: center;">
                                <td>{{ $data['jenis_pajak'] }}</td>
                                <td>{{ $data['jenis_setoran'] }}</td>
                                <td>{{ $data['total_pajak_penghasilan'] }}</td>
                                <td>{{ $data['jumlah_setor'] }}</td>
                                <td><?= number_format(abs((int) str_replace(",","",$data['total_pajak_penghasilan']) - (int) str_replace(",","",$data['jumlah_setor']))) ?></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div style="padding: 2%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>
<?php 
function randomStringLetterNumber12Char($length = 15)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomStringLetterNumber12Char = '';
    for ($i = 0; $i < $length; $i++) {
        $randomStringLetterNumber12Char .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomStringLetterNumber12Char;
}
?>

<script>
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

  function cek() {
    var tahun_pajak = document.getElementById("tahun_pajak");
    var masa_pajak = document.getElementById("masa_pajak");
    // var oke = document.getElementById("oke");
    location.href = `sptmasa?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`

  }

  function penyiapanspt() {
    var tahun_pajak = document.getElementById("tahun_pajak");
    var masa_pajak = document.getElementById("masa_pajak");
    // var oke = document.getElementById("oke");
    location.href = `penyiapanspt?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>