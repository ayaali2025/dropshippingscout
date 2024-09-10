@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)

@section('styles')
    <!-- Custom CSS for this view -->
    <link href="{{asset('css/index.css')}}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="con-left">
            <div class="left-column">
                <h2 style="font-size: 4rem;">
                    Start your <span style="color: #CBF36D;">journey</span> <span class="underline">With Us</span>
                </h2>
                <br>
                <p style="color: #1E3F5B;">We are excited to announce an exclusive offer that allows you to <br>
                    earn a whopping 20% for every new subscription sale you bring in.
                </p>
                <br>
               
                <div class="email-container">
                    <input type="email" class="email-input" placeholder="Enter your Email" />
                    <button class="trial-button">
                      Start for $1 Trial
                      <span class="arrow">➔</span>
                    </button>
                  </div>
                  


            </div>
            <div class="right-column">
                <div class="gradient-circle"></div>
                <img src="{{asset('images/Banner1-Final0.png')}}" alt="Example Image" >
            </div>
            
        </div>
        
            <!-- Exclusive Partners Section Start -->
    <div class="exclusive-partners">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                      <!--  <h3 class="wow fadeInUp">executive partners</h3> -->
                        <h2 class="text-anime-style-3">Integrated With</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
 
            <div class="row">

                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s">
                            <img src="{{asset('images/Registration/ebay.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{asset('images/Registration/walMart.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp tiktook-logo" data-wow-delay="0.6s">
                            <img src="{{asset('images/tiktok_shop.png')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.6s">
                            <img src="{{asset('images/Registration/amazon.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="0.8s">
                            <img src="{{asset('images/Registration/shopify.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                
                    <div class="col-lg-2 col-md-3 col-4">
                        <!-- Partners Logo Start -->
                        <div class="partners-logo wow fadeInUp" data-wow-delay="1s">
                            <img src="{{asset('images/Registration/aliExpress.svg')}}" alt="">
                        </div>
                        <!-- Partners Logo End -->
                    </div>
                </div>
                
        </div>
    </div>
    <!-- Exclusive Partners Section End -->
</div>


 
    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title d-flex justify-content-center">
                        <h2 class="text-anime-style-3" style="font-size: 30px;">Why Dropshipping Scout?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime reveal">
                                <img src="{{asset('images/whyScout.jpeg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-content">
                        <h4 class="wow fadeInUp" data-wow-delay="0.25s" style="padding-bottom: 20px;line-height: inherit;" >Dropshipping Scout is your all-in-one solution for effortless dropshipping</h4>

                        <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li>Track and analyze multiple stores and suppliers in one place.</li>
                            <li>Gain valuable insights into your dropshipping operations.</li>
                            <li>Make data-driven decisions to optimize your business.</li>
                            <li>Stay ahead of the competition with real-time analytics.</li>
                          </ul>

                     </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
<div class="latest-news ourFeatures">
    <div class="container homeBlogContainer">
        <div class="row section-row align-items-center">
            <div class="col-lg-6 col-md-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h1 style="font-family: 'Montserrat-Arabic';font-size: 52px; font-weight:600" class="wow fadeInUp">Explore Our <span style="color: #3545D6">Powerful</span> Features</h1>
                 </div>
                <!-- Section Title End -->
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
<div class="col-lg-4 col-md-6 d-flex">
    <div class="blog-item w-100" >
        <div class="post-featured-image">
            <figure class="image-anime">
                <a href="#">
                    <img src="{{asset('images/feature2.jpeg')}}" alt="">
                </a>
            </figure>
        </div>
        <div class="post-item-body">
             <h3><a href="#">Product Scouting</a></h3>
            <p>Take your business to the next level by fine-tuning your product
                offerings and marketing strategies</p>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 d-flex">
    <div class="blog-item w-100" >
        <div class="post-featured-image">
            <figure class="image-anime">
                <a href="#">
                    <img src="{{asset('images/feature1.jpeg')}}" alt="">
                </a>
            </figure>
        </div>
        <div class="post-item-body">
             <h3><a href="#">Competitor monitoring</a></h3>

            <p>By analyzing search volume, sales data, and social media
                mentions, these tools can pinpoint products that are
                gaining traction in the market</p>
               
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 d-flex">
    <div class="blog-item w-100" >
        <div class="post-featured-image">
            <figure class="image-anime">
                <a href="#">
                    <img src="{{asset('images/feature3.jpeg')}}" alt="">
                </a>
            </figure>
        </div>
        <div class="post-item-body">
             <h3><a href="#"> Supplier Scouting</a></h3>

             <p>involves conducting thorough research, analyzing consumer behavior, and staying informed about industry developments</p>
                  
         </div>
    </div>
