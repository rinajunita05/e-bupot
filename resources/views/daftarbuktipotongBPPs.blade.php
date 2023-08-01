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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Daftar Bukti Potong Pasal | E-Bupot</title>  <style>
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
                    <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                    Daftar Bukti Potong Pasal 4 ayat (2), 15, 22, 23
                  </span>
                </div>
                <form>
                  <table class="table table-bordered">
                    <div style="padding: 0px 15px;">
                      <table id="tabpasal" class="display" cellspacing="0" width="100%">
                        <thead>
                          <tr style="background-color: rgb(4, 153, 195);">
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              PERIODE
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              KODE OBJEK PAJAK
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              NOMOR BUKTI PEMOTONGAN
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              IDENTITAS
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              Nama
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              JUMLAH PENGHASILAN BRUTO(RP)
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              JUMLAH PPH TERUTANG(RP)
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">
                              STATUS
                            </th>
                            <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($daftarbupotpasal as $data)
                          <tr class="text1" style="background-color: #FFFFFF;">
                            <td scope="row">{{ $data['masa_pajak'] }}-{{ $data['tahun_pajak'] }}</td>
                            <td scope="row">{{ $data['kode_objek_pajak'] }}</td>
                            <td scope="row">{{ $data['no_bukti'] }}</td>
                            <td scope="row">{{ $data['identitas'] }}</td>
                            <td scope="row">{{ $data['nama'] }}</td>
                            <td scope="row">{{ $data['jumlah_penghasilan_bruto'] }}</td>
                            <td scope="row">{{ $data['jumlah_setor'] }}</td>
                            <td scope="row">{{ $data['status'] }} </td>
                            <td>
                              <!--lihat bupot-->
                              <a href="{{url('/suratbupotpasal/'.$data['id']) }}">
                                <img a type="button" style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAD9klEQVRoge2YTUxcVRTHf+cNHxPTUowyH28mIyVGoyxJm2pRm9KYaFnYpbbdFGNdqfEzNnFlgonfXZk0wS5s7dLYgCuIpoKJId2Y4KJRAg3cN4AJEIgZHOYeF53BoQJz38Cu77d6993/Oed/5r1733sDERERERERERH3LrKXyRKJRDIWiz3qeV6Hqu4H7itP/S0iK9baP0ul0q35+fm5vaq5qwZyudz96+vrp4Ae4BjgO4Ya4CdguKmp6bupqamlej3U1UA6nX7a87zXVLUXaK63eJk1ERm01l4MguDnsMGhGkilUs94ntcPPBm2kCNjqnohCIIbrgFODSQSiWRDQ8NnwEuOMUuqOgzcBsTzvJyq9gCtDrEqIleLxeLbLmulphnf908AV4CkQ/F5Vf3A9/3LN2/eLFZPdHV1NRpjzonIh0CbQ648cNYYM7yTaMcGfN9/D+gHPIeCE8DzxpjbO4nS6fRDIvID8LhDTgu8b4z5eDvBdg1IJpP5XFXfcCgCsKCqh4IgmK6cyGQyR4AnAETkl5mZmV8rc6lUqt3zvHHgQZfkIvLl7Ozsm4C6NOD5vn8J6HM0j6qeD4LgEkB7e3trsVj8VlWfu0s2FI/HT09OTi4DZDKZV1X1K9cawIAx5hXuXJX/zO7WPLDo+/7lymAb8wAnC4XClcqgtbX1a2A5RJ2+srdNnqsH9ZhHVUcqCzaTyRzZxnyF3mw2exhgYmLiHxEZCVOLLZrYOEin0y8S0jyAiExXDY/W0qtqd+XYWjsVth7QV/YKuO0uYfjfIqtT48xGA0EQXAMGwiYQkfaq47Fa+lKpNFqlPxi2HjBQ9gpsvgK2vMpDNaGqPZ2dnU0A5a1yaAf59Xw+Pw5QjjkephZb7ER330L1NNG6tLR0rjKIx+OngcEtdNcLhcLZymBxcfFl4ECIOltuo3v1IPvLWnson89vLMpsNntYVY9aa1VVxyq/PEAymTwYi8XGgQdckqvqF0EQvIXjg2wD3/ffBT7CbbH/bq09Wd3EVpTNDwGPOeQscedV4pPtBLGdoldWVsZaWlpGgWeB/TWKtYnImZaWltVcLvfbwsJCqXqys7OzqbGx8bznedeAnIP5QEROGWOu7iRyep1OJpOJhoaGT1X1jGPMsoiMWGunYWOnOo7bPa+q+o219p25ubn5WuJQHzTpdPopEekHumuK6+MGcMEYU3M7rlDXJ6Xv+92q+rqI9ALxenJUUVDVQRG5aIwZrS3fzK4+6js6Og6sra29AJxQ1WNA1jF0RkR+BIabm5u/r7yh1sOe/q2SSqXaPM97REQeVtV9wL7y1KqIrKrqH9baW/l8fmEv60ZERERERERE3Kv8C+hPjLg4WUumAAAAAElFTkSuQmCC"></a>
                              <!--edit-->
                              <a href="{{url('/editpphpasal/'.$data['id'])}}">
                                <img a type="button" style="width: 20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAELklEQVRoge2Zz28bRRTHv2+9tmMpuHEkmo032lq5RuJCAxERp5BUIkFIkaiqIhAcOHCGP4EjFTdASOVACUJC4lBRoRaKODRqaRr1QuEWnCjedflhArEU27uex4FdM3HWXrse2xHK57Tz5s3k+13PvN3sACcMFxq2gHaYpjkH4BkAIKL13d3dH5pzjqWBXC43Vq1W14jo+aauayMjIy9vbW39FQS0AWuLxLKsTK1W+zZEPAAsVyqVNTlwrH4By7Iynud9A+DJdnmaps0Fy0mPmrBery8AsJg53qtAZq7E4/FPdnZ2/gzrd113hYjaivfnmQfQ2sDExMTpWCz2jud5rwHoWXgAEcHzvKcBXAzrdxznimmap5n53U7nPLIHDMOYicViGwDegELxEiw3LMvKZLPZpaBdKBQuEdHb7SYgoluNa7nDv/MbACwpfIeZbxNRrTfdABH9Fo/HL+fz+b1AvL/mn2DmC47jfBnkmqb5Votf4ivbtl8INZDNZj/Cv3ceAPaEEBeLxeLXvQoPI2TDuh2Y2EwkEs8FNwAAYvKEQoi1ICaEWB2geACIEdHq6Ojog3K5/DMA7O/v306n02UASwA2dV1f3N7e3pPnauwBv9oEa/7OgMUHxIno88nJydUgUCgULjHzq7quL4ZVL3kTn5Gu19VJ/o8O6/wRE47jXGlVehsGmPkxKV7uWW0TnT6kfAIT56ISB/Iqkcvlxur1+nV0Jj7gR03T7kUl9d1ALpcbc133BjPPdjHsPhEtFgqFP6IS+2qg3+KBPhoYhHgg4mXuUfFfiTvdsAGbcqn0N/37AJBIJN6UH14yyg10WW0CNpvrfL1efx3ABQBwXfcugPfCBipdQjMzMwnP826gR/EAwMxp6fpUq8FKDZRKpfMAznYxJFR8Nyg1QETnu0i/T0TnehEPKDQwPj6eBrDYYXrX1aYVygwkk8kXAYx0kKpMPKDQABG91EGaUvGAIgP+8lmKSLun6/qCSvGAIgPJZHIBQDKkqwrgKjO/kslk5nvdsGEoeZAR0a9SswrgOjN/Ua1Wr5ZKpb8BwHEcFX/qCEoM2La9ns1mnwUwXqlUvg9EDwJlrxK2bd+KzlLPsfs22i0nBobNiYFh8/8xQET7Unx0CFoOIf9DQ0QtnysNA0KIvBSf75OubmhoEEL80iqpYSCZTN4E4PrNuampqbAzqoFgmuYKET3lN2upVOq7VrkNA/l8fo+ZPw7aQojPTNNc7qPOUEzTXGHmT6XQZflUsplD5wOGYTyuadoGpA+9zHwXwDoRPVSuVhZCZACYb/qOlAcwa9v27y3HNQcMw5jRNO0aDn+tHgZ5IcRysVj8qV3SkTJaLBYfADjLzB8C6PlY6RGoAfgAwGyUeCDinHh6evrUwcHBgqZpZ5h5QpXCUCFED4UQ26lU6ma7NX/CceMfVyDXEPk12EEAAAAASUVORK5CYII=">
                              </a>
                              <!-- hapus  -->
                              <!-- <a href="{{url('/hapus_pphpasal/'.$data['id'])}}"> -->
                              <img a type="button" data-id="<?= $data['id'] ?>" style="width: 20px" onclick="hapus_bupot(this)" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADwElEQVRoge1Zv4/cRBT+3oyPO53YwC4XG89RHdfxJyClggKRKAUC0dDQIUCImgJoECCRgrQnpJRpAEFESrr8B6lyICRuvXbYrMTtRmtd2HkUN3Ysn/c8kx1fk/sa+3n8fnzz3vyygXOc4+kG+TYYhmEkpfyYiK4AeNk83mfmX7XW17Msu+/Tn1cCcRy/RUQ/ALiw5JV/mfn90Wj0oy+f3giY4G8CkC2vLpj57dFo9JMPv8KHkTAMIyLaw+Pg7xHROwAuaq1DAO8C2Ddtkoj2oigKffgOvBgJgg8BPG/Efa31q2ma/lN55WYURb9LKe/geFwMpJQfAPhyVd9eMgDgcuX+81rwAIAsy+4z8xeVR1d8OG4cA9vb218x86cANnw48YCciK4Nh8PP6g1NBEgpdQjg2e7jcsIsSZJe/WFTCTERfQ8g7z4ma+QmphNonUaVUlcB/GzEW0mSeKndU/zdAvCmEa8mSfLLae+3DmIhRFoRX1whNlvES3w3opWA1nrUZLxDlJ1U892IVgL9fj8FwEaMbHRWgABQLHDc7/ezNgWrrYRSagzgBQBYLBaR7w1ZgTAMoyAIirIZJ0lysU3HqjeJqExlEARLyyiO4++UUnOl1LcubQXW1tbK8iGi1voHLAkwc0lAa72UABF9hOPF7xOXtibbVZ+nwTYDZW8IIU6biZ6pXW3bCj+quPdKwDYDq4KZqyXUTQaIqLO1gIiqJdTNGECHa0GVgNcMnNViVi0hr2NASnnmGaj5XAorAvP5vFqPZ5KBPM/9jYHJZHII4KERN7e2tk7sy1fFzs7OcwA2jfhwPB5PbfRc9jVlj6yvr3vPQp7nVZtW5QO4ESiNLhYL7wSq9Y+uCQghvBOo1j86IlCWUM2ZF9QyYDWAAQcC1Xm55swLmLnbEhJCdEoAlenZdhUGHAhorW1KKK9dbduA49Ne4av1JFbAawaI6BqAmblatxlUD/PWGbD+Oh1FUSilLHrmQZIkW7a6NlBKTQD0AUBrHTZ9nmyCdQayLBsDeGTEwe7u7rpzlEtgbBUfh/9L0/SBra7LNKoBFId5ms1m3gbydDpVeFwNmfFlBddPJH+UikK85qi7PAghXi/umfmei67r/4HbAC6Z+2/iOJ5IKW8fHBzMHe0AAJRSm8z8BhF9XTwjot9cbDj9YhoMBhc2NjbuAnjJRc8Bfx8dHb1iuxMFHEtoMpkcmr+P1tOcAxIhxGWX4IH2H3InMJ1O016vd8OIEYDek9gxeATgTwB7RPTecDj86wntnOMcTy3+B9L8TVV4xi0TAAAAAElFTkSuQmCC">
                              <!-- </a> -->
                              <!--send email-->
                              <!-- <a href="#">
                                <img a type="button" onclick="kirim_email()" style="width: 20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACZ0lEQVRIie2WPWsUQRjHfzNnjG0C5949ux9AMOoXsLqD8wVSCBZCCk3EKnYJJPgBJAFjEeIbWAULC7UwQTQYX8rU8SWNVjNzb3CFIEbI3lh4lyzHXcTjgiD3r3Z2//v89j/z7DDQV1//m1TzIp1OZwYGBl4Cpw6I9VkpVbDWGgANEIZhvlqtlrTWOWDjAKAbWuvT1loThmF+F+y9fxGG4UVjTC2O4zyw1iui9/7d9vZ2wRhTE5FR7/3qLhg47L1/LCIT5XL5+9DQ0Kj3/kkPuCuDg4PnarXat2w2OwY8A45AY41FxDc/UCk1ba29DaRE5AFwtRuiUuqRtXYc2BGRSWCRRlDnnNKtfu/9gojMAbFz7hqw0AX3jrX2cgM6AyyxN7vQOkhoRkSWAOWcmwZm/wI675y7DngRuQXMtTN1AgNMisgycMg5Nw9MAvV9/F4pNeWcm+X3Mj0EpjqZ9wMDjInIPQDn3F2l1Diw08a3o5S60ugNROQ+MLFf4T+Bq1rrxebAWruslLoA/Eh4fnrvL1lrlxP3FoBit+BKHMc5Y8xmEAQjIvI8iqJha+2q1vq8Uuor8EVrfbZYLD6NomhYRFYymcxx59xWHMcFoNKpeOvvlEyaN8Zsisgx4C2QAT5prQvGGJs0N7bbV8DJNu++AbJJv3NOtQNX4jjOl8vlD0EQjKRSqXXgaOJ5GbihlFoD8N6fAW62eCr1ej1XKpU+tqvRDtwpaTfqmLx1A+klFCBdr9fXoyg64ZzbAnIkGq4J7jX0j3ANkOxe4H2PoEn46yAIRhLdvncQ6HHSdtqd1QOq31df/1i/APuXI+hmjRoRAAAAAElFTkSuQmCC">
                              </a> -->
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    </div>
                  </div>
                </div>
                <div style="padding:1%"></div>
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
  $(document).ready(function() {
    $('#tabpasal').dataTable();
  });

  // hapus
  function hapus_bupot(event) {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Apakah Kamu Yakin?',
      text: "Anda tidak akan dapat mengembalikan ini!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, Hapus!',
      cancelButtonText: 'Tidak, Batal!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
            title: 'Berhasil',
            icon: 'success',
            confirmButtonColor: '#8A2BE2',
            confirmButtonText: 'OK',
          }

        ).then((result) => {
          if (result.isConfirmed) {

            location.href = "/hapus_pphpasal/" + event.getAttribute('data-id')
          }
        })
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    })
  }

  // email 
  function kirim_email() {
    Swal.fire({
      title: 'Masukkan Email',
      input: 'text',
      inputAttributes: {
        autocapitalize: 'off'
      },
      showCancelButton: true,
      confirmButtonText: 'Kirim',
      cancelButtonText: 'Batal',
      showLoaderOnConfirm: true,
      preConfirm: (login) => {
        return fetch(`//api.github.com/users/${login}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(response.statusText)
            }
            return response.json()
          })
          .catch(error => {
            Swal.showValidationMessage(
              `Request failed: ${error}`
            )
          })
      },
      allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: `${result.value.login}'s avatar`,
          imageUrl: result.value.avatar_url
        })
      }
    })
  }
</script>

</html>