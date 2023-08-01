<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--  CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.js"></script>
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <title>Penandatangan | E-Bupot</title>
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
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" id="nav-pajak-tab"  type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link active" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
        <div style="padding:2%">
          <div class="card">
            <div class="card-body" style="background-color:#f0f0f0">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                    <span style="color: #FFFFFF; font-weight: bold;">
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABmJLR0QA/wD/AP+gvaeTAAABOklEQVQ4jcWTu0oDURCG/9Gg8YLYSAoRBNFo5wVCLOwsLazsLfQhBHvBN9DCNxALCwP6EmojWNptUAIi3shnsbO6nuwuhhT+MOyBf+bbOTO70n8J6AeqwHgvkBpwT6xXYDfxLEg0SYuSZtz7lNQwsxegLqkhaSxV8iZpysyiNKQCXPjbnoFHIALqHi2yVfvVCXAJXANL3lnirRZAmsBoGrTmxkJw1SLIO7ARDnEbiLqEbGZtYwd4CLbTFaSvgxprP9hOog9JW5KugIm/gKp5EDM7k7Qn6bgQBJQkTRdAJKns8a2SP1uShvw8KOnJz02PQzM7T9UNO7yjizkf5ErGlcLcAeAOOMhLOCH+j9aBcoZvwDxwSvzFV/JAI8AR0M5Ze6JbYDmstwzgpKRZ/cwvrUjSjZm1iwfQg74Ape+NGib6VMYAAAAASUVORK5CYII=">
                      Perekaman Penandatangan
                    </span>
                  </div>
                  <form action="proses_tambah_pengaturan" method="POST">
                    @csrf
                    <div id="form1">
                      <div style="padding:5px;"></div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="">Bertindak Sebagai</label>
                        </div>
                        <div class="col-4">
                          <input class="form-check-input" type="radio" onchange="" value="pengurus" name="bertindak_sebagai" id="flexRadioDefault1">
                          <label class="form-check-label" for="Identitas">Wakil Wajib Pajak(Pengurus)</label>
                        </div>
                        <div class="col-2">

                          <input class="form-check-input" type="radio" value="kuasa" name="bertindak_sebagai" id="flexRadioDefault1" checked>
                          <label class="form-check-label" for="Identitas">Kuasa</label>
                        </div>
                      </div>
                      <div style="padding:5px;"></div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="">Identitas</label>
                        </div>
                        <div class="col-4">
                          <input class="form-check-input" type="radio" name="identitas" id="npwp" value="npwp" onclick="changeform1(this)" required>
                          <label class="form-check-label" for="identitas">NPWP</label>
                        </div>
                        <div class="col-2">
                          <input type="text" name="nama" id="namas" hidden>
                          <input type="text" name="npwps" id="npwps" hidden>
                          <input class="form-check-input" type="radio" name="identitas" id="nik" value="nik" onclick="changeform2(this)" required>
                          <label class="form-check-label" for="identitas">NIK</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="">NPWP</label>
                        </div>
                        <div class="col-6">
                          <input class="attr-sys form-control" style="width:75%; height:85%" type="text" id="no_identitas" name='no_identitas' aria-label="default input" oninput="formatNpwp2(this)" maxlength="21" onclick="handlerRadioSelect1()">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="">NIK</label>
                        </div>
                        <div class="col-6">
                          <input class="attr-sys form-control" style="width:75%; height:85%;" type="text" maxlength="16" name="nik" id="nik1" aria-label="default input" onclick="handlerRadioSelect2()">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="">Nama</label>
                        </div>
                        <div class="col-6">
                          <input class="form-control" style="width:75%; height:85%;" type="text" name="nama" id="nama" placeholder="" aria-label="default input">
                        </div>
                      </div>
                      <div style="padding:8px;"></div>
                      <div class="row">
                        <div class="col-6" style="padding-left: 15%; padding-right:15%;margin-bottom: 10px;">
                          <label for="" name="status" id="status">Status</label>
                        </div>
                        <div class="col-6">
                          <!-- <div class="form-check"> -->
                          <input class="form-check-input" name="status" type="checkbox" value="1" id="flexCheckChecked" checked>
                          <label class="form-check-label" for="flexCheckChecked">
                            Aktif
                          </label>
                        </div>
                      </div>
                      <!-- <div class="row" style="padding-left: 50%;">
                        <div class="col-4" id="button-check" style="display:none">
                          <button class="button button1" style="position:relative; top:30px" type="button">
                            <span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAClElEQVRIie2WO08VQRTH/2cf2NyE2wh3z9wYoxYmCw1r7wOwFYnRzkIKAzFqY/wGBvErSGWtAhUJwcpCEikUSEgMwavifTUEGmJ25lgwN0GEuw/Bin+zsztzzu/M7Mw5A5zoP4mSBoRh2LG5uTkkIkMA+gCUbdcPAItENF0sFqdWVlZ+HRk4CIJhx3FeiMi5BD9rIvKkWq2+TQt2DvvOzBNE9NpCPwN4ZIwJtdYFrXXBGNMjIo8BLAE4T0RvmHm8jc9kMfMEMwsz7wRBcD/BmaOUGmXmHWszngsaBMFwC1oqlS6ntSuXy1f2wIcyQcMw7FBKrTGz2JlmEjOPWfCXKIr81IZKqdvW8BPy/StXKbXEzKKUutVu4B/OReSmbb4EYHKAtTFm0vpqu9z7Z9UHAMaY+RxQWOCcbV7KAmYA0Fp/ywuO47hlq7KA/1nGmMRseBD4JwC4rnsmL9j3/ZZtLQv4IwAQ0WBesOd5162PD6nBRDRtnyMHBJVGrojcs+2Z1OBisTgFYA1Ar1IqTwIZBRACWN/Y2GhbMNy9L81mUxcKhe9EdAfAQGdn5/utra2vaaBKqasAXgFwieju9vb2arvxfy2nLW3PAZwyxswy89j+APcHz8wPRGQWQAeAhtZ6ISnQw7a+w8zPADwFACJaNsZMisic1roCAI7jnPU8b1BERrC7vADQANBFRMtxHPfX6/VGVjAAwFaZFwAuJExgnYgeaq0XXNd9JyI9SfDEwx5FkV+r1W7Y3Bth9+pDAKr2yMzYjRQDQHd3d5fnefNJ8FRZJqtKpdJpx3HmAfQCWPV9/1qlUqkeOzgN/MhzdUu1Wq2ptR4gomUAF+M4nt7bf2xgAKjX6404jvsBLIqIPk7WiQ7Vb6enCoRgAAFGAAAAAElFTkSuQmCC">Cek</span></button>
                        </div>
                        <div class="col-5" id="valid" style="display:none">
                          <div class="form-check form-switch" style="position:relative;top:40px;">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Tidak Valid</label>
                          </div>
                        </div>
                      </div> -->
                      <div style="padding:30px;"></div>
                      <div class="row" style="padding-left: 40%;">
                        <div class="col">
                          <div class="d-grid gap-2 d-md-flex justify-content-md">
                            <button style="background-color: rgb(255, 157, 49);border-radius:25px;" class="btn btn-light me-md-2" type="submit">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAABKElEQVQokaWSrU7EQBSFzy3TDQLTUDPTEgyuoOoQBAgPAALDO2CQ7APwGngUDoUliLqtAbMJTZomk24CCEJ/LmaHtF26lHDU5NzzzbmZDPAPkTkEQTDSWvt9waIodJ7nrwtwEASj2WwWA9haUvTOzKdpmt61YCnlJhFNAZxVVfXYJGzbXqnr+hrALoAPZj4xFwgAYGYiItR1/ZBl2bRbqZR6msOrRHTjuq7SWr+JZsiyrAsp5aTjWQD2mNlYa0KIdQBtGMA5EbWMBrQgq3cyQL0wM19WVbXDzOO+THdto/s0Ta/m54lS6gjAweDmzhb0ky8AgIi6r3Loed64LMtbIcQxM+83hyb/lx9m9Ow4znYcx5/f64RhaCdJsvEb6fv+SxRFxYCS5foCYSBwCaQOSj0AAAAASUVORK5CYII=">
                              simpan</button>
                            <button style="border-radius:25px; background-color: grey;" class="btn btn-light" type="button">
                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAABeElEQVQokaVPsWrcQBSclWSTYK0OJyi70lNhDIaQM/mEcOQHrvEPOE2KpPc/pHFnE0wgTkq7dXlFuoDBX+Di7JzQBZHY7C4pjkgvzSkcdzpI7KnezO4wM8A9INpEInrMzG8APGPmQVEUR23/glkSx7EOguAVMyfMfOB5XgpALUv+ayail8zc9zzv3Wg0yqdaD8DKtCHPm73mqOu6A2DQGAEgz/NDAMM0TT8opdaWNQAAn4g+tT1kWbaVJMnx/Ex/5uYoirSU8oG19lprHTvnfgGAMeZnGIY3Usq+c+7rQm0AEEJ8BLCbZdkj3/dPiOi9UuoJAIzH4y9CiO3ZwNlkGGN+Symf1nX9uqqqvaqqzoIg2O90OpfGmO9RFK1LKR9aa78t3a613mhIt9tdJaLPWus4SZIXRLTTmtxsd87dNqQsyyoMwwvf998KIQyAH9ba4cLmZSiK4oqZNTP3JpPJeaP/k3mK58ycl2Xp/sMDKKU2iegU7TPvhj/2qIa1P2+khwAAAABJRU5ErkJggg==">
                              Batal</button>
                          </div>
                        </div>
                      </div>
                      <div style="padding:5px;"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div style="background-color: #FFFFFF; padding:2%; padding-left:0%">
            <div class="card" style="background-color:#f0f0f0; width:102%">
              <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                      <span style="color: #FFFFFF; font-weight: bold;">
                        <img style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                        Daftar Penandatangan Bukti Potong
                      </span>
                    </div>
                    <table class="table table-bordered">
                      <div style="padding: 0px 15px;">
                        <table id="tabsendiri" class="display" cellspacing="0" width="100%">
                          <thead>
                            <tr style="background-color: rgb(4, 153, 195);">
                              <th class="text" style="color: #FFFFFF; text-align:center">
                                N0MOR IDENTITAS
                              </th>
                              <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                                NAMA
                              </th>
                              <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                                BERTINDAK SEBAGAI
                              </th>
                              <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                                STATUS
                              </th>
                              <th class="text" style="color: #FFFFFF; text-align:center" scope="col">AKSI</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if (count($pengaturan) > 0)
                            @foreach ($pengaturan as $p)
                            <tr class="text1" style="background-color: #FFFFFF;">
                              <td>{{ ($p['identitas'] == 'npwp') ? $p['npwp'] : $p['nik'] }}</td>
                              <td>{{ $p['nama'] }}</td>
                              <td>{{ $p['bertindak_sebagai'] }}</td>
                              <td>{{ $p['status'] ? 'aktif' : 'nonaktif' }}</td>
                              <td><a href="./ganti_status_peng/{{ $p['id'] }}" class="btn btn-outline-light border-radius:25px;"></button>
                                  <img type="button" style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAFKElEQVRoge1ZXYwTVRT+zrTTxe0usULbnTtdXXGDUUMEK/jgg5iIiaDGiL/EFxMhgPgTE01Qog/E8KJB5ScRjUZflIBEMfwkGHwj0UggwU0MGliXzp12u1HCdsu6297jw67JdJjpTtths4b9nnrPOfc75+vcezPnDjCLWczimgCFyKWZprmMmZcT0VIAC5nZBNABgAEME5GtlPoNwClmPpbP508CUGEkb1lIJpMxmflFZn4OQHeD0yUzf0ZEn0gpB7wChBCPAdiDiT9jrZTyoFdc00IymcwNSqmtAF4AEGuWZxJjAD5WSm3N5/NFp0MIYQEQk0NLSpnxItCayWqa5hNKqbMANqJ1EZjkeEnTtD7TNJ9y+YTjt+lH0KiQiBBiJzPvAzDPwz/KzIeJaKNSaplSKmUYRiyRSLQppVKapt3DzOsAfA3gksf8JDPvFULsABBtpLDAS6u3t7etXC7vA/CIh9sioncrlcqXhUJhJAhfOp2ORyKRZwBsBnCL28/Mh+Px+OPlcnnUaZdSetYcSEg2m9Vt294P4FGX6x8Ab2uatiOXy10OwuXD/RqAdwBc53IfArDKaWhJiGmaHzDzKy6zpWna6lwu91PAmqfKcSeAA8y8oF5c00IMw1hNRPtrJhH9Oj4+/sDg4GChoWqnQCqVSkej0WMAFvnF+Ampu6FM05zHzLvdXMy8MiwRmUxmpVJqF4CeVnimOhm2AEg5xqNEtMqyrAutJHVCKbUHdY7VoPA9fru7uwUzr3famPl9y7JOt5rUBQ6DxFdItVpdB2COw3RBKbUtjKROKKXWATjfKo/fZichRD+AGx22TVLKXa0mvFrwfCKGYdyFWhHjAPZOS0VNwlMIEd3vMh2VUg5NQz1Nw2+PZF3jo1e7kFbhJ2Shc0BEp6ahlpbgJ8T56gwi8mx6ZhL8hDibm0Iul7Onoxg/CCHWCCH+EkJIIcQKrxhPIZqmvQygH4DNzBsQUl/dJCIAdgNIADAAfOgVFOblw1WBEKIbgHNp21JK4Y5rqtWdZtzkGlteQf8HIUtc47NeQTNeCBE95Br/4hU3o4Wk0+kUM9ecUkT0g1fsjBaiadqzcPRMRHQul8ud8Yr1bayEEEH7hH6l1MZ8Pn+ksTLrY/78+Z1E9IbL/LlffBhPpEfTtD0h8NQgFottQe0bxuWxsbFP/eJn5NIyDONuAK+6zDuLxWLeb04YQs4z89oQeAAAXV1dPUT0PWqvYu1oNFq3O23oWtKBM5VKZUXY10HJZLJL07RDALocZgawYWBg4O96c5t9Iot0XT9hmubiJudfASHEvbqunwRwu8v1npTyu6nmNyLkkHPAzAuY+YRhGJuz2azeAE8NhBDtpmm+BeA4rmwfvpFSbg7C4/vS6D5+29vb54yMjBwgopUe4eeZeVulUvmqWCyWgiROJpMduq4/D+BN1C6l//BtIpF4uq+vbywIX2Ahk1eVUSHEdgCbfKYNAzjCzMcjkcjpSqVyrqOj41JbWxsPDQ1dr+v6zUqppQAeBrAcQJsXCTNvt237dQDVICKaEQIAME3zSWbeBSAZNFFADKLO57V6qLdH+h2/ay7QLMvap5S6A8BHmPi00CpGmXl7LBa7tRkRwET35Yl4PH6WiO4DcImZ15dKpT+c/lKpVB4eHj7a2dn5BYASgF4AcxvM/ycz76xWq2sKhcKBixcvjk49xRuhfp42DGMJgAeJaDGA2zCxiedO5ikBuMDMvxPRz8z8o23bJxHS3e8sZjGLawT/Aszn1Xc92JCyAAAAAElFTkSuQmCC"> </td>
                            </tr>
                            @endforeach
                            @endif
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
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
</body>
<script>
  function changeInput() {
    const myElement = document.getElementById("npwp");
    const myElement2 = document.getElementById("npwps").value;
    const myElement3 = document.getElementById("nama");
    const myElement4 = document.getElementById("namas").value;
    myElement.value = myElement2;
    myElement3.value = myElement4;
  }

  function formatNpwp2() {
    formatnpwp = document.getElementById('no_identitas').value
    formatnpwp2 = document.getElementById('no_identitas')
    if (typeof formatnpwp === 'string') {

    }
    formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
  }

  function submitPengaturan() {

    var npwp = document.querySelector('#npwp').value
    var nik = document.querySelector('#nik1').value
    var status = document.querySelector('#status').value
    var bertindak_sebagai = $('input[name="bertindak_sebagai"]:checked').val();
    var identitas = $('input[name="identitas"]:checked').val();
    console.log(tahunpajak);
    var data = {
      npwp: identitas == "npwp" ? npwp : nik,
      status: status,
      bertindak_sebagai: tahunpajak,
      identitas: identitas,

    }

    console.log(data);
    // $.ajax({
    //   type: "POST",
    //   url: 'http://localhost:8000/api/proses_tambah_pengaturan',
    //   data: data,
    //   success: function(res) {
    //     console.log(res)
    //   }

    // });

  }

  $(document).ready(function() {
    $('#tabsendiri').dataTable();
  });

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("button-check").style.display = "inline-block";
    document.getElementById("valid").style.display = "inline-block";
  }

  function handlerRadioSelect1() {

    if (document.getElementById("npwp").checked = true) {
      document.getElementById("nik1").disabled = true;
      document.getElementById("no_identitas").disabled = false;
    }
  }

  function handlerRadioSelect2() {

    if (document.getElementById("nik").checked = true) {
      document.getElementById("no_identitas").disabled = true;
      document.getElementById("nik1").disabled = false;
    }
  }

  // $(document).ready(function(){
  //     $('input[name="identitas"]').on('change', function(){
  //        if($(this).val() === 'nik') {
  //          $('.attr-sys').prop('disabled', true);  
  //        }
  //        else {
  //          $('.attr-sys').prop('enabled', false);  
  //        }
  //        if($(this).val() === 'npwp') {
  //          $('.attr-sys').prop('enabled', true);  
  //        }
  //        else {
  //          $('.attr-sys').prop('disabled', false);  
  //        }
  //     });
  // });
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>