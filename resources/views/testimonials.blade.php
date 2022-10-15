@include('layouts.header', ['title' => 'Testimonials'])

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Testimonials</li>
        </ol>
        <h2>Testimonials</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="team">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Testimonials</h2>
              <p>Here are some testimonials from our clients</p>
          </div>

          <div class="row">

              <div class="col-lg-6">
                  <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                      <div class="pic"><img src="img/testimoni/testimoni-1.jpg" class="img-fluid" alt=""></div>
                      <div class="member-info">
                          <h4>Walter White</h4>
                          <span>Chief Executive Officer of MYOB</span>
                          <p>"I feel there is no need to worry about the software they have developed because
                              everything has met our expectations"
                            </p>
                          <h2>5/5</h2>
                          <div class="social">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                  <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                      <div class="pic"><img src="img/testimoni/testimoni-2.jpg" class="img-fluid" alt=""></div>
                      <div class="member-info">
                          <h4>Sarah Jhonson</h4>
                          <span>Product Manager of Belimo</span>
                          <p>"PITS gives us the best solution for our product management so that data input is easier and we can be more productive"</p>
                          <h2>4/5</h2>
                          <div class="social">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="img/testimoni/testimoni-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO of Citrus</span>
                    <p>PITS provided us with excelence Data Analytic Software, so easy to operate and good analytic report makes us faster on taking decission.</p>
                    <h2>5/5</h2>
                          <div class="social">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="img/testimoni/testimoni-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Finance Manager of Lilly</span>
                    <p>ERP Implementation in our company work flawlessly with out any hasitation. All the Accounting Staff in our company now can work even faster without any small mistakes</p>
                    <h2>4/5</h2>
                          <div class="social">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                  </div>
                </div>
              </div>

            </div>
          
          </div>
          
      </div>
  </section><!-- End Testimonials Section -->
      </div>
  </section>
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients section-bg">
    <div class="container">

        <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="img/clients/client-6.png" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section><!-- End Cliens Section -->

  </main><!-- End #main -->

  @include('layouts.footer')