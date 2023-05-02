@extends('frontend.main_master')
@section('main')

    <section>
        <div class="bg-video-wrap">
            <video class="fullscreen" src="{{ asset('frontend/assets/videos/star-bg2.mp4') }}" playsinline autoplay muted loop style="filter: blur(6px);">
            </video>
            <div class="overlay"></div>
                <div class="columns">
                    <div class="column">
                        <div class="slider-text">
                            <h3>Find</h3>
                            <h1>balance & <br/>
                                harmony</h1>
                            <h2>through <span>astrology</span></h2> 
                        </div>
                    </div>
                    <div class="column">
                        <div class="solar-syst">
                            <div class="sun"></div>
                            <div class="mercury"></div>
                            <div class="venus"></div>
                            <div class="earth"></div>
                            <div class="mars"></div>
                            <div class="jupiter"></div>
                            <div class="saturn"></div>
                            <div class="uranus"></div>
                            <div class="neptune"></div>
                            <div class="pluto"></div>
                            <div class="asteroids-belt"></div>
                        </div>
                    </div>
                </div>
        </div>

        <!--infobox-->
            <div class="info-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <figure class="figure info-box-content">
                                <img src="{{ asset('frontend/assets/images/tick-icon.png') }}" class="figure-img img-fluid rounded" alt="Tick Icon">
                                <figcaption class="figure-caption"><button type="button" class="btn btn-light info-box-btntext">CHAT WITH
                                    <br/>ASTROLOGER <span class="info-box-icon"><img src="{{ asset('frontend/assets/images/arrow-icon.png') }}" alt="arrowicon" /></span></button></figcaption>
                            </figure>
                        </div>
                        <div class="col-md-3">
                            <figure class="figure info-box-content">
                                <img src="{{ asset('frontend/assets/images/tick-icon.png') }}" class="figure-img img-fluid rounded" alt="Tick Icon">
                                <figcaption class="figure-caption"><button type="button" class="btn btn-light info-box-btntext">TALK TO
                                    <br/>ASTROLOGER <span class="info-box-icon"><img src="{{ asset('frontend/assets/images/arrow-icon.png') }}" alt="arrowicon" /></span></button></figcaption>
                            </figure>
                        </div>
                        <div class="col-md-3">
                            <figure class="figure info-box-content">
                                <img src="{{ asset('frontend/assets/images/tick-icon.png') }}" class="figure-img img-fluid rounded" alt="Tick Icon">
                                <figcaption class="figure-caption"><button type="button" class="btn btn-light info-box-btntext">LIVE
                                    <br/>ASTROLOGER <span class="info-box-icon"><img src="{{ asset('frontend/assets/images/arrow-icon.png') }}" alt="arrowicon" /></span></button></figcaption>
                            </figure>
                        </div>
                        <div class="col-md-3">
                            <figure class="figure info-box-content">
                                <img src="{{ asset('frontend/assets/images/tick-icon.png') }}" class="figure-img img-fluid rounded" alt="Tick Icon">
                                <figcaption class="figure-caption"><button type="button" class="btn btn-light info-box-btntext">BLOG
                                    <br/>ASTROLOGER <span class="info-box-icon"><img src="{{ asset('frontend/assets/images/arrow-icon.png') }}" alt="arrowicon" /></span></button></figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- info box end-->
            </div>

    
        <div class="container-fluid">
            <div class="row our-astrolger">
                <!-- Our Astrologers Begin-->
                    <div class="col-md-6 our-astrolger-starsBg">
                        <h3>Our <br/>Astrologers</h3>
                        <h2>
                            5000+<br/>
                            <span class=" our-astrolger-best">Best Astrologers</span><span class="chat-btn"><button type="button" class="btn btn-light chat-btntext">Chat Now</button></span><br/>
                            <span class=" our-astrolger-online">from India for Online Consultation</span>
                        </h2>
                    </div>
                    <div class="col-md-6 our-astrolger-oppCircleBg">
                        <!-- <video width="90%" >
                            <source src="images/Space-24211.mp4" type="images/Space-24211/mp4">
                        </video> -->

                        <video controls width="90%" autoplay="true" playsinline="true" muted="true" data-video-player-target="player" class="plyr__video">

                            <source src="https://static.vecteezy.com/system/resources/previews/002/019/024/mp4/nebula-space-animate-background-presentation-concept-free-video.mp4" type="video/mp4">
                            <source src="https://static.vecteezy.com/system/resources/previews/002/019/024/nebula-space-animate-background-presentation-concept-free-video.webm" type="video/webm">
                        </video>
                    </div>
                <!-- Our Astrologers End -->
            </div>

            <div class="row our-astrolger">
                <!-- Our Astrologers Begin-->
                    <div class="col-md-5 whyastro">
                    <h3>Why <br/><span>Astrosolve</span></h3>
                    </div>
                    <div class="col-md-7">
                        <p>Astrology is a predictive science with its own sets of methods, claims and findings that have forever inspired and allowed people with insights into different aspects of their life. Astrology, with its wows and hows, is contentful and approving enough to make people a believer of the same. And thankfully, it continues to do so despite the world shifting bases from what they believe in and what they don’t.<br/>

                            If one has to go into the technicalities of astrology, it is the study of different cosmic objects, which are usually stars and planets, that have an effect on the lives of the people. You must be aware that there are as many as 8 planets in the solar system. However, If I ask an online astrologer near me about the planets in astrology, they will tell me that there are as many as 9 planets in astrology also called Navagrahas. And surprisingly, the planet Earth, in astrology, is not counted among the nine planets.<br/>
                            
                            The 9 planets in astrology are Sun (Surya), Moon (Chandra), Mars (Mangala), Mercury (Budha), Jupiter (Brihaspati), Venus (Shukra), Saturn (Shani), Rahu (north node of the moon), and Ketu (south node of the moon).<br/>
                            
                            Among these planets, some planets are called friendly planets, meaning the presence of them brings positivity to your life. And then, there are also planets that have a negative influence on humans. The latter would be planets like Rahu and Ketu. Their presence in one’s Kundli is said to bring pain and misery. However, there is another aspect one needs to be aware of. It’s the fact that the presence of Ketu in one’s horoscope is not always bad and similarly, the presence of Jupiter in one’s Kundli might not be the best every time.
                        </p>
                        <p><span class="chat-btn"><button type="button" class="btn btn-light chat-btntext">Read More</button></span></p>
                    </div>
                <!-- Our Astrologers End -->
            </div>

            <div class="row astrolger-services mt-5">
                <!-- Our Astrologers Begin-->
                    <div class="col-md-12">
                        <h2 class="our-astrology-grah text-white">
                            <span class="left-ystar"><img src="{{ asset('frontend/assets/images/star-yello.png') }}"  alt="star yellow" /></span>
                            COMPLIMENTARY <span class="left-xstar"><img src="{{ asset('frontend/assets/images/star-yellow-rev.png') }}"  alt="star yellow" /></span><br/>
                            <span class="services-text">ASTROLOGY SERVICES</span> 
                        </h2>
                    </div>
                    <div class="col-md-12 mt-5">
                        <!-- logo slider-->
                        <div class="swiper swiper-logos">
                            <div class="swiper-wrapper img-box-sm">
                            <!-- Slide 1-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo1.png') }}" alt="astrosolve"  />
                                <p>Gemini</p>
                            </div>
                            <!-- End Slide 1 -->
                            <!-- Slide 2-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo2.png') }}" alt="astrosolve" />
                                <p>Leo</p>
                            </div>
                            <!-- End Slide 2 -->
                            <!-- Slide 3-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo3.png') }}" alt="astrosolve"  />
                                <p>Virgo</p>
                            </div>
                            <!-- End Slide 3 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo4.png') }}" alt="astrosolve" />
                                <p>Libra</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo5.png') }}" alt="astrosolve" />
                                <p>Scorpio</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo6.png') }}" alt="astrosolve" />
                                <p>Sagitariu</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo7.png') }}" alt="astrosolve" />
                                <p>Carpicorn</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo8.png') }}" alt="astrosolve" />
                                <p>Aquarius</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo9.png') }}" alt="astrosolve" />
                                <p>Pisces</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo10.png') }}" alt="astrosolve" />
                                <p>Aries</p>
                            </div>
                            <!-- End Slide 4 -->
                            <!-- Slide 4-->
                            <div class="swiper-slide">
                                <img src="{{ asset('frontend/assets/images/icons/logo11.png') }}" alt="astrosolve" />
                                <p>Tauraus</p>
                            </div>
                            <!-- End Slide 4 -->
                            </div>
                            <div class="swiper-button-prev logos-prev"></div>
                            <div class="swiper-button-next logos-next"></div>
                        </div>
                        <!--logo Slider End -->
                    </div>
                <!-- Our Astrologers End -->
            </div>

            <div class="row astrolger-services-two">
                <div class="col-md-3 col-xs-12 bg-yellow">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <span class="light-yellow-icon"><em>01</em></span>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <h4>Detailed Panchang</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 bg-pink">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <span class="light-yellow-icon"><em>02</em></span>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <h4>Daily Predection</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 bg-purple">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <span class="light-yellow-icon"><em>03</em></span>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <h4>Destination Number</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 bg-blue">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <span class="light-yellow-icon"><em>04</em></span>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <h4>Festival Calendar</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row visitors">
                <div class="col-md-4 col-xs-12">
                    <h4>9,555+</h4>
                    <h6>Total Astrologers</h6>
                    </div>
                <div class="col-md-4 col-xs-12">
                    <h4>202 Million Minutes</h4>
                    <h6>Total Chat/Call Minutes</h6>
                    </div>
                <div class="col-md-4 col-xs-12">
                    <h4>35.8 Million</h4>
                    <h6>Total Customers</h6>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row testimonial">
                <div class="col-md-6 col-xs-12">
                    <h6>Testimonials</h6>
                    <div class="row">
                        <div class="col-md-2 col-xs-12"><img src="{{ asset('frontend/assets/images/testimonials.png') }}" alt="testimonial" width="100"/></div>
                        <div class="col-md-10 col-xs-12">
                            <h2>Client’s<br/>
                                Kind Words</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 testimonial-content">
                    <p>My special thanks to Surabhi, Suman, Basant and Anurag ji who directed me in my life. </p>
                    <span><strong>- Priya Chakarborty (Kolkata)</strong></span>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row myblog">
                <div class="col-md-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-1 col-xs-12"><img src="{{ asset('frontend/assets/images/star-yello.png') }}" alt="" class="img-block" /></div>
                        <div class="col-md-11 col-xs-12"> <h3 class="text-grey">Latest Blog’s Post</h3></div>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <!-- Blog slider-->
                    <div class="swiper swiper-blogs">
                        <div class="swiper-wrapper img-box-sm">
                        <!-- Slide 1-->
                        <div class="swiper-slide slide-text clearfix">
                            <img src="{{ asset('frontend/assets/images/blog-img1.jpg') }}" alt="astrosolve" class="rounded-img"  />
                            <p>7 Dangerous Doshas in Kundli and Their Effects On Your Life</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 1 -->
                        <!-- Slide 2-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img2.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Mauni Amavasya 2023: Date, time <br/>significance & rituals to follow</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 2 -->
                        <!-- Slide 3-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img3.jpg') }}" alt="astrosolve" class="rounded-img"  />
                            <p>Guru Gobind Singh Jayanti 2023:<br/> Know all about the 10th Sikh Guru</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 3 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img1.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>7 Dangerous Doshas in Kundli and Their Effects On Your Life</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img2.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Mauni Amavasya 2023: Date, time <br/>significance & rituals to follow</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img3.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Guru Gobind Singh Jayanti 2023: <br/>Know all about the 10th Sikh Guru</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img1.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>7 Dangerous Doshas in Kundli and Their Effects On Your Life</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img2.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Mauni Amavasya 2023: Date, time <br/>significance & rituals to follow</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img3.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Guru Gobind Singh Jayanti 2023: <br/>Know all about the 10th Sikh Guru</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img2.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>Mauni Amavasya 2023: Date, time <br/>significance & rituals to follow</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        <!-- Slide 4-->
                        <div class="swiper-slide slide-text">
                            <img src="{{ asset('frontend/assets/images/blog-img1.jpg') }}" alt="astrosolve" class="rounded-img" />
                            <p>7 Dangerous Doshas in Kundli and Their Effects On Your Life</p>
                            <span class="author-name"><strong>Moumi Roy</strong></span><span class="post-date">January 03, 2023</span>
                        </div>
                        <!-- End Slide 4 -->
                        </div>
                        <div class="swiper-button-prev blogs-prev"></div>
                        <div class="swiper-button-next blogs-next"></div>
                    </div>
                    <!--blog Slider End -->
                </div>
            </div>
        </div>

    </section>

@endsection
