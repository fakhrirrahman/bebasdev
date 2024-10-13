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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="proyek/css/gallery.css" />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- icon -->
    <link
      rel="icon"
      href="img/logo/histogram-svgrepo-com.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
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
          <div class="navbar-nav ms-auto">
            <a class="nav-link" aria-current="page" href="{{route('dashb.index')}}">Home</a>
            <a class="nav-link" href="{{route('dashb.about')}}">About Us</a>
            <a class="nav-link" href="{{route('dashb.form')}}">Order</a>
            <a class="nav-link" href="{{route('dashb.product')}}">Product</a>
            <a class="nav-link active fw-medium" href="{{route('dashb.gallery')}}">Gallery</a>
        
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- galery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mt-3 mb-3">
          <div class="col">
            <h2>Produk kami</h2>
          </div>
        </div>
        <div class="container-lg">
          @foreach($galeri->chunk(3) as $galleryChunk)
            <div class="row gy-4">
              @foreach($galleryChunk as $gallery)
                <div class="col-12 col-md-4" data-aos="flip-left" data-aos-duration="1500">
                  <img src="{{ asset('foto_galeri/' . $gallery->foto) }}" class="gallery-item img-fluid" alt="Foto {{ $gallery->nama }}"style="height: 280px; width: 100%;" />
                </div>
              @endforeach
            </div>
            <div class="mb-4"></div> <!-- Adding space between rows -->
          @endforeach
        </div>
      </div>
    </section>
    
    <!-- akhir galery -->
    <div class="container mt-4">
      <nav aria-label="page navigation example">
        <ul class="pagination pagination-sm justify-content-center">
          <li class="page-item">
            <a href="#" class="page-link" aria-label="Sebelumnya">
              <span aria-hidden="True">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item">
            <a href="#" class="page-link" aria-label="Selanjutnya">
              <span aria-hidden="True">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
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
