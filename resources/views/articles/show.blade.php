@extends('layouts.application')

@section('title', '記事詳細')

@section('content')
<h1>{{$article->title}}</h1>
<p>{{$article->body}}</p>
<br><br>
<a href="/articles/{{$article->id}}/edit">編集する</a>
<a href="/articles">一覧戻る</a>
@endsection