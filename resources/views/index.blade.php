@include('include.header')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Layanan Isi Ulang APAR Terpercaya dan Profesional</h1>
            <p>Lindungi rumah, perusahaan, maupun barang berharga Anda dengan alat pemadam kebakaran kami yang handal dan terpercaya!</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Mulai</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/hero-img.png" class="img-fluid animated rounded" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 10.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 11.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 12.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 13.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 8.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="{{ asset('assets/img/clients/image 9.png') }}" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang CV. CITRA PERKASA</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <h3>Latar Belakang</h3>
            <p>
                CV. Citra Perkasa adalah perusahaan berpengalaman yang
                menyediakan dan mengisi ulang alat pemadam kebakaran,
                berkomitmen untuk memberikan layanan profesional dan terpercaya demi mendukung keselamatan dan keamanan berbagai bangunan.
            </p>
          </div>

          <div class="content col-xl-6 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <p>
                CV. Citra Perkasa juga menyediakan layanan pengisian ulang alat pemadam kebakaran, menggunakan
                bahan berkualitas tinggi dan prosedur pengisian terstandarisasi untuk
                memastikan alat selalu siap pakai dan berfungsi optimal.
            </p>
            <a href="#" class="about-btn align-self-center align-self-xl-start"><span>Pelajari lebih lanjut</span> <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
</div>
</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">
<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-center">

        <div class="col-lg-5">
            <video width="80%" height="240" controls class="w-full"
                poster="{{ asset('assets/vid/thumbnail.png') }}">
                <source src="{{ asset('assets/vid/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="col-lg-7">
            <div class="row gy-4">
                <div class="col-lg-6">
                  <div class="content col-xl-6 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <div>
                          <span class="fw-bold fs-3">Visi</span>
                            <p>1. Untuk menjadi sebuah industri manufaktur yang menjadi penyedia solusi pemadam api kebakaran terkemuka di dunia, melindungi nyawa dan aset dengan teknologi inovatif dan layanan yang unggul</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->
                <div class="col-lg-6">
                  <div class="content col-xl-6 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <span class="fw-bold fs-3">Misi</span>
                            <p>1. Memproduksi dan menyediakan produk pemadam api berkualitas tinggi yang memenuhi standar keamanan internasional.</p>
                            <p>2. Mendorong kesadaran masyarakat tentang bahaya kebakaran dan memberikan pelatihan pemadam kebakaran yang efektif.</p>
                            <p>3. Menjalin kemitraan strategi dengan organisasi keselamatan dan pemadam kebakaran untuk memperluas jangkauan produk.</p>
                              </p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->
            </div>
          </div>
       </div>
    </div>
</section><!-- /Stats Section -->

   <!-- Alt Services Section -->
   <section id="alt-services" class="alt-services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Cv. Citra Perkasa menawarkan berbagai layanan yang dapat membantu masyarakat umum dalam meningkatkan
            keselamatan dan keamanan,
            terutama dalam bidang proteksi kebakaran. Layanan kami meliputi pengisian alat pemadam kebakaran,
            pelatihan penggunaan alat pemadam kebakaran, dan pengadaan APAR.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="img">
                        <img src="assets/img/apar-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details">
                        <a href="service-details.html" class="stretched-link">
                            <h3>Pelatihan Alat Pemadam Kebakaran</h3>
                        </a>
                        <p>Pelatihan Alat Pemadam Kebakaran di Solo Technopark</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="img">
                        <img src="assets/img/apar-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details">
                        <a href="service-details.html" class="stretched-link">
                            <h3>Pengisian Ulang</h3>
                        </a>
                        <p>Melakukan pengisian ulang seluruh pasar di Surakarta, Jawa Tengah</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="img">
                        <img src="assets/img/apar-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details">
                        <a href="service-details.html" class="stretched-link">
                            <h3>Produk Alat Pemadam Kebakaran</h3>
                        </a>
                        <p>Beberapa produk alat pemadam kebakaran di CV. Citra Perkasa</p>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div>
            </div><!-- End Service Item -->

        </div>

 </div>
    </section><!-- /Alt Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Berisikan beberapa kegiatan di CV. Citra Perkasa</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Pelatihan</li>
            <li data-filter=".filter-product">Pengisian Ulang</li>
            <li data-filter=".filter-branding">Produk</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pelatihan1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>pelatihan 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pelatihan1.jpeg" title="pelatihan 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pengisian1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pengisian 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pengisian1.jpeg" title="Pengisian 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/apar-6.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product APAR</h4>
                  <p>Tabung </p>
                  <a href="assets/img/portfolio/apar-6.jpeg" title="apar 6" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pelatihan2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pelatihan2.jpeg" title="Pelatihan 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pengisian2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pengisian 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pengisian2.jpeg" title="Pengisian 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/apar-5.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product APAR</h4>
                  <p>Tabung Co2</p>
                  <a href="assets/img/portfolio/apar-5.jpeg" title="Apar 5" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pelatihan3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pelatihan 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pelatihan3.jpeg" title="Pelatihan 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/pengisian3.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Pengisian 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/pengisian3.jpeg" title="Pengisian 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/apar-5.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product APAR</h4>
                  <p>Tabung</p>
                  <a href="assets/img/portfolio/apar-5.jpeg" title="apar 5" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sekumpulan Pertanyaan</h2>
        <p>Kumpulan pertanyaan yang sering ditanyakan</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Berapa lama masa efektif alat pemadam kebakaran (APAR) dan kapan harus diganti?</h4>
          </div>
          <div class="col-lg-7">
            <p>
                Alat pemadam kebakaran memiliki masa efektif sekitar 5-15 tahun, tergantung pada jenis dan mereknya. Namun, Anda harus melakukan pemeriksaan rutin setiap bulan dan servis tahunan oleh teknisi bersertifikat.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Bagaimana cara menggunakan alat pemadam kebakaran yang benar?</h4>
          </div>
          <div class="col-lg-7">
            <p>
                Untuk menggunakan alat pemadam kebakaran dengan benar, ikuti metode PASS: Pull (tarik pin pengaman), Aim (arahkan nozzle ke dasar api), Squeeze (tekan tuas), dan Sweep (sapukan nozzle dari sisi ke sisi), sambil memastikan Anda berada pada jarak aman dan memiliki jalur keluar yang aman.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Apa yang harus dilakukan jika alat pemadam kebakaran tidak berfungsi saat digunakan?</h4>
          </div>
          <div class="col-lg-7">
            <p>
                Jika alat pemadam kebakaran tidak berfungsi saat digunakan, jangan membuang waktu untuk memperbaikinya; segera beritahu orang lain, aktifkan alarm kebakaran jika ada, evakuasi bangunan, dan hubungi pemadam kebakaran setelah berada di tempat aman, sambil memastikan untuk melakukan pemeriksaan rutin pada APAR untuk mencegah situasi ini.
          </div>
        </div><!-- End F.A.Q Item-->

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Ada yang ingin ditanyakan silahkan menghubungi kontak dibawah ini</p>
      </div><!-- End Section Title -->

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Taraman RT. 10/RW. 03 Kel. Taraman, Kec. Sidoharjo, Kab. Sragen.</p>
                <p>JL. garuda VI/18 B Gondang, Manahan, Surakarta.</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Nomor Perusahaan</h3>
                <p>+6281226875435</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Perusahaan</h3>
                <p>Citraperkasa77@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
@include('include.footer')