</div>
</div>
  
         <!-- Page Header Start -->
         <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Page Header Box Start -->
                        <div class="page-header-box">
                            <h1 class="text-anime-style-3" style="font-family: 'Montserrat-Arabic';font-size: 52px; font-weight:600;margin-top: 60px;">Take a deep dive into our most <br>powerful <span style="color: #3545D6">Store</span>  Tools</h1>
                            <p style="font-family: 'Montserrat-Arabic'; font-size:20px; font-weight: 400;">in virtual space through communication platforms.</p>
                             
                        </div>
                        <!-- Page Header Box End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
    
        
<!-- Options Start -->
<div class="options-wrapper">
    <div class="options-container">
        <div class="option selected active" data-option="product-scouting">Product Scouting</div>
        <div class="option" data-option="competitor-monitoring">Competitor Monitoring</div>
        <div class="option" data-option="supplier-scouting">Supplier Scouting</div>
    </div>
</div>
<!-- Options End -->
 
<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row">
            <!-- Product Scouting Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Product Research (eBay)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/ProductScouting-eBay.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Product Research (Shopify)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/ProductScouting-Shopify.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>eBay Best Items</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/ProductScouting-eBay.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Category Research (eBay)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/ProductScouting-eBay.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Search By Image (eBay)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/ProductScouting-eBay.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="product-scouting">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Title Builder</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/title-builder.jpg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Competitor Monitoring Services (Initially Hidden) -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s" data-category="competitor-monitoring" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Competitors Research (eBay)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/bestComp-eBay.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s" data-category="competitor-monitoring" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Competitors Research (Shopify)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/bestComp-Shopify.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="competitor-monitoring" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Best Competitors (Shopify)</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/Best Competitor-shopify2.png')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Supplier Scouting Services (Initially Hidden) -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s" data-category="supplier-scouting" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>TikTok Scanner</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>Compare different suppliers to find the best deals and quality.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/Tiktook-Scanner.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s" data-category="supplier-scouting" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Amazon Scanner</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>Monitor supplier activities to ensure timely delivery and quality products.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/Amazon-Scanner.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="supplier-scouting" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Walmart Scanner</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>In-depth research on potential suppliers for Shopify stores.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/Walmart-Scanner.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="supplier-scouting" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Express Scanner</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>In-depth research on potential suppliers for Shopify stores.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="{{asset('images/AliExpress-Scanner.jpeg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s" data-category="supplier-scouting" style="display:none;">
                    <div class="service-content">
                        <div class="service-content-title">
                            <h2>Supplier Research</h2>
                            <a href="#"><img src="images/arrow.svg" alt=""></a>
                        </div>
                        <p>In-depth research on potential suppliers for Shopify stores.</p>
                    </div>
                    <div class="service-image">
                        <figure class="image-anime">
                            <img src="images/service-img-3.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->



