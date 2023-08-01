<option value="{{ $pengaturan['user']['id'] }}">{{ $pengaturan['user']['name'] }}

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  <title>Rekam Non Residen | E-Bupot</title>
  <style>
    #content {
      flex: 1 0 auto;
    }
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
      background-image: url("{{ asset('poltek.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover; 
      height: 1000px;
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
    .footer {
      position: relative;
      
    }
  </style>
</head>

<body class="d-flex flex-column">
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
    <div class="" style="background-color: white ; padding: 10px 20px 0px 20px; width: 860px">
      <div style="background-color: #FFFFFF">
        <div class="tab-content" id="nav-tabContent" style="margin-top: 10px;">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; ">
              <span style="color: #FFFFFF; font-weight: bold;">
                <img style="width: 20px; margin:0px 0px 5px 0px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC7ElEQVRoge2aO2tUQRiGny8kaqExkRittFew0agYrJYkqAFBVNKk8C/o31Dsogg2ghcQLEIUvIGFIRo3pLFPUsYL8Va4aV6Lc45M1nOZk8zZBdkHFia733zzvme+mXMLdGgv1m4BeUg6CZyK/5w1s/ft1OONpD5JT/UvM5J2t1tfLpL6JdVTxP810W6NmXiITziR9OkuSgjUgANATwCNv4F7ZraW8fs4cNQjzzCQvR4kDUq6I2nd42iU5UGeMknXPHJczUtwWNJKBcIT7jeN1y9ptKSJ40lsd1PHQeAZUckkvAPmgPW8I+fJZ+CuKx54CRyRNGFmTwDM7IYkgOspOWbMbD41u6KySViTdCaA6KyxmhfsuqQLTTHNM1GX1JeX0K35Vor3MVGPZywz6UUn0VwbxOeZmMwVHwe505VWe60Qn2kiiy6nvctp/worfcOC9dnne4BHksaKAruKAkIQL7zn+IlP+AjUi4IqNxCLfwEMlei2CIyY2deiwEoNVC0eKjTQCvFQkYF4wb6inPgFoJaIj3esh/En/eRFwdXoZii52yQsEB159yr1CjARt+eBm2kdg86ApG1EZbNV8QC9TjvzLix0CV0GjpWIzxLvTRUGfFkExrYiHgIakNQLjHiGl95tsgg5A+eBHR5xwcRDWAOXPGKCiodABuLyGS0Iq+Ps86EINQM1YHvK9w1gGpgEhre6YNMIdSL75LQbRFeej4FpM/sRaIxUghgws1lJp4E9wJuqRbsEu5Qws7ehcpWhJTc0VdIx0G46BtrNf2Xgp9Pe2WohKbg3NJnnFdfAstMeDi6nPK6GpcJoRS/W3Ie7Z6vTVqhl3NHRkO+LPUm3nY7fJJ2rWGuahvF47ISpvPgN74kl7QU+AAedr+eBWWA1uNqN7CcqG/dRzDIwZGZfvLMoesW07PEEuWqWJB3a1KGQNCDplqL6azUNSVOSBny05v6rgaLFUyMqqX2bOhr+rAIrwGsz+17xWB2C8Qcjc2gawHJhagAAAABJRU5ErkJggg==">
                Perekaman Bukti Setor Non Residen
              </span>
            </div>
            <div class="accordion" id="accordion">
              <div class="accordion-item">
                <h6 class="accordion-header" id="headingOne">
                  <button id="identitaswpdipotong" class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Identitas Wajib Pajak Yang Dipotong/Dipungut
                  </button>
                </h6>
                <div id="form1">
                  <div style="padding:4px;" id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                    <form class="row g-3">
                      <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Tahun Pajak</label>
                        <select class="form-select" id="tahunpajak" name="tahunpajak" required>
                          <option selected disabled value="">Pilih Tahun Pajak</option>
                          <option>2022</option>
                          <option>2023</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label for="validationDefault04" class="form-label">Masa Pajak</label>
                        <select class="form-select" id="masapajak" name="masapajak" required>
                          <option selected disabled value="">Pilih Masa Pajak</option>
                          <option>JANUARI</option>
                          <option>FEBRUARI</option>
                          <option>MARET</option>
                          <option>APRIL</option>
                          <option>MEI</option>
                          <option>JUNI</option>
                          <option>JULI</option>
                          <option>AGUSTUS</option>
                          <option>SEPTEMBER</option>
                          <option>OKTOBER</option>
                          <option>NOVEMBER</option>
                          <option>DESEMBER</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">TIN</label>
                        <input type="text" class="form-control" id="tin" name="tin" style="height: 30px;" required>
                      </div>
                      <div class="col-md-3">
                        <label for="validationDefault05" class="form-label" style="font-size:14px;">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault04" class="form-label" style="font-size:14px;">Negara</label>
                        <input type="text" class="form-control" id="negara" name="negara" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tgllahir" name="tgllahir" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">No. Paspor</label>
                        <input type="text" class="form-control" id="nopaspor" name="nopaspor" style="height: 30px;" required>
                      </div>
                      <div class="col-md-4">
                        <label for="validationDefault03" class="form-label" style="font-size:14px;">No. KITAB/KITAS</label>
                        <input type="text" class="form-control" id="nokitab" name="nokitab" style="height: 30px;" required>
                      </div>
                      <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <button class="button button1" type="button" onclick="openpphdipotong()">Selanjutnya</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h6 class="accordion-header" id="headingTwo">
              <button id="ppygdipotong" class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" disabled="disabled">
                Pajak Penghasilan Yang Dipotong/Dipungut
              </button>
            </h6>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
              <div class="accordion-body">
                <div class="row" style="margin-bottom: 5px;">
                  <div class="col">
                    <label for="">Kode Objek Pajak</label>
                  </div>
                  <td style="border: 1px solid light; padding-left:50px;">
                    <select id="kode_objek_pajak" style="width:44%; height: 28px; margin-right:20%; border: 1px solid light" name="kode_objek_pajak">
                      <option>Pilih Objek Pajak</option>
                      <option data-percent="0.2">27-100-01 - Sewa dan Penghasilan Lain Sehubungan dengan Penggunaan Harta (PPh Pasal 26) </option>
                      <option data-percent="0.2">27-100-02 - Hadiah dan Penghargaan (PPh Pasal 26) </option>
                      <option data-percent="0.2">27-100-03 - Pensiun dan Pembayaran Berkala Lainnya</option>
                      <option data-percent="0.2">27-100-04 - Keuntungan Karena Pembebasan Utang (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-100-05 - Penghasilan Dari Penjualan atau Pengalihan Harta di Indonesia (PPh Pasal 26)</option>
                      <option data-percent="0.2 ">27-100-06 - Premi Asuransi/Reasuransi (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-101-01 - Dividen (PPh Pasal 26) </option>
                      <option data-percent="0.2">27-102-01 - Bunga Selain Bunga Obligasi (PPh Pasal 26) </option>
                      <option data-percent="0.2">27-102-02 - Premi Swap dan Transaksi Lindung Nilai Lainnya (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-103-01 - Royalti (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-104-01 - Imbalan Sehubungan dengan Jasa, Pekerjaan dan Kegiatan (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-105-01 - Penghasilan Kena Pajak BUT Setelah Pajak (PPh Pasal 26)</option>
                      <option data-percent="0.2">27-107-01 - Bunga pinjaman yang dibayarkan oleh penerima pinjaman melalui Penyelenggara Layanan Pinjam Meminjam yang diterima atau diperoleh pemberi pinjaman (Fintech)</option>
                      <option data-percent="0.25">28-405-02 - Hadiah Undian (yang diterima Wajib Pajak luar negeri) </option>
                      <option data-percent="0.075">28-499-02 - Penghasilan yang Diterima atau Diperoleh Sehubungan dengan Kerja Sama dengan Lembaga Pengelola Investasi (LPI)</option>
                    </select>
                  </td>
                </div>
              </div>
              <div class="row" style="margin-left:1%;">
                <div class="col-5">Fasilitas Pajak Penghasilan</div>
                <div class="col-3" style="margin-right: 300px;">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="tanpafasilitas" value="tanpa fasilitas" onclick="handlerRadioSelect1()">
                    <label class="form-check-label" for="gridRadios1">
                      Tanpa Fasilitas
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihskdwpln" value="skd wpln" onclick="handlerRadioSelect2()">
                      <label class="form-check-label" for="gridRadios2">
                        SKD WPLN
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <input class="form-control" style="height:25px; width:75%;" type="text" id="skdwpln" placeholder="Nomor Tanda Terima SKD WPLN" aria-label="default input" disabled>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihdtp" value="pph ditanggung pemerintah" onclick="handlerRadioSelect3()">
                    <label class="form-check-label" for="gridRadios3">
                      PPh Ditanggung Pemerintah(DTP)
                    </label>
                  </div>
                  <div class="col-6">
                    <input class="form-control" style="height:25px; width:75%;" type="text" id="dtp" placeholder="Nomor Aturan DT" aria-label="default input" disabled>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <input class="form-check-input" type="radio" name="fasilitas_pajak_penghasilan" id="pilihlainnya" value="fasilitas lainnya berdasarkan" onclick="handlerRadioSelect4()">
                    <label class="form-check-label" for="gridRadios4">
                      Fasilitas lainnya berdasarkan
                    </label>
                  </div>
                  <div class="col-6">
                    <input class="form-control" style="height:25px; width:75%;" type="text" id="lainnya" placeholder="Nomor Dokumen Fasilitas Lainnya" aria-label="default input" disabled>
                  </div>
                </div>
              </div>
              <div style="padding: 8px;"></div>
              <div class="row">
                <div class="col-6" style="padding-left:4%;">
                  <label for="">Jumlah Penghasilan Bruto(RP)</label>
                </div>
                <div class="col-6">
                  <input class="form-control" oninput="generateDipotong(this.value)" id="jumlah_penghasilan_bruto" name="jumlah_penghasilan_bruto" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                </div>
              </div>
              <div style="padding: 3px;"></div>
              <div class="row">
                <div class="col-6" style="padding-left:4%;">
                  <label for="">Perkiraan Penghasilan Netto</label>
                </div>
                <div class="col-6">
                  <input class="form-control" style="height:30px; width:71%;" id="netto" name="netto" type="text" placeholder="" aria-label="default input" >
                </div>
                <div style="padding: 3px;"></div>
                <div class="row">
                  <div class="col-6" style="padding-left:4%;">
                    <label for="">Tarif</label>
                  </div>
                  <div class="col-6" style="padding-left:3%">
                    <input class="form-control" style="height:30px; width:75%;" id="tarif" name="tarif" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input" disabled>
                  </div>
                </div>
                <div style="padding: 3px;"></div>
                <div class="row">
                  <div class="col-6" style="padding-left:4%;">
                    <label for="">PPh yang Dipotong/Dipungut</label>
                  </div>
                  <div class="col-6" style="padding-left:3%">
                    <input class="form-control" style="height:30px; width:75%;"id="jumlah_setor" name="jumlah_setor" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input" disabled>
                  </div>
                </div>
                <div style="padding:10px;"></div>
              </div>
            </div>
            <div class="accordion-item">
              <h6 class="accordion-header" id="headingThree">
                <button id="dokdas" class="accordion-button btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" disabled="disabled">
                  Dokumen Dasar Pemotongan
                </button>
              </h6>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <div>
                    <div class="table" style="background-color: rgb(4, 153, 195); height: 50px; padding: 10px 0px 0px 10px; ">
                      <span style="color: #FFFFFF; font-weight: bold;">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                        Daftar Dokumen
                      </span>
                      <a type="button" name="tambah" id="tambah" class="btn btn-link" style=" padding-left:65%; color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        Tambah</a>
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="background-color:lavender;">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Dasar
                                Pemotongan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="row">
                                  <div class="col-4">
                                    <label for="">Nama
                                      Dokumen</label>
                                  </div>
                                  <div class="col-8">
                                    <select class="form-select" id="nama_dokumen" name="nama_dokumen" style="height: 30px; font-size:13px; width:205px" required>
                                      <option selected disabled value="">Pilih Dokumen
                                      </option>
                                      <option>Faktur Pajak</option>
                                      <option>Invoice</option>
                                      <option>Pengumuman</option>
                                      <option>Surat Perjanjian</option>
                                      <option>Bukti Pembayaran</option>
                                      <option>Akta Perikatan</option>
                                      <option>Akta RUPS</option>
                                      <option>Faktur Pajak</option>
                                      <option>Surat Pernyataan</option>
                                    </select>
                                  </div>
                                </div>
                                <div style="padding:3px;"></div>
                                <div class="row">
                                  <div class="col-4">
                                    <label for="">No
                                      Dokumen</label>
                                  </div>
                                  <div class="col-8">
                                    <input class="form-control" id="no_dokumen" name="no_dokumen" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input">
                                  </div>
                                </div>
                                <div style="padding:3px;"></div>
                                <div class="row">
                                  <div class="col-4">
                                    <label for="">Tanggal</label>
                                  </div>
                                  <div class="col-8">
                                    <input class="form-control" id="tgl_dokumen" name="tgl_dokumen" style="height:30px;width:71%;" type="text" placeholder="" aria-label="default input" value="{{ date('d-m-Y', time()) }}" readonly>
                                  </div>
                                </div>
                                <script>
                                  // A $( document ).ready() block.
                                  $(document).ready(function() {
                                    console.log("ready!");
                                  });

                                  function tambahrow() {
                                    var rowCount = $('#bupotnon tr').length;
                                    var tbody = document.getElementById('bupotnon');
                                    var nama_dokumen = document.getElementById('nama_dokumen').value;
                                    var no_dokumen = document.getElementById('no_dokumen').value;
                                    var tgl_dokumen = document.getElementById('tgl_dokumen').value;

                                    var tr = document.createElement('tr');
                                    var td1 = document.createElement('td');
                                    var td2 = document.createElement('td');
                                    var td3 = document.createElement('td');
                                    var td4 = document.createElement('td');
                                    if (rowCount === 0) {
                                      td1.innerHTML = `<span id='nama_dokumen2' data-value='${nama_dokumen}' > ${nama_dokumen} </span>`;
                                      td2.innerHTML = `<span id='no_dokumen2' data-value='${no_dokumen}' > ${no_dokumen} </span>`;
                                      td3.innerHTML = `<span id='tgl_dokumen2' data-value='${tgl_dokumen}' > ${tgl_dokumen} </span>`;
                                      td4.innerHTML =
                                        '<img onclick="deleteTable()" style="padding-left:25%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAB4klEQVQ4jaWTMW/TUBSFv/uSNhSmlyZSmWCADWaYYGcH/gGZkBiQUAcqq1M3BAxI/BpWNkQFEwN0aFNBY0fQJoXYh+HZIW7sBMGVLD3f+873zr3PNpaEHl5pceHreQCOuyf28tPpov1uIexp53bmkyRbXRlkqyuDzCeJou6tfwJqc6ObObsH7CF6iB6wl4n72tzo1umsWKRbncjEDRmXgMvA2iInwAj4bOKLjLeN7W8RQHPqCLcL2T5agjnbSdAezTkMLru7oKvASZ4a504KR+MccuzETwCZPjS2jx4VjOYMD5P6Mq4BrUWuDJAVmpKn8qXIOMiXzzBez1Seh2carzC9yDWHs4ySQ6APIPERGBk8CO/uHYBZGLBkbwyt55r9WocoAM3wOIsrus07SWPk/KymEiiKovkG6aAO2JQb4OTLmirgdIZqM3G1Dmk0YoQvayqAzUzhNMOTNmsdMh7HJvMlTRWQySTMUOZp9ePQ0VxknBsOM9QOLtJ6h7YzjIGRUNsiJsCPCuDQIjIzPDC2KEnqHQKgQwjzAarmWOQ8lNuF+e8Q4fqGrqdb60/I/xhnuhNqAKzltY5w75cCHRwIboLt/DmEuzNbLhY1R/mGK4H2q9Gzlh6fzVfGqX3/q33/E78BLt6/81PFEEoAAAAASUVORK5CYII=">';
                                      tr.appendChild(td1);
                                      tr.appendChild(td2);
                                      tr.appendChild(td3);
                                      tr.appendChild(td4);
                                      tbody.appendChild(tr);
                                      countdokumen += 1;
                                      openidentitaspemotong();
                                      alert('berhasil')
                                      return;
                                    }
                                    // alert($('#nama_dokumen2').attr('data-value'))
                                  }

                                  function deleteTable() {

                                    var rowCount = $('#bupotnon tr').length;
                                    alert(rowCount);
                                    if (rowCount > 0) {
                                      $('#bupotnon tr:last').remove();
                                    }
                                  }
                                </script>
                              </form>
                            </div>
                            <div class="modal-footer" style="margin-right:34%;">
                              <button type="button" class="button button1" onclick="tambahrow()" style="text-align:center">Tambahkan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
                              <tr style="background-color: rgb(4, 153, 195);">
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  NAMA DOKUMEN <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  NOMOR DOKUMEN<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">
                                  TANGGAL <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAABmJLR0QA/wD/AP+gvaeTAAAA50lEQVQoka2ToU5DQRBFz5LX5AlEwbWO1GPoF7y/aIKqQCP6GQgEQfARGFIQODSqpnVIElKBwJ+KbtOXeSvahGs2c3fPzGR3FlpSe2qiIDWpvbZ30tocAgtgrtYFfgrcl7IO1ZV7vcUE6rk6KlV+AL6Ad+AJuABmoUYDXLeNKq83wC/wDHwD40LbC+CnA6eU1rk1cvxXgCfAFfAR2z5EnVc4Bu7o32EPhasQ37G97X0mPQ1xBfRTSutYuQEug3cLfAIDoAZe2M5C6FdH6lnw6jxxO63yKHfgR3Va8Gv1VV0WwXzoqF+1AasDiHn2ysIyAAAAAElFTkSuQmCC">
                                </th>
                                <th class="text" style="color: #FFFFFF;" scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody id="bupotnon">

                            </tbody>
                          </table>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="accordion-item">
              <h6 class="accordion-header" id="headingFour">
                <button id="identitaspemotong" class="accordion-button btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" disabled="disabled">
                  Identitas Pemotong Pajak
                </button>
              </h6>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">Penandatangan
                      Sebagai</label>
                    <select name="pilihsebagai" class="form-select" required>
                      <option value="{{ $pengaturan['bertindak_sebagai'] }}">{{ $pengaturan['bertindak_sebagai'] }}</option> 
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="validationDefault04" class="form-label">Penandatangan
                      Bukti Potong</label>
                    <select name="pilihbupot" class="form-select" id="pengaturan_id" required>
                      <option selected disabled value="">Pilih Penandatangan
                      </option>
                      <option value="{{ $pengaturan['user']['id'] }}">{{ $pengaturan['user']['name'] }}</option> 
                    </select>
                  </div>
                  <div style="padding:10px;">
                    <div class="alert alert-warning" role="alert">
                      <h4 class="alert">Warning!</h4>
                      <p>Apabila terjadi kesalahan dalam pembuatan Bukti Pemotongan/
                        Pemungutan Unifikasi yang menyebabkan kelebihan
                        pemotongan/pemungutan PPh, maka pihak yang akan diajukan:</p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelebihan_pemotongan" id="pengembalian" >
                        <label class="form-check-label" for="flexRadioDefault1">
                          Pengembalian atas pajak yang tidak seharusnya terutang oleh
                          Pemotong dan/ atau Pemungut PPh
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelebihan_pemotongan" id="pemindahbukuan"  checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Pemindahbukuan oleh Pemotong dan/ atau Pemungut PPh
                        </label>
                      </div>
                      <div style="padding:25px;"></div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="pernyataan" id="pernyataan" name="pernyataan">
                        <label class="form-check-label" for="defaultCheck1">
                          Dengan ini saya menyatakan bahwa Bukti Pemotongan/Pemungutan
                          Unifikasi yang telah saya isi dengan benar dan telah saya
                          tandatangani secara electronik
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="d-grid gap-5 d-md-flex justify-content-md">
                      <button class="button button2" type="button">
                        <span>Sebelumnya</span></button>
                    </div>
                  </div>
                </div>

                <div class="row" style="padding-left: 57%; padding-right:55%;">
                  <div class="col">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <a href="{{ url('/daftarbupotnon') }}" onclick="addTableHarta(this)" class="button button1" type="button">
                        <span>Simpan</span></a>
                        <a class="button button2" type="button">
                          <span>Batal</span></a>
                    </div>
                  </div>
                </div>
                <div style="padding:10px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="padding:15px;"></div>
    </div>
  </div>
  </div>
   <div class="footer"  style="background-color: rgba(0,0,0,0.7); height:auto">  
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>
<script>
  $(document).ready(function() {
    tablebupot();
  })

  function tablebupot() {
    var div_table = document.getElementById('nonresiden');
    div_table.innerHTML = 'suratbupot';
  }

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


  let percent;
  let countdokumen = 0;

  function formatPercent(number) {
    return `${(numeral(number).format()).replace(",",".")}`;
  }
  var selection = document.getElementById("kode_objek_pajak");
  const myElement = document.getElementById("jumlah_penghasilan_bruto");
  const myElement2 = document.getElementById("jumlah_setor");
  selection.onchange = function(event) {
    var rc = event.target.options[event.target.selectedIndex].dataset.percent;
    const tarif = document.getElementById("tarif");
    console.log(tarif)
    tarif.value = parseFloat(rc)

    percent = parseFloat(rc);
  };

  function generateDipotong(src) {
    const jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto");
    const jumlah_setor = document.getElementById("jumlah_setor");
    jumlah_setor.value = (parseInt(jumlah_penghasilan_bruto.value) * percent);
    let newVal = parseInt(src.split(",").join('')) * percent
    const myElement = document.getElementById("jumlah_penghasilan_bruto");
    const myElement2 = document.getElementById("jumlah_setor");
    myElement.value = numeral(src).format();
    myElement2.value = formatPercent(newVal);
    opendokdas();

  }

  function handleChange(src) {
    const myElement = document.getElementById("eformspt");
    myElement.style.display = "block";
  }

  function changeform1(src) {
    document.getElementById("form1").style.display = "block";
    document.getElementById("form2").style.display = "none";

  }

  function changeform2(src) {
    document.getElementById("button-check").style.display = "inline-block";
    document.getElementById("valid").style.display = "inline-block";
    document.getElementById("invalid").style.display = "inline-block";

  }

  function formatNpwp2() {
    formatnpwp = document.getElementById('no_identitas').value
    formatnpwp2 = document.getElementById('no_identitas')
    if (typeof formatnpwp === 'string') {

    }
    formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
  }

  function openpphdipotong() {
    console.log('click')
    let tin = document.getElementById("tin")
    let nama = document.getElementById("nama")
    let alamat = document.getElementById("alamat")
    let negara = document.getElementById("negara")
    let tempatlahir = document.getElementById("tempatlahir")
    let tgllahir = document.getElementById("tgllahir")
    let nopaspor = document.getElementById("nopaspor")
    let nokitab = document.getElementById("nokitab")
    console.log(tin)
    if (!tin.value || !nama.value || !alamat.value || !negara.value || !tempatlahir.value || !tgllahir.value || !nopaspor.value || !nokitab.value) {
      document.getElementById("ppygdipotong").disabled = true
    }
    if (tin.value && nama.value && alamat.value && negara.value && tempatlahir.value && tgllahir.value && nopaspor.value && nokitab.value) {
      document.getElementById("ppygdipotong").disabled = false
      document.getElementById("identitaswpdipotong").disabled = true
    }

  }

  function opendokdas() {
    let jumlah_penghasilan_bruto = document.getElementById("jumlah_penghasilan_bruto")
    console.log(jumlah_penghasilan_bruto)
    if (!jumlah_penghasilan_bruto.value) {
      document.getElementById("dokdas").disabled = true
    }
    if (jumlah_penghasilan_bruto.value) {
      document.getElementById("dokdas").disabled = false
      document.getElementById("ppygdipotong").disabled = true
    }

  }

  function openidentitaspemotong() {

    if (!countdokumen) {
      document.getElementById("identitaspemotong").disabled = true
    }
    if (countdokumen) {
      document.getElementById("identitaspemotong").disabled = false
      document.getElementById("dokdas").disabled = true
    }

  }
</script>

<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");
  }

  function addTableHarta($this) {

    var tahunpajak = document.querySelector('#tahunpajak').value
    console.log(tahunpajak);
    var masapajak = document.querySelector('#masapajak').value
    console.log(masapajak);
    var nama = document.querySelector('#nama').value
    console.log(nama);
    var tin = document.querySelector('#tin').value
    console.log(tin);

    var alamat = document.querySelector('#alamat').value
    console.log(alamat);
    var negara = document.querySelector('#negara').value
    console.log(negara);
    var tempatlahir = document.querySelector('#tempatlahir').value
    console.log(tempatlahir);
    var tgllahir = document.querySelector('#tgllahir').value
    console.log(tgllahir);
    var nopaspor = document.querySelector('#nopaspor').value
    console.log(nopaspor);
    var nokitab = document.querySelector('#nokitab').value
    console.log(nokitab);
    var kode_objek_pajak = document.querySelector('#kode_objek_pajak').value
    var skdwpln = document.querySelector('#skdwpln').value
    var dtp = document.querySelector('#dtp').value
    var lainnya = document.querySelector('#lainnya').value
    console.log(kode_objek_pajak);
    var fasilitas_pajak_penghasilan = $('input[name="fasilitas_pajak_penghasilan"]:checked').val();
    console.log(fasilitas_pajak_penghasilan);
    var jumlah_penghasilan_bruto = document.querySelector('#jumlah_penghasilan_bruto').value
    console.log(jumlah_penghasilan_bruto);
    var tarif = document.querySelector('#netto').value
    console.log(netto);
    var tarif = document.querySelector('#tarif').value
    console.log(tarif);
    var jumlah_setor = document.querySelector('#jumlah_setor').value
    console.log(jumlah_setor);
    var pengaturan_id = document.querySelector('#pengaturan_id').value
    console.log(pengaturan_id);
    var kelebihan_pemotongan = $('input[name="kelebihan_pemotongan"]:checked').val();
    console.log(kelebihan_pemotongan);
    var pemindahbukuan = document.querySelector('#pemindahbukuan').value
    console.log(pemindahbukuan);
    var pengembalian = document.querySelector('#pengembalian').value
    console.log(pengembalian);
    var pernyataan = document.querySelector('#pernyataan').value
    console.log(pernyataan);

    var data = {
      tahunpajak: tahunpajak,
      masapajak: masapajak,
      nama: nama,
      tin: tin,
      alamat: alamat,
      negara: negara,
      tempatlahir: tempatlahir,
      tgllahir: tgllahir,
      nopaspor: nopaspor,
      nokitab: nokitab,
      kode_objek_pajak: kode_objek_pajak,
      fasilitas_pajak_penghasilan: fasilitas_pajak_penghasilan,
      skdwpln: skdwpln,
      dtp: dtp,
      lainnya: lainnya,
      jumlah_penghasilan_bruto: jumlah_penghasilan_bruto,
      netto: netto,
      tarif: tarif,
      jumlah_setor: jumlah_setor,
      pengaturan_id: pengaturan_id,
      nama_dokumen: $('#nama_dokumen2').attr('data-value'),
      no_dokumen: $('#no_dokumen2').attr('data-value'),
      tgl_dokumen: $('#tgl_dokumen2').attr('data-value'),
      kelebihan_pemotongan: kelebihan_pemotongan,
      pemindahbukuan: pemindahbukuan,
      pengembalian: pengembalian,
      pernyataan: pernyataan
    }

    console.log(data);
    $.ajax({

      type: "POST",
      url: 'http://localhost:8000/api/tambahpphnon',
      data: data,
      success: function(res) {
        console.log(res)
      }
    });

  }

  function handlerRadioSelect1() {

    if (document.getElementById("tanpafasilitas").checked = true) {
      document.getElementById("skdwpln").disabled = true;
      document.getElementById("dtp").disabled = true;
      document.getElementById("lainnya").disabled = true;
    }
  }


  function handlerRadioSelect2() {

    if (document.getElementById("pilihskdwpln").checked = true) {
      document.getElementById("skdwpln").disabled = false;
      document.getElementById("dtp").disabled = true;
      document.getElementById("lainnya").disabled = true;
    }
  }

  function handlerRadioSelect3() {

    if (document.getElementById("pilihdtp").checked = true) {
      document.getElementById("skdwpln").disabled = true;
      document.getElementById("dtp").disabled = false;
      document.getElementById("lainnya").disabled = true;
    }
  }


  function handlerRadioSelect4() {

    if (document.getElementById("pilihlainnya").checked = true) {
      document.getElementById("skdwpln").disabled = true;
      document.getElementById("dtp").disabled = true;
      document.getElementById("lainnya").disabled = false;
    }
  }
</script>


</html>