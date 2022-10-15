@include('layouts.header',['title' => 'About'])

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>ABOUT US</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
           <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up"> 
          <div class="row content">
              <div class="col-lg-12">
                  <p>
                      Puri Taman IT Solutions or PITS for short, is an IT company that aims to provide all your IT
                      needs with full innovation.
                      We are an IT company that prioritizes customer satisfaction with unique and innovative
                      solutions. Our experience in the IT field for 11 years makes us confident to provide you with all the
                      solutions for your IT needs.
                      <br>We set our goal to a IT Company that can:
                  </p>
                  <ul>
                      <li><i class="ri-check-double-line"></i> Provide Added Value</li>
                      <li><i class="ri-check-double-line"></i> Bring customer joy and pride to market their businnes with our solutions</li>
                      <li><i class="ri-check-double-line"></i> Give the best productivity and efficient in time and cost on all of our project that being implemented</li>
                  </ul>
              </div>
          </div>

      </div>
  </section><!-- End About Us Section -->
      </div>
    </section>

  </main><!-- End #main -->

  @include('layouts.footer')