<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

const currentPath = computed(()=>{
    return window.location.pathname;
})

</script>

<template>
    <div>
        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__logo">
                <a href="./index.html"><img src="img/log.png" alt=""></a>
            </div>
            <div id="mobile-menu-wrap"></div>
            <div class="offcanvas__btn__widget">
                <Link :href="route('booking')">Book Now <span class="arrow_right"></span></Link>
            </div>
            <div class="offcanvas__widget">
                <ul>
                    <li class="text-dark mb-1"><span class="icon_phone"></span> +254 723 160 888</li>
                    <li class="text-dark mb-1"><span class="icon_mail"></span> info@maasailodge.com</li>
                    <li class="text-dark mb-1"><span class="icon_pin_alt"></span> Magadi road, <br>  <span class="text-dark ml-4">Ongata Rongai, Nairobi</span></li>
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

            <div style="background-color: white;" class="menu-margin header__nav__option">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="header__logo">
                                <Link to="/"><img class="mobile-height" src="img/log.png" alt=""></Link>
                            </div>
                        </div>
                        <div class="col-lg-10" style="margin-top: 12px;">
                            <div class="header__nav">
                                <nav class="header__menu">
                                    <ul class="menu__class">
                                        <li><Link :class="[currentPath == '/' ? 'primary-color' : 'black-color']" :href="route('home')">Home</Link></li>
                                        <li><Link :class="[ currentPath == '/our-rooms' ? 'primary-color': 'black-color' ]"  :href="route('rooms')">Rooms</Link></li>
                                        <li><Link :class="[ currentPath == '/our-services' ? 'primary-color': 'black-color' ]"  :href="route('services')">Our Services</Link></li>
                                        <li><Link :class="[ currentPath == '/about-us' ? 'primary-color': 'black-color' ]"  :href="route('about')">About Us</Link></li>
                                        <!-- <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="./about.html">About Us</a></li>
                                                <li><a href="./room-details.html">Room Details</a></li>
                                                <li><a href="./blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        

                                        <li><Link :class="[ currentPath == '/contact-us' ? 'primary-color': 'black-color' ]"  :href="route('contact')">Contact Us</Link></li>
                                        <li><Link :class="[ currentPath == '/blogs-and-gallery' ? 'primary-color': 'black-color' ]"  :href="route('booking')">Media</Link></li>
                                        <!-- <li><Link :class="[ currentPath == '/blogs-and-gallery' ? 'primary-color': 'black-color' ]"  :href="route('media')">Media</Link></li> -->
                                    </ul>
                                </nav>
                                <div class="header__nav__widget">
                                    <Link :href="route('booking')">Book Now <span class="arrow_right"></span></Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open">
                        <span class="fa fa-bars text-dark"></span>
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

.black-color{
    color: black !important; 
}
.primary-color{
    color: #E9AD28 !important; 
    font-weight: 600;
}

.menu-margin{
    margin-top: 40px;
}

@media (max-width: 767px) {
  .menu-margin {
    margin-top: 0px !important;
  }
  .mobile-height{
    height: 60px;
  }
  .mobile-text{
    font-size: 10px;
  }
}
</style>