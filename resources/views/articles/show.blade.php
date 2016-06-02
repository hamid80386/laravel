@extends('page')
@section('content')
    <h1>{{ $articles->title }}</h1>
    <div class="body">{{ $articles->body }}</div>
@stop