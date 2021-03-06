{{-- Memanggil sebuah file template --}}
@extends('layouts.main')

@section('title', 'Article')

@section('container')
    {{-- Css --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font Poppins --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <div class="header">
        <h1 style="padding-top: 5%; font-family: Poppins;">Halaman Artikel Berita</h1>
        <h3 class="mb-5">Article Category : {{ $category }}</h5>
        <hr>
        @foreach($article as $article)
           <article>
               <h3><a href="/article">{{ $article->title }}</a></h3>
               <p style="font-size: 20px">{{ $article->excerpt }}</p>
            </article> 
        @endforeach
@endsection