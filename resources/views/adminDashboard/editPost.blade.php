@include('adminDashboard.include.head')

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
                        <h5 class="card-title">Edit Postingan Blog</h5>
                        <!-- General Form Elements -->
                        <form method="POST" action="{{ route('dashboard.update', $post->slug) }}"
                            enctype="multipart/form-data" onsubmit="submitForm(event)">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-10">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                            width="200"><br>
                                        <p class="my-2"><em>Jika ingin mengubah thumbnail blog, Klik 👇</em></p>
                                        <input class="form-control" type="file" id="formFile" name="image">
                                        <!-- Hidden input to store the current image path -->
                                        <input type="hidden" name="current_image" value="{{ $post->image }}">
                                    @else
                                        <input class="form-control" type="file" id="formFile" name="image">
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputContent" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <!-- Quill Editor Default -->
                                    <div id="quillEditorDefault" style="height: 50vh;">
                                        {!! $post->content !!}
                                    </div>
                                    <!-- Hidden input to store the content -->
                                    <input type="hidden" name="content" id="content">
                                    <!-- End Quill Editor Default -->
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10 text-center"> <!-- Add text-center class here -->
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->
@include('adminDashboard.include.footer')

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
    var quill = new Quill('#quillEditorDefault', {
        theme: 'snow'
    });

    function submitForm(event) {
        event.preventDefault();
        document.getElementById('content').value = quill.root.innerHTML;
        event.target.submit();
    }
</script>
</body>
