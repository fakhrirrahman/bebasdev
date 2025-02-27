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
    <link rel="stylesheet" href="proyek/css/about.css" />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- icon -->
    <link
      rel="icon"
      href="img/logo/histogram-svgrepo-com.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
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
            <a class="nav-link active fw-medium" href="{{route('dashb.about')}}">About Us</a>
            <a class="nav-link" href="{{route('dashb.form')}}">Order</a>
            <a class="nav-link" href="{{route('dashb.product')}}">Product</a>
            <a class="nav-link" href="{{route('dashb.gallery')}}">Gallery</a>
          

          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <!-- Foto Background dan nama -->
    <img src="proyek/img/abcd.png" alt="" style="width: 100%" />
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1440 320"
      style="margin-top: -15%"
    >
      <path
        fill="#ffff"
        fill-opacity="1"
        d="M0,128L120,144C240,160,480,192,720,192C960,192,1200,160,1320,144L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
      ></path>
    </svg>
    <section class="jumbotron text-center">
      <img
        src="proyek/img/bruno.jpg"
        alt="Riza Fauzil"
        width="250"
        class="rounded-circle img-thumbnail"
        style="margin-top: -250px"
      />
      <h1
        class="display-4 fw-medium"
        data-aos="fade-up"
        data-aos-duration="2000"
      >
        Bias Promosindo
      </h1>
    </section>
    <!-- akhir Foto Background dan nama -->
    <!-- Paragraf Konten -->
    <div class="container mt-5">
      <p data-aos="fade-up">
        CV. Bina Arta Sentosa didirikan pada tahun 1999 dikenal oleh masyarakat
        dengan nama BiAS Advertising, bergerak dalam bidang periklanan yang
        melayani berbagai macam pembuatan dan pemasangan media reklame luar
        ruang (out door), pada saat itu ruang lingkupnya masih terbatas baik
        secara wilayah maupun bidang usahanya.
      </p>
      <br />
      <p data-aos="fade-up" data-aos-delay="200">
        Seiring dengan berjalannya waktu, memasuki dekade ke-2, setelah melalui
        perjalanannya selama sepuluh tahun BiAS Advertising mengalami
        perkembangan yang signifikan. Hal ini dipengaruhi oleh perkembangan
        dunia promosi yang setiap tahun mengalami peningkatan serta tuntutan
        dari perusahaan bersekala lokal maupun nasional yang memerlukan dukungan
        media luar ruang sebagai sarana kegiatan promosi. Berdasarkan pengalaman
        dan semangat kreativitas sertasifat yang dinamis, BiAS Advertising mampu
        mengikuti perkembangan jaman dalam memenuhi kebutuhan promosi luar ruang
        bagi para kliennya.<br />
      </p>
      <p data-aos="fade-up" data-aos-delay="400">
        Akhirnya pada tahun 2011 CV. Bina Arta Sentosa atau lebih dikenal
        sebagai BiAS Advertising mengembangkan bentuk perusahaannya menjadi PT.
        BIAS Promosindo Jaya, dengan kinerja dan manajemen yang lebih
        profesional. Hal ini dilakukan sebagai langkah untuk meningkatkan
        kepercayaan dan memenuhi kebutuhan para mitra/klien nya lebih baik lagi.
        Salah satu bentuk peningkatan pelayanannya adalah melakukan perluasan
        wilayah dan menambah titik-titik yang strategis. Disamping itu PT. BIAS
        Promosindo Jaya juga melayani media reklame (outdoor) dluar kota jogja.
        PT. BIAS Promosindo Jaya adalah sebuah perusahaan periklanan yang
        bergerak di bidang penyediaan jasa periklanan outdoor termasuk
        perencanaan, pembuatan, pemasangan, pemeliharaan serta pengawasan
        reklame luar ruang, antara lain: Bando, Baliho, Billboard, neon box dan
        videotron sesuai dengan kebutuhan, spesifikasi, dan keterangan teknis
        media tersebut.PT. BIAS Promosindo Jaya mengedepankan pelayanan dan
        kualitas jasa terbaik terhadap klien yang kegiatannya meliputi : <br />
      </p>

      <ul data-aos="fade-up" data-aos-delay="600">
        <li>Pekerjaan</li>
        <li>Perijinan Reklame</li>
        <li>Pengurusan Pajak</li>
        <li>Pemilihan dan Pengurusan Lokasi</li>
        <li>Pasokan Listrik</li>
        <li>Pemeliharaan dan Perawatan</li>
      </ul>
    </div>
    <!-- akhir paragraf konten -->
    <!-- Maps Lokasi -->
    <div class="row text-center mt-xl-5 mb-3">
      <div class="col">
        <h2>Our Location</h2>
      </div>
    </div>
    <div
      class="container text-center"
      data-aos="fade-down"
      data-aos-duration="1500"
    >
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.421901882985!2d110.34480817481797!3d-7.744994192273666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5891e7bb85c5%3A0xe375e3a686ddf1d8!2sPT.%20BIAS%20PROMOSINDO%20JAYA!5e0!3m2!1sid!2sid!4v1714976275428!5m2!1sid!2sid"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <!-- akhir maps lokasi -->
    <!-- Footer -->
    <footer
      class="text-white text-center text-lg-start"
      style="margin-top: 20%; background-color: #524c42"
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
