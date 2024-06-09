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
                            <form>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- Quill Editor Default -->
                                    <div class="quill-editor-default">
                                        <p>Hello World!</p>
                                        <p>This is Quill <strong>default</strong> editor</p>
                                    </div>
                                    <!-- End Quill Editor Default -->
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                                    <div class="col-sm-10">
                                        <input type="color" class="form-control form-control-color"
                                            id="exampleColorInput" value="#4154f1" title="Choose your color">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                First radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Second radio
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios" value="option" disabled>
                                            <label class="form-check-label" for="gridRadios3">
                                                Third disabled radio
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                                    <div class="col-sm-10">

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                                            <label class="form-check-label" for="gridCheck2">
                                                Example checkbox 2
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Disabled</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Read only / Disabled"
                                            disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Multi Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" multiple aria-label="multiple select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
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
