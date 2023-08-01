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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <!-- JS -->
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.js"></script>
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <title>Dashboard | E-Bupot</title>
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
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center; height:40px;" href="{{url('/dashboard')}}" class="nav-link active" type="button">Dashboard</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pajakpenghasilan')}}" class="nav-link" id="nav-pajak-tab"  type="button" role="tab" aria-controls="nav-pajak" aria-selected="true">Pajak Penghasilan</a>
            <a href="{{url('/sptmasa')}}" style="border-radius:2px 30px 2px 30px; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
            <a style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;" href="{{url('/pengaturan')}}" class="nav-link" type="button">Pengaturan</a>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:100px; height:103%; width:15%;" alt="" srcset="">
          </div>
        </nav>
        <div style="padding:2%">
          <div class="card" style="background-color:#f0f0f0">
            <div class="card-body">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 10px 10px">
                    <span style="color: #FFFFFF; font-weight: bold">
                      <img style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                      Daftar SPT Masa PPh Unifikasi yang telah dikirim
                    </span>
                  </div>
                  <div style="padding: 0px 15px;"></div>
                  <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                      <table class="table table-bordered">
                        <div style="padding: 0px 15px;">
                          <table id="tab-dashboard" class="display" width="100%" height="10%">
                            <thead>
                              <tr style="background-color: rgb(4, 153, 195);">
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  NO.BPE/NTTE
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  MASA/TAHUN PAJAK
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  PBTL KE
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  TANGGAL KIRIM
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($sptmasa as $data)
                              <tr class="text1" style="background-color: #FFFFFF;">
                                <td>{{ $data['nomor_bukti']}}</td>
                                <td>{{ $data['masa_pajak']}}-{{ $data['tahun_pajak']}}</td>
                                <td>0</td>
                                <td>{{ $data['tanggal_setor']}}</td>
                                <td>
                                 <a href="surat_bpe/{{ $data['id'] }}">
                                   <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAABDklEQVQ4jdXUMS5EQRjA8R9hF1kketoNKlbhBEpxAqUDKCg1GgdwAlEo1C5Bwd5BpUAEEbsU+zZ5mezMm7cV/2Ty5c3M9595M1+G/8bEiL4ZbBUxRg9dPOUu1MQDfjLaM9q54s1M6bAdxkRTwXejiG84T2xgF6ul+ZXiIXPYQT8yvpxYNCmexEZV8jhieBHf8WKxeG3xK44NLmgUB+ikxCHb6lXFJfawFIqSv5PJPK4wW+5MHcWR6qPo4gIrWMdtlXgBZ9KXV6YXulJVESbXIibu4158x220xhG/4xrfkfF9rNURfxWxhdNUYsF0ERul3JE0DY4gt44fcYIbwYMUe+g7grpM8IE7fGbO/6P8AibbUDQGiKOcAAAAAElFTkSuQmCC"></button>
                                 </a> 
                                 <a href="surat_induk?masa_pajak={{ $data['masa_pajak']}}&tahun_pajak={{ $data['tahun_pajak']}}">
                                   <img a type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAwUlEQVQokaXSsW0CQRAF0Id1KQWYkABCAqcU4TLIoYArABfga4DACbkJbRFDSEBAgJ3RgKVzcIvYw9yC8JdG2tn5f2fnazghR3lD5EdBpo4VJpoxjZNz8QGLhPgQJw8J4lVkqhke8YQOXhP8PtqB/8VtJsXxjTXKe769xAxa4bW78G/DYmzwkuCP0WvqvEfRICxCvda5VM3ehB1+LtyXGUboYhgVutH5TX2zPvGBbdwxx7Pruz0P3D+GDfCeEAti8Au8ATS2dGdJPwAAAABJRU5ErkJggg=="></button>
                                 </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                          <div>
                            <p style="font-size: 15px"></p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                  <!-- Table daftar bukti potong SPT Masa 
                  <div style="background-color: #FFFFFF; padding:2%; padding-left:0%">
                    <div class="card" style="background-color:#f0f0f0; width:102%">
                      <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                              <span style="color: #FFFFFF; font-weight: bold">
                                <img style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                                Daftar bukti potong pada SPT Masa PPh Unifikasi
                              </span>
                            </div>
                            <div style="padding: 0px 15px;"></div>
                            <table id="tab-dashboard1" class="display" width="100%">
                              <thead>
                                <tr style="background-color: rgb(4, 153, 195);">
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    N0
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    ID DIPOTONG
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    KD OBJEK PAJAK
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    NO BUKTI POTONG
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    TANGGAL BUKTI POTONG
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    JML PENGHASILAN BRUTO(RP)
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">
                                    PPH (RP)
                                  </th>
                                  <th class="text" style="color: #FFFFFF;" scope="col">KETERANGAN</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="text1" style="background-color: #FFFFFF;">
                                  <td>1</td>
                                  <td>06062023000001</td>
                                  <td>2023-07-20</td>
                                  <td>20230606000001</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div style="padding: 10px;"></div>
                      </div>
                    </div>
                  </div> -->

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
</body>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

<script>
  $(document).ready(function() {
    $('#tab-dashboard').DataTable();
    $('#tab-dashboard1').DataTable();
  });
</script>

</html>