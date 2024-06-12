@include('adminDashboard.include.head')

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block" style="font-size: 1.5vw;">CV. CITRA PERKASA</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3 btn btn-danger me-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </form>
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    @include('adminDashboard.include.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Postingan Blog</h5>
                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('dashboard.store') }}" enctype="multipart/form-data"
                                onsubmit="submitForm()">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputContent" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                        <!-- Quill Editor Default -->
                                        <div id="quillEditorDefault" class="quill-editor-default" style="height: 50vh;">
                                        </div>
                                        <!-- Hidden input to store the content -->
                                        <input type="hidden" name="content" id="content">
                                        <!-- End Quill Editor Default -->
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3 d-flex justify-content-center">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
    @include('adminDashboard.include.footer')
