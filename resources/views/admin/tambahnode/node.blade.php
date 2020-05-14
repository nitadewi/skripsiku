@extends('layouts.main')
@section('content')

<div class="col-lg-7">
<div class="panel panel-primary">
        <div class="panel-heading">
          Peta
        </div>
        <div class="panel-body" style="padding: 20px;">
            <!-- form input data--->
            @if ($errors->any())
            <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

                        <form method="POST" action="{{ url('/admin/tambahnode') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            @include ('admin.tambahnode.form', ['formMode' => 'create'])
                        </form>

            <!-- form input data--->
        </div>

        

</div>
</div>

<div class="col-lg-5">
<div class="panel panel-primary">
        <div class="panel-heading">
        Daftar Node
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="sorting_asc">
                            <tr>
                            <th width="10px">No</th>
                            <th>Node</th>
                            <th>Action</th>
                            </tr>
            </thead>
            <tbody>
                        @foreach($node as $item)
                                         
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_node }}</td>
                                <td>
                                    <a href="{{ url('/admin/tambahnode/' . $item->id_node . '/edit') }}"class="btn btn-success btn-sm ">Edit</a>
                                    <form method="POST" action="{{ url('/admin/tambahnode' . '/' . $item->id_node) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete node" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
            </table>
        </div>
</div>
</div>
@endsection