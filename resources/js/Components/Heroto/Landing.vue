<script setup>
import LocomotiveScroll from 'locomotive-scroll';
import { onMounted,ref } from 'vue';

const initY = ref('')

onMounted(()=>{
    const scroll = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true
    });
    scroll.on('scroll', (e) => {
        initY.value = e.scroll.y
    });
})



</script>

<template>
    <div data-scroll-container>
        <section  class="hero spad set-bg" data-setbg="../../../heroto/img/maasai/3.jpg">
            <div class="container">


                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


                    <div class="carousel-inner">

                        <div class="row carousel-item active">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5>Maasai Lodge</h5>
                                    <h2>Discover tranquility where nature is your retreat</h2>
                                </div>

                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5>Maasai Lodge</h5>
                                    <h2>Experience the service you will not find anywhere else</h2>
                                </div>

                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5>Maasai Lodge</h5>
                                    <h2>Your stay turns into more than a vacation</h2>
                                </div>

                            </div>
                        </div>

                    </div>
                    <a style="color: black !important;" class="carousel-control-prev" href="#carouselExampleControls"
                        role="button" data-slide="prev">
                        <span style="color: black !important;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Home About Section Begin -->
        <section class="home-about" >
            <div class="container">
                <div class="row" >
                    <div class="col-lg-6">
                        <div class="home__about__text">
                            <div class="section-title" >
                                <h5>WE LET NATURE SPEAK FOR US</h5>
                                <h1>Maasai Lodge</h1>
                            </div>

                            <div>
                                <p class="first-para">
                                    We let nature speak for us with breathtaking views of the Nairobi national park. Masai lodge
                                    offers warm hospitality and is located at the banks of Mbagathi river overlooking the
                                    national park.
                                </p>
                                <p class="last-para">
                                    With over 40 years of peerless hospitality excellence in the wilderness, our
                                    main aim is to provide you with renowned personalized services in our beautiful facility.
                                </p>
                            </div>
                            <!-- <img src="../../../heroto/img/home-about/sign.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home__about__pic">
                            <img src="../../../heroto/img/maasai/try.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home About Section End -->

        <!-- Services Section Begin -->
        <section class="services spad">
            <div class="container" data-scroll-section>
                <div class="row">
                    <div  data-scroll data-scroll-speed="4" class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/accom.jpg" alt="">
                            <h4>Accomodation</h4>
                            <p>Comprised of single and double rooms, all the 14 manyatta shaped rooms are strategically
                                designed to face the Nairobi national park. This will give you a unique experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/bar.jpg" alt="">
                            <h4>Bar & Restaurant</h4>
                            <p>Our restaurant & bar offers impeccable services giving you an opportunity to indulge in both
                                local, international cuisines as you enjoy your favourite drink.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/conf.jpg" alt="">
                            <h4>Conference Facilities</h4>
                            <p>Away for the busy life of the city and with our professionally competent team, we offer the
                                most serene environment for all levels of proffessional meetings covering your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Home Room Section Begin -->
        <section class="home-room spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5>OUR ROOMS</h5>
                            <h2>Explore Our Hotel</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/parks.jpg">
                            <div class="home__room__title">
                                <h4>Park View Rooms</h4>
                                <h2><sup>KES</sup> 10,000<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/garden.jpg">
                            <div class="home__room__title">
                                <h4>Garden View Rooms</h4>
                                <h2><sup>KES</sup> 10,000<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/st.jpg">
                            <div class="home__room__title">
                                <h4>Standard Triple Rooms</h4>
                                <h2><sup>KES</sup> 12,300<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="home__explore">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <h3>Unwind in Comfort: Where Every Stay is a Journey to Relaxation and Luxury</h3>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center">
                            <a href="#" class="primary-btn">Book a reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Room Section End -->

        <!-- Testimonial Section Begin -->
        <section class="testimonial spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonial__pic">
                            <img src="../../../heroto/img/maasai/test.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial__text">
                            <div class="section-title">
                                <h5>Testimonials</h5>
                                <h2>What do customers say about us?</h2>
                            </div>
                            <div class="testimonial__slider__content">

                                <div class="testimonial__slider owl-carousel">

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Great place to relax and unwind with family. Good pool ample grounds. Best waiter
                                            ( Mr. Simon) very professional and friendly great guest centred service.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Dorcas Marshall</h5>
                                                        <span>Nairobi, Kenya</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Beauty beyond measure, serenity with touch, background music accentuated by
                                            running waterfall, in the wild edge of Nairobi National Park, Masai Lodge is a
                                            rare grandeur. A must visit for those interested in seeing in it&#039;s simple
                                            nature, Nairobi&#039;s best kept secret.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Bulle Jarso</h5>
                                                        <span>Nairobi, Kenya</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>A very peaceful place perfectly lodged at the edge of Nairobi National park. If
                                            you&#039;re looking for tranquility, this is the place. The staff are very
                                            friendly and the food tastes great. If you&#039;re planning to spend a night,
                                            carry some warm clothes cuz it gets very cold in the evening.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Id-Mwarabu</h5>
                                                        <span>Local Guide</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="slide-num" id="snh-1"></div>
                                <div class="slider__progress"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Chooseus Section Begin -->
        <div class="chooseus spad set-bg" data-setbg="../../../heroto/img/maasai/wine.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="chooseus__text">
                            <div class="section-title">
                                <h5>WHY CHOOSE US</h5>
                                <h2>Contact us now to get the latest deals and for the next booking</h2>
                            </div>
                            <a href="#" class="primary-btn">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chooseus Section End -->

        <!-- Gallery Section Begin -->
        <section class="gallery spad">
            <div class="gallery__text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-title">
                                <h5>OUR GALLERY</h5>
                                <h2>Capturing Elegance in Every Frame</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery__title">
                             
                                <a href="#" class="mt-5 primary-btn">View Gallery <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery__slider owl-carousel">
                <div class="gallery__item small__item set-bg" data-setbg="img/gallery/gallery-1.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-2.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-3.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="img/gallery/gallery-4.jpg"></div>
            </div>
        </section>
        <!-- Gallery Section End -->

        <!-- Latest Blog Section Begin -->
        <section class="latest-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5>NEWS & EVENT</h5>
                            <h2>From Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                        <div class="latest__blog__pic set-bg" data-setbg="img/latest-blog/lb-1.jpg"></div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                        <div class="latest__blog__text">
                            <div class="label">Hotel</div>
                            <h5>Ut enim ad minim veniam, quis nostrud</h5>
                            <p><i class="fa fa-clock-o"></i> 19th March, 2019</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                        <div class="latest__blog__pic set-bg" data-setbg="img/latest-blog/lb-2.jpg"></div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                        <div class="latest__blog__text">
                            <div class="label">Restaurant</div>
                            <h5>Ut enim ad minim veniam, quis nostrud</h5>
                            <p><i class="fa fa-clock-o"></i> 22th March, 2019</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                        <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                            data-setbg="img/latest-blog/lb-3.jpg"></div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                        <div class="latest__blog__text">
                            <div class="label">Travel</div>
                            <h5>Ut enim ad minim veniam, quis nostrud</h5>
                            <p><i class="fa fa-clock-o"></i> 25th March, 2019</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                        <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                            data-setbg="img/latest-blog/lb-4.jpg"></div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                        <div class="latest__blog__text">
                            <div class="label">Booking</div>
                            <h5>Ut enim ad minim veniam, quis nostrud</h5>
                            <p><i class="fa fa-clock-o"></i> 29th March, 2019</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Blog Section End -->

    </div>
</template>

<style scoped>
.hero-image {
    background-image: url("../../../heroto/img/maasai/3.jpg");
}

.room-1 {
    background-image: url("../../../heroto/img/maasai/parks.jpg");
}

.room-2 {
    background-image: url("../../../heroto/img/maasai/garden.jpg");
}

.room-3 {
    background-image: url("../../../heroto/img/maasai/st.jpg");
}</style>

