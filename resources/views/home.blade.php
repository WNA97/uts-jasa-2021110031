@include('layouts.header', ['title' => 'Home'])


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>We're your IT Solutions</h1>
                <h2>We are team of talented technician that can provide you with many IT Solutions</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Puri Taman IT Solutions or PITS for short, is an IT company that aims to provide all your IT
                        needs with full innovation.
                        We are an IT company that prioritizes customer satisfaction with unique and innovative
                        solutions.
                        <br>We are experts in the fields of:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> SEO Optimization</li>
                        <li><i class="ri-check-double-line"></i> Software integration solution</li>
                        <li><i class="ri-check-double-line"></i> Network installation and optimization</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Our experience in the IT field for 11 years makes us confident to provide you with all the
                        solutions for your IT needs. For more details click "Learn More".
                    </p>
                    <a href="{{ route('about') }}" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3>3 Reasons why you should trust us with <strong>your IT solutions</strong></h3>
                        <p>
                            Here are three reasons why we are the best for IT solutions for your company
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse"
                                    data-bs-target="#accordion-list-1"><span>01</span> The solutions we build are full
                                    of innovation <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        The solutions that we build are not only solving IT problems for your company,
                                        but also provide added value so that your company can compete with competitors
                                        and can even be superior to them.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                    class="collapsed"><span>02</span> Provide more optimization for your company's
                                    long-term needs <i class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        The long-term optimization that we provide is one of our commitments so that the
                                        IT solutions we provide are solutions that you can trust for years to come.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                    class="collapsed"><span>03</span> 24/7 Support Service <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Our Support Services will be accessible 24/7 so you don't have to worry if
                                        something untoward happens to all of our services within your company.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                    style='background-image: url("img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
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
            <div class="col-lg-12 text-center">
              <a href="{{route ('services')}}" class="svc-btn">More</a>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Got Any Questions?</h3>
                    <p> Check out FAQ <a href="#faq">here</a> Feel free to contact us</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#contact">Contact Us</a>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="team section-bg">
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

              </div>
            
            </div>
            
        </div>
        <br>
        <br>
        <div class="col-lg-12 text-center">
          <a href="{{route ('testimonials')}}" class="tm-btn">More</a>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>This is how much you'll pay for something that can give you more</p>
            </div>

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h3>Basic</h3>
                        <h4><sup>$</sup>150 - <sup>$</sup>300</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> 10 days guaranty</li>
                            <li><i class="bx bx-check"></i> 90 days of on site support</li>
                            <li><i class="bx bx-check"></i> 1 Dedicated Technician</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Source Code of the project or device for the networking integration</span>
                            </li>
                            <li class="na"><i class="bx bx-x"></i> <span>Free charge of any demanded modification for 30 days operation</span>
                            </li>
                        </ul>
                        <a href="#contact" class="buy-btn">Contact Us</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Premium</h3>
                        <h4><sup>$</sup>350 - <sup>$</sup>600</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> 30 days guaranty</li>
                            <li><i class="bx bx-check"></i> 120 days of on site support</li>
                            <li><i class="bx bx-check"></i> 3 Dedicated Technician</li>
                            <li><i class="bx bx-check"></i> Source Code of the project or device for the networking integration</li>
                            <li><i class="bx bx-check"></i> Free charge of any demanded modification for 30 days operation</li>
                        </ul>
                        <a href="#contact" class="buy-btn">Contact Us</a>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <h3>Ultimate</h3>
                        <h4>><sup>$</sup>600</h4>
                        <ul>
                            <li><i class="bx bx-check"></i> 120 days guaranty</li>
                            <li><i class="bx bx-check"></i> 240 days of on site support</li>
                            <li><i class="bx bx-check"></i> 8 Dedicated Technician</li>
                            <li><i class="bx bx-check"></i> Source Code of the project or device for the networking integration</li>
                            <li><i class="bx bx-check"></i> Free charge of any demanded modification for 30 days operation</li>
                        </ul>
                        <a href="#contact" class="buy-btn">Contact Us</a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Can we have the device or source code? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                              you can have the source code and device if you take the Premium or Ultimate package.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Do we still get support after the warranty period and onsite support have expired?
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              you will still get our support by contacting us via the contact us page or email where we will serve you 24/7.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Will our staff receive training for the projects we implement?
                            <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Of course, for every implementation or installation project that you do at your company, we will train your staff so that it can make it easier for your staff to operate the results of the implementation or installation.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Have any question for our services or want to cosult about IT solutions, feel free to contact us</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jl. Letda Made Putra No. 9A, Denpasar, Bali</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@pitscomp.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+62 361 1212 223</p>
                        </div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.342898834949!2d115.21773481391041!3d-8.658901593778127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409a13640001%3A0xc82b2cf3458aaffb!2sJl.%20Letda%20Made%20Putra%20No.9a%2C%20Dangin%20Puri%2C%20Kec.%20Denpasar%20Tim.%2C%20Kota%20Denpasar%2C%20Bali%2080232!5e0!3m2!1sen!2sid!4v1665850296288!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@include('layouts.footer')
