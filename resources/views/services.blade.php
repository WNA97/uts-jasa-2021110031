@include('layouts.header', ['title' => 'Services'])
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>SERVICES</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <section id="services" class="services">
          <div class="container" data-aos="fade-up">
  
              <div class="section-title">
                  <p>The best services that we can offer to you, our potential customers and regular customers</p>
              </div>
  
              <div class="row">
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                          <div class="icon"><i class="bx bxl-dribbble"></i></div>
                          <h4><a href="">Web Design</a></h4>
                          <p>We over you the best UI/UX design for your website so you can feel cofident over you product or services to your customers</p>
                      </div>
                  </div>
  
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                      data-aos-delay="200">
                      <div class="icon-box">
                          <div class="icon"><i class="bx bx-file"></i></div>
                          <h4><a href="">Web Development</a></h4>
                          <p>We develop the best, the most reliable website for your company or your business that that have good stability than any website that yourever build</p>
                      </div>
                  </div>
  
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                      data-aos-delay="300">
                      <div class="icon-box">
                          <div class="icon"><i class="bx bx-tachometer"></i></div>
                          <h4><a href="">Network Integration</a></h4>
                          <p>We'll help you find the best network configuration for your company or your business that will help you can access remotely so your company or business can be more productive</p>
                      </div>
                  </div>
  
                  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                      data-aos-delay="400">
                      <div class="icon-box">
                          <div class="icon"><i class="bx bx-layer"></i></div>
                          <h4><a href="">Product Management Software</a></h4>
                          <p>Having problem managing your product, we have a solutions for you. Out Product Management software will make your life easier to manager your product that you can operate just only with the tip of your finger</p>
                      </div>
                  </div>
  
              </div>
              <br>
              <br> 
              <br>
              <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-left-top-arrow-circle"></i></div>
                        <h4><a href="">SEO Optimization</a></h4>
                        <p>Use SEO as a tools to market your website, reach more people until it become your client. We provide best configuration SEO to your company so more people will reach your company.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-intersect"></i></div>
                        <h4><a href="">Web App and Mobile App Integration</a></h4>
                        <p>Today many app was base on Mobile app. We help you to integrate you Web App to the Mobile app so you can stay uptodate with the technologies</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-bar-chart-alt-2"></i></div>
                        <h4><a href="">Data Analytic Software </a></h4>
                        <p>You can predict how your sales in going to be in 6 hour. Our Data Analytic Software could give you the best expirience to give the best strategies for makerting and many more.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-briefcase-alt-2"></i></div>
                        <h4><a href="">ERP Implementation</a></h4>
                        <p>All in one package for your company needs. We offer you the high standar of ERP that can improve the overall score of your company productivity.</p>
                    </div>
                </div>

            </div>
              </div>
  
          </div>
      </section><!-- End Services Section -->
      </div>
    </section>

  </main><!-- End #main -->

  @include('layouts.footer')