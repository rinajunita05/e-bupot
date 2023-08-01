<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Edit PPh Sendiri | E-Bupot</title>
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
      /* background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover; */
      height: 620px;
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
  </style>
</head>

<body>
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
  <div class='content' style="padding-top :20px; padding-left:310px; padding-right:250px">
  <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width:860px">
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px; border-bottom:0px">
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link" type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link active" id="nav-pajak-tab" data-bs-toggle="tab" data-bs-target="#nav-pajak" type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" width="100px" style="margin-left:120px; height:103%; width:15%;" alt="" srcset="">
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
              
              Perekaman data Bukti Setor atas PPh yang disetor sendiri
            </span>
          </div>
          <form action="../proses_edit_pphsendiri/{{ $id }}" method="POST">
            @csrf
            <div class="container">
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Jenis Bukti Penyetoran</label>
                </div>
                <div class="col">
                  <div class="row">
                    <div class="col">
                      <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="flexRadioDefault1" value="surat setoran pajak" onclick="changeform1(this)">
                      <label class="form-check-label" for="bertindak sebagai">Surat Setoran Pajak</label>
                    </div>
                    <div class="col">
                      <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="flexRadioDefault2" value="pemindahbukuan" onclick="changeform2(this)">
                      <label class="form-check-label" for="bertindak sebagai">Pemindahbukuan</label>
                    </div>
                  </div>
                </div>
              </div>
              <div id="form2" style="display:none;">
                <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                  <div class="col">
                    <label for="">Nomor Pemindahbukuan</label>
                  </div>
                  <div class="col">
                    <input class="form-control" type="text" id="pemindahbukuan" maxlength="16" name="nomor_pemindahbukuan" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                  </div>
                </div>
                <!-- <div class="row" style="padding: 0% 15% 0% 52%">
                  <div class="col">
                    <button style="width:100%; height: 100%" type="button" class="button button1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVQ4ja3UTU5CQRAE4E8XuhfiUv69ArrUg7hRj4EeRyJ3cKWHwETxb6lL2IEuplEDDvAMlbx0Xk2npqa7Z1gTNjJ8A8fYwQdu8FhEuIweJvj89U1wjdKqIvcYooM6tsJdJ/j+KmK9SG5n1g9ivbtIpBH2O0s2u4i8Wi7hXKpFHduoBr8fsRp8M/JOZwU2I5YjvuEEtyHSRwt3wb9G3m7O0Vns1JAKXAm+FbESfNbRFHWr1egSYwtqRJqTodSdv3CIEa6WbKYk1WQodWd6zGY4GUnHyo3HnFjX/GSPw0k7/gd+Oov8XatJd62Md+muDWJtKvKEo4j/wh4ewtmz1KjvOSqCl3BS6DVYhKqZOq0FX1SlQcx+prHVAAAAAElFTkSuQmCC">Cek Pemindahbukuan</button>
                  </div>
                </div> -->
              </div>
              <div style="padding:5px;"></div>
              <div id="form1">
                <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                  <div class="col">
                    <label for="">NTPN</label>
                  </div>
                  <div class="col">
                    <input class="form-control" id="ntpn" value="{{ $pphsendiri['ntpn'] }}" maxlength="16" type="text" name="ntpn" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                  </div>
                </div>
                <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                  <div class="col">
                    <label for="">Tahun Pajak</label>
                  </div>
                  <div class="col">
                    <select class="form-select" value="{{ $pphsendiri['tahun_pajak'] }}" name="tahun_pajak" id="validationDefault04" required>
                      <option selected disabled>Pilih Tahun Pajak</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                    </select>
                  </div>
                </div>
                <!-- <div class="row" style="padding: 0% 15% 0% 52%">
                  <div class="col">
                    <button style="width:100%; height: 100%" type="button" class="button button1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVQ4ja3UTU5CQRAE4E8XuhfiUv69ArrUg7hRj4EeRyJ3cKWHwETxb6lL2IEuplEDDvAMlbx0Xk2npqa7Z1gTNjJ8A8fYwQdu8FhEuIweJvj89U1wjdKqIvcYooM6tsJdJ/j+KmK9SG5n1g9ivbtIpBH2O0s2u4i8Wi7hXKpFHduoBr8fsRp8M/JOZwU2I5YjvuEEtyHSRwt3wb9G3m7O0Vns1JAKXAm+FbESfNbRFHWr1egSYwtqRJqTodSdv3CIEa6WbKYk1WQodWd6zGY4GUnHyo3HnFjX/GSPw0k7/gd+Oov8XatJd62Md+muDWJtKvKEo4j/wh4ewtmz1KjvOSqCl3BS6DVYhKqZOq0FX1SlQcx+prHVAAAAAElFTkSuQmCC">Cek Surat Setoran Pajak</button>
                  </div>
                </div> -->
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="validationDefault04" class="form-label">Masa Pajak</label>
                </div>
                <div class="col">
                  <select class="form-select" id="masa_pajak" name="masa_pajak" required>
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
              </div>

              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Jenis Pajak(MAP)</label>
                </div>
                <div class="col">
                  <input class="form-control" type="text" value="{{ $pphsendiri['jenis_pajak'] }}" id="jenis_pajak" name="jenis_pajak" placeholder="" aria-label="default input" readonly>
                </div>
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Jenis Setoran</label>
                </div>
                <div class="col">
                  <input class="form-control" type="text" value="{{ $pphsendiri['jenis_setoran'] }}" id="jenis_setoran" name="jenis_setoran" placeholder="" aria-label="default input" readonly>
                </div>
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Kode Objek Pajak</label>
                </div>
                <div class="col">
                  <select name="kode_objek_pajak" value="{{ $pphsendiri['kode_objek_pajak'] }}" id="kode_objek_pajak" class="abcd" style="width:90%">
                    <option value='0' selected='true'>Pilih Kode Objek Pajak </option>
                    <option value='22-100-07' data-percent="0.0025">22-100-07 - Penjualan Hasil Produksi Kepada Distributor
                      Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Semen)</option>
                    <option value='22-100-08' data-percent="0.003">22-100-08 - Penjualan Hasil Produksi Kepada Distributor
                      Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Baja)</option>
                    <option value='22-100-09' data-percent="0.003">22-100-09 - Penjualan Hasil Produksi Kepada Distributor
                      Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Otomotif)</option>
                    <option value='22-100-10' data-percent="0.003">22-100-10 - Penjualan Hasil Produksi Kepada Distributor
                      Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Farmasi)</option>
                    <option value='22-100-11' data-percent="0.001">22-100-11 - Penjualan Hasil Produksi Kepada Distributor
                      Di Dalam Negeri Oleh Badan Usaha/Industri Tertentu (Industri Kertas)</option>
                    <option value='22-100-12' data-percent="0.0045">22-100-12 - Penjualan Kendaraan Bermotor Di Dalam Negeri
                      Oleh ATPM, APM, dan Importir Umum Kendaraan Bermotor</option>
                    <option value='22-100-13' data-percent="0.015">22-100-13 - Pembelian Oleh Badan Usaha Berupa Komoditas
                      Tambang Batubara, Mineral Logam, dan Mineral Bukan Logam Dari Badan atau Orang Pribadi Pemegang IUP</option>
                    <option value='22-100-14' data-percent="0.0045">22-100-14 - Penjualan Emas Batangan Di Dalam Negeri Oleh Badan Usaha</option>
                    <option value='22-100-15' data-percent="0.0025">22-100-15 - Pembeliaan Bahan Hasil Kehutanan Yang Belum
                      Melalui Proses Industri Manufaktur, Untuk Keperuan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
                    <option value='22-100-16' data-percent="0.0025">22-100-16 - Pembelian Bahan Hasil Perkebunan Belum Melalui
                      Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
                    <option value='22-100-17' data-percent="0.0025">22-100-17 - Pembelian Bahan Hasil Pertanian Belum Melalui
                      Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
                    <option value='22-100-18' data-percent="0.0025">22-100-18 - Pembelian Bahan Hasil Perternakan Belum Melalui
                      Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
                    <option value='22-100-19' data-percent="0.0025">22-100-19 - Pembelian Bahan Hasil Perikanan Belum Melalui
                      Proses Industri Manufaktur, Untuk Keperluan Industri/Ekspor Oleh Badan Usaha Industri/Eksportir</option>
                    <option value='22-100-20' data-percent="0.003">22-100-20 - Penjualan BBM Oleh Pertamina/Anak Perusahaan
                      Pertamina Kepada Selain SPBU/Agen/Penyalur (Tidak Final)</option>
                    <option value='22-100-21' data-percent="0.003">22-100-21 - Penjualan BBM Oleh Selain Pertamina/Anak
                      Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Tidak Final)</option>
                    <option value='22-100-22' data-percent="0.003">22-100-22 - Penjualan Pelumas Oleh Importir/Produsen</option>
                    <option value='22-100-23' data-percent="0.005">22-100-23 - Penjualan Pulsa dan Kartu Perdana Oleh Penyelenggara
                      Distribusi Tingkat Kedua</option>
                    <option value='22-100-24' data-percent="0.005">22-100-24 - Penjualan BBG Oleh Produsen/Importir Kepada Selain
                      SPBU /Agen/Penyalur (Tidak Final)</option>
                    <option value='22-401-01' data-percent="0.0025">22-401-01 - Penjualan BBM Oleh Pertamina/Anak Perusahaan
                      Pertamina Kepada Selain SPBU/Agen/Penyalur (Final)</option>
                    <option value='22-401-02' data-percent="0.005">22-401-02 - Penjualan BBM Oleh Selain Pertamina/Anak
                      Perusahaan Pertamina Kepada Selain SPBU/Agen/Penyalur (Final </option>
                    <option value='22-401-03' data-percent="0.005">22-401-03 - Penjualan BBG Oleh Produsen/Importir Kepada
                      Selain SPBU /Agen/Penyalur (Final)</option>
                    <option value='22-403-01' data-percent="0.05">22-403-01 - Penjualan Barang Yang Tergolong Sangat Mewah </option>
                    <option value='22-403-02' data-percent="0.01">22-403-02 - Penjualan Barang Yang Tergolong Sangat Mewah
                      Untuk Rumah Berserta Tanah, Apartemen, Kondominium dan Sejenisnya</option>
                    <option value='22-404-01' data-percent="0.015">22-404-01 - Ekspor Komoditas Tambang Batubara, Mineral
                      Logam, dan Mineral Bukan Logam Yang Dilakukan Oleh Eksportir Kecuali WP Yang Terikat Dalam PKP2B dan KK</option>
                    <option value='22-900-01' data-percent="0.015">22-900-01 - Pembayaran Atas Pembelian dan/atau Bahan
                      Untuk Kegiatan Usahanya Oleh BUMN/Badan Usaha Tertentu</option>
                    <option value='23-100-01' data-percent="0.01">23-100-01 - Impor Yang Dipunggut Ditjen Bea dan Cukai
                      Yang Dikenakan Tarif 10%</option>
                    <option value='23-100-02' data-percent="0.075">23-100-02 - Impor Yang Dipunggut Ditjen Bea dan Cukai
                      Yang Dikenakan Tarif 7,5%</option>
                    <option value='23-100-03' data-percent="0.005">23-100-03 - Impor Yang Dipunggut Ditjen Bea dan Cukai
                      Yang Dikenakan Tarif 0,5%</option>
                    <option value='23-100-04' data-percent="0.025">23-100-04 - Impor Yang Dipunggut Ditjen Bea dan Cukai
                      Atas Importir/Pemilik Barang Yang Memiliki API</option>
                    <option value='23-100-05' data-percent="0.075">23-100-05 - Impor Yang Dipunggut Ditjen Bea dan Cukai
                      Atas Importir/Pemilik Barang Yang Tidak Memiliki API</option>
                    <option value='23-100-01' data-percent="0.15">24-100-01- Hadiah, Penghargaan, Bonus, dan Lainnya Selain
                      Yang Telah Dipotong PPh Pasal 21 Ayat (1)Huruf E UU PPh</option>
                    <option value='24-100-02' data-percent="0.02">24-100-02 - Impor Yang Dipunggut Ditjen Bea dan Cukai Yang Dikenakan Tarif 0,5%</option>
                    <option value='24-101-01' data-percent="0.15">24-101-01 - Dividen</option>
                    <option value='24-102-01' data-percent="0.15">24-102-01 - Bunga Selain Yang Dikenakan PPh Pasal 4 Ayat (2) </option>
                    <option value='24-103-01' data-percent="0.15 ">24-103-01 - Royalti</option>
                    <option value='24-104-01' data-percent="0.02">24-104-01 - Jasa Teknik</option>
                    <option value='24-104-02' data-percent="0.02"> </option>
                    <option value='24-104-03' data-percent="0.02">24-104-03 - Jasa Konsultan</option>
                    <option value='24-104-04' data-percent="0.02">24-104-04 - Jasa Penilai (Appraisal)</option>
                    <option value='24-104-05' data-percent="0.02">24-104-05 - Jasa Aktuaris</option>
                    <option value='24-104-06' data-percent="0.02">24-104-06 - Jasa Akuntansi, Pembukuan, dan Atestasi Laporan Keuangan</option>
                    <option value='24-104-07' data-percent="0.02">24-104-07 - Jasa Hukum</option>
                    <option value='24-104-08' data-percent="0.02">24-104-08 - Jasa Arsitektur</option>
                    <option value='24-104-09' data-percent="0.02">24-104-09 - Jasa Perencanaan Kota dan Arsitektur Landscape</option>
                    <option value='24-104-10' data-percent="0.02">24-104-10 - Jasa Perancangan (Design)</option>
                    <option value='24-104-11' data-percent="0.02">24-104-11 - Jasa Pengeboran (Drilling) Dibidang Penambangan
                      Minyak dan Gas Bumi (Migas) Kecuali Yang Dilakukan Oleh Badan Usaha Tetap (BUT)</option>
                    <option value='24-104-12' data-percent="0.02">24-104-12 - Jasa Penunjang Dibidang Usaha Panas Bumi dan
                      Penambangan Minyak dan Gas Bumi (Migas)</option>
                    <option value='24-104-13' data-percent="0.02">24-104-13 - Jasa Penambangan dan Jasa Penunjang Selain
                      Dibidang Usaha Panas Bumi dan Penambangan Minyak dan Gas Bumi (Migas) </option>
                    <option value='24-104-14' data-percent="0.02">24-104-14 - Jasa Penunjang Dibidang Penerbangan dan Bandar Udara </option>
                    <option value='24-104-15' data-percent="0.02">24-104-15 - Jasa Penebangan Hutan </option>
                    <option value='24-104-16' data-percent="0.02">24-104-16 - Jasa Pengolahan Limbah </option>
                    <option value='24-104-17' data-percent="0.02">24-104-17 - Jasa Penyedia Tenaga Kerja dan/atau Tenaga Ahli (Outsourcing Services)</option>
                    <option value='24-104-18' data-percent="0.02">24-104-18 - Jasa Perantara dan/atau Keagenan</option>
                    <option value='24-104-19' data-percent="0.02">24-104-19 - Jasa Bidang Perdagangan Surat-Surat Berharga, Kecuali Yang Dilakukan Bursa Efek, Kustodian Sentral Efek Indonesia (KSEI)
                      dan Kliring Penjamin Efek Indonesia (KPEI</option>
                    <option value='24-104-20' data-percent="0.02">24-104-20 - Jasa Kustodian/Penyimpanan/Penitipan, Kecuali Yang Dilakukan Oleh KSI</option>
                    <option value='24-104-21' data-percent="0.02">24-104-21 - Jasa Pengisian Suara (Dubbing) dan/atau Sulih Suara</option>
                    <option value='24-104-22' data-percent="0.02">24-104-22 - Jasa Mixing Film</option>
                    <option value='24-104-23' data-percent="0.02">24-104-23 - Jasa Pembuatan Sarana Promosi Film, Iklan, Poster, Foto, Slide, Klise, Banner, Pamphlet, Baliho dan Folder</option>
                    <option value='24-104-24' data-percent="0.02">24-104-24 - Jasa Sehubungan Dengan Software atau Hardware atau Sistem Komputer, Termasuk Perawatan, Pemeliharaan dan Perbaikan</option>
                    <option value='24-104-25' data-percent="0.02">24-104-25 - Jasa Pembuatan dan/atau Pengelolaan Website</option>
                    <option value='24-104-26' data-percent="0.02">24-104-26 - Jasa Internet Termasuk Sambungannya</option>
                    <option value='24-104-27' data-percent="0.02">24-104-27 - Jasa Penyimpanan, Pengelolaan, dan/atau Penyaluran Data, Informasi dan/atau Program</option>
                    <option value='24-104-28' data-percent="0.02">24-104-28 - Jasa Instalasi atau Pemasangan Mesin, Peralatan, Listrik, Telepon, Air, Gas, Ac atau Tv Kabel,
                      Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya Di Bidang Konstruksi dan Mempunyai Izin dan Sertifikasi Sebagai Pengusaha Konstruksi </option>
                    <option value='24-104-29' data-percent="0.02">24-104-29 - Jasa Perawatan/Perbaikan/Pembenaran Mesin, Peralatan, Listrik, Telepon, Air, Gas, Ac atau Tv Kabel,
                      Selain Yang Dilakukan Oleh Wajib Pajak Yang Ruang Lingkupnya Di Bidang Konstruksi dan Mempunyai Izin dan Sertifikasi Sebagai Pengusaha Konstruksi </option>
                    <option value='24-104-30' data-percent="0.02">24-104-30 - Jasa Perawatan Kendaraan dan/atau Alat Transportasi Darat, Laut dan Udara </option>
                    <option value='24-104-31' data-percent="0.02">24-104-31 - Jasa Maklon</option>
                    <option value='24-104-32' data-percent="0.02">24-104-32 - Jasa Penyelidikan dan Keamanan </option>
                    <option value='24-104-33' data-percent="0.02">24-104-33 - Jasa Penyelenggara Kegiatan atau Event Organizer</option>
                    <option value='24-104-34' data-percent="0.02">24-104-34 - Jasa Penyedia Tempat dan/atau Waktu Dalam Media Massa, Media Luar Ruang atau Media Lain Untuk Penyampaian Informasi, dan/atau Jasa Periklanan</option>
                    <option value='24-104-35' data-percent="0.02">24-104-35 - Jasa Pembasmi Hama</option>
                    <option value='24-104-36' data-percent="0.02">24-104-36 - Jasa Kebersihan atau Cleaning Service</option>
                    <option value='24-104-37' data-percent="0.02">24-104-37 - Jasa Sedot Septi Tank</option>
                    <option value='24-104-38' data-percent="0.02">24-104-38 - Jasa Pemeliharaan Kolam</option>
                    <option value='24-104-39' data-percent="0.02">24-104-39 - Jasa Katering atau Tata Boga</option>
                    <option value='24-104-40' data-percent="0.02">24-104-40 - Jasa Forwarding </option>
                    <option value='24-104-41' data-percent="0.02">24-104-41 - Jasa Logistik </option>
                    <option value='24-104-42' data-percent="0.02">24-104-42 - Jasa Pengurusan Dokumen</option>
                    <option value='24-104-43' data-percent="0.02">24-104-43 - Jasa Pengepakan</option>
                    <option value='24-104-44' data-percent="0.02">24-104-44 - Jasa Loading dan Unloading</option>
                    <option value='24-104-45' data-percent="0.02">24-104-45 - Jasa Laboratorium dan/atau Pengujian Kecuali Yang Dilakukan Oleh Lembaga atau Institusi Pendidikan Dalam Rangka Penelitian Akademis</option>
                    <option value='24-104-46' data-percent="0.02">24-104-46 - Jasa Pengelolaan Parkir</option>
                    <option value='24-104-47' data-percent="0.02">24-104-47 - Jasa Penyondiran Tanah</option>
                    <option value='24-104-48' data-percent="0.02">24-104-48 - Jasa Penyiapan dan/atau Pengelolaan Limbah</option>
                    <option value='24-104-49' data-percent="0.02">24-104-49 - Jasa Pembibitan dan/atau Penanaman Bibit</option>
                    <option value='24-104-50' data-percent="0.02">24-104-50 - Jasa Pemeliharaan Tanaman </option>
                    <option value='24-104-51' data-percent="0.02">24-104-51 - Jasa Pemanenan</option>
                    <option value='24-104-52' data-percent="0.02">24-104-52 - Jasa Pengolahan Hasil Pertanian, Pekebunan, Perikanan, Peternakan dan Perhutanan</option>
                    <option value='24-104-53' data-percent="0.02">24-104-53 - Jasa Dekorasi </option>
                    <option value='24-104-54' data-percent="0.02">24-104-54 - Jasa Percetakan/Penerbitan</option>
                    <option value='24-104-55' data-percent="0.02">24-104-55 - Jasa Penerjemahan</option>
                    <option value='24-104-56' data-percent="0.02">24-104-56 - Jasa Pengangkutan/Ekspedisi Kecuali Yang Telah Diatur Dalam Pasal 15 Undang-Undang Pajak Penghasilan </option>
                    <option value='24-104-57' data-percent="0.02">24-104-57 - Jasa Pelayanan Pelabuhan</option>
                    <option value='24-104-58' data-percent="0.02">24-104-58 - Jasa Pengangkutan Melalui Jalur Pipa</option>
                    <option value='24-104-59' data-percent="0.02">24-104-59 - Jasa Pengelolaan Penitipan Anak</option>
                    <option value='24-104-60' data-percent="0.02">24-104-60 - Jasa Pelatuhan dan/atau Kursus</option>
                    <option value='24-104-61' data-percent="0.02">24-104-61 - Jasa Pengiriman dan Pengisian Uang Ke ATM</option>
                    <option value='24-104-62' data-percent="0.02">24-104-62 - Jasa Sertifikasi</option>
                    <option value='24-104-63' data-percent="0.02">24-104-63 - Jasa Survey</option>
                    <option value='24-104-64' data-percent="0.02">24-104-64 - Jasa Tester</option>
                    <option value='24-104-65' data-percent="0.02">24-104-65 - Jasa Selain Jasa-Jasa TerseBUT Diatas Yang Pembayaran Dibebankan
                      Kepada APBN (Anggaran Pendapatan dan Belanja Negara) atau APBD (Anggaran Pendapatan dan Belanja </option>
                    <option value='24-104-66' data-percent="0.02">24-104-66 - Jasa Penyelenggaran Layanan Transaksi Pembayaran Terkait Dengan Distribusi Token Oleh Penyelenggara Distribusi </option>
                    <option value='24-104-67' data-percent="0.02">24-104-67 - Jasa Pemasaran Dengan Media Voucher Oleh Penyelenggara Voucher</option>
                    <option value='24-104-68' data-percent="0.02">24-104-68 - Jasa Penyelenggara Transaksi Pembayaran Terkait Dengan Ditribusi Voucher Oleh Penyelenggara Voucher dan Penyelenggara Distribusi</option>
                    <option value='24-104-69' data-percent="0.02">24-104-69 - Jasa Penyelenggara Program Loyalitas dan Penghargaan Pelanggan
                      (Costumer Loyalty/Reward Program) Oleh Penyelenggara Voucher</option>
                    <option value='24-105-01' data-percent="0.15">24-105-01 - Bunga Pinjaman Yang Diterima Wajib Pajak Dalam Negeri dan Bentuk Usaha Tetap
                      Melalui Layanan Pinjam Meminjam Uang Berbasis Teknologi Informasi </option>
                    <option value='28-403-02' data-percent="0.1">28-403-02 - Persewaan Tanah dan/atau Bangunan</option>
                    <option value='28-405-01' data-percent="0.25">28-405-01 - Hadiah Undian (Yang Diterima Wajib Pajak Dalam Negeri</option>
                    <option value='28-409-08' data-percent="0.04">28-409-08 - Perencanaan Konstruksi (Dengan Kualifikasi Usaha)</option>
                    <option value='28-409-09' data-percent="0.06">28-409-09 - Perencanaan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                    <option value='28-409-10' data-percent="0.02">28-409-10 - Pelaksanaan Konstruksi (Kualifikasi Usaha kecil)</option>
                    <option value='28-409-11' data-percent="0.03">28-409-11 - Perencanaan Konstruksi (Kualifikasi Usaha Menengah dan Besar)</option>
                    <option value='28-409-12' data-percent="0.04">28-409-12 - Pelaksanaan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                    <option value='28-409-13' data-percent="0.04">28-409-13 - Pengawasan Konstruksi (Dengan Kualifikasi Usaha)</option>
                    <option value='28-409-14' data-percent="0.06">28-409-14 - Pengawasan Konstruksi (Tanpa Kualifikasi Usaha)</option>
                    <option value='28-409-22' data-percent="0.0175">28-409-22 - Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang Memiliki Sertifikat Badan Usaha Kualifikasi Kecil</option>
                    <option value='28-409-23' data-percent="0.04">28-409-23 - Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang Tidak Memiliki Sertifikat Badan Usaha atau Sertifikat Kompetensi Kerja Untuk Usaha Orang Perseorangan </option>
                    <option value='28-409-24' data-percent="0.0265">28-409-24 - Pekerjaan Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang Memilliki Sertifikat Selain Sertifikat Badan Usaha Kualifikasi Kecil
                      atau Sertifikat Kompetensi Kerja Untuk Usaha Orang Perseorangan</option>
                    <option value='28-409-25' data-percent="0.0265">28-409-25 - Pekerjaan Konstruksi Terintegrasi Yang Dilakukan Oleh Penyedia Jasa Yang Memiliki Sertifikat Badan Usaha</option>
                    <option value='28-409-26' data-percent="0.04">28-409-26 - Pekerjaan Konstruksi Terintegrasi Yang Dilakukan Oleh Penyedia Jasa Yang Tidak Memiliki Sertifikat Badan Usaha</option>
                    <option value='28-409-27' data-percent="0.035">28-409-27 - Jasa Konsultasi Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang Memiliki Sertifikat Badan Usaha atau Sertifikat Kompetensi Kerja Untuk Usaha Orang Perseorangan </option>
                    <option value='28-409-28' data-percent="0.06">28-409-28 - Jasa Konsultasi Konstruksi Yang Dilakukan Oleh Penyedia Jasa Yang Tidak Memiliki Sertifikat Badan Usaha atau Sertifikat Kompetensi Kerja Untuk Usaha Orang Perseorangan </option>
                    <option value='28-410-02' data-percent="0.012">28-410-02 - Imbalan Yang Dibayarkan/Terutang Kepada Perusahaan Pelayaran Dalam Negeri</option>
                    <option value='28-411-02' data-percent="0.0264">28-411-02 - Imbalan Charter Kapal Laut dan/atau Pesawat Udara Yang Dibayarkan/Terutang Kepada Perusahaan Pelayaran dan/atau Penerbangan Luar Negeri Melalui BUT Di Indonesia</option>
                    <option value='28-417-01' data-percent="0">28-417-01 - Bunga Simpanan Yang Dibayarkan Oleh Koperasi Kepada Anggota Wajib Pajak Orang Pribadi (Bunga Sampai Dengan Rp240.000)</option>
                    <option value='28-417-02' data-percent="0.1">28-417-02 - Bunga Simpanan Yang Dibayarkan Oleh Koperasi Kepada Anggota Wajib Pajak Orang Pribadi (Bunga Diatas Rp240.000)</option>
                    <option value='28-419-01' data-percent="0.1">28-419-01 - Dividen Yang Diterima/Diperoleh Wajib Pajak Orang Pribadi Dalam Negeri</option>
                    <option value='28-421-01' data-percent="0.2">28-421-01 - Uplift Hulu Migas</option>
                    <option value='28-421-02' data-percent="0.05">28-421-02 - Participating Interest Eksplorasi Hulu Migas</option>
                    <option value='28-421-03' data-percent="0.07">28-421-03 - Participating Interest Eksploitasi Hulu Migas</option>
                    <option value='28-423-01' data-percent="0.005">28-423-01 - Transaksi Dengan Wajib Pajak Yang Menggunakan Tarif Peraturan Pemerintah Nomor 23 Tahun 2018</option>
                    <option value='29-101-01' data-percent="0.018">29-101-01 - Imbalan Charter Pesawat Udara Yang Dibayarkan/Terutang Kepada Perusahaan Penerbangan Dalam Negeri Oleh Pemotong Pajak</option>
                  </select>
                </div>
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Jumlah Penghasilan Bruto</label>
                </div>
                <div class="col">
                  <input class="form-control" value="{{ $pphsendiri['jumlah_penghasilan_bruto'] }}" id="jumlah_penghasilan_bruto" oninput="handleChange5(this.value)" type="text" name="jumlah_penghasilan_bruto" placeholder="0" aria-label="default input">
                </div>
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Jumlah Setor(RP)</label>
                </div>
                <div class="col">
                  <input id="jumlah_setor" class="form-control" value="{{ $pphsendiri['jumlah_setor'] }}" type="text" name="jumlah_setor" placeholder="" aria-label="default input" readonly>
                </div>
              </div>
              <div style="padding:5px;"></div>
              <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                <div class="col">
                  <label for="">Tanggal Setor</label>
                </div>
                <div class="col">
                  <input type="date" value="2023-01-01" id="tanggal_setor" name="tanggal_setor" style="width: 100%;" />
                </div>
                <div class="container">
                  <div class="row" style="padding: 0% 0% 10% 41%">
                    <div class="col">
                      <button class="button button1" type="submit" onclick="end_edit()">
                        <span style="font-size: 18px; font-weight:bold">Simpan</span></button>
                      <button class="button button2" type="riset">
                        <span style="font-size: 18px; font-weight:bold">Batal</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div style="padding:2%"></div>
  </div>
  <div style="padding:1%"></div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>
<script>
  // const formatter = new Intl.NumberFormat('en-US', {
  //   style: 'currency',
  //   currency: 'USD',

  //   // These options are needed to round to whole numbers if that's what you want.
  //   //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
  //   //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
  // });

  // console.log(formatter.format(2500));



  let percent;

  function formatPercent(number) {
    return `${(numeral(number).format()).replace(",",".")}`;
  }
  var selection = document.getElementById("kode_objek_pajak");
  const myElement = document.getElementById("jumlah_penghasilan_bruto");
  const myElement2 = document.getElementById("jumlah_setor");
  selection.onchange = function(event) {
    var rc = event.target.options[event.target.selectedIndex].dataset.percent;

    percent = parseFloat(rc);
  };

  function handleChange5(src) {
    let newVal = parseInt(src.split(",").join('')) * percent
    const myElement = document.getElementById("jumlah_penghasilan_bruto");
    const myElement2 = document.getElementById("jumlah_setor");
    myElement.value = numeral(src).format();
    myElement2.value = formatPercent(newVal);
  }

  function maxLength() {
    console.log(1)
  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "block";

  }
  $("#kode_objek_pajak").change(function() {
    let val = $("#kode_objek_pajak").val().split('-');
    $("#jenis_pajak").val('4111' + val[0])
    $("#jenis_setoran").val(val[1])
  });

  $(function() {
    $("select").select2();
  });
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
// berhasil mengedit
function end_edit() {
Swal.fire({
  position: 'top',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: false,
  timer: 1500
})

  }
</script>

</html>