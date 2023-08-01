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
  <title>Daftar Bukti Potong Pasal | E-Bupot</title>
  <style>
     *{
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
      height: 800px;
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
  <div>
    <header class=" mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;"><img src="{{ asset('taxcentre1.png') }}" alt="" srcset=""> 
          <div class="d-flex align-items-center">
            <form class="w-100 me-3">
            </form>
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <span>User &nbsp;</span><img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <div class='content' style="padding-top :20px; padding-left:350px; padding-right:250px">
      <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px; width: 860px">
        <a class="btn btn-outline-light" href="{{('/pajakpenghasilan')}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB4UlEQVRIie3WP08WQRAG8J+2SolRQaLyKvR+BTsVaQnfwD9YCH4PS6I2ViAS1GhMKLWESkzUmBAT7azECoS8Fjcvqxe52zuMseBJNpebe2ae2dmdveUA/wiHGnCHcBWXcBqDYf+CT3iOp/j8t5IbwCy20a0ZO3gUie0L4/geQTcxhwmM4EiMkbDNB6eLDYy1Fb2lmEEXj3E2w2cYi9Lsp5qKjofjNm43dcZ0+O9oMPNBqbxtRHuYkcp+MsfhgVTe/WIpYt2rIw4pyrtp7zU9hlW8zhDuRKxtqf3+iJuR4VyF6FpwVjKEKdqri+tVpJdBmqgRXYv3HEyGz4sq0scgnSvZ+/Emvr3D8UxRij7v4n0VaSNIfSX7qvpTqzfKa98n7e5dHG6QeS66bZw+hOP5kr1c6hMNYo7+4reL8ozX43mhZP+Ki3gbgZblb65erPUq0o3Ibn6P723aaSH416pIp6QDZLhCfAWvMkQ72MIPNQcI3I8MFzMC1+FJxJrNIQ9IbTW9D9E7EeObBptxTPqtzbQU7flfaeo8JV0ElhTrVYeOVN4dxdnfCmNS2bcUB/6koqWOxhgN20JweuW93Fa0h37cVezMnMveQxlr2uR6Oyhdb8/4/Xq7rvj7PIv3A/w/+Am/TqGFCMnpPgAAAABJRU5ErkJggg=="></a>
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #FFFFFF; font-weight: bold;">
                  <img style="margin:0px 0px 5px 0px; width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAWklEQVRIie3TMQrAIBBEUfF0EY/tTdR7fBshYLMguhAyr3VgnWJCEPECZKADDUiehxuvurwV9pT1TvTqYycgzdYVeBw+JX+hHZ/qYye0Y7lFOz7Vx05ox/J1A7NkOed76R1tAAAAAElFTkSuQmCC">
                  Daftar Bukti Potong Pasal 4 ayat (2), 15, 22, 23
                  </span>
                <a href="{{('/suratbupotpasal')}}"style="padding-left:35%; color:white;">Ekspor Excel</a><img style="margin-left:1%;"type="button"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACMElEQVRIie2WsW/TQBTGv+/ic6qKCgYYiigdCmJuMyHBwlIJFcVs/AVBAYkBwRAmEGJjQggUxm4g2iQsZWGBCSRU8RcgERALG6CmPuceQxNxMXbsFFOW/qa783f3ved3Ph+wzx7BPCIRcPtFeYEiFQAVilRALBLykyI172J/oxDjXqd8ImayBOBQyhpdPzDHJzX23E60Xlrpq9ITip0dH9oIc8NG2NaSJCDkc/zNKFcgik1CZv+c+ncIeMxSNd0xFRMcLdrUYc7tqDTVbvADQz8wdPu0cjZJW6hxIip5l4wzvu4HhoMdDQAQ8L4fGCralaQJYVuLu8HCthYBX09mTDTkGQ74VbMJ4B0A00fpgQhoRd0dE3Au0o0FRyLtXRkE8QjE6nSw1Q3b/iUAi0lTCquxkDelgxk9ZZ7D4rE0oQm5kyMh1yGxxl7SoMPhSLxrejm6B5j3YUvXQJxME8cPkJ0ap8WThaD3u8nvmfqcZBl/9MrRw621qflep3zK/xA+BbCZJi6uxmCD57GtSraurK3zNiwptzKCjTsk1nhkMFajt7pqTmMDMybUnwBoXTLzvIBvYUu/AnFuKBxmmfaTiOt24kmBVm6QkMh4VwEcBDAdRV598LgBYKxJFuMyzo2bibuOHxiade+MKL6J6/7bWZ31HU/Err9jQr4UGUiMbrox5bKAX/+FKSm1Ea8kVa9VXiCkAjW47AEVFHzZy3W9TQlmCcAPUmq6Gr2c1HifPeMXFffeIrLQtaQAAAAASUVORK5CYII=">
              </div>
  <form>
    <span>
        Pencarian Berdasarkan 
    </span>
    <div class="col-auto my-1">
    <input type="number" class="form-control" id="FormControlInput1" placeholder="periode" style="width: 15%; display: inline-block">
    </div>
    <span>
        Kata Kunci
    </span>
    <div class="col-auto my-1">
    <input type="" class="form-control" id="FormControlInput1" placeholder="" style="width: 15%; display: inline-block">
      </div>
    </div>    
  </div>
    </div>
  
    <div style="padding:5px;"></div>
  <button type="button" class="button button1">
  <span>Cari</span></button>
  <div style="padding:5px;"></div>
              <div style="padding: 0px 15px;"></div>
              <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Tampilkan</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0" style="width: 10%; display: inline-block">
      <label class="mr-sm-2" for="inlineFormCustomSelect">entri</label>
      <table class="table table-bordered">
              <div style="padding: 0px 15px;">
                <table class="table w-100 table-bordered table-hover">
                  <thead>
                    <tr style="background-color: rgb(4, 153, 195);">
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        PERIODE <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        KODE OBJEK PAJAK<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        NOMOR BUKTI PEMOTONGAN <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        IDENTITAS <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        Nama <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        JUMLAH PENGHASILAN BRUTO(RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        JUMLAH PPH TERUTANG(RP) <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                      </th>
                      <th class="text" style="color: #FFFFFF;" scope="col">
                        STATUS <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
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
<!--lihat bupot-->      <a href="{{url('/suratbupotpasal') }}">
                        <img a type="button"  style="width: 25px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAD9klEQVRoge2YTUxcVRTHf+cNHxPTUowyH28mIyVGoyxJm2pRm9KYaFnYpbbdFGNdqfEzNnFlgonfXZk0wS5s7dLYgCuIpoKJId2Y4KJRAg3cN4AJEIgZHOYeF53BoQJz38Cu77d6993/Oed/5r1733sDERERERERERH3LrKXyRKJRDIWiz3qeV6Hqu4H7itP/S0iK9baP0ul0q35+fm5vaq5qwZyudz96+vrp4Ae4BjgO4Ya4CdguKmp6bupqamlej3U1UA6nX7a87zXVLUXaK63eJk1ERm01l4MguDnsMGhGkilUs94ntcPPBm2kCNjqnohCIIbrgFODSQSiWRDQ8NnwEuOMUuqOgzcBsTzvJyq9gCtDrEqIleLxeLbLmulphnf908AV4CkQ/F5Vf3A9/3LN2/eLFZPdHV1NRpjzonIh0CbQ648cNYYM7yTaMcGfN9/D+gHPIeCE8DzxpjbO4nS6fRDIvID8LhDTgu8b4z5eDvBdg1IJpP5XFXfcCgCsKCqh4IgmK6cyGQyR4AnAETkl5mZmV8rc6lUqt3zvHHgQZfkIvLl7Ozsm4C6NOD5vn8J6HM0j6qeD4LgEkB7e3trsVj8VlWfu0s2FI/HT09OTi4DZDKZV1X1K9cawIAx5hXuXJX/zO7WPLDo+/7lymAb8wAnC4XClcqgtbX1a2A5RJ2+srdNnqsH9ZhHVUcqCzaTyRzZxnyF3mw2exhgYmLiHxEZCVOLLZrYOEin0y8S0jyAiExXDY/W0qtqd+XYWjsVth7QV/YKuO0uYfjfIqtT48xGA0EQXAMGwiYQkfaq47Fa+lKpNFqlPxi2HjBQ9gpsvgK2vMpDNaGqPZ2dnU0A5a1yaAf59Xw+Pw5QjjkephZb7ER330L1NNG6tLR0rjKIx+OngcEtdNcLhcLZymBxcfFl4ECIOltuo3v1IPvLWnson89vLMpsNntYVY9aa1VVxyq/PEAymTwYi8XGgQdckqvqF0EQvIXjg2wD3/ffBT7CbbH/bq09Wd3EVpTNDwGPOeQscedV4pPtBLGdoldWVsZaWlpGgWeB/TWKtYnImZaWltVcLvfbwsJCqXqys7OzqbGx8bznedeAnIP5QEROGWOu7iRyep1OJpOJhoaGT1X1jGPMsoiMWGunYWOnOo7bPa+q+o219p25ubn5WuJQHzTpdPopEekHumuK6+MGcMEYU3M7rlDXJ6Xv+92q+rqI9ALxenJUUVDVQRG5aIwZrS3fzK4+6js6Og6sra29AJxQ1WNA1jF0RkR+BIabm5u/r7yh1sOe/q2SSqXaPM97REQeVtV9wL7y1KqIrKrqH9baW/l8fmEv60ZERERERERE3Kv8C+hPjLg4WUumAAAAAElFTkSuQmCC"></a>
<!--edit-->             <img a type="button" style="width: 20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAELklEQVRoge2Zz28bRRTHv2+9tmMpuHEkmo032lq5RuJCAxERp5BUIkFIkaiqIhAcOHCGP4EjFTdASOVACUJC4lBRoRaKODRqaRr1QuEWnCjedflhArEU27uex4FdM3HWXrse2xHK57Tz5s3k+13PvN3sACcMFxq2gHaYpjkH4BkAIKL13d3dH5pzjqWBXC43Vq1W14jo+aauayMjIy9vbW39FQS0AWuLxLKsTK1W+zZEPAAsVyqVNTlwrH4By7Iynud9A+DJdnmaps0Fy0mPmrBery8AsJg53qtAZq7E4/FPdnZ2/gzrd113hYjaivfnmQfQ2sDExMTpWCz2jud5rwHoWXgAEcHzvKcBXAzrdxznimmap5n53U7nPLIHDMOYicViGwDegELxEiw3LMvKZLPZpaBdKBQuEdHb7SYgoluNa7nDv/MbACwpfIeZbxNRrTfdABH9Fo/HL+fz+b1AvL/mn2DmC47jfBnkmqb5Votf4ivbtl8INZDNZj/Cv3ceAPaEEBeLxeLXvQoPI2TDuh2Y2EwkEs8FNwAAYvKEQoi1ICaEWB2geACIEdHq6Ojog3K5/DMA7O/v306n02UASwA2dV1f3N7e3pPnauwBv9oEa/7OgMUHxIno88nJydUgUCgULjHzq7quL4ZVL3kTn5Gu19VJ/o8O6/wRE47jXGlVehsGmPkxKV7uWW0TnT6kfAIT56ISB/Iqkcvlxur1+nV0Jj7gR03T7kUl9d1ALpcbc133BjPPdjHsPhEtFgqFP6IS+2qg3+KBPhoYhHgg4mXuUfFfiTvdsAGbcqn0N/37AJBIJN6UH14yyg10WW0CNpvrfL1efx3ABQBwXfcugPfCBipdQjMzMwnP826gR/EAwMxp6fpUq8FKDZRKpfMAznYxJFR8Nyg1QETnu0i/T0TnehEPKDQwPj6eBrDYYXrX1aYVygwkk8kXAYx0kKpMPKDQABG91EGaUvGAIgP+8lmKSLun6/qCSvGAIgPJZHIBQDKkqwrgKjO/kslk5nvdsGEoeZAR0a9SswrgOjN/Ua1Wr5ZKpb8BwHEcFX/qCEoM2La9ns1mnwUwXqlUvg9EDwJlrxK2bd+KzlLPsfs22i0nBobNiYFh8/8xQET7Unx0CFoOIf9DQ0QtnysNA0KIvBSf75OubmhoEEL80iqpYSCZTN4E4PrNuampqbAzqoFgmuYKET3lN2upVOq7VrkNA/l8fo+ZPw7aQojPTNNc7qPOUEzTXGHmT6XQZflUsplD5wOGYTyuadoGpA+9zHwXwDoRPVSuVhZCZACYb/qOlAcwa9v27y3HNQcMw5jRNO0aDn+tHgZ5IcRysVj8qV3SkTJaLBYfADjLzB8C6PlY6RGoAfgAwGyUeCDinHh6evrUwcHBgqZpZ5h5QpXCUCFED4UQ26lU6ma7NX/CceMfVyDXEPk12EEAAAAASUVORK5CYII=">
<!--hapus-->            <a href="{{url('/hapus_pphpasal/'.$data['id'])}}">
                        <img a type="button" style="width: 20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAADwElEQVRoge1Zv4/cRBT+3oyPO53YwC4XG89RHdfxJyClggKRKAUC0dDQIUCImgJoECCRgrQnpJRpAEFESrr8B6lyICRuvXbYrMTtRmtd2HkUN3Ysn/c8kx1fk/sa+3n8fnzz3vyygXOc4+kG+TYYhmEkpfyYiK4AeNk83mfmX7XW17Msu+/Tn1cCcRy/RUQ/ALiw5JV/mfn90Wj0oy+f3giY4G8CkC2vLpj57dFo9JMPv8KHkTAMIyLaw+Pg7xHROwAuaq1DAO8C2Ddtkoj2oigKffgOvBgJgg8BPG/Efa31q2ma/lN55WYURb9LKe/geFwMpJQfAPhyVd9eMgDgcuX+81rwAIAsy+4z8xeVR1d8OG4cA9vb218x86cANnw48YCciK4Nh8PP6g1NBEgpdQjg2e7jcsIsSZJe/WFTCTERfQ8g7z4ma+QmphNonUaVUlcB/GzEW0mSeKndU/zdAvCmEa8mSfLLae+3DmIhRFoRX1whNlvES3w3opWA1nrUZLxDlJ1U892IVgL9fj8FwEaMbHRWgABQLHDc7/ezNgWrrYRSagzgBQBYLBaR7w1ZgTAMoyAIirIZJ0lysU3HqjeJqExlEARLyyiO4++UUnOl1LcubQXW1tbK8iGi1voHLAkwc0lAa72UABF9hOPF7xOXtibbVZ+nwTYDZW8IIU6biZ6pXW3bCj+quPdKwDYDq4KZqyXUTQaIqLO1gIiqJdTNGECHa0GVgNcMnNViVi0hr2NASnnmGaj5XAorAvP5vFqPZ5KBPM/9jYHJZHII4KERN7e2tk7sy1fFzs7OcwA2jfhwPB5PbfRc9jVlj6yvr3vPQp7nVZtW5QO4ESiNLhYL7wSq9Y+uCQghvBOo1j86IlCWUM2ZF9QyYDWAAQcC1Xm55swLmLnbEhJCdEoAlenZdhUGHAhorW1KKK9dbduA49Ne4av1JFbAawaI6BqAmblatxlUD/PWGbD+Oh1FUSilLHrmQZIkW7a6NlBKTQD0AUBrHTZ9nmyCdQayLBsDeGTEwe7u7rpzlEtgbBUfh/9L0/SBra7LNKoBFId5ms1m3gbydDpVeFwNmfFlBddPJH+UikK85qi7PAghXi/umfmei67r/4HbAC6Z+2/iOJ5IKW8fHBzMHe0AAJRSm8z8BhF9XTwjot9cbDj9YhoMBhc2NjbuAnjJRc8Bfx8dHb1iuxMFHEtoMpkcmr+P1tOcAxIhxGWX4IH2H3InMJ1O016vd8OIEYDek9gxeATgTwB7RPTecDj86wntnOMcTy3+B9L8TVV4xi0TAAAAAElFTkSuQmCC"></a>                   
<!--send email-->       <img a type="button" style="width: 20px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACZ0lEQVRIie2WPWsUQRjHfzNnjG0C5949ux9AMOoXsLqD8wVSCBZCCk3EKnYJJPgBJAFjEeIbWAULC7UwQTQYX8rU8SWNVjNzb3CFIEbI3lh4lyzHXcTjgiD3r3Z2//v89j/z7DDQV1//m1TzIp1OZwYGBl4Cpw6I9VkpVbDWGgANEIZhvlqtlrTWOWDjAKAbWuvT1loThmF+F+y9fxGG4UVjTC2O4zyw1iui9/7d9vZ2wRhTE5FR7/3qLhg47L1/LCIT5XL5+9DQ0Kj3/kkPuCuDg4PnarXat2w2OwY8A45AY41FxDc/UCk1ba29DaRE5AFwtRuiUuqRtXYc2BGRSWCRRlDnnNKtfu/9gojMAbFz7hqw0AX3jrX2cgM6AyyxN7vQOkhoRkSWAOWcmwZm/wI675y7DngRuQXMtTN1AgNMisgycMg5Nw9MAvV9/F4pNeWcm+X3Mj0EpjqZ9wMDjInIPQDn3F2l1Diw08a3o5S60ugNROQ+MLFf4T+Bq1rrxebAWruslLoA/Eh4fnrvL1lrlxP3FoBit+BKHMc5Y8xmEAQjIvI8iqJha+2q1vq8Uuor8EVrfbZYLD6NomhYRFYymcxx59xWHMcFoNKpeOvvlEyaN8Zsisgx4C2QAT5prQvGGJs0N7bbV8DJNu++AbJJv3NOtQNX4jjOl8vlD0EQjKRSqXXgaOJ5GbihlFoD8N6fAW62eCr1ej1XKpU+tqvRDtwpaTfqmLx1A+klFCBdr9fXoyg64ZzbAnIkGq4J7jX0j3ANkOxe4H2PoEn46yAIRhLdvncQ6HHSdtqd1QOq31df/1i/APuXI+hmjRoRAAAAAElFTkSuQmCC">
                      </td>                      
                    </tr>
                    @endforeach 
                  </tbody>
                </table>
            </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link" href="#" tabindex="-1"  style="color: grey">Sebelumnya</a>
                </li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: rgb(255, 157, 49)">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" style="color: rgb(255, 157, 49)">Selanjutnya</a>
                </li>
              </ul>
            </nav>
            <div style="padding:5px;"></div>
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
<script>
  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";


  }

  function changeForm(src) {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }
</script>

</html>