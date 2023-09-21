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
                            <h1>Our Rooms</h1>
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
                            <span>
                                <h2>From</h2>
                                <h2><sup>KES</sup>4,000<span>/day</span></h2>
                            </span>

                            <div class="my-2 mx-3">
                                <p>
                                    <h6>
                                        Experience Unparalleled Serenity in Our Park View Rooms! <br> <br>
                                    </h6>

                                    Wake up to the beauty of nature right outside your window. Our Park View Rooms offer an
                                    exquisite blend of comfort and the great outdoors. Imagine sipping your morning coffee
                                    with the tranquil park as your backdrop, or enjoying a mesmerizing sunset from the
                                    comfort of your room. Book your stay today and let the scenic views be your personal
                                    oasis!
                                </p>
                            </div>

                            <Link :href="route('room.detail.park')">View Details</Link>
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
                            <span>
                                <h2>From</h2>
                                <h2><sup>KES</sup>3,500<span>/day</span></h2>
                            </span>

                            <div class="my-2 mx-3">
                                <p>
                                    <h6>
                                        Discover Blissful Tranquility in Our Garden View Rooms! <br> <br>
                                    </h6>

                                    Escape to a world of natural beauty with our Garden View Rooms. These rooms provide a
                                    peaceful retreat, surrounded by lush greenery and vibrant flora. Whether you're starting
                                    your day with a gentle stroll through our gardens or unwinding on your private balcony,
                                    you'll be immersed in the sights and sounds of nature. Reserve your Garden View Room now
                                    for a serene and rejuvenating experience like no other
                                </p>
                            </div>

                            <Link :href="route('room.detail.garden')">View Details</Link>
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
                            <h3>Standard Triple Rooms/Villa</h3>
                            <span>
                                <h2>From</h2>
                                <h2><sup>KES</sup>10,000<span>/day</span></h2>
                            </span>

                            <div class="my-2 mx-3">
                                <p>
                                    <h6>
                                        Experience Home Away From Home – Our Spacious Villas Await You! <br> <br>
                                    </h6>

                                    At our welcoming retreat, we understand the importance of family time. That's why we
                                    offer beautifully appointed villas that are perfect for large families. With ample
                                    space, multiple bedrooms, and a fully equipped kitchen, you can enjoy the convenience of
                                    self-catering while creating lasting memories with your loved ones. Unwind, relax, and
                                    relish quality time together in the comfort of your own villa. Book your family getaway
                                    today and make every moment count.
                                </p>
                            </div>

                            <Link :href="route('room.detail.villa')">View Details</Link>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- Rooms Section End -->


        <Foota />
    </Heroto></template>

<style></style>
