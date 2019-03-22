@extends('layouts.app')

@section('content')
 @if(count($albums)>0)

  <div id="albums">

      @foreach($albums->chunk(3) as $albumChunk)
      <div class="row text-center">
        @foreach($albumChunk as $album)
        <div class="col-sm-7 col-md-3 float-left" >
  	   <div class="card" style="width:23rem; padding:10px;">
         <a href="/albums/{{$album->id}}">
        <img class="card-img-top"><img src="storage/album_covers/{{$album->cover_image}}"
        alt="{{$album->name}}"style="width:450px;height:190px;">
        <div class="card-body">
        <h3 class="card-title">{{$album->name}}</h3>
      </div>
      </div></div>
        @endforeach
      </div>
        @endforeach
      </div>
@else
 <p>No Albums To Display</p>
 @endif
@endsection
