<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Rekam BPPs | E-Bupot</title>
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
  </div>

  <div class='content1'>
    <div class="content2" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px; margin: 0px auto">
      <nav class="navbar navbar-inverse navbar-fixed-top height-auto" role="navigation" style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px; border-bottom:0px">
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link" type="button">Dashboard</a>
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link active" id="nav-pajak-tab" data-bs-toggle="tab" data-bs-target="#nav-pajak" type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
          <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
          <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
        </div>
      </nav>
      <div class="dropdown">
        <div style="padding:5px;"></div>
        <button style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButtonLink" data-bs-toggle="dropdown" aria-expanded="false">
          <span style="color: #FFFFFF;">PPh yang disetor sendiri</span></button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLink">
          <li><a class="dropdown-item" href="{{url('/daftarbuktisetorsendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
              Daftar PPh yang disetor sendiri</a></li>
          <li><a class="dropdown-item" href="{{url('/rekampphsendiri')}}" type="button" class="btn btn-dark text-white" data-toggle="button" aria-pressed="false" autocomplete="off">
              Rekam PPh yang Disetor Sendiri</a></li>
        </ul>
        <button style="font-size:14px; background-color: rgb(4, 153, 195); " class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <span style="color: #FFFFFF;">PPh pasal 4 Ayat(2), 15, 22, 23</span></button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="{{url('/daftarbuktipotongBPPs')}}">Daftar BP Ps4(2), 15, 22, 23</a></li>
          <li><a class="dropdown-item" href="{{url('/rekambp1')}}">Rekam BP Ps4(2), 15, 22, 23</a></li>
        </ul>
        <button style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <span style="color: #FFFFFF;">PPh non Residen</span></button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="{{url('/daftarbupotnon')}}">Daftar Bukti Potong PPh Non Residen</a></li>
          <li><a class="dropdown-item" href="{{url('/rekambupotnon')}}">Rekam Bukti Potong PPh Non Residen</a></li>
        </ul>
        <!-- <a href="{{url('/impordata')}}" style="font-size:14px;background-color: rgb(4, 153, 195);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
          <span style="color: #FFFFFF;">Impor data PPh</span></a> -->
        <a href="{{url('/posting')}}" style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
          <span style="color: #FFFFFF;">Posting</span></a>
      </div>
      <div style="padding:1%"></div>
      <div class="card">
        <div class="card-body" style="background-color:#f0f0f0">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                  <img style="width: 20px; margin:0px 0px 5px 0px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC7ElEQVRoge2aO2tUQRiGny8kaqExkRittFew0agYrJYkqAFBVNKk8C/o31Dsogg2ghcQLEIUvIGFIRo3pLFPUsYL8Va4aV6Lc45M1nOZk8zZBdkHFia733zzvme+mXMLdGgv1m4BeUg6CZyK/5w1s/ft1OONpD5JT/UvM5J2t1tfLpL6JdVTxP810W6NmXiITziR9OkuSgjUgANATwCNv4F7ZraW8fs4cNQjzzCQvR4kDUq6I2nd42iU5UGeMknXPHJczUtwWNJKBcIT7jeN1y9ptKSJ40lsd1PHQeAZUckkvAPmgPW8I+fJZ+CuKx54CRyRNGFmTwDM7IYkgOspOWbMbD41u6KySViTdCaA6KyxmhfsuqQLTTHNM1GX1JeX0K35Vor3MVGPZywz6UUn0VwbxOeZmMwVHwe505VWe60Qn2kiiy6nvctp/worfcOC9dnne4BHksaKAruKAkIQL7zn+IlP+AjUi4IqNxCLfwEMlei2CIyY2deiwEoNVC0eKjTQCvFQkYF4wb6inPgFoJaIj3esh/En/eRFwdXoZii52yQsEB159yr1CjARt+eBm2kdg86ApG1EZbNV8QC9TjvzLix0CV0GjpWIzxLvTRUGfFkExrYiHgIakNQLjHiGl95tsgg5A+eBHR5xwcRDWAOXPGKCiodABuLyGS0Iq+Ps86EINQM1YHvK9w1gGpgEhre6YNMIdSL75LQbRFeej4FpM/sRaIxUghgws1lJp4E9wJuqRbsEu5Qws7ehcpWhJTc0VdIx0G46BtrNf2Xgp9Pe2WohKbg3NJnnFdfAstMeDi6nPK6GpcJoRS/W3Ie7Z6vTVqhl3NHRkO+LPUm3nY7fJJ2rWGuahvF47ISpvPgN74kl7QU+AAedr+eBWWA1uNqN7CcqG/dRzDIwZGZfvLMoesW07PEEuWqWJB3a1KGQNCDplqL6azUNSVOSBny05v6rgaLFUyMqqX2bOhr+rAIrwGsz+17xWB2C8Qcjc2gawHJhagAAAABJRU5ErkJggg==">
                  Perekaman Bukti Setor atas Pasal 4 ayat 2, 15, 22 dan 23
                </span>
              </div>
              <div class="accordion" id="accordion">
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingOne">
                    <button id="identitaswpdipotong" class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Identitas Wajib Pajak Yang Dipotong/Dipungut
                    </button>
                  </h6>
                  <div id="form1">
                    <div style="padding:4px;" id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                      <form class="row g-3">
                        <div class="col-4">
                          <label for="validationDefault04" class="form-label">Tahun Pajak</label>
                          <select class="form-select" id="tahunpajak" name="tahunpajak" required>
                            <option selected disabled value="">Pilih Tahun Pajak</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                          </select>
                        </div>
                        <div class="col-4">
                          <label for="validationDefault04" class="form-label">Masa Pajak</label>
                          <select class="form-select" id="masapajak" name="masapajak" required>
                            <option selected disabled value="">Pilih Masa Pajak</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                          </select>
                        </div>
                        <div class="col-md-4">Identitas</legend>
                          <div class="form-check">
                            <input class="form-check-input" id="npwp" type="radio" name="identitas" value="npwp" onclick="changeform1(this)" required>
                            <label class="form-check-label">
                              NPWP
                            </label>
                          </div>
                          <input class="form-check-input" id="nik" type="radio" name="identitas" value="nik" onclick="changeform2(this)" required>
                          <label class="form-check-label">
                            NIK
                          </label>
                        </div>
                      </form>
                      <div style="padding:5px"></div>
                      <div class="row">
                        <div class="col-md-3">
                          <label for="validationDefault03" class="form-label">NPWP</label>
                          <input type="text" class="form-control" id="no_identitas" name="no_identitas" style="height:30px;" oninput="formatNpwp2(this)" maxlength="21" onclick="handlerRadioSelect6()" required>
                        </div>
                        <input type="text" name="nama" id="namas" hidden>
                        <input type="text" name="npwps" id="npwps" hidden>
                        <div class="col-md-3">
                          <label for="validationDefault03" class="form-label">NIK</label>
                          <input type="text" class="form-control" id="no_identitas1" name="no_identitas1" style="height:30px;" oninput="formatNpwp2(this)" maxlength="16" onclick="handlerRadioSelect7()" required>
                        </div>
                        <div class="col-md-3">
                          <label for="validationDefault05" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" name="nama" style="height:30px;" required>
                        </div>
                        <div class="col-2">
                          <label for="validationDefault05" class="form-label">qq</label>
                          <input type="text" class="form-control" id="qq" name="qq" style="height:30px; width:120px;" required>
                        </div>
                        <div style="padding:5px"></div>
                        <!-- <div class="col-2" id="button-check" style="display:none">
                        <button style="border-radius:25px; background-color:midnightblue; position:relative;top:30px;" class="btn btn-light" type="button">
                          <span style="color: #FFFFFF;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAABmJLR0QA/wD/AP+gvaeTAAABJElEQVQ4jd3Tu0odURQG4LVPsLCLCOJjWIoBL9URlAiCBNEuRbBST5VnsUrjDZQUghaCjVaW5xWCiAYR7NTj+Syy7ZzM9tIkqxvmX9/87GFH/FeDKezh2p+5wi4mXoP1YhsP+Imv+Ixv2M8fWENPKZiwgwt8qsg0c/u1UnQWHQzX5JroYrwEPcJGYYED7NSFGrjDl0J0Cb+fnhsVuY8R0RMR5yVoRJxFRD8af0NvIqITEQOF6GBEXKeUupVoSqkTEacRMV2ITkXESW0Ki/lch2pyo/nvT5agCW38qoIxgkus14J5oZUbtHPjH5jDGOaxmW/aFnpfArZy4wUc4z5fzVscYualDVvPvPuAPqQiLC+t5ibfi5dqwJWqhm9BJ7H8buA/MY+Tokshk5ahOQAAAABJRU5ErkJggg==">Cek</span></button>
                      </div>
                      <div class="col-2" id="valid" style="display:none">
                        <div class="form-check form-switch" style="position:relative;top:40px;">
                          <input class="form-check-input" type="checkbox" id="cekvalid">
                          <label class="form-check-label" for="flexSwitchCheckDefault">Valid</label>
                        </div>
                      </div> -->
                        <div class="col-md-12">
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="button button1" type="button" onclick="openpphdipotong()">Selanjutnya</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingTwo">
                    <button id="ppygdipotong" class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Pajak Penghasilan Yang Dipotong/Dipungut
                    </button>
                  </h6>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div class="row" style="margin-bottom: 5px;">
                        <div class="col">
                          <label for="">Kode Objek Pajak</label>
                        </div>
                        <td style="border: 1px solid light; padding-left:40px;"><select id="kode_objek_pajak" style="width:50%; height: 28px; margin-right:20%; border: 1px solid light" name="kode_objek_pajak">
                            <option>Pilih Objek Pajak</option>
                            <option value='22-100-07' data-percent="0.0025">22-100-07 -
                              Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri
                              Oleh
                              Badan Usaha/Industri Tertentu (Industri Semen)</option>
                            <option value='22-100-08' data-percent="0.003">22-100-08 -
                              Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri
                              Oleh
                              Badan Usaha/Industri Tertentu (Industri Baja)</option>
                            <option value='22-100-09' data-percent="0.003">22-100-09 -
                              Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri
                              Oleh
                              Badan Usaha/Industri Tertentu (Industri Otomotif)</option>
                            <option value='22-100-10' data-percent="0.003">22-100-10 -
                              Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri
                              Oleh
                              Badan Usaha/Industri Tertentu (Industri Farmasi)</option>
                            <option value='22-100-11' data-percent="0.001">22-100-11 -
                              Penjualan Hasil Produksi Kepada DistriBUTor Di Dalam Negeri
                              Oleh
                              Badan Usaha/Industri Tertentu (Industri Kertas)</option>
                            <option value='22-100-12' data-percent="0.0045">22-100-12 -
                              Penjualan Kendaraan Bermotor Di Dalam Negeri Oleh ATPM, APM,
                              dan
                              Importir Umum Kendaraan Bermotor</option>
                            <option value='22-100-13' data-percent="0.015">22-100-13 -
                              Pembelian Oleh Badan Usaha Berupa Komoditas Tambang
                              Batubara,
                              Mineral Logam, dan Mineral Bukan Logam Dari Badan atau Orang
                              Pribadi Pemegang IUP</option>
                            <option value='22-100-14' data-percent="0.0045">22-100-14 -
                              Penjualan Emas Batangan Di Dalam Negeri Oleh Badan Usaha
                            </option>
                            <option value='22-100-15' data-percent="0.0025">22-100-15 -
                              Pembeliaan Bahan Hasil Kehutanan Yang Belum Melalui Proses
                              Industri Manufaktur, Untuk Keperuan Industri/Ekspor Oleh
                              Badan
                              Usaha Industri/Eksportir</option>
                            <option value='22-100-16' data-percent="0.0025">22-100-16 -
                              Pembelian Bahan Hasil Perkebunan Belum Melalui Proses
                              Industri
                              Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha
                              Industri/Eksportir</option>
                            <option value='22-100-17' data-percent="0.0025">22-100-17 -
                              Pembelian Bahan Hasil Pertanian Belum Melalui Proses
                              Industri
                              Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha
                              Industri/Eksportir</option>
                            <option value='22-100-18' data-percent="0.0025">22-100-18 -
                              Pembelian Bahan Hasil Perternakan Belum Melalui Proses
                              Industri
                              Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha
                              Industri/Eksportir</option>
                            <option value='22-100-19' data-percent="0.0025">22-100-19 -
                              Pembelian Bahan Hasil Perikanan Belum Melalui Proses
                              Industri
                              Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha
                              Industri/Eksportir</option>
                            <option value='22-100-20' data-percent="0.003">22-100-20 -
                              Penjualan BBM Oleh Pertamina/Anak Perusahaan Pertamina
                              Kepada
                              Selain SPBU/Agen/Penyalur (Tidak Final)</option>
                            <option value='22-100-21' data-percent="0.003">22-100-21 -
                              Penjualan BBM Oleh Selain Pertamina/Anak Perusahaan
                              Pertamina
                              Kepada Selain SPBU/Agen/Penyalur (Tidak Final)</option>
                            <option value='22-100-22' data-percent="0.003">22-100-22 -
                              Penjualan Pelumas Oleh Importir/Produsen</option>
                            <option value='22-100-23' data-percent="0.005">22-100-23 -
                              Penjualan Pulsa dan Kartu Perdana Oleh Penyelenggara
                              Distribusi
                              Tingkat Kedua</option>
                            <option value='22-100-24' data-percent="0.005">22-100-24 -
                              Penjualan BBG Oleh Produsen/Importir Kepada Selain SPBU
                              /Agen/Penyalur (Tidak Final)</option>
                            <option value='22-401-01' data-percent="0.0025">22-401-01 -
                              Penjualan BBM Oleh Pertamina/Anak Perusahaan Pertamina
                              Kepada
                              Selain SPBU/Agen/Penyalur (Final)</option>
                            <option value='22-401-02' data-percent="0.005">22-401-02 -
                              Penjualan BBM Oleh Selain Pertamina/Anak Perusahaan
                              Pertamina
                              Kepada Selain SPBU/Agen/Penyalur (Final </option>
                            <option value='22-401-03' data-percent="0.005">22-401-03 -
                              Penjualan BBG Oleh Produsen/Importir Kepada Selain SPBU
                              /Agen/Penyalur (Final)</option>
                            <option value='22-403-01' data-percent="0.05">22-403-01 -
                              Penjualan Barang Yang Tergolong Sangat Mewah </option>
                            <option value='22-403-02' data-percent="0.01">22-403-02 -
                              Penjualan Barang Yang Tergolong Sangat Mewah Untuk Rumah
                              Berserta Tanah, Apartemen, Kondominium dan Sejenisnya
                            </option>
                            <option value='22-404-01' data-percent="0.015">22-404-01 -
                              Ekspor
                              Komoditas Tambang Batubara, Mineral Logam, dan Mineral Bukan
                              Logam Yang Dilakukan Oleh Eksportir Kecuali WP Yang Terikat
                              Dalam PKP2B dan KK</option>
                            <option value='22-900-01' data-percent="0.015">22-900-01 -
                              Pembayaran Atas Pembelian dan/atau Bahan Untuk Kegiatan
                              Usahanya
                              Oleh BUMN/Badan Usaha Tertentu</option>
                            <option value='23-100-01' data-percent="0.01">23-100-01 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Yang Dikenakan Tarif 10%
                            </option>
                            <option value='23-100-02' data-percent="0.075">23-100-02 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Yang Dikenakan Tarif
                              7,5%
                            </option>
                            <option value='23-100-03' data-percent="0.005">23-100-03 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Yang Dikenakan Tarif
                              0,5%
                            </option>
                            <option value='23-100-04' data-percent="0.025">23-100-04 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Atas Importir/Pemilik
                              Barang
                              Yang Memiliki API</option>
                            <option value='23-100-05' data-percent="0.075">23-100-05 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Atas Importir/Pemilik
                              Barang
                              Yang Tidak Memiliki API</option>
                            <option value='24-100-01' data-percent="0.15">24-100-01-
                              Hadiah,
                              Penghargaan, Bonus, dan Lainnya Selain Yang Telah Dipotong
                              PPh
                              Pasal 21 Ayat (1)Huruf E UU PPh</option>
                            <option value='24-100-02' data-percent="0.02">24-100-02 -
                              Impor
                              Yang Dipunggut Ditjen Bea dan Cukai Yang Dikenakan Tarif
                              0,5%
                            </option>
                            <option value='24-101-01' data-percent="0.15">24-101-01 -
                              Dividen
                            </option>
                            <option value='24-102-01' data-percent="0.15">24-102-01 -
                              Bunga
                              Selain Yang Dikenakan PPh Pasal 4 Ayat (2) </option>
                            <option value='24-103-01' data-percent="0.15">24-103-01 -
                              Royalti
                            </option>
                            <option value='24-104-01' data-percent="0.02">24-104-01 - Jasa
                              Teknik</option>
                            <option value='24-104-02' data-percent="0.02">24-104-02 - Jasa
                              Manajemen</option>
                            <option value='24-104-03' data-percent="0.02">24-104-03 - Jasa
                              Konsultan</option>
                            <option value='24-104-04' data-percent="0.02">24-104-04 - Jasa
                              Penilai (Appraisal)</option>
                            <option value='24-104-05' data-percent="0.02">24-104-05 - Jasa
                              Aktuaris</option>
                            <option value='24-104-06' data-percent="0.02">24-104-06 - Jasa
                              Akuntansi, Pembukuan, dan Atestasi Laporan Keuangan</option>
                            <option value='24-104-07' data-percent="0.02">24-104-07 - Jasa
                              Hukum</option>
                            <option value='24-104-08' data-percent="0.02">24-104-08 - Jasa
                              Arsitektur</option>
                            <option value='24-104-09' data-percent="0.02">24-104-09 - Jasa
                              Perencanaan Kota dan Arsitektur Landscape</option>
                            <option value='24-104-10' data-percent="0.02">24-104-10 - Jasa
                              Perancangan (Design)</option>
                            <option value='24-104-11' data-percent="0.02">24-104-11 - Jasa
                              Pengeboran (Drilling) Dibidang Penambangan Minyak dan Gas
                              Bumi
                              (Migas) Kecuali Yang Dilakukan Oleh Badan Usaha Tetap (BUT)
                            </option>
                            <option value='24-104-12' data-percent="0.02">24-104-12 - Jasa
                              Penunjang Dibidang Usaha Panas Bumi dan Penambangan Minyak
                              dan
                              Gas Bumi (Migas)</option>
                            <option value='24-104-13' data-percent="0.02">24-104-13 - Jasa
                              Penambangan dan Jasa Penunjang Selain Dibidang Usaha Panas
                              Bumi
                              dan Penambangan Minyak dan Gas Bumi (Migas) </option>
                            <option value='24-104-14' data-percent="0.02">24-104-14 - Jasa
                              Penunjang Dibidang Penerbangan dan Bandar Udara </option>
                            <option value='24-104-15' data-percent="0.02">24-104-15 - Jasa
                              Penebangan Hutan </option>
                            <option value='24-104-16' data-percent="0.02">24-104-16 - Jasa
                              Pengolahan Limbah </option>
                            <option value='24-104-17' data-percent="0.02">24-104-17 - Jasa
                              Penyedia Tenaga Kerja dan/atau Tenaga Ahli (Outsourcing
                              Services)</option>
                            <option value='24-104-18' data-percent="0.02">24-104-18 - Jasa
                              Perantara dan/atau Keagenan</option>
                            <option value='24-104-19' data-percent="0.02">24-104-19 - Jasa
                              Bidang Perdagangan Surat-Surat Berharga, Kecuali Yang
                              Dilakukan
                              Bursa Efek, Kustodian Sentral Efek Indonesia (KSEI)
                              dan Kliring Penjamin Efek Indonesia (KPEI</option>
                            <option value='24-104-20' data-percent="0.02">24-104-20 - Jasa
                              Kustodian/Penyimpanan/Penitipan, Kecuali Yang Dilakukan Oleh
                              KSI
                            </option>
                            <option value='24-104-21' data-percent="0.02">24-104-21 - Jasa
                              Pengisian Suara (Dubbing) dan/atau Sulih Suara</option>
                            <option value='24-104-22' data-percent="0.02">24-104-22 - Jasa
                              Mixing Film</option>
                            <option value='24-104-23' data-percent="0.02">24-104-23 - Jasa
                              Pembuatan Sarana Promosi Film, Iklan, Poster, Foto, Slide,
                              Klise, Banner, Pamphlet, Baliho dan Folder</option>
                            <option value='24-104-24' data-percent="0.02">24-104-24 - Jasa
                              Sehubungan Dengan Software atau Hardware atau Sistem
                              Komputer,
                              Termasuk Perawatan, Pemeliharaan dan Perbaikan</option>
                            <option value='24-104-25' data-percent="0.02">24-104-25 - Jasa
                              Pembuatan dan/atau Pengelolaan Website</option>
                            <option value='24-104-26' data-percent="0.02">24-104-26 - Jasa
                              Internet Termasuk Sambungannya</option>
                            <option value='24-104-27' data-percent="0.02">24-104-27 - Jasa
                              Penyimpanan, Pengelolaan, dan/atau Penyaluran Data,
                              Informasi
                              dan/atau Program</option>
                            <option value='24-104-28' data-percent="0.02">24-104-28 - Jasa
                              Instalasi atau Pemasangan Mesin, Peralatan, Listrik,
                              Telepon,
                              Air, Gas, Ac atau Tv Kabel,
                              Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya
                              Di
                              Bidang Konstruksi dan Mempunyai Izin dan Sertifikasi Sebagai
                              Pengusaha Konstruksi </option>
                            <option value='24-104-29' data-percent="0.02">24-104-29 - Jasa
                              Perawatan/Perbaikan/Pembenaran Mesin, Peralatan, Listrik,
                              Telepon, Air, Gas, Ac atau Tv Kabel,
                              Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya
                              Di
                              Bidang Konstruksi dan Mempunyai Izin dan Sertifikasi Sebagai
                              Pengusaha Konstruksi </option>
                            <option value='24-104-30' data-percent="0.02">24-104-30 - Jasa
                              Perawatan Kendaraan dan/atau Alat Transportasi Darat, Laut
                              dan
                              Udara </option>
                            <option value='24-104-31' data-percent="0.02">24-104-31 - Jasa
                              Maklon</option>
                            <option value='24-104-32' data-percent="0.02">24-104-32 - Jasa
                              Penyelidikan dan Keamanan </option>
                            <option value='24-104-33' data-percent="0.02">24-104-33 - Jasa
                              Penyelenggara Kegiatan atau Event Organizer</option>
                            <option value='24-104-34' data-percent="0.02">24-104-34 - Jasa
                              Penyedia Tempat dan/atau Waktu Dalam Media Massa, Media Luar
                              Ruang atau Media Lain Untuk Penyampaian Informasi, dan/atau
                              Jasa
                              Periklanan</option>
                            <option value='24-104-35' data-percent="0.02">24-104-35 - Jasa
                              Pembasmi Hama</option>
                            <option value='24-104-36' data-percent="0.02">24-104-36 - Jasa
                              Kebersihan atau Cleaning Service</option>
                            <option value='24-104-37' data-percent="0.02">24-104-37 - Jasa
                              Sedot Septi Tank</option>
                            <option value='24-104-38' data-percent="0.02">24-104-38 - Jasa
                              Pemeliharaan Kolam</option>
                            <option value='24-104-39' data-percent="0.02">24-104-39 - Jasa
                              Katering atau Tata Boga</option>
                            <option value='24-104-40' data-percent="0.02">24-104-40 - Jasa
                              Forwarding </option>
                            <option value='24-104-41' data-percent="0.02">24-104-41 - Jasa
                              Logistik </option>
                            <option value='24-104-42' data-percent="0.02">24-104-42 - Jasa
                              Pengurusan Dokumen</option>
                            <option value='24-104-43' data-percent="0.02">24-104-43 - Jasa
                              Pengepakan</option>
                            <option value='24-104-44' data-percent="0.02">24-104-44 - Jasa
                              Loading dan Unloading</option>
                            <option value='24-104-45' data-percent="0.02">24-104-45 - Jasa
                              Laboratorium dan/atau Pengujian Kecuali Yang Dilakukan Oleh
                              Lembaga atau Institusi Pendidikan Dalam Rangka Penelitian
                              Akademis</option>
                            <option value='24-104-46' data-percent="0.02">24-104-46 - Jasa
                              Pengelolaan Parkir</option>
                            <option value='24-104-47' data-percent="0.02">24-104-47 - Jasa
                              Penyondiran Tanah</option>
                            <option value='24-104-48' data-percent="0.02">24-104-48 - Jasa
                              Penyiapan dan/atau Pengelolaan Limbah</option>
                            <option value='24-104-49' data-percent="0.02">24-104-49 - Jasa
                              Pembibitan dan/atau Penanaman Bibit</option>
                            <option value='24-104-50' data-percent="0.02">24-104-50 - Jasa
                              Pemeliharaan Tanaman </option>
                            <option value='24-104-51' data-percent="0.02">24-104-51 - Jasa
                              Pemanenan</option>
                            <option value='24-104-52' data-percent="0.02">24-104-52 - Jasa
                              Pengolahan Hasil Pertanian, Pekebunan, Perikanan, Peternakan
                              dan
                              Perhutanan</option>
                            <option value='24-104-53' data-percent="0.02">24-104-53 - Jasa
                              Dekorasi </option>
                            <option value='24-104-54' data-percent="0.02">24-104-54 - Jasa
                              Percetakan/Penerbitan</option>
                            <option value='24-104-55' data-percent="0.02">24-104-55 - Jasa
                              Penerjemahan</option>
                            <option value='24-104-56' data-percent="0.02">24-104-56 - Jasa
                              Pengangkutan/Ekspedisi Kecuali Yang Telah Diatur Dalam Pasal
                              15
                              Undang-Undang Pajak Penghasilan </option>
                            <option value='24-104-57' data-percent="0.02">24-104-57 - Jasa
                              Pelayanan Pelabuhan</option>
                            <option value='24-104-58' data-percent="0.02">24-104-58 - Jasa
                              Pengangkutan Melalui Jalur Pipa</option>
                            <option value='24-104-59' data-percent="0.02">24-104-59 - Jasa
                              Pengelolaan Penitipan Anak</option>
                            <option value='24-104-60' data-percent="0.02">24-104-60 - Jasa
                              Pelatuhan dan/atau Kursus</option>
                            <option value='24-104-61' data-percent="0.02">24-104-61 - Jasa
                              Pengiriman dan Pengisian Uang Ke ATM</option>
                            <option value='24-104-62' data-percent="0.02">24-104-62 - Jasa
                              Sertifikasi</option>
                            <option value='24-104-63' data-percent="0.02">24-104-63 - Jasa
                              Survey</option>
                            <option value='24-104-64' data-percent="0.02">24-104-64 - Jasa
                              Tester</option>
                            <option value='24-104-65' data-percent="0.02">24-104-65 - Jasa
                              Selain Jasa-Jasa TerseBUT Diatas Yang Pembayaran Dibebankan
                              Kepada APBN (Anggaran Pendapatan dan Belanja Negara) atau
                              APBD
                              (Anggaran Pendapatan dan Belanja </option>
                            <option value='24-104-66' data-percent="0.02">24-104-66 - Jasa
                              Penyelenggaran Layanan Transaksi Pembayaran Terkait Dengan
                              Distribusi Token Oleh Penyelenggara Distribusi </option>
                            <option value='24-104-67' data-percent="0.02">24-104-67 - Jasa
                              Pemasaran Dengan Media Voucher Oleh Penyelenggara Voucher
                            </option>
                            <option value='24-104-68' data-percent="0.02">24-104-68 - Jasa
                              Penyelenggara Transaksi Pembayaran Terkait Dengan Ditribusi
                              Voucher Oleh Penyelenggara Voucher dan Penyelenggara
                              Distribusi
                            </option>
                            <option value='24-104-69' data-percent="0.02">24-104-69 - Jasa
                              Penyelenggara Program Loyalitas dan Penghargaan Pelanggan
                              (Costumer Loyalty/Reward Program) Oleh Penyelenggara Voucher
                            </option>
                            <option value='24-105-01' data-percent="0.15">24-105-01 -
                              Bunga
                              Pinjaman Yang Diterima Wajib Pajak Dalam Negeri dan Bentuk
                              Usaha
                              Tetap
                              Melalui Layanan Pinjam Meminjam Uang Berbasis Teknologi
                              Informasi </option>
                            <option value='28-403-02' data-percent="0.1">28-403-02 -
                              Persewaan
                              Tanah dan/atau Bangunan</option>
                            <option value='28-405-01' data-percent="0.25">28-405-01 -
                              Hadiah
                              Undian (Yang Diterima Wajib Pajak Dalam Negeri</option>
                            <option value='28-409-08' data-percent="0.04">28-409-08 -
                              Perencanaan Konstruksi (Dengan Kualifikasi Usaha)</option>
                            <option value='28-409-09' data-percent="0.06">28-409-09 -
                              Perencanaan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                            <option value='28-409-10' data-percent="0.02">28-409-10 -
                              Pelaksanaan Konstruksi (Kualifikasi Usaha kecil)</option>
                            <option value='28-409-11' data-percent="0.03">28-409-11 -
                              Perencanaan Konstruksi (Kualifikasi Usaha Menengah dan
                              Besar)
                            </option>
                            <option value='28-409-12' data-percent="0.04">28-409-12 -
                              Pelaksanaan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                            <option value='28-409-13' data-percent="0.04">28-409-13 -
                              Pengawasan Konstruksi (Dengan Kualifikasi Usaha)</option>
                            <option value='28-409-14' data-percent="0.06">28-409-14 -
                              Pengawasan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                            <option value='28-409-22' data-percent="0.0175">28-409-22 -
                              Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang
                              Memiliki Sertifikat Badan Usaha Kualifikasi Kecil</option>
                            <option value='28-409-23' data-percent="0.04">28-409-23 -
                              Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang
                              Tidak Memiliki Sertifikat Badan Usaha atau Sertifikat
                              Kompetensi
                              Kerja Untuk Usaha Orang Perseorangan </option>
                            <option value='28-409-24' data-percent="0.0265">28-409-24 -
                              Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang
                              Memilliki Sertifikat Selain Sertifikat Badan Usaha
                              Kualifikasi
                              Kecil
                              atau Sertifikat Kompetensi Kerja Untuk Usaha Orang
                              Perseorangan
                            </option>
                            <option value='28-409-25' data-percent="0.0265">28-409-25 -
                              Pekerjaan Konstruksi Terintegrasi Yang Dilakukan Oleh
                              Penyedia
                              Jasa Yang Memiliki Sertifikat Badan Usaha</option>
                            <option value='28-409-26' data-percent="0.04">28-409-26 -
                              Pekerjaan Konstruksi Terintegrasi Yang Dilakukan Oleh
                              Penyedia
                              Jasa Yang Tidak Memiliki Sertifikat Badan Usaha</option>
                            <option value='28-409-27' data-percent="0.035">28-409-27 -
                              Jasa
                              Konsultasi Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang
                              Memiliki Sertifikat Badan Usaha atau Sertifikat Kompetensi
                              Kerja
                              Untuk Usaha Orang Perseorangan </option>
                            <option value='28-409-28' data-percent="0.06">28-409-28 - Jasa
                              Konsultasi Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang
                              Tidak Memiliki Sertifikat Badan Usaha atau Sertifikat
                              Kompetensi
                              Kerja Untuk Usaha Orang Perseorangan </option>
                            <option value='28-410-02' data-percent="0.012">28-410-02 -
                              Imbalan
                              Yang Dibayarkan/Terutang Kepada Perusahaan Pelayaran Dalam
                              Negeri</option>
                            <option value='28-411-02' data-percent="0.0264">28-411-02 -
                              Imbalan Charter Kapal Laut dan/atau Pesawat Udara Yang
                              Dibayarkan/Terutang Kepada Perusahaan Pelayaran dan/atau
                              Penerbangan Luar Negeri Melalui BUT Di Indonesia</option>
                            <option value='28-417-01' data-percent="0">28-417-01 - Bunga
                              Simpanan Yang Dibayarkan Oleh Koperasi Kepada Anggota Wajib
                              Pajak Orang Pribadi (Bunga Sampai Dengan Rp240.000)</option>
                            <option value='28-417-02' data-percent="0.1">28-417-02 - Bunga
                              Simpanan Yang Dibayarkan Oleh Koperasi Kepada Anggota Wajib
                              Pajak Orang Pribadi (Bunga Diatas Rp240.000)</option>
                            <option value='28-419-01' data-percent="0.1">28-419-01 -
                              Dividen
                              Yang Diterima/Diperoleh Wajib Pajak Orang Pribadi Dalam
                              Negeri
                            </option>
                            <option value='28-421-01' data-percent="0.2">28-421-01 -
                              Uplift
                              Hulu Migas</option>
                            <option value='28-421-02' data-percent="0.05">28-421-02 -
                              Participating Interest Eksplorasi Hulu Migas</option>
                            <option value='28-421-03' data-percent="0.07">28-421-03 -
                              Participating Interest Eksploitasi Hulu Migas</option>
                            <option value='28-423-01' data-percent="0.005">28-423-01 -
                              Transaksi Dengan Wajib Pajak Yang Menggunakan Tarif
                              Peraturan
                              Pemerintah Nomor 23 Tahun 2018</option>
                            <option value='29-101-01' data-percent="0.018">29-101-01 -
                              Imbalan
                              Charter Pesawat Udara Yang Dibayarkan/Terutang Kepada
                              Perusahaan
                              Penerbangan Dalam Negeri Oleh Pemotong Pajak</option>
                          </select>
                          </select></td>
                      </div>
                    </div>
                    <div class="row" style="margin-left:1%;">
                      <div class="col-5">Fasilitas Pajak Penghasilan</div>
                      <div class="col-3" style="margin-right: 300px;">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="tanpafasilitas" value="tanpa fasilitas" onclick="handlerRadioSelect1()">
                          <label class="form-check-label" for="gridRadios1">
                            Tanpa Fasilitas
                          </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihskb" value="surat keterangan bebas" onclick="handlerRadioSelect2()">
                            <label class="form-check-label" for="gridRadios2">
                              Surat Keterangan Bebas(SKB)
                            </label>
                          </div>
                        </div>
                        <div class="col-6">
                          <input class="form-control" style="height:25px; width:75%;" id="skb" name="skb" type="text" placeholder="Nomor SKB" aria-label="default input" disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihdtp" value="pph ditanggung pemerintah" onclick="handlerRadioSelect3()">
                          <label class="form-check-label" for="gridRadios3">
                            PPh Ditanggung Pemerintah(DTP)
                          </label>
                        </div>
                        <div class="col-6">
                          <input class="form-control" style="height:25px; width:75%;" id="dt" name="dt" type="text" placeholder="Nomor Aturan DT" aria-label="default input" disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihsk23" value="surat keterangan berdasarkan pp no 23 2018" onclick="handlerRadioSelect4()">
                          <label class="form-check-label" for="gridRadios4">
                            Surat Keterangan berdasarkan PP No 23 2018
                          </label>
                        </div>
                        <div class="col-6">
                          <input class="form-control" style="height:25px; width:75%;" id="suket" name="suket" type="text" placeholder="Nomor Suket" aria-label="default input" disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihlain" value="fasilitas lainnya berdasarkan" onclick="handlerRadioSelect5()">
                          <label class="form-check-label" for="gridRadios5">
                            Fasilitas lainnya berdasarkan
                          </label>
                        </div>
                        <div class="col-6">
                          <input class="form-control" style="height:25px; width:75%;" id="lainnya" name="lainnya" type="text" placeholder="Nomor Dokumen Fasilitas Lainnya" aria-label="default input" disabled>
                        </div>
                      </div>
                    </div>
                    <div style="padding: 8px;"></div>
                    <div class="row">
                      <div class="col-6" style="padding-left:4%;">
                        <label for="">Jumlah Penghasilan Bruto(RP)</label>
                      </div>
                      <div class="col-6">
                        <input class="form-control" oninput="generateDipotong(this.value)" id="jumlah_penghasilan_bruto" name="jumlah_penghasilan_bruto" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                      </div>
                    </div>
                    <div style="padding: 3px;"></div>
                    <div class="row">
                      <div class="col-6" style="padding-left:4%;">
                        <label for="">Tarif</label>
                      </div>
                      <div class="col-6">
                        <input class="form-control" id="tarif" name="tarif" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                      </div>
                    </div>
                    <div style="padding: 3px;"></div>
                    <div class="row">
                      <div class="col-6" style="padding-left:4%;">
                        <label for="">PPh yang Dipotong/Dipungut</label>
                      </div>
                      <div class="col-6">
                        <input class="form-control" id="jumlah_setor" name="jumlah_setor" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                      </div>
                    </div>
                    <div style="padding:10px;"></div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingThree">
                    <button id="dokdas" class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" disabled="disabled">
                      Dokumen Dasar Pemotongan
                    </button>
                  </h6>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <div>
                        <div class="table" style="background-color: rgb(4, 153, 195); height: 50px; padding: 10px 0px 0px 10px; ">
                          <span style="color: #FFFFFF; font-weight: bold;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                            Daftar Dokumen
                          </span>
                          <a type="button" name="tambah" id="tambah" class="btn btn-link" style=" padding-left:65%; color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            Tambah</a>
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" style="background-color:lavender;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">
                                    Dasar
                                    Pemotongan</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form>
                                    <div class="row">
                                      <div class="col-4">
                                        <label for="">Nama
                                          Dokumen</label>
                                      </div>
                                      <div class="col-8">
                                        <select class="form-select" id="nama_dokumen" name="nama_dokumen" style="height: 30px; font-size:13px; width:205px" required>
                                          <option selected disabled value="">Pilih Dokumen
                                          </option>
                                          <option>Faktur Pajak</option>
                                          <option>Invoice</option>
                                          <option>Pengumuman</option>
                                          <option>Surat Perjanjian</option>
                                          <option>Bukti Pembayaran</option>
                                          <option>Akta Perikatan</option>
                                          <option>Akta RUPS</option>
                                          <option>Faktur Pajak</option>
                                          <option>Surat Pernyataan</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div style="padding:3px;"></div>
                                    <div class="row">
                                      <div class="col-4">
                                        <label for="">No
                                          Dokumen</label>
                                      </div>
                                      <div class="col-8">
                                        <input class="form-control" id="no_dokumen" name="no_dokumen" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                                      </div>
                                    </div>
                                    <div style="padding:3px;"></div>
                                    <div class="row">
                                      <div class="col-4">
                                        <label for="">Tanggal</label>
                                      </div>
                                      <div class="col-8">
                                        <input type="date" value="2023-01-01" class="form-control" id="tgl_dokumen" name="tgl_dokumen" style="height:30px;width:71%;" aria-label="default input">
                                      </div>
                                    </div>
                                    <script>
                                      // A $( document ).ready() block.
                                      $(document).ready(function() {
                                        console.log("ready!");
                                      });

                                      function tambahrow() {
                                        var rowCount = $('#bupotpasal tr').length;
                                        var tbody = document.getElementById('bupotpasal');
                                        var nama_dokumen = document.getElementById('nama_dokumen').value;
                                        var no_dokumen = document.getElementById('no_dokumen').value;
                                        var tgl_dokumen = document.getElementById('tgl_dokumen').value;

                                        var tr = document.createElement('tr');
                                        var td1 = document.createElement('td');
                                        var td2 = document.createElement('td');
                                        var td3 = document.createElement('td');
                                        var td4 = document.createElement('td');
                                        if (rowCount === 0) {
                                          td1.innerHTML = `<span id='nama_dokumen2' data-value='${nama_dokumen}' > ${nama_dokumen} </span>`;
                                          td2.innerHTML = `<span id='no_dokumen2' data-value='${no_dokumen}' > ${no_dokumen} </span>`;
                                          td3.innerHTML = `<span id='tgl_dokumen2' data-value='${tgl_dokumen}' > ${tgl_dokumen} </span>`;
                                          td4.innerHTML =
                                            '<img onclick="deleteTable()" style="padding-left:25%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAB4klEQVQ4jaWTMW/TUBSFv/uSNhSmlyZSmWCADWaYYGcH/gGZkBiQUAcqq1M3BAxI/BpWNkQFEwN0aFNBY0fQJoXYh+HZIW7sBMGVLD3f+873zr3PNpaEHl5pceHreQCOuyf28tPpov1uIexp53bmkyRbXRlkqyuDzCeJou6tfwJqc6ObObsH7CF6iB6wl4n72tzo1umsWKRbncjEDRmXgMvA2iInwAj4bOKLjLeN7W8RQHPqCLcL2T5agjnbSdAezTkMLru7oKvASZ4a504KR+MccuzETwCZPjS2jx4VjOYMD5P6Mq4BrUWuDJAVmpKn8qXIOMiXzzBez1Seh2carzC9yDWHs4ySQ6APIPERGBk8CO/uHYBZGLBkbwyt55r9WocoAM3wOIsrus07SWPk/KymEiiKovkG6aAO2JQb4OTLmirgdIZqM3G1Dmk0YoQvayqAzUzhNMOTNmsdMh7HJvMlTRWQySTMUOZp9ePQ0VxknBsOM9QOLtJ6h7YzjIGRUNsiJsCPCuDQIjIzPDC2KEnqHQKgQwjzAarmWOQ8lNuF+e8Q4fqGrqdb60/I/xhnuhNqAKzltY5w75cCHRwIboLt/DmEuzNbLhY1R/mGK4H2q9Gzlh6fzVfGqX3/q33/E78BLt6/81PFEEoAAAAASUVORK5CYII=">';
                                          tr.appendChild(td1);
                                          tr.appendChild(td2);
                                          tr.appendChild(td3);
                                          tr.appendChild(td4);
                                          tbody.appendChild(tr);
                                          countdokumen += 1;
                                          openidentitaspemotong();
                                          alert('berhasil')
                                          return;
                                        }
                                        // alert($('#nama_dokumen2').attr('data-value'))
                                      }

                                      function deleteTable() {

                                        var rowCount = $('#bupotpasal tr').length;
                                        alert(rowCount);
                                        if (rowCount > 0) {
                                          $('#bupotpasal tr:last').remove();
                                        }
                                      }
                                    </script>
                                  </form>
                                </div>
                                <div class="modal-footer" style="margin-right:34%;">
                                  <button type="button" class="button button1" onclick="tambahrow()" style="text-align:center">Tambahkan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <form>
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
                                <div style="padding:10px;"></div>
                                <thead>
                                  <tr style="background-color: rgb(4, 153, 195);">
                                    <th class="text" style="color: #FFFFFF;" scope="col">
                                      NAMA DOKUMEN <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                    </th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">
                                      NOMOR DOKUMEN<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                    </th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">
                                      TANGGAL <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                    </th>
                                    <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                                  </tr>
                                </thead>
                                <tbody id="bupotpasal">

                                </tbody>
                              </table>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="accordion-item">
                  <h6 class="accordion-header" id="headingFour">
                    <button id="identitaspemotong" class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" disabled="disabled">
                      Identitas Pemotong Pajak
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
                        <select name="pilihbupot" class="form-select" id="pengaturan_id" required>
                          <option selected disabled value="">Pilih Penandatangan
                          </option>
                          @foreach ($pengaturan as $p)
                          <option value="{{ $p['id'] }}">{{ $p['nama'] }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div style="display:none" class="col-md-4" id="pengurus">
                        <label for="validationDefault04" class="form-label">Penandatangan
                          Bukti Potong</label>
                        <select name="pilihbupot" class="form-select" id="pengaturan_id" required>
                          <option selected disabled value="">Pilih Penandatangan
                          </option>
                          @foreach ($pengaturan as $p)
                          <option value="{{ $p['id'] }}">{{ $p['nama'] }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div style="padding:10px;">
                        <div class="alert alert-warning" role="alert">
                          <h4 class="alert">Warning!</h4>
                          <p>Apabila terjadi kesalahan dalam pembuatan Bukti Pemotongan/
                            Pemungutan Unifikasi yang menyebabkan kelebihan
                            pemotongan/pemungutan PPh, maka pihak yang akan diajukan:</p>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelebihan_pemotongan" id="pengembalian" value="pengembalian">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Pengembalian atas pajak yang tidak seharusnya terutang oleh
                              Pemotong dan/ atau Pemungut PPh
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kelebihan_pemotongan" id="pemindahbukuan" value="pemindahbukuan" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Pemindahbukuan oleh Pemotong dan/ atau Pemungut PPh
                            </label>
                          </div>
                          <div style="padding:25px;"></div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="pernyataan" id="pernyataan" name="pernyataan">
                            <label class="form-check-label" for="defaultCheck1">
                              Dengan ini saya menyatakan bahwa Bukti Pemotongan/Pemungutan
                              Unifikasi yang telah saya isi dengan benar dan telah saya
                              tandatangani secara electronik
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                      </div>

                      <div class="row" style="padding-left: 57%; padding-right:55%;">
                        <div class="col">
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input type="hidden" id="user_id" value="{{ $user_id}}">
                            <button onclick="addTableHarta(this)" class="btn btn-outline-warning" id="simpan" disabled="true">Simpan</button>
                            <a class="btn btn-outline-secondary" type="button">
                              <span>Batal</span></a>
                          </div>
                        </div>
                      </div>
                      <div style="padding:10px;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="padding:15px;"></div>
    </div>
  </div>
  <div style="padding:15px;"></div>
  <!-- Footer -->
  <div class="shadow-sm" id="footer" style="background-color: rgba(0,0,0,0.7); height:auto"> -->
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
</body>
<script>
  const pernyataan = document.getElementById('pernyataan')
  const button = document.getElementById('simpan')
  const checkbox = document.getElementById('pernyataan')
  checkbox.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
      button.disabled = false;
    } else {
      button.disabled = true;
    }
  })

  function handlerRadioSelect1() {

    if (document.getElementById("npwp").checked = true) {
      document.getElementById("nik1").disabled = true;
      document.getElementById("npwp").disabled = false;
    }
  }

  //   function handlerRadioSelect2() {
  // alert(1)
  //     if (document.getElementById("nik").checked = true) {
  //       document.getElementById("no_identitas").disabled = true;
  //       document.getElementById("nik").disabled = false;
  //     }
  //     const tarif = document.getElementById("tarif");
  //     tarif.value = "0%"
  //   }

  let percent = 0;
  let countdokumen = 0;

  function formatPercent(number) {
    return `${(numeral(number).format()).replace(",",".")}`;
  }
  var selection = document.getElementById("kode_objek_pajak");
  const myElement = document.getElementById("jumlah_penghasilan_bruto");
  const myElement2 = document.getElementById("jumlah_setor");
  selection.onchange = function(event) {
    var rc = event.target.options[event.target.selectedIndex].dataset.percent;
    const tarif = document.getElementById("tarif");
    console.log(tarif)
    tarif.value = parseFloat(rc) * 100 + "%"
    if ($("#pilihskb").is(':checked')) {
      tarif.value = "0%"
      // append goes here
    }
    if ($("#pilihsk23").is(':checked')) {
      tarif.value = "0,5%"
      // append goes here
    }

    percent = parseFloat(rc);

  };

  function generateDipotong(src) {
    const tarif = document.getElementById("tarif");
    tarif.value = percent * 100 + "%"
    if ($("#pilihskb").is(':checked')) {
      tarif.value = "0%"
      // append goes here
    }
    if ($("#pilihsk23").is(':checked')) {
      tarif.value = "0,5%"
      // append goes here
    }
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    const jumlah_setor = document.getElementById("jumlah_setor");
    if (document.getElementById("pilihskb").checked == true) {
      jumlah_setor.value = 0;
    } else {
      jumlah_setor.value = (parseInt(jumlah_penghasilan_bruto.value) * percent * 0.5 / 100);
      let newVal = parseInt(src.split(",").join('')) * percent
      const myElement = document.getElementById("jumlah_penghasilan_bruto");
      const myElement2 = document.getElementById("jumlah_setor");
      myElement.value = numeral(src).format();
      myElement2.value = formatPercent(newVal);
    }
    opendokdas();

  }


  function maxLength() {
    console.log(1)
  }


  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    // document.getElementById("form2").style.display = "none";
    document.getElementById("button-check").style.display = "none";
    document.getElementById("valid").style.display = "none";
    // document.getElementById("invalid").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("button-check").style.display = "inline-block";
    document.getElementById("valid").style.display = "inline-block";
    // document.getElementById("invalid").style.display = "inline-block";

  }

  var selection = document.getElementById("pilihsebagai");
  selection.onchange = function(event) {
    // const tarif = document.getElementById("tarif");
    console.log(event.value)

    percent = parseFloat(rc);
  };

  function formatNpwp2() {
    formatnpwp = document.getElementById('no_identitas').value
    formatnpwp2 = document.getElementById('no_identitas')
    if (typeof formatnpwp === 'string') {

    }
    formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
  }

  function openpphdipotong() {
    console.log('click')
    let no_identitas = document.getElementById("no_identitas")
    let nama = document.getElementById("nama")
    console.log(no_identitas)
    if (!no_identitas.value || !nama.value) {
      document.getElementById("ppygdipotong").disabled = true
    }
    if (no_identitas.value && nama.value) {
      document.getElementById("ppygdipotong").disabled = false
      document.getElementById("identitaswpdipotong").disabled = true
    }

  }

  function opendokdas() {
    let jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto")
    console.log(jumlah_penghasilan_bruto)
    if (!jumlah_penghasilan_bruto.value) {
      document.getElementById("dokdas").disabled = true
    }
    if (jumlah_penghasilan_bruto.value) {
      document.getElementById("dokdas").disabled = false
      document.getElementById("ppygdipotong").disabled = true
    }

  }

  function openidentitaspemotong() {

    if (!countdokumen) {
      document.getElementById("identitaspemotong").disabled = true
    }
    if (countdokumen) {
      document.getElementById("identitaspemotong").disabled = false
      document.getElementById("dokdas").disabled = true
    }

  }
</script>

<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }

  function addTableHarta($this) {

    var tahunpajak = document.querySelector('#tahunpajak').value
    console.log(tahunpajak);
    var masapajak = document.querySelector('#masapajak').value
    console.log(masapajak);
    var nama = document.querySelector('#nama').value
    console.log(nama);
    var identitas = $('input[name="identitas"]:checked').val();
    console.log(identitas);
    var no_identitas = document.querySelector('#no_identitas').value
    console.log(no_identitas);
    var qq = document.querySelector('#qq').value
    console.log(qq);
    var kode_objek_pajak = document.querySelector('#kode_objek_pajak').value
    var skb = document.querySelector('#skb').value
    var dt = document.querySelector('#dt').value
    var suket = document.querySelector('#suket').value
    var lainnya = document.querySelector('#lainnya').value
    console.log(kode_objek_pajak);
    var fasilitas_pajak_penghasilan = $('input[name="fasilitas_pajak_penghasilan"]:checked').val();
    console.log(fasilitas_pajak_penghasilan);
    var jumlah_penghasilan_bruto = document.querySelector('#jumlah_penghasilan_bruto').value
    console.log(jumlah_penghasilan_bruto);
    var tarif = document.querySelector('#tarif').value
    console.log(tarif);
    var jumlah_setor = document.querySelector('#jumlah_setor').value
    console.log(jumlah_setor);
    var pengaturan_id = document.querySelector('#pengaturan_id').value
    console.log(pengaturan_id);
    var kelebihan_pemotongan = $('input[name="kelebihan_pemotongan"]:checked').val();
    console.log(fasilitas_pajak_penghasilan);
    var pemindahbukuan = document.querySelector('#pemindahbukuan').value
    console.log(pemindahbukuan);
    var pengembalian = document.querySelector('#pengembalian').value
    console.log(pengembalian);
    var pernyataan = document.querySelector('#pernyataan').value
    console.log(pernyataan);


    var data = {
      tahun_pajak: tahunpajak,
      masa_pajak: masapajak,
      nama: nama,
      identitas: identitas,
      no_identitas: no_identitas,
      qq: qq,
      kode_objek_pajak: kode_objek_pajak,
      fasilitas_pajak_penghasilan: fasilitas_pajak_penghasilan,
      skb: skb,
      dt: dt,
      suket: suket,
      lainnya: lainnya,
      jumlah_penghasilan_bruto: jumlah_penghasilan_bruto,
      tarif: tarif,
      jumlah_setor: jumlah_setor,
      pengaturan_id: pengaturan_id,
      nama_dokumen: $('#nama_dokumen2').attr('data-value'),
      no_dokumen: $('#no_dokumen2').attr('data-value'),
      tgl_dokumen: $('#tgl_dokumen2').attr('data-value'),
      kelebihan_pemotongan,
      pernyataan: pernyataan,
      pengembalian: pengembalian,
      pemindahbukuan: pemindahbukuan,
    }

    console.log(data);
    let user_id = $("#user_id").val();
    $.ajax({

      type: "POST",
      url: `http://localhost:8000/api/tambahpphpasal/${user_id}`,
      data: data,
      success: function(res) {
        // debugger
        // console.log(res)
        location.href = 'daftarbuktipotongBPPs'
      }
    });

  }


  function handlerRadioSelect1() {
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    generateDipotong(jumlah_penghasilan_bruto.value);
    if (document.getElementById("tanpafasilitas").checked = true) {
      document.getElementById("skb").disabled = true;
      document.getElementById("dt").disabled = true;
      document.getElementById("suket").disabled = true;
      document.getElementById("lainnya").disabled = true;
    }
  }


  function handlerRadioSelect2() {
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    generateDipotong(jumlah_penghasilan_bruto.value);
    if (document.getElementById("pilihskb").checked = true) {
      document.getElementById("skb").disabled = false;
      document.getElementById("dt").disabled = true;
      document.getElementById("suket").disabled = true;
      document.getElementById("lainnya").disabled = true;
      const tarif = document.getElementById("tarif");
      tarif.value = "0%"
    }
  }

  function handlerRadioSelect3() {

    if (document.getElementById("pilihdtp").checked = true) {
      document.getElementById("skb").disabled = true;
      document.getElementById("dt").disabled = false;
      document.getElementById("suket").disabled = true;
      document.getElementById("lainnya").disabled = true;
    }
  }

  function handlerRadioSelect4() {
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    generateDipotong(jumlah_penghasilan_bruto.value);
    if (document.getElementById("pilihsk23").checked = true) {
      document.getElementById("skb").disabled = true;
      document.getElementById("dt").disabled = true;
      document.getElementById("suket").disabled = false;
      document.getElementById("lainnya").disabled = true;
      const tarif = document.getElementById("tarif");
      tarif.value = "0,5%"
    }
  }

  function handlerRadioSelect5() {
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    generateDipotong(jumlah_penghasilan_bruto.value);
    if (document.getElementById("pilihlain").checked = true) {
      document.getElementById("skb").disabled = true;
      document.getElementById("dt").disabled = true;
      document.getElementById("suket").disabled = true;
      document.getElementById("tarif").disabled = false;
      document.getElementById("jumlah_setor").disabled = false;
    }
  }
  function handlerRadioSelect6() {

if (document.getElementById("npwp").checked = true) {
  document.getElementById("no_identitas1").disabled = true;
  document.getElementById("no_identitas").disabled = false;
}
}

function handlerRadioSelect7() {

if (document.getElementById("nik").checked = true) {
  document.getElementById("no_identitas").disabled = true;
  document.getElementById("no_identitas1").disabled = false;
}
}

</script>
@push('scripts')
<script>
  $('#kode_objek_pajak').select2();
</script>

</html>