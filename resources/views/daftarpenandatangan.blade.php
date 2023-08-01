<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Penandatangan</title>
  </head>
  <style>
    .content {
      background-image: url("{{asset('cobabg.png')}}");
      height : 600px;
    }
  </style>
  <body>
  <div class='content' style="padding-top :20px; padding-left:330px; padding-right:250px">
  <div style="background-color:white; height:540px; padding:15px;">
    <div>
      <div class="btn btn-dark text-white" role="button" style="width: 100%; text-align:left;">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA2ElEQVRIie3UsS6EQRQF4O+IFpHo0fAUKg8hEjXv4AUk3oB6oxE1/T4D0SFaiVZ3Nf/GX0h2/o2NkD3VPZmZc+69M3NZ4LeRSVBVFzju6GWSk97aDlYaNQsPST5geeruqm089pNpwBlOmwzwjEOsNYoXbiek36JNbHT0LclLo+A/R79FR9jr6DjJ6CcM+pe85+uZwqgzXscNVhs1C+dJrmFpwKGZ0K9g/F2c5B37sxr8fcz9o00ddlUVHBj2iu6SvNI2i7ZwZV7DLslTVe0aVsH9gGQWmDM+AdbiP8eoQyLjAAAAAElFTkSuQmCC">
  Daftar Penandatangan Bukti Potong
  </div>
  <div style="padding:5px;"></div>
  <form>
    <span>
        Pencarian Berdasarkan 
    </span>
    <div class="col-auto my-1">
        <label for="inlineFormCustomSelect"></label>
        <select class="form-control; custom-select mr-sm-8 " id="inlineFormCustomSelect">
          <option>Periode</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
  <div style="width:25%" class="form-group">
    <label for="exampleFormControlInput1">Kata Kunci</label>
    <input type="id" class="form-control" id="exampleFormControlInput1">
  </div>
  <div style="padding:5px;"></div>
  <button type="button" class="btn btn-success">Cari</button>
  <div style="padding:5px;"></div>
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
  <tr class="bg-warning">
      <th scope="col">Nomor Identitas</th>
      <th scope="col">Nama</th>
      <th scope="col">Bertindak Sebagai</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">14265691375</th>
      <td>Rina Junita</td>
      <td>Pengurus/ Wajib pajak</td>
      <td>Aktif</td>
      <td>Icon</td>
    </tr>
    <tr>
      <th scope="row">91646656911</th>
      <td>Rinjun Harahap</td>
      <td>Pengurus/ Wajib pajak</td>
      <td>Aktif</td>
      <td>Icon</td>
    </tr>
  </tbody>
  </table> 
  <div style = "display: flex; justify-content: space-between;">
  <div>
    Menampilkan 2 sampai 2 dari entri
  </div>
  <div >
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
  </ul>
  </div>
</nav>
    </div>
  </div>
  </div>
  </div>
  

  


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>