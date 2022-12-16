@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">alamat {{ $alamat->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/alamat') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/alamat/' . $alamat->id . '/edit') }}" title="Edit alamat"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/alamat' . '/' . $alamat->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete alamat" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $alamat->id }}</td>
                                    </tr>
                                    <tr><th> Username </th><td> {{ $alamat->username }} </td></tr><tr><th> Alamat </th><td> {{ $alamat->alamat }} </td></tr><tr><th> Provinsi </th><td> {{ $alamat->provinsi }} </td></tr><tr><th> Kota </th><td> {{ $alamat->kota }} </td></tr><tr><th> Kecamatan </th><td> {{ $alamat->kecamatan }} </td></tr><tr><th> Kode Pos </th><td> {{ $alamat->kode_pos }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
