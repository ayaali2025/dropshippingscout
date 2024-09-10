<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Mega Footer Start -->
                <div class="mega-footer">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <!-- Footer About Start -->
                            <div class="footer-about">
                                <figure>
                                    <img src="{{ asset('images/footer-logo.svg') }}" alt="">
                                </figure>
                                <p></p>
                            </div>
                            <div class="social">
                                <ul>
                                    <li><a href="https://www.tiktok.com/@dropshipping.scout"><img src="{{ asset('images/Tiktok.svg') }}" alt=""></a></li> 
                                    {{-- <li><a href="#"><img src="{{ asset('images/Whatsapp.svg') }}" alt=""></a></li> --}}
                                    <li><a href="https://www.linkedin.com/company/dropshipping-scout"><img src="{{ asset('images/Linkedin.svg') }}" alt=""></a></li>
                                    <li><a href="https://www.instagram.com/dropshipping.scout?igsh=bWQ0cWgwOW4zYzl5"><img src="{{ asset('images/Instagram.svg') }}" alt=""></a></li>
                                    <li><a href="https://youtube.com/@dropshipping.scout.?feature=shared"><img src="{{ asset('images/YouTube.svg') }}" alt=""></a></li>
                                    {{-- <li><a href="#"><img src="{{ asset('images/X.svg') }}" alt=""></a></li> --}}
                                    <li><a href="https://www.facebook.com/dropshipping.scout?mibextid=ZbWKwL"><img src="{{ asset('images/facebook.svg') }}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Company</h2>
                                <ul>
                                    <li><a href="{{ route('pages.show', ['slug' => 'about']) }}">About Us</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'pricing']) }}">Pricing</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'affiliate']) }}">Affiliate</a></li>
                                    <li><a href="{{ route('faqs') }}">Help Center</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'contact-us']) }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Tools</h2>
                                <ul>
                                    <li><a href="{{ route('pages.show', ['slug' => 'product-scouting']) }}">Product Research</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'competitor-monitoring']) }}">Competitors Research</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'category-research']) }}">Category Research</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'other-dropshipping-tools']) }}">Other Dropshipping tools</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>

                        <div class="col-lg-2 col-md-4">
                            <!-- Footer Links Start -->
                            <div class="footer-links">
                                <h2>Resources</h2>
                                <ul>
                                    <li><a href="{{ route('blogs.userIndex') }}">Blog</a></li>
                                    <li><a href="#">Tutorial</a></li>
                                    <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                </ul>
                            </div>
                            <!-- Footer Links End -->
                        </div>
                    </div>
                </div>
                <!-- Mega Footer End -->

                <!-- Copyright Footer Start -->
                <div class="footer-copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- Footer Copyright Content Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © 2024 DropShippingScout, All rights reserved.</p>
                            </div>
                            <!-- Footer Copyright Content End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Footer Policy Links Start -->
                            <div class="footer-policy-links">
                                <ul>
                                    <li><a href="{{ route('pages.show', ['slug' => 'privacy-policy']) }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('pages.show', ['slug' => 'terms-conditions']) }}">Terms & Conditions</a></li>
                                </ul>
                            </div>
                            <!-- Footer Policy Links End -->
                        </div>
                    </div>						
                </div>
                <!-- Copyright Footer End -->
            </div>
        </div>
    </div>
</footer>
