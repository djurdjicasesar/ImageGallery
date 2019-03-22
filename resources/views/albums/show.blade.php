@extends('layouts.app')

@section('content')
 <h1>{{$album->name}}</h1>
 <a class="button secondary" href="/">Back</a>
 <a class="button" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
 <hr>
 @if(count($album->photos)>0)

  <div id="photos">

      @foreach($album->photos->chunk(3) as $photoChunk)
      <div class="row text-center">
        @foreach($photoChunk as $photo)
        <div class="col-sm-7 col-md-3 float-left" >
      <div class="card" style="width:23rem; padding:10px;">
         <a href="/photos/{{$photo->id}}">
        <img class="card-img-top"><img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
        alt="{{$photo->title}}" style="width:460px;height:200px;">
           <div class="card-body">
        <h3 class="card-title">{{$photo->title}}</h3>
      </div>
      </div></div>
        @endforeach
      </div>
        @endforeach
      </div>
@else
 <p>No Photos To Display</p>
 @endif
@endsection
