
@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)

@section('styles')
    <!-- Custom CSS for this view -->
    <link href="{{asset('css/blog-details.css')}}" rel="stylesheet">
@endsection
      
@section('content')

<div class="container">
    <a href="{{ route('blogs.userIndex') }}"><img src="{{ asset('images/left-arrow.svg') }}" class="back-arrow" alt="Back"></a>
    <h1 class="title">{{ $blog->title }}</h1>
    <div class="rowElements">
        <button class="button-shopify">Shopify</button>
        <ul class="info-list">
            <li><span class="date">{{ $blog->publish_date }}</span></li>
            <li><span class="author">By: {{ $blog->author }}</span></li>
            <li><img src="{{ asset('images/heart.svg') }}" alt="Likes"><span class="number">{{ $blog->likes }}</span></li>
        </ul>
    </div>

             @if ($blog->video_url)
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ \Str::after($blog->video_url, 'v=') }}" frameborder="0" allowfullscreen></iframe>
            @else
                <a href="{{ route('blogs.show', $blog->slug) }}">
                    <img src="{{ asset('storage/' .$blog->image) }}" alt="{{ $blog->title }}">
                </a>
            @endif
         

    <div class="content-container">
        <div class="content">
            {!! $blog->content !!}
        </div>
        <div class="sidebar">
            <div class="social">
                <ul>
                    <li><a href="#"><img src="{{ asset('images/Tiktok.svg') }}" alt="Tiktok"></a></li>
                    <li><a href="#"><img src="{{ asset('images/Whatsapp.svg') }}" alt="Whatsapp"></a></li>
                    <li><a href="#"><img src="{{ asset('images/Linkedin.svg') }}" alt="Linkedin"></a></li>
                    <li><a href="#"><img src="{{ asset('images/Instagram.svg') }}" alt="Instagram"></a></li>
                    <li><a href="#"><img src="{{ asset('images/YouTube.svg') }}" alt="YouTube"></a></li>
                    <li><a href="#"><img src="{{ asset('images/X.svg') }}" alt="Twitter"></a></li>
                    <li><a href="#"><img src="{{ asset('images/facebook.svg') }}" alt="Facebook"></a></li>
                </ul>
            </div>

            <h3 style="color: #3545D6;padding-bottom: 0px;padding-top: 15px;font-weight:700" class="table-content">Table of Contents</h3>
            <ul>
                @foreach($headings as $heading)
                    <li class="table-content" style="white-space: nowrap;">
                        <a href="#{{ $heading['id'] }}" style="padding: 0; margin: 0; display: inline;">
                            {{ $heading['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            
            
        </div>
    </div>
</div>               
</div>

@endsection
