@extends('layouts.app')

@section('showcase')

@endsection

@section('content')
<h1>More info</h1>
@foreach($articles as $article)
<ul class="list-group">
  <li class="list-group-item">Name: {{$article->name}}</li>
  <li class="list-group-item">Description:{{$article->description}} </li>
  <li class="list-group-item">Provider: {{$article->provider}}</li>
  <li class="list-group-item">Rating: {{$article->rating}}</li>
</ul>
@endforeach
@endsection
@section('sidebar')

@endsection
