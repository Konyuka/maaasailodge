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
        <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Rooms Details Section Begin -->
        <section class="spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="room__details__content">
                            <div class="room__details__rating">
                                <div class="room__details__hotel">
                                    <span>Hotel</span>
                                    <div class="room__details__hotel__rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star-half_alt"></span>
                                    </div>
                                </div>
                                <div class="room__details__advisor">
                                    <img src="img/rooms/details/tripadvisor.png" alt="">
                                    <div class="room__details__advisor__rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star-half_alt"></span>
                                    </div>
                                    <span class="review">(1305 Reviews)</span>
                                </div>
                            </div>
                            <div class="room__details__title">
                                <h2>ABOUT MAASAI LODGE</h2>
                                <!-- <a href="#" class="primary-btn">Booking Now</a> -->
                            </div>
                            <div class="room__details__desc">
                                <p>
                                    Total Area - 300 acres Location - Ongata Rongai, Nairobi Altitude - GPS - Coordinates -
                                    Access points - Via Masai Lodge Conservancy Road off Magadi Ongata Rongai. Also via The
                                    Nairobi National Park. Attractions - Nairobi National Park, Elephant Orphanage, Giraffe
                                    Centre, Ngong Hills, Karen Blixen, National Museums of Kenya Distance to CBD - 20km
                                    Distance to Airports - 15km to Wilson Airport, 30 km to Jomo Kenyatta International
                                    Airport
                                </p>
                                <p>
                                    Total Area - 300 acres Location - Ongata Rongai, Nairobi Altitude - GPS - Coordinates -
                                    Access points - Via Masai Lodge Conservancy Road off Magadi Ongata Rongai. Also via The
                                    Nairobi National Park. Attractions - Nairobi National Park, Elephant Orphanage, Giraffe
                                    Centre, Ngong Hills, Karen Blixen, National Museums of Kenya Distance to CBD - 20km
                                    Distance to Airports - 15km to Wilson Airport, 30 km to Jomo Kenyatta International
                                    Airport
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms Details Section End -->



        <!-- About Section Begin -->
        <section class="about">
            <div class="container">
                <div class="about__content pb-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-title">
                                <h5>Maasai Lodge</h5>
                                <h2>Karibu Sana!</h2>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about__text">
                                <p>20 Kilometers to the Central Bussiness District</p>
                                <p>
                                    We let nature speak for us with breathtaking views of the Nairobi national park. Masai
                                    lodge offers warm hospitality and is located at the banks of Mbagathi river overlooking
                                    the national park. With over 40 years of peerless hospitality excellence in the
                                    wilderness, our main aim is to provide you with renowned personalized services in our
                                    beautiful facility.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/1.png" alt="">
                            <h4>Accomodation</h4>
                            <p>Comprised of single and double rooms, all the 14 manyatta shaped rooms are strategically
                                designed to face the Nairobi national park.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/2.png" alt="">
                            <h4>Restaurant</h4>
                            <p>Offering quality services to let you taste both local, international cuisines & our
                                sought-after traditional marinated nyama choma.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/4.png" alt="">
                            <h4>Bar</h4>
                            <p>Relax and enjoy a glass of your favourite drink with a serene view of the park at our bar
                                which has an extensive menu to chose from.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/3.png" alt="">
                            <h4>Conference Facilities</h4>
                            <p>With our professionally competent team, we offer the most serene environment for all levels
                                of proffessional meetings covering your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/5.png" alt="">
                            <h4>Swimming Pool</h4>
                            <p>Our fascinating open air swimming pool is crystal clean and ideal for all age groups and
                                operational from 8am to 6pm.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="/heroto/img/maasai/icons/6.png" alt="">
                            <h4>Team Building</h4>
                            <p>Efficiently achieve your company’s purpose and goals through our team bonding activities
                                coordinated by our professional facilitator.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Chooseus Section Begin -->
        <div style="margin-bottom: 150px;" class="chooseus spad set-bg" data-setbg="./heroto/img/maasai/swimo.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="chooseus__text">
                            <div class="section-title">
                                <h5>Maasai Lodge</h5>
                                <h2>Best Deals</h2>
                            </div>
                            <a href="#" class="primary-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5"></div>
        </div>
        <!-- Chooseus Section End -->

        <!-- History Section Begin -->
        <!-- <section class="history spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title history-title">
                            <h5>Our History</h5>
                            <h2>Explore Our Hotel</h2>
                        </div>
                    </div>
                </div>
                <div class="history__content">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="history__item left__item">
                                <div class="history__date"></div>
                                <span>11 Dec 1990</span>
                                <h4>Start Up Building Hotel</h4>
                                <img src="img/history/history-1.jpg" alt="">
                                <p>The young woman who turned a style setback into an envious outfit has officially inspired
                                    a major clothing retailer with her impromptu ingenuity</p>
                            </div>
                            <div class="history__item left__item mb-0">
                                <div class="history__date"></div>
                                <span>29 Jan 1990</span>
                                <h4>Building Pool In The Beach</h4>
                                <img src="img/history/history-3.jpg" alt="">
                                <p>The young woman who turned a style setback into an envious outfit has officially inspired
                                    a major clothing retailer with her impromptu ingenuity</p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-5 offset-md-2">
                            <div class="history__item right__first__item">
                                <div class="history__date"></div>
                                <span>08 March 1990</span>
                                <h4>Best Hotel Award Of The Year</h4>
                                <img src="img/history/history-2.jpg" alt="">
                                <p>The young woman who turned a style setback into an envious outfit has officially inspired
                                    a major clothing retailer with her impromptu ingenuity</p>
                            </div>
                            <div class="history__item mb-0">
                                <div class="history__date"></div>
                                <span>06 July 1990</span>
                                <h4>Open New Hotel In New York</h4>
                                <img src="img/history/history-4.jpg" alt="">
                                <p>The young woman who turned a style setback into an envious outfit has officially inspired
                                    a major clothing retailer with her impromptu ingenuity</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- History Section End -->

        <Foota  />
    </Heroto>
</template>

<style></style>