<!-- Latest News Section Start -->
<div class="latest-news our-blog" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                
                <!-- Blog Item Start for Product Research -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="display: block;">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{asset('./images/P S.jpg')}}" alt="Product Research"></a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <h2><a href="#">Unlock the Secrets of Product Research</a></h2>
                        <p>Discover how to find products that resonate with your target market. Learn the techniques to identify potential best-sellers before your competitors do.</p>
                        <p>With our comprehensive product research tools, you can analyze market trends, consumer behavior, and sales data to make informed decisions that drive success.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Start for $1</a>
                    </div>
                </div>
                <!-- Blog Item End for Product Research -->
                
                <!-- Blog Item Start for Competitor Research -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="display: none;">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{asset('./images/P S.jpg')}}" alt="Competitor Research"></a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <h2><a href="#">Outperform Your Competitors with Smart Research</a></h2>
                        <p>Gain a competitive edge by understanding your rivals. Our tools allow you to track their strategies, identify their strengths and weaknesses, and adapt your approach to stay ahead.</p>
                        <p>Monitor their pricing, promotions, and product launches in real-time to ensure you're always one step ahead.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Start for $1</a>
                    </div>
                </div>
                <!-- Blog Item End for Competitor Research -->

                <!-- Blog Item Start for Category Research -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="display: none;">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{asset('./images/P S.jpg')}}" alt="Category Research"></a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <h2><a href="#">Master Category Research for Better Product Placement</a></h2>
                        <p>Identify the most profitable categories for your products. Our tools help you uncover hidden gems within various categories, ensuring your products are placed where they'll perform best.</p>
                        <p>Analyze category trends and discover niches with high demand and low competition to maximize your sales.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Start for $1</a>
                    </div>
                </div>
                <!-- Blog Item End for Category Research -->

                <!-- Blog Item Start for Title Builder -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="display: none;">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{asset('./images/P S.jpg')}}" alt="Title Builder"></a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <h2><a href="#">Create Powerful Titles with Our Title Builder</a></h2>
                        <p>Increase your product's visibility with optimized titles. Our Title Builder tool helps you create compelling titles that attract clicks and boost sales.</p>
                        <p>Learn the best practices for title optimization, including the use of keywords, formatting, and length to maximize your listing's performance.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Start for $1</a>
                    </div>
                </div>
                <!-- Blog Item End for Title Builder -->

                <!-- Blog Item Start for Best Items -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="display: none;">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{asset('./images/P S.jpg')}}" alt="Best Items"></a>
                        </figure>
                    </div>
                    <div class="post-item-body">
                        <h2><a href="#">Top 500 Best Items You Should Be Selling</a></h2>
                        <p>Stay ahead of the competition by selling the hottest products. Our list of the top 500 best-selling items helps you identify what's trending and what buyers are looking for.</p>
                        <p>Use this information to stock your inventory with items that are in high demand, ensuring quick sales and happy customers.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Start for $1</a>
                    </div>
                </div>
                <!-- Blog Item End for Best Items -->

            </div>
        </div>
    </div>
</div>
<!-- Latest News Section End -->

   <!-- Latest News Section Start -->
   <div class="latest-news">
    <div class="container homeBlogContainer">
        <div class="row section-row align-items-center">
            <div class="col-lg-6 col-md-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Latest Blog & Articles</h3>
                    <h2 class="text-anime-style-3">The latest insights you need to know</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
    </div>
</div>

        <div class="row" style="padding-bottom: 50px;">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Blog Image Start -->
                    <div class="post-featured-image">
                        <a href="{{ route('blogs.show', $blog->slug) }}">
                        <figure class="image-anime">
                                <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </figure>
                    </a>

                    </div>
                    <!-- Blog Image End -->

                    <!-- Blog Content Start -->
                    <div class="post-item-body">
                                                
                          <a href="{{ route('blogs.show', $blog->slug) }}" style="color: #1E3F5B">
                            {{ $blog->created_at }}</a>
                   
                            <a href="{{ route('blogs.show', $blog->slug) }}"> <h2 class="homeBlogParagraph">{{ $blog->title }}</h2>    </a>                        
                    </div>
                    <!-- Category Label -->
                    <div class="category-label">
                        {{ $blog->category }}
                    </div>
                    <!-- Blog Content End -->
                </div>
                <!-- Blog Item End -->
            </div>
        @endforeach
        </div>

<!-- Latest News Section End -->
<div class="unique-outer-container">
    <div class="unique-inner-container">
        <div class="unique-content">
            <img src="{{asset('images/boost-sales.png')}}" alt="Koala" class="unique-image">
            <div class="unique-text">
                <h2 class="boostSalesHead">Want to boost sales?</h2>
                <p>Start Your Dropshipping Journey Today</p>
                <a href="#" class="unique-button">Start 1$</a>
            </div>
        </div>
    </div>
</div>

<script>
 document.addEventListener("DOMContentLoaded", function() {
    const options = document.querySelectorAll(".options-container .option");
    const serviceItems = document.querySelectorAll(".service-item");

    options.forEach(option => {
        option.addEventListener("click", function() {
            // Remove active class from all options
            options.forEach(opt => opt.classList.remove("selected", "active"));

            // Add active class to the clicked option
            this.classList.add("selected", "active");

            // Get the selected category
            const selectedCategory = this.getAttribute("data-option");

            // Show/Hide service items based on the selected category
            serviceItems.forEach(item => {
                if (item.getAttribute("data-category") === selectedCategory) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });
});


</script>

@endsection
