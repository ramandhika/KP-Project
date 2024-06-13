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
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">Data Posting Blog</h5>
                                <span><small>Berikut adalah beberapa data yang ada di dalam table
                                        Blog</small></span>
                            </div>
                            <div>
                                <a href="{{ route('dashboard.create') }}" class="btn btn-primary mt-3"><i
                                        class="ri-file-add-line"></i>
                                    Add Post</a>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created Post</th>
                                    <th>Updated Post</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                                style="width: 100px; padding: 0%"></td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ Str::limit(strip_tags($post->content), 50) }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('dashboard.edit', $post->slug) }}"
                                                class="btn btn-primary"><i class="ri-file-edit-line"></i> Edit</a>
                                            <form action="{{ route('dashboard.destroy', $post->slug) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="ri-delete-bin-5-line"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@include('adminDashboard.include.footer')
