<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head, Link } from '@inertiajs/vue3';

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
                        <div class="breadcrumb__text wow slideInLeft" data-wow-duration="2s">
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
                                <h2>ABOUT MASAI LODGE</h2>
                                <!-- <a href="#" class="primary-btn">Booking Now</a> -->
                            </div>
                            <div class="room__details__desc">
                                <p>
                                    It has been over 40 years of unmatched hospitality excellence in the wilderness away and
                                    within close proximity of the CBD. we are a unique beautiful property situated at the
                                    banks of mbagathi river at the door step of Nairobi national park with breathtaking
                                    views of the park, Ngong hills and the Nairobi city skyline. Our main aim is to provide
                                    you with our renowned personalized services of the best host for you. We believe in
                                    conserving the environment and are responsible for the natural vegetation and the park.
                                    We believe that serving our guests in a friendly and professional way makes everyone
                                    happy; the guests, the community, members of staff and the wildlife as we ensure a safe
                                    and conducive environment for them all.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms Details Section End -->

        <!-- Map Begin -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255273.71937975904!2d36.50824169453127!3d-1.3854972000000045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0f174739f131%3A0x783d6449e2ad9122!2sMasai%20Lodge!5e0!3m2!1sen!2ske!4v1693469240668!5m2!1sen!2ske"
                height="600" style="border:0;" allowfullscreen=""></iframe>

        </div>
        <!-- Map End -->



        <!-- About Section Begin -->
        <section class="about mt-5">
            <div class="container">

                <div class="my-element about__content pb-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h1 class="wow slideInLeft" data-wow-duration="1.5s">Masai Lodge</h1>
                                <h2 class="wow slideInLeft" data-wow-duration="2s">Karibu Sana!</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="about__text">
                                <p>20 Kilometers to the Central Bussiness District</p>

                                <div class="row row-cols-3 sm:row-cols-1 text-left">
                                    <div class="pb-3">
                                        <span class="fas fa-caret-down mr-2 fa-xl"></span>
                                        <h5>Total conservancy Area</h5>
                                        <div class="ml-5">
                                            <span>400 Acres</span>
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <span class="fas fa-caret-down mr-2 fa-xl"></span>
                                        <h5>Physical Location</h5>
                                        <div class="ml-5">
                                            <span>Ongata Rongai, Nairobi</span>
                                        </div>
                                    </div>
                                    <div class="pb-3">
                                        <span class="fas fa-caret-down mr-2 fa-xl"></span>
                                        <h5>Distance to Airports</h5>
                                        <div class="ml-5">
                                            <span>15km to Wilson <br> 30 km to JKIA</span>
                                        </div>
                                    </div>


                                    <div class="pb-3">
                                        <span class="fas fa-caret-down mr-2 fa-xl"></span>
                                        <h5>Scenic Attractions</h5>
                                        <div class="ml-5 text-left">
                                            <span> Nairobi National Park <br> Elephant Orphanage <br> Giraffe Centre <br>
                                                Ngong Hills <br> Karen Blixen <br> National Museums of Kenya </span>
                                        </div>
                                    </div>

                                </div>
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
                            <Link :href="route('booking')" class="wow animate__bounce primary-btn" data-wow-duration="2s"
                                data-wow-delay="0.5s">Book Now</Link>
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

        <Foota />
    </Heroto>
</template>

<style>
@media (max-width: 576px) {
    .my-element {
        display: none;
    }
}
</style>
