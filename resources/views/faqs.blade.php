
@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)

@section('styles')
    <!-- Custom CSS for this view -->
    <link href="{{asset('css/faqs.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="header">Looking for help? Here are our most frequently asked questions.</div>

    <div class="search-container">
        <input type="text" placeholder="Search about what you are looking for…">
        <button>Search</button>
    </div>

    <div class="info-text">
        Can’t find the answer to a question you have? <a href="{{url('contact-us')}}">Contact us</a>
    </div>

    <div class="options-wrapper">
        <div class="options-container">
            <div class="option">All</div>
            <div class="option">Getting started</div>
            <div class="option">Technical issue</div>
            <div class="option">Payment</div>
        </div>
    </div>
     


  <!-- FAQs Page Start -->
<div class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 offset-md-0">
                @foreach($faqs->groupBy('category') as $category => $categoryFaqs)
                    <div class="accordion-title"><h3 class="accordion-MainTitle">{{ $category }}</h3></div>
                    <div class="faq-accordion" id="accordion{{ str_replace(' ', '', $category) }}">
                        @foreach($categoryFaqs as $faq)
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}"
                                    data-bs-parent="#accordion{{ str_replace(' ', '', $category) }}">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- FAQs Page End -->

 @endsection 