<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head } from '@inertiajs/vue3';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
import Navbar from '@/Components/Heroto/Navbar.vue'
import Foota from '@/Components/Heroto/Footer.vue'

</script>

<template>
    <Head title="Home" />

    <Heroto>
        <Navbar />
        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option set-bg" data-setbg="./heroto/img/maasai/contact.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h1>Booking</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-5">
                        <div class="contact__form">
                            <h2>Check Availability</h2>

                            <div class="row">
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Check-in Date</label>
                                    <VueDatePicker v-model="date"></VueDatePicker>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Check-out Date</label>
                                    <VueDatePicker v-model="date"></VueDatePicker>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Number of Adults</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Number Input</small>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Number of Children</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted">Number Input</small>
                                </div>
                            </div>


                            <div class="row mt-4">
                                <div class="col-6">
                                    <select class="w-full">
                                        <option selected>Select Room</option>
                                        <option value="1">Park View Rooms</option>
                                        <option value="2">Garden View Rooms</option>
                                        <option value="3">Standard Triple Rooms</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <!-- <p> Scroll to view the rooms <i class="fas fa-angle-down"></i> </p> -->
                                </div>
                            </div>


                            <div class="row mt-5">
                                <a href="#" class="primary-btn" data-v-09bd9859="">Confirm Availability <i
                                        class="fas fa-eye"></i> </a>
                            </div>


                        </div>
                    </div>
                    <div class="mt-5 mt-md-0 col-lg-6 offset-lg-1 col-md-6 col-sm-7">
                        <div class="contact__form">
                            <h2>Any question?</h2>
                            <form action="#">
                                <input type="text" placeholder="Your Name">
                                <input type="number" placeholder="Phone Number">
                                <input type="email" placeholder="Email Address">
                                <textarea placeholder="Your Message"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

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
