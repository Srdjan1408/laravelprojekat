@extends('master')
@section('main-content')
<header class="intro-header" style="background-image: url({{ asset('img/post-bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ $post->naslov }}</h1>
                    <h2 class="subheading">{{ $post->podnaslov }}</h2>
                    <span class="meta">Autor teksta: <a href="#">{{ $post->autor }}</a>, tekst postavljen {{ $post->created_at }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{{ $post->tekst }}</p>
            </div>
        </div>
    </div>
</article>

<hr>
@endsection

@section('title')
    {{ $post->naslov }}
@endsection
@section('naslov')
    {{ $post->naslov }}
@endsection
@section('podnaslov')
    {{ $post->podnaslov }}
@endsection
