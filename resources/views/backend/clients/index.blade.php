@extends('backend.layout.main')

@section('content')
    <div class="main_content_iner default_main_contaner_iner">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_color_6">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam default_bradcam mb-0">
                                <li class="breadcrumb-item "><a href="javascript:void(0);">{{ config('app.name') }}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Clients</a></li>
                            </ol>
                        </div>
                        {{-- <a href="#" class="btn_1 ">Add New Region</a> --}}
                    </div>
                </div>
            </div>

            <div class="container bg-light rounded-2 p-4">
                <h2>All Clients</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Cotact#</th>
                            <th>Region</th>
                            <th>Message</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <th class="fs-6">{{ $client->id }}</th>
                                <td class="fs-6">{{ $client->name }}</td>
                                <td class="fs-6">{{ $client->email }}</td>
                                <td class="fs-6">{{ $client->contact }}</td>
                                <td class="fs-6">{{ $client->country->name }}</td>
                                <td class="fs-6">{{ $client->message }}</td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <a href="#" class="btn btn-sm btn-success" style="margin-right: 20px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-sm btn-danger mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    @include('backend.partials.footer')
@endsection
