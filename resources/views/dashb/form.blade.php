<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="proyek/css/form.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- icon -->
    <link
      rel="icon"
      href="proyek/img/logo/histogram-svgrepo-com.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body style="font-family: 'Poppins', sans-serif">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-3" style="background-color: #32012f">
      <div class="container">
        <a class="navbar-brand text-white" href="#">
          <img
            src="proyek/img/logo/histogram-svgrepo-com.svg"
            alt="Logo"
            width="30"
            height="24"
            class="d-inline-block align-text-top"
          />
          ArchLab.
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto text-white">
            <a class="nav-link" aria-current="page" href="{{route('dashb.index')}}">Home</a>
            <a class="nav-link" href="{{route('dashb.about')}}">About Us</a>
            <a class="nav-link active fw-medium" href="{{route('dashb.form')}}">Order</a>
            <a class="nav-link" href="{{route('dashb.product')}}">Product</a>
            <a class="nav-link" href="{{route('dashb.gallery')}}">Gallery</a>
           
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- formulir -->
    <div class="row text-center mt-xl-5 mb-3">
      <div class="col">
        <h2>ORDER FORM</h2>
      </div>
    </div>
    <div class="container" style="margin-left: 20%">
      <form action="{{route('order.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama" name="nama" />
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label for="noHp" class="col-sm-2 col-form-label">No. HP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nohp" name="nohp" />
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label for="produk" class="col-sm-2 col-form-label">Produk</label>
            <div class="col-sm-6">
                <select name="produk" id="produk" class="form-select">
                    <option selected>Pilih Produk</option>
                    <option value1="Billboard">Billboard</option>
                    <option value2="Banner">Banner</option>
                    <option value3="Videotron">Videotron</option>
                    <option value4="Neonbox">Neon Box</option>
                </select>
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="alamat" name="alamat" />
            </div>
        </div>
        <div class="form-group mb-3 mt-5 row">
            <div class="col-sm-8 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary shadow-lg w-50">PESAN SEKARANG</button>
            </div>
        </div>
    </form>
    </div>
    <!-- akhir form -->

    <!-- Footer -->
    <footer
      class="text-white text-center text-lg-start"
      style="margin-top: 10%; background-color: #524c42"
    >
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
          <!--Grid column-->
          <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">PT. BIAS PROMOSINDO JAYA</h5>
            <p>
              Gejayan Soropadan ( Jembatan Merah ) Condong Catur XII / 80 A
              Yogyakarta <br />
              Phone 0274 - 564143 / 0274 - 564144 <br />
              bias.promosindo@gmail.com
            </p>

            <div class="">
              <!-- Facebook -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-facebook"></i
              ></a>
              <!-- LinkedIn -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-linkedin"></i
              ></a>
              <!-- Youtube -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-youtube"></i
              ></a>
              <!-- Instagram + -->
              <a type="button" class="btn btn-lg"
                ><i class="bi bi-instagram"></i
              ></a>
            </div>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- akhir footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
