@include('include.header')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Blog</h2>
          <p>Tulisan dari Blog Cv. Citra Perkasa </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="{{ asset('assets/img/portfolio/app-1.jpg') }}" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                  <h5 class="card-title">Blog Post 1</h5>
                  <p class="card-text">Deskripsi singkat tentang blog post 1.</p>
                </div>
              </div>
            </div><!-- End Card 1 -->

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="{{ asset('assets/img/portfolio/app-2.jpg') }}" class="card-img-top" alt="Blog Image 2">
                <div class="card-body">
                  <h5 class="card-title">Blog Post 2</h5>
                  <p class="card-text">Deskripsi singkat tentang blog post 2.</p>
                </div>
              </div>
            </div><!-- End Card 2 -->

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <img src="{{ asset('assets/img/portfolio/app-3.jpg') }}" class="card-img-top" alt="Blog Image 3">
                <div class="card-body">
                  <h5 class="card-title">Blog Post 3</h5>
                  <p class="card-text">Deskripsi singkat tentang blog post 3.</p>
                </div>
              </div>
            </div><!-- End Card 3 -->
          </div>
        </div>

      </section><!-- /Starter Section Section -->

  </main>
@include('include.footer')
