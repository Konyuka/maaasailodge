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
        <!-- Rooms Details Section Begin -->
        <section class="room-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="room__details__content">

                            <div class="room__details__title">
                                <h2>Premium Room</h2>
                                <a href="#" class="primary-btn">Book a Reservation</a>
                            </div>
                            <div class="room__details__desc">
                                <h2>Description:</h2>
                                <p>We’re halfway through the summer, but while plenty of people are kicking back and
                                    enjoying their vacations, the social media development teams likely aren’t doing the
                                    same. In the past two weeks alone, we’ve seen four big new updates that can directly
                                    impact the social marketing campaigns of hotels, resorts, and other businesses in the
                                    hospitality industry. Let’s take a close look at each one.</p>
                                <p>The new desktop version of the site is significantly improved, which will make it easier
                                    for hotels and resorts to navigate the platform.</p>
                                <p>There is one big change though that we want to note, and that’s the more live video and
                                    local moments (the latter of which are based on your location). These will be
                                    prioritized in users’ feeds, so take advantage of this and create this content to
                                    improve your reach and connect with more members of your target audience.</p>
                                <p>We’ve gotten yet another new feature for Instagram Stories, and this time it’s the Chat
                                    sticker, which allows you to invite Story followers to join in on a new group chat.
                                    Instagram is currently advertising this as a way to jumpstart big group conversations or
                                    make plans.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__facilities">
                                        <h2>Others facilities:</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li><span class="icon_check"></span> Takami Bridal Attire</li>
                                                    <li><span class="icon_check"></span> Esthetic Salon</li>
                                                    <li><span class="icon_check"></span> Multilingual staff</li>
                                                    <li><span class="icon_check"></span> Dry cleaning and laundry</li>
                                                    <li><span class="icon_check"></span> Credit cards accepted</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6">
                                                <ul>
                                                    <li><span class="icon_check"></span> Rent-a-car</li>
                                                    <li><span class="icon_check"></span> Reservation & confirmation</li>
                                                    <li><span class="icon_check"></span> Babysitter upon request</li>
                                                    <li><span class="icon_check"></span> 24-hour currency exchange</li>
                                                    <li><span class="icon_check"></span> 24-hour Manager on Duty</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__more__facilities">
                                        <h2>Most popular facilities:</h2>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-1.png"
                                                            alt=""></div>
                                                    <h6>Air Conditioning</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-2.png"
                                                            alt=""></div>
                                                    <h6>Cable TV</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-3.png"
                                                            alt=""></div>
                                                    <h6>Free drinks</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-4.png"
                                                            alt=""></div>
                                                    <h6>Unlimited Wifi</h6>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-5.png"
                                                            alt=""></div>
                                                    <h6>Restaurant quality</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-6.png"
                                                            alt=""></div>
                                                    <h6>Service 24/24</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-7.png"
                                                            alt=""></div>
                                                    <h6>Gym Centre</h6>
                                                </div>
                                                <div class="room__details__more__facilities__item">
                                                    <div class="icon"><img src="img/rooms/details/facilities/fac-8.png"
                                                            alt=""></div>
                                                    <h6>Spa & Wellness</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery__slider owl-carousel">
                                <div class="photos__item small__item set-bg" data-setbg="heroto/img/maasai/slider/1.jpg">
                                </div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/2.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/3.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/9.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/5.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/6.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/10.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/7.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/8.jpg"></div>
                                <div class="photos__item set-bg" data-setbg="heroto/img/maasai/slider/11.jpg"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rooms Details Section End -->
        <Foota />
    </Heroto>
</template>

<style></style>
