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
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Blog Image 1">
                            <div class="card-body">
                                <h5 class="card-title"><a
                                        href="{{ route('blogDetail', $post->slug) }}">{{ $post->title }}</a></h5>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}<a
                                        href="{{ route('blogDetail', $post->slug) }}"> Baca Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section><!-- /Starter Section Section -->

</main>
@include('include.footer')
