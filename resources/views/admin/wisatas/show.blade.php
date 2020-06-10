@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">wisata {{ $wisata->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/wisatas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/wisatas/' . $wisata->id_wisatas . '/edit') }}" title="Edit wisata"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/wisatas' . '/' . $wisata->id_wisatas) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete wisata" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $wisata->id_wisatas }}</td>
                                    </tr>
                                    <tr>
                                    <th> Nama </th><td> {{ $wisata->nama }} </td>
                                    </tr>
                                    <tr><th> Foto </th><td>  <img src="{{ url('/images/'.$wisata->foto) }}" class="img-thumbnail" /> </td>
                                    </tr>
                                    <tr><th> Alamat </th><td> {{ $wisata->alamat }} </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                    <th> Keterangan </th>
                                    <td> {{ $wisata->keterangan }} </td>
                                    </tr>
                                    <tr><th> latitude </th><td> {{ $wisata->ltd }} </td>
                                    </tr>
                                    <tr>
                                    <th> longtitude </th><td> {{ $wisata->lngtd }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            {!! $wisata->render() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
