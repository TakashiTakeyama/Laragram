@extends('layouts.application')

@section('title', '記事一覧')

@section('content')
<div>
  <a href="/articles/create">新規作成</a>
</div>
@foreach ($articles as $article)
<h4>{{$article->title}}</h4>
<p>{{$article->body}}</p>
<a href="/articles/{{$article->id}}">詳細を表示</a>
<a href="/articles/{{$article->id}}/edit">編集する</a>
<hr>
@endforeach
@endsection