<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <title>Posting | E-Bupot</title>
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
          <button style="font-size:14px; background-color: rgb(255, 157, 49)" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: #FFFFFF;">PPh pasal 4 Ayat(2), 15, 22, 23</span></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{url('/daftarbuktipotongBPPs')}}">Daftar BP Ps4(2), 15, 22, 23</a></li>
            <li><a class="dropdown-item" href="{{url('/rekambp1')}}">Rekam BP Ps4(2), 15, 22, 23</a></li>
          </ul>
          <button style="font-size:14px; background-color: rgb(255, 157, 49)" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <span style="color: #FFFFFF;">PPh non Residen</span></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="{{url('/daftarbupotnon')}}">Daftar Bukti Potong PPh Non Residen</a></li>
            <li><a class="dropdown-item" href="{{url('/rekambupotnon')}}">Rekam Bukti Potong PPh Non Residen</a></li>
          </ul>
          <a href="{{url('/posting')}}" style="font-size:14px; background-color: rgb(4, 153, 195)" class="btn btn-light" type="button" id="Button" data-bs-toggle="Button" aria-expanded="false">
            <span style="color: #FFFFFF;">Posting</span></a>
        </div>
        <div style="padding:1%"></div>
        <div class="card">
          <div class="card-body" style="background-color:#f0f0f0">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                  <span style="color: #FFFFFF; font-weight: bold;">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABp0lEQVRIie3Vu2sUURQH4DMx4CIqFqaTLSx8kNZagtqJJAH1D1BIqZWNVQgItvZpLIQUgkWCrQEVFLE0EK20Ei00sVl87GexI1yGeewrC0J+3cw5c76ZO3d3IvbzvwcHMIcH+IjnaX16zFgrIi5FxEJEzEfE8arekWEcioiLEXEtx45WtD4Z1QrM4CY20FGebqE2NyzWxhLW8bMC+5cfeJTj8BX9ry5O4jZeJEOa8gFXsZOcW+0Hm8Uy3vUJpXmqtzJbhfOXm9DNITB6q7GCab33nmZXb7fXwi+HQHewkF+/UlJf62eZW3g4APoes/m188r3wfVGOLmBJc07dwPH8v7T+F7S00HV77oSP4/PJcO6uI+pvO+I6o24PhCa4CfwOhm0i8WknuFxzarcGArOhx/EKrZxtlBbrkF/Y2ZoOEFaheMr+FMDb46MltzEKXyrQeHWuNGW5n+1Ltp1c6YGhbMs60TEq4a2t1mWfRp0dmPyp35T88R3x44meBtfKuAzewbn+AX8KqDbe4om+J0CfG9ScIa1BD43ETjHD+t9Up8hmxi8n37yF0yjGoZBrhYOAAAAAElFTkSuQmCC" style="width: 25px">
                    Posting Data Pajak Penghasilan
                  </span>
                </div>
                <form>
                  <div id="form1"></div>
                  <div class="container">
                    <div class="row">
                      <div class="col-6">
                        <label for="" style="margin-left: 50%">Tahun Pajak</label>
                      </div>
                      <div class="col-6" style="width: 30%">
                        <select class="form-select" id="tahun_pajak" required>
                          <option selected disabled value="">Pilih Tahun Pajak</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>

                          {{-- <option value="{{ $pphsendiri['tahun_pajak'] }}">{{ $pphsendiri['tahun_pajak'] }}</option> --}}
                          {{-- <option value="{{ $pphpasal['tahun_pajak'] }}">{{ $pphpasal['tahun_pajak'] }}</option> --}}
                          {{-- <option value="{{ $pph_nonresiden['tahun_pajak'] }}">{{ $pph_nonresiden['tahun_pajak'] }}</option> --}}

                        </select>
                      </div>
                      <div class="col-6">
                        <label for="" style="margin-left: 50%">Masa Pajak</label>
                      </div>
                      <div class="col-6" style="padding-top: 5px; width: 30%">
                        <select class="form-select" id="masa_pajak" required>
                          <option selected disabled value="">Pilih Masa Pajak</option>
                          <option value="Januari">Januari</option>
                          <option value="Februari">Februari</option>
                          <option value="Maret">Maret</option>
                          <option value="April">April</option>
                          <option value="Mei">Mei</option>
                          <option value="Juni">Juni</option>
                          <option value="Juli">Juli</option>
                          <option value="Agustus">Agustus</option>
                          <option value="September">September</option>
                          <option value="Oktober">Oktober</option>
                          <option value="November">November</option>
                          <option value="Desember">Desember</option>
                          {{-- <option value="{{ $pphsendiri['masa_pajak'] }}">{{ $pphsendiri['masa_pajak'] }}</option> --}}
                          {{-- <option value="{{ $pphpasal['masa_pajak'] }}">{{ $pphpasal['masa_pajak'] }}</option> --}}
                          {{-- <option value="{{ $pph_nonresiden['masa_pajak'] }}">{{ $pph_nonresiden['masa_pajak'] }}</option> --}}
                        </select>
                      </div>
                    </div>
                    <div style="padding:10px;"></div>
                    <div class="col">
                      <input type="hidden" id="user_id" value="{{ $user_id}}">
                      <a type="button" class="btn btn-outline-warning" style="margin-left:52%; width: 108px; font-weight:bold" onclick="open_cek()" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAy0lEQVQokaXRPWpCQRSG4UcUUkVwCzZ2qV1AeteQysJOEFKJ7iF9IJDORQQk4Bq0stdOjYKohXPJMMSbe/GDw/y+5ztzhjtULXm/jVe0MCsCNDHEHOcQb3lAA11McQrACZswb6dAFc/4wDZyOeMHk5BggUoM9rBKgCyWeIlch6nr4Ab4jaeQICu9+dc7Rwn4iTq+or3prSbBGEf0w/o9SdjNg+ExjP0E3Lv+wr+qhwpieFIEzDRO4E4ZmN8mrvGQHtYKwFvscCjrnKsL5IVIU7V8oH8AAAAASUVORK5CYII=">
                        &nbsp;Cek
                      </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div style="padding:1%"></div>
      </div>
    </div>

    <!-- footer -->
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
<script>
  function handleChange(src) {
    const myElement = document.getElementById("");
    myElement.style.display = "block";


  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";

  }

  function changeform2(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }
</script>

<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }

  // POSTING
  function open_cek() {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn my-1 mx-1 btn-primary',
        cancelButton: 'btn my-1 mx-1 btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'POSTING?',
      text: "Anda akan buat SPT Baru!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Oke!',
      cancelButtonText: 'Batal!',
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
            console.log('data')
            var tahun_pajak = document.getElementById("tahun_pajak");
            var masa_pajak = document.getElementById("masa_pajak");
            // var oke = document.getElementById("oke");
            let user_id = $("#user_id").val();
            $.ajax({

              type: "GET",
              url: `http://localhost:8000/api/update_posting/${user_id}?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`,
              success: function(res) {
                // debugger
                // console.log(res)
                // location.href = 'daftarbuktipotongBPPs'
                location.href = `sptmasa?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`
              }
            });

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

    // var tahun_pajak = document.getElementById("tahun_pajak");
    // var masa_pajak = document.getElementById("masa_pajak");
    // var oke = document.getElementById("oke");
    // oke.href = `sptmasa?tahun_pajak=${tahun_pajak.value}&masa_pajak=${masa_pajak.value}`

  }
</script>

</html>