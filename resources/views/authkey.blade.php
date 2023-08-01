<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Buat Auth Key</title>
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
    <div class="shadow-sm  mb-3  " style="background-color: rgba(0,0,0,0.7);"><img src="{{ asset('logo.png') }}" width="70px" style="margin-left: 10px" alt="" srcset="">
      <a style="margin-left: 1050px;">User</a>
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVRIie3UMUoDYRDF8Z8psqUpLBRrBS+gx7ATD6E5iSjeQQ/gJUzEwmChnZZaKZiQ0ljsLkhQM5/5Agr74DX7DfOfgZ1Hoz+qAl30Marcx2H1thCtY4DJN76parKqmAH9DM+6eTcArX2QE3yVAO7lBA8TwMNIw6UgeJI46My+rWCjUQL0LVIUBd8lgEO1UfBZAvg8oXamCuWNRu64nRNMmUo/wReSXLXayoDoKc9miMvqW/ZNG2VRNLla2MYudrCFTvX2intlnl/gGu/zDraGYzyLZ/UTjrD6G2AHpxgnAKc9xgmWo9BNPM4BnPYDNiLg24zQ2oNpyFdZvRKZLlGhnvvKPzXXti/Yy7hEo3+iD9EHtgdqxQnwAAAAAElFTkSuQmCC">
    </div>
    <div class='content' style="padding-top :10px; padding-left:250px; padding-right:250px">
      <div class="" style="background-color: #FFFFFF ; padding: 10px 20px 0px 20px ;  "  >
        <nav style="background-color: rgb(255, 157, 49); border-radius: 8px 8px 8px 8px; box-shadow: 2px 2px 2px 2px lightgrey; padding: 10px 10px 10px 10px ">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
          <a href= "{{url('/Dashboard')}}"style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" type="button">Dashboard</a>
            <a href= "{{url('/pajakpenghasilan')}}"style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" type="button">Pajak Penghasilan</a>
            <a href= "{{url('/SPT Masa')}}" style="border-radius: 8px 40px 0 0; padding: 8px 20px; text-align: center;" class="nav-link" type="button">SPT Masa</a>
            <button style="border-radius: 2px 30px 2px 30px; padding: 8px 20px; text-align: center;"  href= "#" class="nav-link active" type="button">Pengaturan</button>
            <img src="{{ asset('logobupot.jpg') }}" style="margin-left:320px; height:103%; width:15%;" alt="" srcset="">
        </div>
    </nav>
    <div style="padding:10px;"></div>
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="padding-left:45%;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAACB0lEQVRIie3UP2gUQRQG8O+b2aRQCQe3R0BtgwgBG1FsDAqSQoJpVNBCbAQrEQQFc+eYAzFgZbBJqQbEKh5o6zWihBSKlXCdosKtyQlBubg7z0I99u/trdeJr9uZN++337K7wP8KlVTdqX77alggqLnGEs2gVrmd1cNhAQA3QuMW9Hz7WrxvyCTyPXZ9NS1R4SRyvbzL13rS2RhrcrHVTaYBANzU854pjIjBqLXueQB3AOwQYFUrf5qm00mDrMKREeM1+yJiSiVrnUsUmbTkOIF9AMYiPcCaVv6xFCg/iZyEDva6LwgczE2YhBAGMhG/5s4QaOQBIWhVb5QOc7HVTdtPfbsInB4U+N1/wC+vZ36QCUQuYATA8djyJsB7lMx0m86WepuFOPEFf2d5SlmUIrDIRafuPQQAW3MbAsxE93GZt7xPWUgiibJqNu5qrV71BpLvY/tftfbuZwFALIkAtJATYUCEZ2naLZmrTAS0hyByLnbmNQ22BkZQLe8HsDsMOPX2Y79aOWUpywQTj1dBvH7Ar55QWeJPighAynLihnpJ+KYQAnC2IPBSdYO7eUjvsMxVJixkzwBAB8QzETzSqv2UC7ADI1bJ0T7AB5ANK8GK83m9ySX8yBuciig1+oDm47cQ8A6UJ8piBfUvawSkyOBwRf5dcmV8e7AtOKMVn9O0W3879N+tn3tO7N1Zrp2PAAAAAElFTkSuQmCC">
    </h5>
        <a href="{{url('/pengaturan')}}" class="btn btn-outline-light"style="padding-left:35%; font-weight: bold;color:black;">Penandatangan</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="padding-left:45%;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAABmJLR0QA/wD/AP+gvaeTAAAB00lEQVRIid2Uv2tUQRDHPzPv4g8wEczzBLEUNNax8horQeuTWFhaKgYbg0l45BRRIvoHKBYJpEh60yeVoghigmBhYSHcJhqwCDFvJ03ufDHvZe8uh6BTze53Zj6zO+zC/2LSboKBMNY/6IVBoM9MViJjQe67T12BbI7HVwQmgbM58IVIuS2Je9cxJB3vHwF5EMhZN5XrpaQ+1zZkcyweEmGmQF4DfgFxA6RGRWrubSNAQwAbPnVYhCcF6ktVV9YJV8bk3vbmoVR4lo0KQtLejcvAyTxNtXRXEjYETGv1h0AdQKBio/GZliEivrKHfKTp3Tx9ADjYbE7kQsMvhSAYxwslnz630fINPD99z9pjjL5McydahyA/wAr4XDT1n1FyQmS14YUHj38TbmS3qcnrliBWJRLkUgeMJWr190GIVYn8QDwFXGsTYF7ljmQuMHcm+wGAjfQkbj67uQuyD8BXUxkuJW7uT2HHt2JVIn8unsYY2qPYjJnNi+p5sGPANzNbjLT3lSRf1vMSmpAA4AWIA/9dl1cmZZa0xdMBmevyA/GtohOo+adSW/3YTuEd+Rn/aKdFQlb44gVmdcJd7QYk+OK7Yb9noraoXh8119iHv9HAv2Vb0gOdBbEmahEAAAAASUVORK5CYII=">
        </h5>
        <a href="{{url('/authkey')}}" class="btn btn-outline-light" style="padding-left:35%; font-weight: bold; color:black;">Buat Auth Key</a>
      </div>
    </div>
  </div>
