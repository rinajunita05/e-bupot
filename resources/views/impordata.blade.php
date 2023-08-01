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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.js"></script>
  <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <title>Impor Data PPh | E-Bupot</title>
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
              <span>{{ $nama }} &nbsp;</span><img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
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
          <a href="{{url('/impordata')}}" style="font-size:14px;background-color: rgb(4, 153, 195);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
            <span style="color: #FFFFFF;">Impor data PPh</span></a>
          <a href="{{url('/posting')}}" style="font-size:14px; background-color: rgb(255, 157, 49);" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
            <span style="color: #FFFFFF;">Posting</span></a>
        </div>
        <div style="padding:5px;"></div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card border-light mb-4" style="max-width: 18rem;">
              <div class="card-header bg-warning text-white" style="font-weight: bold">Petunjuk Pengisian</div>
              <div class="card-body text-dark">
                <p class="card-text">Deskripsi Form: Form ini digunakan untuk menggunggah data bukti pemotongan dalam format excel(.xls.). Ditujukan bagi Pemotong PPh yang menerbitkan bukti pemotongan dalam jumlah banyak yang tidak dapat direkam menggunakan fitur key in.</p>
                <p class="card-text">Untuk format excel yang diupload Anda dapat mengunduhnya <a href="{{url('/FORMAT_UPLOAD_EBUPOT.xls')}}" class="link-primary">disini</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="card border-light mb-8">
              <div class="card-header bg-info text-white" style="font-weight: bold">Impor Data Pajak Penghasilan</div>
              <div class="card-body text-dark">
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="inputnpwp" class="col-sm-6 col-form-label">NPWP</label>
                  </div>
                  <div class="col">
                    <input class="form-control" id="no_identitas" name="no_identitas" style="height:73%;" type="text" placeholder="" aria-label="default input" oninput="formatNpwp2(this)" maxlength="21" required>
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="inputjenisbupot">Jenis Bukti Potong</label>
                  </div>
                  <div class="col">
                    <input class="form-control" style="height:90%" type="text" placeholder="PASAL 4 AYAT(2),15,22,23" aria-label="default input" disabled>
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                  <div class="col">
                    <label for="">Tahun Pajak</label>
                  </div>
                  <div class="col">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value="">Pilih Tahun Pajak</option>
                      <option>2022</option>
                    </select>
                  </div>
                </div>
                <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px; ">
                  <div class="col">
                    <label for="">Masa Pajak</label>
                  </div>
                  <div class="col">
                    <select class="form-select" id="validationDefault04" required>
                      <option selected disabled value=""> Pilih Masa Pajak</option>
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
                <form method="POST" action="{url('importdata')}}" class="form-horizontal" enctype="multipart/form-data"> 
                {{  csrf_field()  }}
                  <div class="row" style="padding-left: 10%; padding-right:15%; margin-bottom: 10px;">
                    <div class="col">
                      <div class="form-group">
                        <label for="uploadfile">Upload file</label>
                        <input type="file" class="form-control-file" id="uploadfile" name="uploadfile" accept=".xls">
                      </div>
                <div class="col">
                  <p class="text-secondary"><small>Ukuran file maksimal 2MB berformat .xls</small></p>
                  <p class="text-danger"><small> Pastikan tidak melakukan impor excel dengan data yang sama apabila terdapat excel yang belum selesai diproses sebelumnya.</small></p>
                </div>
              </div>
              <div class="col" style="margin-left: 70px;">
                <button class="button button1" type="button" onclick="importdata()" value="simpan">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABmJLR0QA/wD/AP+gvaeTAAAAkUlEQVQokZ3PsQ3CMBCF4c9JVqCGmiajZCMKCiraIERLwQwZhCkgBSwABY5khLEQTzrJZ7//3ZlPVdhig5B5f1PADo9YhxIU0CfmIhSwz5in6ieoisAiXgyZyQMazHNrdZn0LjVUGaiov4A26e8Zzy05twEXzJKAFZaxP2Pt9RfRa0T9wzY1xgYnXJOUbwo4PgGiuyM7j6ErlwAAAABJRU5ErkJggg==">
                  Unggah</button>
                <button class="button button2" type="button">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAy0lEQVQoka3RvUpDQRAF4C/m4gso4QpiYW8n2FnkCYL4BrYWtr5KUqX1HSRNrKzEF7AzhAhaKDZyLRzMctkVr3hg2J/Zs+fMDP+M6rcPN1rnGqO/qNQ4Rj/2sIkd3OG9Te7Fuo1hENs4wBnmOMdjyXYO9xjjBLeJq2+lNzxhLz6c4SFigWccYT/iKqdS4zRz38MUDV79MJFc3XAZ5CYcZmv+KJAHSX5VUs5hFy+het2FWOHG2vKwC/kwIU7SRKk5KZbY8jXjC+WedMMnvqYkZlP41hUAAAAASUVORK5CYII=">
                  Batal</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; width: 98%; margin: 10px 0px 10px 12px; padding: 10px">
        <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
        <span style="font-weight: bold; color: white">Daftar Dokumen</span>
      </div>
      <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <table class="table table-bordered">
            <table id="tabsendiri" class="display" cellspacing="0" width="100%">
                <thead >
                  <tr style="background-color: rgb(4, 153, 195);">
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      N0MOR TIKET
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      NAMA FILE
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      TANGGAL UPLOAD 
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      JUMLAH BARIS 
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      STATUS 
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">
                      KETERANGAN UPLOAD 
                    </th>
                    <th class="text" style="color: #FFFFFF; text-align:center" scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($import_data as $data)
                    <tr class="text1" style="background-color: #FFFFFF;">
                      <td scope="row">{{ $data['id'] }}</td>
                      <td>{{ $data['nama_file'] }}</td>
                      <td>{{ date('d-m-Y',strtotime($data['created_at'])) }}</td>
                      <td>{{ $data['jml_baris'] }}</td>
                      <td>{{ $data['status'] }}</td>
                      <td>{{ $data['ket_up'] }}</td>
                      <td><a href="{{url('/hapus_importdata/'.$data['id'])}}">
                    <img type="button" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAABkUlEQVRIid3VsWpVQRAG4C8mRK9EExvNjVrZWehL6AvkJYJVUoqgYGEtNppCwfcQtNLKB1AURFESixAIghLxxmLnxOW4596z4Vb5Ydmd3Zn5d/6zZ5fjhpkK31PYwI2wX+ARfk1zQyfxBgf4Eu0Ar2NtatiIxLclFWZwJ+bW+ySYy8aLuIeFgt9NjHAFmzE3G3PruFqI+YH72GsvXMd+7HIabR/XuiocYDUc13Cusq1F7GrkOkQuHfzExxifwW7XjjpwNvoPkesQJwrOW9EvF5JczOxLWeIGF6LfbictEe3gN4at+Sd4ldkv8bjlM4zYnT5EI3wvEC1iKbOXWjasSNWM+hCR5GtL1wfL/knfi2jb/xX1wVDh+4wj2pJkGXSslzCQ5K2qqOvkjUOjQLV0eXANUbV01FXU+B5JuryiP9G67IaoWFH7CmpQku5By76Fb5k9VrouzEs/3dOKmGcRM19DBO/xTr8jfjrzL6JLOngo3W+f8HUC0WWcl56JImbHBL+VnowVk6v6jLt4PsHvGOEvunthR8ketLcAAAAASUVORK5CYII=">
                    </a>   
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
  <!-- Footer -->
</body>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
  function formatNpwp2() {
    formatnpwp = document.getElementById('no_identitas').value
    formatnpwp2 = document.getElementById('no_identitas')
    if (typeof formatnpwp === 'string') {

    }
    formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
  }
</script>
<script>
  function importdata() {
    var formData = new FormData();
    formData.append('file',$('#uploadfile').prop('files')[0]);
    $.ajax({
    url: 'http://localhost:8000/api/importdata',
    data: formData,
    type: 'POST',
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    // ... Other options like success and etc
});
  }

  $(document).ready(function() {
    $('#tabsendiri').dataTable();
  });
</script>

</html>