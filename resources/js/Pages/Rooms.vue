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
                        <div class="breadcrumb__text">
                            <h1>Our Room</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Rooms Section Begin -->
        <section class="rooms spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-0 order-lg-2 order-md-2 col-md-6">
                        <div class="room__pic__slider owl-carousel">
                            <div class="room__pic__item set-bg" data-setbg="/heroto/img/maasai/parks.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-md-1 col-md-6">
                        <div class="room__text">
                            <h3>Park View Rooms</h3>
                            <h2><sup>KES</sup>10,000<span>/day</span></h2>
                            <ul>
                                <li><span>Size:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Bed:</span>King Beds</li>
                                <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>View:</span>Park View</li>
                            </ul>
                            <Link :href="route('room.detail')">View Details</Link>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-3 order-md-3 col-md-6">
                        <div class="room__pic__slider owl-carousel">
                            <div class="room__pic__item set-bg" data-setbg="/heroto/img/maasai/garden.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-3.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-4 order-md-4 col-md-6">
                        <div class="room__text right__text">
                            <h3>Garden View Rooms</h3>
                            <h2><sup>KES</sup>10,000<span>/day</span></h2>
                            <ul>
                                <li><span>Size:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Bed:</span>King Beds</li>
                                <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>View:</span>Garden View</li>
                            </ul>
                            <Link :href="route('room.detail')">View Details</Link>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-6 order-md-6 col-md-6">
                        <div class="room__pic__slider owl-carousel">
                            <div class="room__pic__item set-bg" data-setbg="/heroto/img/maasai/st.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-4.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-2.jpg"></div>
                            <div class="room__pic__item set-bg" data-setbg="img/rooms/room-1.jpg"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6">
                        <div class="room__text">
                            <h3>Standard Triple Rooms</h3>
                            <h2><sup>KES</sup>12,300<span>/day</span></h2>
                            <ul>
                                <li><span>Size:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Bed:</span>King Beds</li>
                                <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>View:</span>City View</li>
                            </ul>
                            <Link :href="route('room.detail')">View Details</Link>
                        </div>
                    </div>

                    
                </div>

            </div>
        </section>
        <!-- Rooms Section End -->
        <Foota />
    </Heroto>
</template>

<style></style>
