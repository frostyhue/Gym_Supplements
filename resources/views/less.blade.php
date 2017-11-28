@extends('layouts.app')

@section('showcase')

@endsection

@section('content')
<h1>Less info</h1>
@foreach($articles as $article)
<ul class="list-group">
  <li class="list-group-item">Name: {{$article->name}}</li>
  <li class="list-group-item">Description:{{$article->description}} </li>
</ul>
@endforeach
@endsection
@section('sidebar')

@endsection
