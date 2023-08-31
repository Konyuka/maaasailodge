<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head } from '@inertiajs/vue3';

import Navbar from '@/Components/Heroto/Navbar.vue'
import Landing from '@/Components/Heroto/Landing.vue'
import Foota from '@/Components/Heroto/Footer.vue'

</script>

<template>
    <Head title="Home" />

    <Heroto>
        <Navbar />

        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option set-bg" data-setbg="/heroto/img/maasai/conference.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h1>Our Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <section class="py-5">
            <div class="px-5">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 ml-auto order-lg-2 position-relative mb-5 aos-init aos-animate"
                        data-aos="fade-up">
                        <figure class="img-absolute">
                            <img src="/heroto/img/maasai/acom.jpg" alt="Image" class="h-100 w-100 img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-12 col-lg-6 order-lg-1 aos-init aos-animate text-center" data-aos="fade-up">
                        <h2 class="heading mb-5">Welcoming Accomodation</h2>
                        <p class="mb-4 px-5 text-left">
                            Park View Rooms, Comprised of single and double rooms, all the 14 manyatta shaped rooms are
                            strategically designed to face the Nairobi national park. Garden View Rooms, Made up of
                            double, twin and triple rooms. All the 27 Manyatta shaped rooms have captivating ambience that
                            instantly triggers relaxation.
                        </p>
                        <a href="#" class="primary-btn" data-v-09bd9859="">Book Now</a>
                    </div>

                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 ml-auto order-lg-1 position-relative mb-5 aos-init aos-animate"
                        data-aos="fade-up">
                        <figure class="img-absolute">
                            <img src="/heroto/img/maasai/res.jpg" alt="Image" class="h-100 w-100 img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-12 col-lg-6 order-lg-2 aos-init aos-animate text-center" data-aos="fade-up">
                        <h2 class="heading mb-5">Beautiful Restaurant</h2>
                        <p class="mb-4 px-5 text-left">
                            Our restaurant offers impeccable service giving you an opportunity to indulge in both local,
                            international cuisines and our sought-after traditional marinated nyama choma.
                        </p>
                        <a href="#" class="primary-btn" data-v-09bd9859="">Book Now</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Blog Details Section Begin -->
        <section class="blog-details spad">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="blog__details__content">
                            <div class="blog__details__text">
                                <p>
                                    We let nature speak for us with breathtaking views of the Nairobi national park. Masai
                                    lodge offers warm hospitality and is located at the banks of Mbagathi river overlooking
                                    the national park. With over 40 years of peerless hospitality excellence in the
                                    wilderness, our main aim is to provide you with renowned personalized services in our
                                    beautiful facility.</p>

                            </div>
                            <div class="blog__details__pic">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 p-0">
                                                <img src="/heroto/img/maasai/7.jpg" alt="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 p-0">
                                                <img src="/heroto/img/maasai/bed.jpg" alt="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 p-0">
                                                <img src="/heroto/img/maasai/23.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 p-0">
                                                <img src="/heroto/img/maasai/out.jpg" alt="">
                                            </div>
                                            <!-- <div class="col-lg-12 col-md-12 p-0">
                                                <img src="/heroto/img/maasai/acomo.jpg" alt="">
                                            </div> -->
                                            <div class="col-lg-12 col-md-12 p-0">
                                                <img src="/heroto/img/maasai/conf.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="blog__details__tags">
                                            <a href="#">Hotel</a>
                                            <a href="#">&</a>
                                            <a href="#">Restaurant</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="blog__details__share">
                                            <span>Share:</span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Section End -->



        <Foota />
    </Heroto>
</template>

<style></style>
