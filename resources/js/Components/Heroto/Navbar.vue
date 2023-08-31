<script setup>
import { Link } from "@inertiajs/vue3";

</script>

<template>
    <div>
        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__logo">
                <a href="./index.html"><img src="img/logo.png" alt=""></a>
            </div>
            <div id="mobile-menu-wrap"></div>
            <div class="offcanvas__btn__widget">
                <a href="#">Book Now <span class="arrow_right"></span></a>
            </div>
            <div class="offcanvas__widget">
                <ul>
                    <li><span class="icon_pin_alt"></span> Magadi road,</li>
                    <li><span class="icon_phone"></span> (123) 456-78-910</li>
                </ul>
            </div> 
            <div class="offcanvas__language">
                <img src="img/lan.png" alt="">
                <span>English</span>
                <i class="fa fa-angle-down"></i>
                <ul>
                    <li>English</li>
                    <li>Bangla</li>
                </ul>
            </div>
            <div class="offcanvas__auth">
                <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div style="background-color: black;" class="header__top fixed-top"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="header__top__widget wow animate__pulse">
                                <li style="color: white;"><span class="icon_pin_alt"></span>Magadi Road, Ongata Rongai, Nairobi</li>
                                <li style="color: white;"><span class="icon_phone"></span> +254 723 160 888 </li>
                                <li style="color: white;"><span class="icon_mail"></span> info@maasailodge.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <div class="header__top__right">
                                <div class="header__top__auth">
                                    <ul>
                                        <li class="primary-color wow animate__pulse"><a href="https://www.facebook.com/MaasaiLodgeKenya" target="_blank"> <i class="fab fa-facebook primary-color fa-lg"></i> </a></li>
                                        <li class="primary-color wow animate__pulse"><a href="https://www.instagram.com/masailodgeofficial/" target="_blank"> <i class="fab fa-instagram primary-color fa-lg"></i> </a></li>
                                        <li class="primary-color wow animate__pulse"><a href="https://twitter.com/maasailodge" target="_blank"> <i class="fab fa-twitter primary-color fa-lg"></i> </a></li>
                                        <li class="primary-color wow animate__pulse"><a href="https://www.tripadvisor.com/Hotel_Review-g294207-d1787285-Reviews-Masai_Lodge-Nairobi.html" target="_blank"> <i class="fa fa-tripadvisor primary-color fa-lg"></i> </a></li>
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-color: white; margin-top: 40px;" class="header__nav__option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="header__logo">
                                <Link to="/"><img src="img/log.png" alt=""></Link>
                            </div>
                        </div>
                        <div class="col-lg-10" style="margin-top: 12px;">
                            <div class="header__nav">
                                <nav class="header__menu">
                                    <ul class="menu__class">
                                        <li to="/contact-us" class="active"><Link :href="route('home')">Home</Link></li>
                                        <li><Link style="color: black;" :href="route('rooms')">Rooms</Link></li>
                                        <li><Link style="color: black;" :href="route('services')">Our Services</Link></li>
                                        <li><Link style="color: black;" :href="route('about')">About Us</Link></li>
                                        <!-- <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="./about.html">About Us</a></li>
                                                <li><a href="./room-details.html">Room Details</a></li>
                                                <li><a href="./blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->

                                        <li><Link style="color: black;" :href="route('contact')">Contact Us</Link></li>
                                        <li><Link style="color: black;" :href="route('media')">Media</Link></li>
                                    </ul>
                                </nav>
                                <div class="header__nav__widget">
                                    <a href="#">Book Now <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open">
                        <span class="fa fa-bars"></span>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->
    </div>
</template>

<style>
.fixed-top {
  position: fixed;
  top: 0;
  width: 100%;
}
</style>