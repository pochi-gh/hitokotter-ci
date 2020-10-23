@extends('app')

@section('title','詳細記事')

@section('content')
  @include('nav')
  <div class="container">
    @include('articles.card')
  </div>
@endsection

