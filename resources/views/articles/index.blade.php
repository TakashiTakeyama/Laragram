@extends('layouts.application')

@section('title', '記事一覧')

@section('content')
@foreach ($articles as $article)
<h4>{{$article->title}}</h4>
<p>{{$article->body}}</p>
<hr>
@endforeach
@endsection