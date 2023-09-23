<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head } from '@inertiajs/vue3';
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import Navbar from '@/Components/Heroto/Navbar.vue';
import Foota from '@/Components/Heroto/Footer.vue';
import { useForm } from '@inertiajs/vue3';
import moment from 'moment';

const formatDate = (date) => {
    return moment(date).format("LLLL");
}

const form = useForm({
    name: null,
    phone: null,
    email: null,
    message: null,
    inDate: null,
    outDate: null,
    adults: null,
    children: null
});


const submit = () => {
    form.post(route('submit.booking'), {
        onSuccess: () => {
            alert('One of our staff will contact you shortly')
            form.reset();
        }
    });

}
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
                        <div class="breadcrumb__text wow slideInLeft" data-wow-duration="2s">
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

                    <div class="mt-5 mt-md-0 col-lg-6 col-md-6 col-sm-7">
                        <div class="contact__form">
                            <h2>Contact Details</h2>
                            <form>
                                <input required v-model="form.name" type="text" placeholder="Your Name">
                                <p v-if="form.errors.name" style="color:red; font-size: 14px; margin-top: -20px;">{{  form.errors.name  }}</p>
                                <input required v-model="form.phone" type="number" placeholder="Phone Number">
                                <p v-if="form.errors.phone" style="color:red; font-size: 14px; margin-top: -20px;">{{ form.errors.phone }}</p>
                                <input v-model="form.email" type="email" placeholder="Email Address">
                                <textarea required v-model="form.message" placeholder="Your Message"></textarea>
                                <p v-if="form.errors.message" style="color:red; font-size: 14px; margin-top: -20px;">{{ form.errors.message }}</p>
                            </form>
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-5">
                        <div class="contact__form">
                            <h2>Booking Details</h2>

                            <div class="row mb-5">
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Check-in Date</label>
                                    <VueDatePicker v-model="form.inDate"></VueDatePicker>
                                    <p v-if="form.errors.inDate" style="color:red; font-size: 14px; margin-top: -20px;">{{ form.errors.inDate }}</p>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Check-out Date</label>
                                    <VueDatePicker v-model="form.outDate"></VueDatePicker>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Number of Adults</label>
                                    <input v-model="form.adults" type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted mt-2">Number Input</small>
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Number of Children</label>
                                    <input v-model="form.children" type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted mt-2">Number Input</small>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <button @click.prevent="submit()" href="#" class="primary-btn" data-v-09bd9859="">
                                    Submit Booking Request <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <div class="row mb-5">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h1 class="text-dark">Rooms Preview</h1>
                </div>
            </div>
        </div>


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
                            <h2><sup>KES</sup>10,000<span>/day</span></h2>
                            <ul>
                                <li><span>Size:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Bed:</span>King Beds</li>
                                <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>View:</span>Garden View</li>
                            </ul>
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
                            <h2><sup>KES</sup>12,300<span>/day</span></h2>
                            <ul>
                                <li><span>Size:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Bed:</span>King Beds</li>
                                <li><span>Services:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>View:</span>City View</li>
                            </ul>
                            <Link :href="route('booking')">View Details</Link>
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
