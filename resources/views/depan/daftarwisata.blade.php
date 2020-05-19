@extends('depan.main')
@section('content')
	<div class="row">
	<div class="col s12">
  @foreach($datas as $data)
  <div class="card-panel">
			<h5>{{ $data->nama }}</h5>

            <div class="divider"></div>
            <p>{!!substr($data->keterangan,0,200)!!}...</p>
                
            <a href="{{ url('read', $data->id_wisatas) }}" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
</div>
		</div>
	</div>
	@endforeach

    </div>
        
</div>
@endsection