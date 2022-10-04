@extends('backend.layout.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Clients</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Clients </li>
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
                                <h5>All Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Client Contact</th>
                                    <th scope="col">Client Email</th>
                                    <th scope="col">Client Region</th>
                                    <th scope="col">Client Profession</th>
                                    <th scope="col">Client Message</th>
                                    <th scope="col">Date</th>
                                    <th></th>
                            </thead>
                            <tbody>
                                @forelse ($clients as $client)
                                    <tr>
                                        <th scope="row"> {{ $client->id }} </th>
                                        <td>{{ $client->name }}</td>
                                        <td>{{ $client->contact }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->country->name }}</td>
                                        <td>{{ $client->profession }}</td>
                                        <td>{{ $client->message }}</td>
                                        <td>{{ date('F, j Y', strtotime($client->created_at)) }}</td>
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
                <div class="my-4 p-2">
                    {{-- {{ $clients->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
