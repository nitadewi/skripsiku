@extends('depan.main')
@section('title','Dinas Pariwisata Kab Nabire')
@section('header')
    @include('depan.header')
@endsection

@section('content')
<div class="container">
	<div class="row tulisan center">
	<div class="card z-depth-0" style="margin-top: 80px;">
       <h3 class="center-align" id="nama">{{ $tampilkan->nama }}</h3>
	   <p class="grey-text center-align">{{ $tampilkan->updated_at }}</p>
	   <div class="card-content" style="font-size: 18px; color: #212121;">
	   <img src="{{ url('/images/'.$tampilkan->foto) }}" class="responsive-img center" style="height: 400px">
	   <p> {{ $tampilkan->keterangan }}</p>
	   </div>
</div>
@endsection