@php
    use App\Models\Post;
@endphp
@extends('master')

@section('main-content') 
        <header class="intro-header" style="background-image: url({{ asset('img/home-bg.jpg') }})">   
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <img src="{{ asset('img/photo.jpg') }}" alt="">
                            <h1>Srđan Marković</h1>
                            <hr class="small">
                            <span class="subheading">Elektronsko poslovanje iz mog ugla...</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post.single', ["post" => $post]) }}">
                            <h2 class="post-title">{{ $post->naslov }}</h2>
                            <h3 class="post-subtitle">{{ $post->podnaslov }}</h3>
                        </a>
                        <p class="post-meta">Autor teksta: <a href="#">{{ $post->autor }}</a>, tekst postavljen {{ $post->created_at }}</p>
                    </div>
                    <hr>
                    @endforeach
                    <!-- Paginacija -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Stariji Tekstovi &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <hr>
@endsection

@section('title', "Srđan Marković Blog")




