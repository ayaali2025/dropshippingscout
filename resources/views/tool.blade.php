
@extends('layouts.master')

@section('title', $page->title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('meta_author', $page->meta_author)

@section('styles')
    <!-- Custom CSS for this view -->
     <link href="{{asset('css/tools.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h1 class="title" style="margin-top:0px;">Uncover Market Trends</h1>
        <h5  class="title" style="margin-top:20px ; font-size: 20px; color: #1E3F5B; font-weight: 550;">In the fast paced world of business, staying ahead of market trends is essential for success.</h5>
        <br>

       
          <div class="con-left">
            <div class="left-column">
              <img src="./images/ebay.jpg" alt="ebay" width="118.32px" height="45px" style="margin-bottom: 20px;">
        
              <h2>identifying profitable products to sell</h2>
              
              <br>
              <p style="color: #1E3F5B; font-size: 16px; font-weight: 400;">product research tools empower you to find products with high deman, low competition, and good profit potential - the recipe for dropshipping success.</p>
                 <br>
              <button class="btn-default" style="background: var(--primary-500) 0% 0% no-repeat padding-box;
              border: 1px solid var(--primary-500);
              color: white
              ;
              background: #3545D6 0% 0% no-repeat padding-box;
              border: 1px solid #AFB9FA; border-radius: 8px;font-size: 13px;">start for $1 Trail</button>
              
              <p style="color: #1E3F5B; font-size: 13px; font-weight: 550;padding-top:10px;width: max-content;">
               
                <img src="{{asset('images/verified.png')}}" style="max-width: 35px"/>
                
                Trusted by 200.000 entrepreneurs like you</p>

            </div>


            
            <div class="right-column">
              <img src="./images/P S.jpg" alt="Example Image">
            </div>
          </div>
         
         <br>

 
         <div class="con-left">
            <div class="right-column">
                <img src="./images/P S.jpg" alt="Example Image">
            </div>
        
            <div class="left-column">
                <h2 style="width: max-content;">identifying profitable products to sell</h2>
                <br>
                <p style="color: #1E3F5B; font-size: 16px; font-weight: 400;">
                    product research tools empower you to find products with high demand, low competition, and good profit potential - the recipe for dropshipping success.
                </p>
                <br>
                <button class="btn-default" style="background: var(--primary-500) 0% 0% no-repeat padding-box;
                    border: 1px solid var(--primary-500);
                    color: white;
                    background: #3545D6 0% 0% no-repeat padding-box;
                    border: 1px solid #AFB9FA; border-radius: 8px; font-size: 13px;">
                    start for $1 Trial
                </button>
            </div>
        </div>
        

 
        <div class="con-left">
         <div class="left-column">
     
           <h2 style="width: max-content;">identifying profitable products to sell</h2>
           
           <br>
           <p style="color: #1E3F5B; font-size: 16px; font-weight: 400;">product research tools empower you to find products with high deman, low competition, and good profit potential - the recipe for dropshipping success.</p>
              <br>
           <button class="btn-default" style="background: var(--primary-500) 0% 0% no-repeat padding-box;
           border: 1px solid var(--primary-500);
           color: white
           ;
           background: #3545D6 0% 0% no-repeat padding-box;
           border: 1px solid #AFB9FA; border-radius: 8px;font-size: 13px;">start for $1 Trail</button>
         </div>


         
         <div class="right-column">
           <img src="./images/P S.jpg" alt="Example Image">
         </div>
       </div>

 
       <div class="con-left">
        <div class="right-column">
            <img src="./images/P S.jpg" alt="Example Image">
        </div>
    
        <div class="left-column">
            <h2 style="width: max-content;">identifying profitable products to sell</h2>
            <br>
            <p style="color: #1E3F5B; font-size: 16px; font-weight: 400;">
                product research tools empower you to find products with high demand, low competition, and good profit potential - the recipe for dropshipping success.
            </p>
            <br>
            <button class="btn-default" style="background: var(--primary-500) 0% 0% no-repeat padding-box;
                border: 1px solid var(--primary-500);
                color: white;
                background: #3545D6 0% 0% no-repeat padding-box;
                border: 1px solid #AFB9FA; border-radius: 8px; font-size: 13px;">
                start for $1 Trial
            </button>
        </div>
    </div>
    
 


    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
      <div class="container">
          <div class="row section-row align-items-center">
              <div class="col-lg-8 col-md-12">
                  <!-- Section Title Start -->
                  <div class="section-title">
                      <h3 class="wow fadeInUp">why choose us</h3>
                      <h2 class="text-anime-style-3">Why choose us ?</h2>
                  </div>
                  <!-- Section Title End -->
              </div>
          </div>

          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <!-- Why Choose Item Start -->
                  <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
                      <div class="icon-box">
                          <img src="images/icon-whyus-1.svg" alt="">
                      </div>
                      <h3>Identifying Market Trends</h3>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                  </div>
                  <!-- Why Choose Item End -->
              </div>

              <div class="col-lg-4 col-md-6">
                  <!-- Why Choose Item Start -->
                  <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                      <div class="icon-box">
                          <img src="images/icon-whyus-2.svg" alt="">
                      </div>
                      <h3>Competitor Analysis</h3>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                  </div>
                  <!-- Why Choose Item End -->
              </div>

              <div class="col-lg-4">
                  <!-- Why Choose Item Start -->
                  <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                      <div class="icon-box">
                          <img src="images/icon-whyus-3.svg" alt="">
                      </div>
                      <h3>Competitor Analysis</h3>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                  </div>
                  <!-- Why Choose Item End -->
              </div>

          </div>
      </div>
  </div>
  <!-- Why Choose Us Section End -->

    <div class="container faqHead" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">

      <h2 style="color: #1E3F5B;padding-top: 20px;">
          <span style="color:#3545D6;">F</span>AQ
      </h2>
      <p style="color: #1E3F5B;">Helpful resource for users to find quick answers</p>
  
  </div>

  
    
    <div class="faq-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-10 offset-lg-1  col-md-12 offset-md-0">
                  <div class="faq-accordion" id="accordion">
                      <!-- FAQ Item start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                          <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  What is the Difference Between Frontend and Backend Development?
                              </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>Frontend development focuses on creating the user interface and user experience of a software application, typically using languages such as HTML, CSS, and JavaScript. Backend development involves working on the server-side of the application, managing databases, and handling server logic using languages like Python, Java, PHP, or Node.js.</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->

                      <!-- FAQ Item Start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                          <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  What are APIs and How are They Used in Software Development?
                              </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>APIs (Application Programming Interfaces) are sets of rules and protocols that allow different software applications to communicate with each other. They are used in software development to enable integration between different systems, access external services, and build modular and scalable applications.</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->

                      <!-- FAQ Item Start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                          <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  How Can I Improve my Software Development Skills?
                              </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->

                      <!-- FAQ Item Start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                          <h2 class="accordion-header" id="headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  What are the Ethical Considerations in AI Development for Software Companies?
                              </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>Ethical considerations in AI development for software companies include issues related to fairness, transparency, accountability, privacy, and bias. It's essential for companies to prioritize ethical AI practices AI systems.</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->

                      <!-- FAQ Item Start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="1.25s">
                          <h2 class="accordion-header" id="headingFive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  What Are the Different Engagement Models Offered by Software Companies?
                              </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>Software companies typically offer various engagement models to cater to the diverse needs of their clients. These models may include fixed-price projects, time and material (hourly) billing, dedicated development teams, staff augmentation, and hybrid models combining elements of different approaches</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->

                      <!-- FAQ Item Start -->
                      <div class="accordion-item wow fadeInUp" data-wow-delay="1.5s">
                          <h2 class="accordion-header" id="headingSix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  What Are Some Emerging Trends and Technologies in the Software Industry?
                              </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                              data-bs-parent="#accordion">
                              <div class="accordion-body">
                                  <p>Emerging trends and technologies in the software industry include cloud computing, artificial intelligence and machine learning, Internet of Things (IoT), blockchain, edge computing, low-code/no-code development platforms, containerization and microservices architecture, and cybersecurity advancements</p>
                              </div>
                          </div>
                      </div>
                      <!-- FAQ Item End -->
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- FAQs Page Ends -->
</div>
    </div>

 
 <!-- Latest News Section Start -->
 <div class="latest-news" style="max-width: 1200px;; margin: 40px auto;">
  <div>
      <h2>Reach out to suppliers for details on <br>
        their offerings and pricing.</h2>
  </div>
  <div class="button-container">
      <button class="btn-default">Start for $1 Trial</button>
</div>
</div>

<!-- Latest News Section End -->

@endsection