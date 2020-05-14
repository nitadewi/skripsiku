@extends('depan.main')
@section('menu')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="wrapper">
          <div class="search_box">
            <input type="text" placeholder="what are you looking for?">
            <i id= "style" class="material-icons">search</i>
          </div>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax">
      <img src="{{asset('foto/background1.jpg')}}"/>
    </div>
  </div>
@endsection
  @section('content')
<div class="section">
	@foreach($datas as $data)

	<div class="row">
		<div class="col s12">
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



@endsection