</div>
        <div style="background-color: #FFFFFF">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
                <span style="color: #f5f5f5; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAAz0lEQVQ4jd3SMU4CQRSH8YEDLJUJpyA0FDTQmphILPQiNF6BWHgRDoCtBXdwY2KjUU+AFvKzYEm2mJ3dBSq+8s28b/4zb0I4CzDGEt/4RY4HXBwiu8dWnC+M2sjuIpIfrPBektYnRQdvEeFlsd7DR1FbNBEOK66ZlfY8FbWXJsLrCuEjMlzZDQg2TYTTCmGMz31fN+HMQwhqT97xXJcuw7phuj+pr9NStsX8VLJX3BwqW6OPCWYYoFP3bjHZbbIpQnnK47bNSY5Ntif1D8+UfzlT/LJJ30bFAAAAAElFTkSuQmCC">
                Buat Auth Key
                </span>
              </div>
              <div style="padding-left:15%;"class="mb-6">
  <label for="FormControlTextarea1" class="form-label">Auth Key</label>
  <textarea style="background-color:#F5F5F5; width:85%;" class="form-control" id="FormControlTextarea1" rows="1"></textarea>
</div>
<div style="padding:5px;"></div>
<div class="d-grid gap-3 d-md-flex justify-content-md-end">
<div class="btn-group" role="group" aria-label="Basic outlined example">
  <button type="button" style="background-color: rgb(4, 153, 195); " class="btn btn-outline-light">
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAABJUlEQVQokZ3SMUjVURTH8d9fUdEGpUHI9xYLIZQQnAVrsSkIEt2EIlxdhEadAxe3wKFNEMHV3cEllzAwsSAnEVylQfg0eB88nk9Nz3I5v3O/55x7zq3yAMNAku6Oe0JdWExynOTjfcC3+OnKLvGu+g9oIslqkt4kf5NcJKknmbkNquELfmMeH7CPfpyjsx30CJ9wUs4evCxJ6niOb61QR6lwUioOFn20aOPFn8HXZnAa37GNkSb9CX5huklbwVLDWSgT3MBQSzeTmGvRtvC64XTiFdbwB7vou2WQh6i1C1TYxCw+4wDLGCvxXpw17l/bM94keZ/kRZKdXO3zNElfkr0kw1VVTd3UVjfOyi86wrOiP8VS6wzaJVjHj7Zvu8vwGP133fsHOhkuiebTbrMAAAAASUVORK5CYII=">
   Minta</button>
  <button type="button" style="background-color:#C0C0C0;" class="btn btn-outline-light"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAAwklEQVQokcWRIW/CUBSFv0OXIclkW4nGofD8AfyyZGp+goRfUMMv2C9YgiZ4QCHR4CqmpieaM9XlpdCuNXDVeefd756b9+BepVIkSbKXdAY+ba+AftBXSJrneb4M4V6gJ7ZPtscVENsftl/jOF7UwfXrSV9RFE0lvaRp+t4JBmZFUTwDG9tZaT60hEdAVjWb4COwLg+2B5Le2sIA34F+7JIM8FSX2iX5IvU/+O+RJF1tCL9qJ2ko6QD8NAzdNtzdqH4BZNozwCSB1PAAAAAASUVORK5CYII=">
</button>
</div>
 <div style="padding:15px;"></div>
          </div>
        </div>
      </div>
    </div>
    <div style="padding: 10px;"></div>
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