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
  <title>Registrasi Akun | E-Bupot</title>

  <style>
  *body {
    background-image: "poltek.jpeg";
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
          <section class="vh-100">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                  <img src="fotobupot.png"
                    class="img-fluid" alt="">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <h3 class="text-center">Register User</h3>
                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="npwp" id="name" class="form-control" name="npwp"
                                    required autofocus>
                                
                            </div>
                             <div class="form-group mb-3">
                                <input type="text" placeholder="nik" id="nik" class="form-control" name="nik"
                                    required autofocus>
                                
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                            </div>
                        </form>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Have already an account <a href="login"
                            class="link-danger">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
