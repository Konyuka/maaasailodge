<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: null
})

const submitSub = () => {
    form.post(route('register.subscriber'), {
        onSuccess: () => {
            alert('Email subscribed sucessfully')
            form.reset();
        }
    })
}

</script>

<template>
    <!-- Footer Section Begin -->
    <div class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-1.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-2.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-3.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-4.png" alt=""></a>
                        </div>
                        <div class="logo__carousel__item">
                            <a href="#"><img src="img/logo/logo-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="footer__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="img/log.png" alt=""></a>
                            </div>
                            <ul>
                                <h4 class="wow animate__lightSpeedInLeft" data-wow-duration="1s">+254 723 160 888</h4>
                                <h4 class="wow animate__lightSpeedInLeft" data-wow-duration="1.5s">info@maasailodge.com</h4>
                                <h4 class="wow animate__lightSpeedInLeft" data-wow-duration="2s">Magadi Road, Ongata Rongai
                                </h4>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1 col-md-5 offset-md-1 col-sm-6">
                        <div class="footer__widget">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Booking</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Review</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Room</a></li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <div class="footer__newslatter">
                            <h4>Subscribe our newlatester</h4>
                            <form @submit.prevent="submitSub" class="wow animate__rubberBand" data-wow-duration="1s">
                                <input v-model="form.email" type="text" placeholder="Your E-mail Address">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer__newslatter__find">
                                <h5>Find Us:</h5>
                                <div class="footer__newslatter__find__links">
                                    <a href="#"><i class="fa fa-tripadvisor wow animate__lightSpeedIn"
                                            data-wow-duration="1.5s"></i></a>
                                    <a href="#"><i class="fab fa-facebook wow animate__lightSpeedInRight"
                                            data-wow-duration="2s"></i></a>
                                    <a href="#"><i class="fab fa-twitter wow animate__lightSpeedInRight"
                                            data-wow-duration="2.5s"></i></a>
                                    <a href="#"><i class="fab fa-instagram wow animate__lightSpeedInRight"
                                            data-wow-duration="3s"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;
                                <!-- <script>
                                    document.write(new Date().getFullYear());
                                </script> -->
                                All rights reserved Masai Lodge | Developed by <a href="https://www.linkedin.com/in/michaelsaiba/" target="_blank"
                                    class="wow animate__rubberBand">Michael Saiba</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <ul class="footer__copyright__links">
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Footer Section End --></template>

<style></style>