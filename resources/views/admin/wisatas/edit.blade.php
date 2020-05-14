@extends('layouts.main')

@section('content')
<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
        Edit wisata #{{ $wisata->nama }}
        </div>
        <div class="panel-body">
        <div id="mapL" style="height: 500px"> </div>
       
        </div>
        </div>
</div>

<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Data Tempat Wisata
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

                        <form method="POST" action="{{ route('wisatas.update', $wisata->id_wisatas)}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}

                            @include ('admin.wisatas.form', ['formMode' => 'edit'])

                        </form>

            <!-- form input data--->
        </div>
    </div>
</div>
 

@endsection
