<?php
@extends('layouts.app')

@section('content')
    <h1>Gym Supplements</h1>
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <ul class="list-group">
                <li class="list-group-item">Name: {{$articles->name}}</li>
                <li class="list-group-item">Description: {{$articles->description}}</li>
            </ul>

        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent

@endsection
