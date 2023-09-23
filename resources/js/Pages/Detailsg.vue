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
                                <a href="#" class="primary-btn">Download Price Catalogue</a>
                            </div>
                            <div class="room__details__desc">
                                <h2>Description:</h2>
                                <p>
                                    At Masai Lodge, we invite you to immerse yourself in the enchanting allure of our
                                    Garden View Rooms. These unique accommodations offer a perfect blend of comfort and
                                    natural splendor, ensuring your stay is nothing short of extraordinary.

                                    Imagine waking up to the soft rustling of leaves, the gentle fragrance of blossoming
                                    flowers, and the picturesque sight of a meticulously manicured garden just outside your
                                    window. Our Garden View Rooms provide you with the opportunity to escape the ordinary
                                    and embrace the tranquility of nature.

                                    Whether you're enjoying a morning cup of tea on your private balcony, relaxing in the
                                    cozy interior of your room, or simply gazing out at the lush greenery, you'll be
                                    surrounded by the soothing ambiance of our exquisite garden. It's your personal
                                    sanctuary, a place where you can unwind and rejuvenate.

                                    Book your Garden View Room today and discover a world where nature's beauty and
                                    luxurious comfort come together in perfect harmony. Let the garden be your backdrop as
                                    you create cherished memories during your stay at [Hotel Name]. Your escape to serenity
                                    starts here.
                                </p>

                            </div>

                            <div class="row mb-5">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__facilities">
                                        <h2>Double Occupancy:</h2>
                                        <div class="row">


                                            <div class="col-lg-12">
                                                <ul>
                                                    <li><span class="icon_check"></span> Bed & Breakfast <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 11,000</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Half Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 14,000</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Full Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 17,000</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__facilities">
                                        <h2>Single Occupancy:</h2>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li><span class="icon_check"></span>
                                                        Bed & Breakfast <i class="mx-4 fas fa-arrow-right"></i> <span>Ksh.
                                                            7,500 (Kids 4-10Yrs - Ksh. 3,500)</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Half Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 9,000 (Kids
                                                            4-10Yrs - Ksh. 4,500)</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Full Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 11,000 (Kids
                                                            4-10Yrs - Ksh. 5,500)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-5 mt-5">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__facilities">
                                        <h2>Package includes:</h2>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>Nature walk to Kitengela glass bridge <br> <span>Extra cost of Ksh.
                                                            200</span>
                                                    </li>
                                                    <li>Swimming Pool <br> <span>Ksh. 400 (Kids Ksh 200 & Free for inhouse
                                                            guests)</span>
                                                    </li>
                                                    <li>Game drive to Nairobi National Park <br> <span>Extra cost of Ksh.
                                                            15,000 <br> Entry fee of $60(Non Residents) &
                                                            Ksh.500(Residents)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="room__details__facilities">
                                        <h2>Meal plans per person:</h2>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ul>
                                                    <li>
                                                        Breakfast <i class="mx-4 fas fa-caret-right"></i> <span>Ksh. 1,500
                                                            (Kids Below 10Yrs - Ksh. 800)</span>
                                                    </li>
                                                    <li>Buffet Lunch <i class="mx-4 fas fa-caret-right"></i> <span>Ksh.
                                                            2,500 (Kids Below 10Yrs - Ksh. 1,500)</span>
                                                    </li>
                                                    <li>Buffet Dinner <i class="mx-4 fas fa-caret-right"></i> <span>Ksh.
                                                            3,000 (Kids Below 10Yrs - Ksh. 1,500)</span>
                                                    </li>
                                                </ul>
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
</Heroto></template>

<style></style>
