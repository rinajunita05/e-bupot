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
  <title>Perekaman Data Bukti Setor | E-Bupot</title>
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
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" id="nav-pajak-tab" type="button">Pajak Penghasilan</a>
          <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link active" type="button">SPT Masa</a>
          <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
          <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
        </div>
      </nav>
      <div style="padding:1%"></div>
      <div class="card">
        <div class="card-body" style="background-color:#f0f0f0">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                  <img style="width: 20px; margin:0px 0px 5px 0px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC7ElEQVRoge2aO2tUQRiGny8kaqExkRittFew0agYrJYkqAFBVNKk8C/o31Dsogg2ghcQLEIUvIGFIRo3pLFPUsYL8Va4aV6Lc45M1nOZk8zZBdkHFia733zzvme+mXMLdGgv1m4BeUg6CZyK/5w1s/ft1OONpD5JT/UvM5J2t1tfLpL6JdVTxP810W6NmXiITziR9OkuSgjUgANATwCNv4F7ZraW8fs4cNQjzzCQvR4kDUq6I2nd42iU5UGeMknXPHJczUtwWNJKBcIT7jeN1y9ptKSJ40lsd1PHQeAZUckkvAPmgPW8I+fJZ+CuKx54CRyRNGFmTwDM7IYkgOspOWbMbD41u6KySViTdCaA6KyxmhfsuqQLTTHNM1GX1JeX0K35Vor3MVGPZywz6UUn0VwbxOeZmMwVHwe505VWe60Qn2kiiy6nvctp/worfcOC9dnne4BHksaKAruKAkIQL7zn+IlP+AjUi4IqNxCLfwEMlei2CIyY2deiwEoNVC0eKjTQCvFQkYF4wb6inPgFoJaIj3esh/En/eRFwdXoZii52yQsEB159yr1CjARt+eBm2kdg86ApG1EZbNV8QC9TjvzLix0CV0GjpWIzxLvTRUGfFkExrYiHgIakNQLjHiGl95tsgg5A+eBHR5xwcRDWAOXPGKCiodABuLyGS0Iq+Ps86EINQM1YHvK9w1gGpgEhre6YNMIdSL75LQbRFeej4FpM/sRaIxUghgws1lJp4E9wJuqRbsEu5Qws7ehcpWhJTc0VdIx0G46BtrNf2Xgp9Pe2WohKbg3NJnnFdfAstMeDi6nPK6GpcJoRS/W3Ie7Z6vTVqhl3NHRkO+LPUm3nY7fJJ2rWGuahvF47ISpvPgN74kl7QU+AAedr+eBWWA1uNqN7CcqG/dRzDIwZGZfvLMoesW07PEEuWqWJB3a1KGQNCDplqL6azUNSVOSBny05v6rgaLFUyMqqX2bOhr+rAIrwGsz+17xWB2C8Qcjc2gawHJhagAAAABJRU5ErkJggg==">
                  Perekaman Data Bukti Setor
                </span>
              </div>
              <form action="tambah_spt" method="POST">
                @csrf
                <div class="container">
                  <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                    <div class="col">
                      <label for="">Jenis Bukti Penyetoran</label>
                    </div>
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="surat setoran pajak" value="surat setoran pajak" onclick="changeform1(this)">
                          <label class="form-check-label" for="bertindak sebagai">Surat Setoran Pajak</label>
                        </div>
                        <div class="col">
                          <input class="form-check-input" type="radio" name="jenis_bukti_penyetoran" id="pemindahbukuan" value="pemindahbukuan" onclick="changeform2(this)">
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
                  </div>
                  <div style="padding:5px;"></div>
                  <div id="form1">
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">NPWP</label>
                      </div>
                      <div class="col">
                        <input class="form-control" id="no_identitas" type="text" name="npwp" placeholder="" aria-label="default input" oninput="formatNpwp2(this)" maxlength="21" required>
                      </div>
                    </div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">NTPN</label>
                      </div>
                      <div class="col">
                        <input class="form-control" id="ntpn" maxlength="16" type="text" name="ntpn" placeholder="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" aria-label="default input">
                      </div>
                    </div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">Nama</label>
                      </div>
                      <div class="col">
                        <input class="form-control" id="nama" maxlength="16" type="text" name="nama" placeholder=""  aria-label="default input">
                      </div>
                    </div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">Tahun Pajak</label>
                      </div>
                      <div class="col">
                        <select class="form-select" name="tahun_pajak" id="tahun_pajak" required>
                          <option selected disabled value="">Pilih Tahun Pajak</option>
                          <option>2022</option>
                          <option>2023</option>
                          <option>2024</option>
                        </select>
                      </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">Masa Pajak</label>
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
                        <input class="form-control" id="jenis_pajak" maxlength="6" type="text" name="jenis_pajak" placeholder="" aria-label="default input">
                      </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">Jenis Setoran</label>
                      </div>
                      <div class="col">
                        <input class="form-control" id="jenis_setoran" maxlength="3" type="text" name="jenis_setoran" placeholder="" aria-label="default input">
                      </div>
                    </div>
                    <div style="padding:5px;"></div>
                    <div class="row" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                      <div class="col">
                        <label for="">Jumlah Setor(RP)</label>
                      </div>
                      <div class="col">
                        <input class="form-control" id="jumlah_setor" oninput="handleChange5(this.value)" type="text" name="jumlah_setor" placeholder="" aria-label="default input">
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
                    </div>
                    <div class="container">
                      <div class="row" style="padding: 4% 0% 10% 45%">
                        <div class="col">
                          <button class="btn btn-outline-warning" type="submit">
                            <span style="font-size: 18px">Simpan</span></button>
                          <a href="{{ url('/sptmasa') }}" class="btn btn-outline-secondary" type="riset">
                            <span style="font-size: 18px">Batal</span></a>
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
    </div>
</body>
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

  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";

  }
  var selection = document.getElementById("objek_pajak");
  const myElement = document.getElementById("jmlbruto");
  const myElement2 = document.getElementById("jmlhasilbruto");
  selection.onchange = function(event) {
    var rc = event.target.options[event.target.selectedIndex].dataset.percent;

    percent = parseFloat(rc);
  };

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

  function formatNpwp2() {
    formatnpwp = document.getElementById('no_identitas').value
    formatnpwp2 = document.getElementById('no_identitas')
    if (typeof formatnpwp === 'string') {

    }
    formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
  }

  function handleChange5(src) {
    let newVal = parseInt(src.split(",").join('')) * percent
    const myElement = document.getElementById("jumlah_setor");
    myElement.value = numeral(src).format();
    myElement2.value = formatPercent(newVal);
  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>