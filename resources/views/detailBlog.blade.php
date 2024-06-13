@include('include.header')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('blog') }}">Home</a></li>
                    <li>Blog</li>
                    <li class="current"><a href="">{{ $post->title }}</a></li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $post->title }}</h2>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card px-1 px-md-5">
                        <div class="text-center mt-3">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Blog Image"
                                style="max-width: 50%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{!! $post->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section><!-- /Starter Section Section -->

</main>
@include('include.footer')
