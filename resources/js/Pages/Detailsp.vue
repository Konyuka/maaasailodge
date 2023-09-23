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
                                <h2>Park View Rooms</h2>
                                <a href="#" class="primary-btn">Download Price Catalogue</a>
                            </div>
                            <div class="room__details__desc">
                                <h2>Description:</h2>
                                <p>
                                    Indulge in the extraordinary at Masai Lodge with our exclusive Park-Facing Rooms, where
                                    nature and luxury harmoniously converge. Picture yourself waking up to the soft murmur
                                    of leaves, the symphony of birdsong, and the captivating vista of an expansive, verdant
                                    park just beyond your window. These rooms are your gateway to a world of tranquility,
                                    offering a serene escape from the frenetic pace of everyday life. Whether you're
                                    savoring a cup of freshly brewed coffee on your private balcony or unwinding in the
                                    plush comforts of your room, the park is your backdrop, ensuring an enchanting and
                                    restful stay. Elevate your experience with us – reserve your Park-Facing Room now and
                                    let nature's beauty embrace you. Your oasis awaits.
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
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 12,000</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Half Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 15,000</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Full Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 18,000</span>
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
                                                        Bed & Breakfast <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 8,500  (Kids 4-10Yrs - Ksh. 4,000)</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Half Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 10,500 (Kids 4-10Yrs - Ksh. 5,000)</span>
                                                    </li>
                                                    <li><span class="icon_check"></span> Full Board <i
                                                            class="mx-4 fas fa-arrow-right"></i> <span>Ksh. 12,000 (Kids 4-10Yrs - Ksh. 6,000)</span>
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
                                                    <li>Nature walk to Kitengela glass bridge  <br> <span>Extra cost of Ksh. 200</span>
                                                    </li>
                                                    <li>Swimming Pool <br> <span>Ksh. 400 (Kids Ksh 200 & Free for inhouse guests)</span>
                                                    </li>
                                                    <li>Game drive to Nairobi National Park <br> <span>Extra cost of Ksh. 15,000 <br> Entry fee of $60(Non Residents) & Ksh.500(Residents)</span>
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
                                                        Breakfast <i
                                                            class="mx-4 fas fa-caret-right"></i> <span>Ksh. 1,500  (Kids Below 10Yrs - Ksh. 800)</span>
                                                    </li>
                                                    <li>Buffet Lunch <i
                                                            class="mx-4 fas fa-caret-right"></i> <span>Ksh. 2,500 (Kids Below 10Yrs - Ksh. 1,500)</span>
                                                    </li>
                                                    <li>Buffet Dinner <i
                                                            class="mx-4 fas fa-caret-right"></i> <span>Ksh. 3,000 (Kids Below 10Yrs - Ksh. 1,500)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="mt-5 gallery__slider owl-carousel">
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
