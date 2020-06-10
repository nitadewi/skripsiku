@extends('layouts.main')

@section('content')
<div class="col-lg-12">
        <div class="panel panel-primary">
                <div class="panel-heading">
                    Data Tempat Wisata
                </div>
                <div class="panel-body">
                    <a href="{{ url('/admin/wisatas/create') }} "class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> input data</a>
                    <div>
                    <br>
                    </div>

                    <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead class="sorting_asc">
                            <tr>
                            <th>No</th>
                            <th>Nama Tempat Wisata</th>
                            <th>Alamat</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($wisatas as $item)
                                         
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ url('/admin/wisatas/' . $item->id_wisatas . '/edit') }}"class="btn btn-success btn-sm ">Edit</a>
                                    <form method="POST" action="{{ url('/admin/wisatas' . '/' . $item->id_wisatas) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete wisata" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                     </table>
                     {!! $wisatas->render() !!}
                     </div>
                </div>
        </div>
</div>                        
@endsection
