@extends('depan.main')

@section('header')
    @include('depan.header')
@endsection


@section('content')
<div class="section">
<div class="row">
   
</div>

<div class="section">
<div class="row">
    @foreach($datas as $data)
	<div class="col s12 m4">
    <div class="card" >
          <div class="card-image">
            <img src="{{url('/images/'.$data->foto) }}" style="height:200px; object-fit: cover">
            
          </div>
          <div class="card-content">
            <span class="card-title">{{ $data->nama }}</span>
            <p>{!!substr($data->keterangan,0,200)!!}...</p>
          </div>
          <div class="card-action">
              <a href="{{ url('read', $data->id_wisatas) }}">readmore</a>
            <!-- <a href="{{ url('read', $data->id_wisatas) }}" class="btn btn-flat blue lighten-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a> -->
          </div>
        </div>
    </div>
    @endforeach
</div>
{{ $data->links() }}
</div> 
@endsection