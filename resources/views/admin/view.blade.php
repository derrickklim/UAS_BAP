@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tampilan View Alamat Pengguna</div>
                    <div class="card-body">

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                
                                <thead>
                                    <br>
                                    <tr>
                                        <th>#</th><th>ID Pengguna</th><th>Username</th><th>Nama</th><th>Provinsi</th><th>Kota</th><th>Kecamatan</th><th>Alamat</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <a href="{{'/print_view'}}" title="Print"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
                                @foreach($data_alamat as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id_pengguna }}</td><td>{{ $item->username }}</td><td>{{ $item->nama }}</td><td>{{ $item->provinsi }}</td><td>{{ $item->kota }}</td><td>{{ $item->kecamatan }}</td><td>{{ $item->alamat }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
