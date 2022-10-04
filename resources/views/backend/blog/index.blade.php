@extends('backend.layout.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Regions</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>All Blog Posts</h5>
                            </div>
                            {{-- <div>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="bi bi-plus-square-fill"></i>
                                    Add new
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Summary</th>
                                    <th>
                                        Published At
                                    </th>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <th scope="row"> {{ $post->id }} </th>
                                        <td>{{ $post->title }}</td>
                                        <td class="text-truncate" style="max-width: 700px;">{{ $post->summary }}</td>
                                        <td>{{ date('F, j Y', strtotime($post->created_at)) }}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <div class="p-2">
                                            <h4>No Data Availaible!</h4>
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
