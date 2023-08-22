<script setup>
import LocomotiveScroll from 'locomotive-scroll';
import { onMounted, ref } from 'vue';

// const initY = ref('')

// onMounted(()=>{
//     const scroll = new LocomotiveScroll({
//         el: document.querySelector('[data-scroll-container]'),
//         smooth: true
//     });
//     scroll.on('scroll', (e) => {
//         initY.value = e.scroll.y
//     });
// })

</script>

<template>
    <div>
        <section class="hero spad set-bg" data-setbg="../../../heroto/img/maasai/3.jpg">
            <div class="container">


                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


                    <div class="carousel-inner">

                        <div class="row carousel-item active">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5 class="wow slideInLeft" data-wow-duration="2s">Maasai Lodge</h5>
                                    <h2 class="wow slideInRight" data-wow-duration="2s">Discover tranquility where nature is
                                        your retreat</h2>
                                </div>

                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5 class="wow slideInRight" data-wow-duration="2s">Maasai Lodge</h5>
                                    <h2 class="wow slideInLeft" data-wow-duration="2s">Experience the service you will not
                                        find anywhere else</h2>
                                </div>

                            </div>
                        </div>
                        <div class="row carousel-item">
                            <div class="col-lg-12 ">
                                <div class="hero__text">
                                    <h5 class="wow slideInLeft" data-wow-duration="2s">Maasai Lodge</h5>
                                    <h2 class="wow slideInRight" data-wow-duration="2s">Your stay turns into more than a
                                        vacation</h2>
                                </div>

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev wow slideInLeft" data-wow-offset="10" data-wow-iteration="1"
                        data-wow-duration="3s" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span style="color: black !important;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next wow slideInRight" data-wow-offset="10" data-wow-iteration="1"
                        data-wow-duration="3s" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Home About Section Begin -->
        <section class="home-about ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home__about__text">
                            <div class="section-title">
                                <h5>WE LET NATURE SPEAK FOR US</h5>
                                <h1>Maasai Lodge</h1>
                            </div>

                            <div class="wow slideInLeft" data-wow-duration="2s">
                                <p class="first-para">
                                    We let nature speak for us with breathtaking views of the Nairobi national park. Masai
                                    lodge
                                    offers warm hospitality and is located at the banks of Mbagathi river overlooking the
                                    national park.
                                </p>
                                <p class="last-para">
                                    With over 40 years of peerless hospitality excellence in the wilderness, our
                                    main aim is to provide you with renowned personalized services in our beautiful
                                    facility.
                                </p>
                            </div>
                            <!-- <img src="../../../heroto/img/home-about/sign.png" alt=""> -->
                        </div>
                    </div>
                    <div class="col-lg-6 wow animate__bounce" data-wow-offset="10">
                        <div class="home__about__pic">
                            <img src="../../../heroto/img/maasai/try.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home About Section End -->

        <!-- Services Section Begin -->
        <section class="services spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 wow animate__backInLeft" data-wow-duration="1s">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/accom.jpg" alt="">
                            <h4>Accomodation</h4>
                            <p>Comprised of single and double rooms, all the 14 manyatta shaped rooms are strategically
                                designed to face the Nairobi national park. This will give you a unique experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 wow animate__backInRight" data-wow-duration="2s">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/conf.jpg" alt="">
                            <h4>Conference Facilities</h4>
                            <p>Away for the busy life of the city and with our professionally competent team, we offer the
                                most serene environment for all levels of proffessional meetings covering your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 wow animate__rubberBand" data-wow-duration="2.5s">
                        <div class="services__item">
                            <img src="../../../heroto/img/maasai/bar.jpg" alt="">
                            <h4>Bar & Restaurant</h4>
                            <p>Our restaurant & bar offers impeccable services giving you an opportunity to indulge in both
                                local, international cuisines as you enjoy your favourite drink.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services Section End -->

        <!-- Home Room Section Begin -->
        <section class="home-room spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5 class="wow animate__fadeInDown" data-wow-duration="2s">OUR ROOMS</h5>
                            <h2 class="wow animate__bounceInDown" data-wow-duration="3s">Explore Our Hotel</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 wow animate__flipInX" data-wow-duration="3s">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/parks.jpg">
                            <div class="home__room__title">
                                <h4>Park View Rooms</h4>
                                <h2><sup>KES</sup> 10,000<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 wow animate__flip" data-wow-duration="3s">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/garden.jpg">
                            <div class="home__room__title">
                                <h4>Garden View Rooms</h4>
                                <h2><sup>KES</sup> 10,000<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 p-0 wow animate__flipInX" data-wow-duration="3s">
                        <div class="home__room__item set-bg" data-setbg="../../../heroto/img/maasai/st.jpg">
                            <div class="home__room__title">
                                <h4>Standard Triple Rooms</h4>
                                <h2><sup>KES</sup> 12,300<span style="color: white;">/night</span></h2>
                            </div>
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="home__explore">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <h3>Unwind in Comfort: Where Every Stay is a Journey to Relaxation and Luxury</h3>
                        </div>
                        <div class="col-lg-3 col-md-4 text-center">
                            <a href="#" class="primary-btn">Book a reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home Room Section End -->

        <!-- Testimonial Section Begin -->
        <section class="testimonial spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonial__pic">
                            <img src="../../../heroto/img/maasai/test.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial__text">
                            <div class="section-title">
                                <h5>Testimonials</h5>
                                <h2>What do customers say about us?</h2>
                            </div>
                            <div class="testimonial__slider__content">

                                <div class="testimonial__slider owl-carousel">

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Great place to relax and unwind with family. Good pool ample grounds. Best waiter
                                            ( Mr. Simon) very professional and friendly great guest centred service.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Dorcas Marshall</h5>
                                                        <span>Nairobi, Kenya</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>Beauty beyond measure, serenity with touch, background music accentuated by
                                            running waterfall, in the wild edge of Nairobi National Park, Masai Lodge is a
                                            rare grandeur. A must visit for those interested in seeing in it&#039;s simple
                                            nature, Nairobi&#039;s best kept secret.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Bulle Jarso</h5>
                                                        <span>Nairobi, Kenya</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial__item">
                                        <h5>Detailed Review:</h5>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <p>A very peaceful place perfectly lodged at the edge of Nairobi National park. If
                                            you&#039;re looking for tranquility, this is the place. The staff are very
                                            friendly and the food tastes great. If you&#039;re planning to spend a night,
                                            carry some warm clothes cuz it gets very cold in the evening.</p>
                                        <div class="testimonial__author">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__title">
                                                        <h5>Id-Mwarabu</h5>
                                                        <span>Local Guide</span>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div class="testimonial__author__social">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="slide-num" id="snh-1"></div>
                                <div class="slider__progress"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Chooseus Section Begin -->
        <div class="chooseus spad set-bg" data-setbg="heroto/img/maasai/wine.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="chooseus__text">
                            <div class="section-title">
                                <h5>WHY CHOOSE US</h5>
                                <h2>Get the tailored deals for bookings</h2>
                            </div>
                            <a href="#" class="primary-btn">Write to us <i class="fas fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chooseus Section End -->

        <!-- Gallery Section Begin -->
        <section class="gallery spad">
            <div class="gallery__text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-title">
                                <h5>OUR GALLERY</h5>
                                <h2>Capturing Elegance in Every Frame</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery__title">

                                <a href="#" class="mt-5 primary-btn">View Gallery <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery__slider owl-carousel">
                <div class="gallery__item small__item set-bg" data-setbg="heroto/img/maasai/slider/1.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/2.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/3.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/9.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/5.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/6.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/10.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/7.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/8.jpg"></div>
                <div class="gallery__item set-bg" data-setbg="heroto/img/maasai/slider/11.jpg"></div>
            </div>
        </section>
        <!-- Gallery Section End -->

        <!-- Latest Blog Section Begin -->
        <section class="latest-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h5>NEWS & EVENT</h5>
                            <h2>From Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                        <div class="latest__blog__pic set-bg"
                            data-setbg="https://www.congosafaristours.com/wp-content/uploads/2021/05/Nairobi-National-Park-1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                        <div class="latest__blog__text">
                            <div class="label">Tour</div>
                            <h5>The Nairobi National Park</h5>
                            <p><i class="fa fa-clock-o"></i> 15th August, 2023</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                        <div class="latest__blog__pic set-bg"
                            data-setbg="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYGBcZGiIcGxoaGiIdHxwcIRwaHCAiHSIjICwlIyIoIBwcJDUlKS0vMjIyHCM4PTgxPCwxMi8BCwsLDw4PHRERHTEoIyg0MTcxMzM6MTExMzExMTExMTMxMTExMTEzMTExMTMxMzExMTExMTExMTExMTExMTExMf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAEBQIDBgABB//EAD8QAAIBAwMCBAQEBAUDAwUBAAECEQADIQQSMUFRBSJhcRMygZGhscHRBiNC8BRScuHxFTOCYpKiJENjstIW/8QAGgEAAwEBAQEAAAAAAAAAAAAAAgMEAQAFBv/EAC8RAAICAgIBAgMHBAMAAAAAAAABAhEDIRIxQSJRBBNhMkJxgZGh8BRSsdEjcsH/2gAMAwEAAhEDEQA/AASiSfiCSVks0zMdhH/FU3Ne4KXLaEMcTM7swSMyOuBP0pwdWLeGBcsYUkCRPSY46fSKS3HB23Cj+TAkHbkkg+/2qFSVca1+36EilFao81OvEm3sK3JI3NPGDhRyfv6ULY1ly44tou4EFQB/UfmIEGI8syf0qrUaYvclTmeBziM8U1010WiYXbJgGAduZI9AczHpVsVStdjo8WrPL4VbbrbuDOTJAIPbk9ar8O8R229lzzAcE9PfHHPWhtbbl4SD0wSRzPX7QO1MtJpjbtwFKzG4kwWz9ozWZdJeQraPLniJkQAAREg/pPPrVuu8VZBJcj1J/OhNToh8MiAh3hiRkhTI8xHfpNVroCzMxhlOFXnjsOZrOMH2go7KreuN1+sCApJPHt6mmyuLTKSGwO+MnH7/AHq/SaK3btqWRt+7EZOKY6ayrFnZoB8pVuM5+9ZklFp60OUKQLcS5cYtCqADBnn3x3oB7J3Q5ncOPSn164BuCE+vAA+woNNOpuM7uGXsdykH8Qe2KHG0uzYRinsFGi2oBMCelQ8O07B93MBj2IwfuKJ/xBYESDtjAMLjsYzVGp17BiylZOCNvQ4kZpsILmjpPH15D94W1auG3vKltsMAZJ7Hk0s8T1IYoqWbibyILRDEZ5BP6VNNWxtoIUwTEeUg84zBPvAqnUeIsEVJnzSR2Azzx/eK3Kmnro5yi01ZHTOlu2Wu297SQZAx6jFTPiDDZKqFjsoxOMivLuvVlVCLbv6sAP8Ayg0A9hhbBYp82ALgLDJnAMxjk1KoxfYibT6IfxFquseeJBWOOvv9RS7S6ktH8sc4/c+lWXLpcbsdwvWJM+vSmHhG7yjKGQdwGYPeSMeonjNPjqKXsClbNVbubdG5aFnACmSMwI+1K9Xo3uru2lQEB5+bp+GJpk1otFtyq+YQOjQCYPvRWosW1UvBIAG5fyg0SS0PgmzMsqWkCi2bjN1CiF/1CQT9KN0GmW0kXivxGB2iRCzjB7x60SEDOr20fZHBA+nGBmiWQKLhd/NB/mTtnHyjPI9KTlyxi1EKwCxr7cC3uUjuZAzjywP771Ra3q5hQg6bTMjuSc/8mr9M6BgAu7jJ5PrM85/GmahAdxXaI4PNFJOh8FYC+r2uuAwYgk56DoBgZA+1ONRbG1Ru55nIjk1Te06lpQb4HtHsZP70u1WouEqDHJEccwPpxS1CSZslasp1bncbZjd3BxBiO3bivH0zhIChu/moB79s3CSDumIkwI7zIpzeuuEVRBgZPaSB1inxUeVI5QqNgej0wG5NsMT0OduDHP4R96nrNUgAQkA4MAHcQBgCDHfFCXWctDJucMfMrAKBxkjJj0+9LEc79pQOWdjBAkBYg5PUz3NTTw8cjd6JskdWtFmt8TuMZt22RV/qhTyMHBkH70FoNW9x2dz1yVYLkcY61R4hau/EjFrdgLyB/wCUckU2/h/w63atkXE3/EJ85iIET3z9qZJxhHrYmOOQh1Wqfe3mPPc11bf/AKfpB/U//tH6muof6rH7MH5U/cLfw5NgbbsJHzN/W3TrxP8Aeat1Fy21orcO8MPlH7dDH2oDVO/w1wEgTgHjEcjB+sfalVi9dJB2woO6MKO3J4waij8MprlKXT/wJpVaJ6/asfASC2CFlmiOxz7mh9FcDLBBJglSFMj36c17q9KzpcDSVVsBTIjJmc8UH4aj2zy0cYAwOmD1n2xVsLUe9+AB4llVWDLGRnIjjAyR+H+zXxB0uIbZABAGScxiDPX6dqywvPbDlgwOPmnPmg47Ub4aHW4Lgb4gyxUtGQMDGdwnqII96zLi5RTk+vIx7VNii/qgGYtcGfLuJ+bPBxEcU58MufEtt8MzcXPlIg4EASM4PT1oTSWrenuOxYNvfKwpwWBggGByegwR9Gyaq2zB7ZBMnaBwcR8qyBHbnNDJtUl14OUnGqFmp1d0naRMgEEDBH996M8IZlViIAmWAaNx9QZznn2qOv0nnBTyuZMiB1M+v/A71G1pRgEcAyZGY+tUacaZbDlJWF6jWW3BAByPYzxmcfhSjV6s5UCD1giPw4mo6p4EKhk/5eBHc0JfknpIEekxRYYKxcpWtBaXt1sicjA+tT0dhrnlTLExzHrGY7UDph5TPUg/amGk1JtqLkKXDAieOvP09aqxRVu+ieTdquy7W6S5atgXF2tPEjj3GKSo+91Sdizlp4HrWi8S1r3rXxHgEY8oMYI7kilbadQgZjmJbriuz0qoH1O7CbDLatBPLctfE3XAoYHbEjzR8vXj3qI8EFwu4ZLdo/LubIHQAwZg/ajpC29pwbgAkjbAMSQOpj+qjNMFACu/xWWY3wpKhhiOBgeteVycW+PbH17mYvaG5Z1Vu0LgYlQQ6ZgH9Y7Hr0rYhhcG0mJWRAxE85zSNNPcu3Ga5Ihv5KMIgcDjj9arN9rYZi0kEquJ46R0z7UalaW039A4pJaCLFi2rEm40CQFuf5vw4/WnWmlg03CTgEhQB6dc+9Yy4uoujFtiR5ixER2mfqK0Pg1wtbBLAOMXBGTGM4zXZJSguSYcJOKqh5ozb3MBJJjJG3gRA/PGKU+K3RullZkAkHpIxn061L+IJtqrsxxgruzPSMDpSTT+IXTtZF8gMOTxHaOmKRjjzufdmyl4CWvh9ijy3AxGyCQQcgjt9av8a1zWbTFWm4B5R6x2yMdutWo6I2ShuMsiT5yIxOO1KtSR8S2XIkuJnoDGR6CqozSbix0Nrs2Xhr3DatG4iksBvAxBjoJPX1qjVWB5tqDyHy7oM/b9aYaZmKlSRCmJjJwCOtUtB2woI3MSR0IGPxqqONcbOlPdCJNChJuXE+o4zg4/wBqLv6S4bdy2iDYRCw0iPqBEehoi/qdgZuIMkY4jrVeg8Q+Ku+38rsZHaMZnpjIAqT4q8bUomQyNKgTw3whYKneigQREiTxBgz96F//AM/tvSHJBXvEd4I6E5+tG6k/CHxDeIXqFlgTnsojr9qEv6y2B5XJ3cHMfQEYpayylboLTB18N3/92GInaIBj6j2px8W2pCJcLMsA2wvAPJEjjPPpQh06NtlzJzgicfjTDSWVUkxLQSTHNdJJblux0YewTY8Jt7RFsEczjM5rq7/EWTmEM/6f3rys/pn7ibXuZ9tYz7ggmQZg4IHQAjB+lKQHcNuG0n5Z4MdBEQRjpRHxLiBSCXiVClo546mRPp0FDNeuXAq/LcBPlJknExisxyUVar+fQ8eMvYhvONrAsBmCAenf+81O2HADPKQZ9Sc4xx6+3WqNTvWS3ytO7zEgSRIMQDU9NdLW/h7SSpgETBnIJ7fb0xRXq6vf7GPe0EjVC4NrH5pGQRDKJ29/t96FZLlrdcBJ3kQDJCqDEmOxEA9po/S2xbW58QgmQPICpA3Azu7j6mDUdTqioVQZEFAVyFziZzmYnjmjwT9NJfr9QscvCJOEuANdiSOVE5A59B1z3qtrrWSAhlRyoEZIx79M0SLyqhUBhgACIzPXpEZwKot3LsFl2yCFaT5oyRiMjMfSt4Sq+l7DYxt/Qt0TlrhDgLu69Nx7DMGmmo0KlDB2nbwe/X06UALiblMeYDOTBP0wINS1uoY7mLsBglQRt6yZwxj0in4XGmmWRmkklozvw1Z/+5AX5VE5z69assgI/nVuZzn79Kp8T+GtxQMdVkEY9zH517qFBbdIZSBBGQen6UUdC80VFXYXeCuYQ+pPMCrL8LaUR8zCPQQf9qV6ZxLdJIUj78Y+tFa0JttgcgmQViMY656/erIL0WTKXKSGmmSbPJIkyJwB7ftQovbiSiAAYB3ZPeRULUfDB2j5jxyeDmqVS2ouF2UbVJ2mJP8AyO1Bmi5RQXcmgq/qXIRw222vlyZMgSdozPbA/Kj9NeN1/ibZVSeT+nJ9qR63XpqLdoC3c3loTaR7ckZMjrTHQ6VkkurrOJLAD7zz6V4+ZvjvTGSuqHY1nmO0c5z0jA/PihtbeQzbKfMQT0Mgz74of4igQcHvumDx7RSrUEfE3E5Hcz9aT8PiqaatIBKmh+vjFtQmTgR3B9P9q80via3MWlHzwywAxEZKj9ZmgLNtTbZztYGQd4EA8kqSfmiPvTbQLaVAAdpAJVyFWcDAKwOT36U/4l1DStjpTdaKPEtMrp8QtelSsjymD29PQnPp1oFtPcX4lzeHQEebdMT0cEAk/wB5p7ndhGCxMNMEj1nnrNL9fo/iOWuNtP8AQBAEzMxEMPsaHDNqK/8AQVKxPqNOHi4XG5TtgGR6ETGPpUbWpaPhk7iIgsJM+kdOnFaC14daVWgnJGIxHBB9Imrn0tvaWRbflIG0rJgCRnkj9qOeaMn0xsHctFngmpT4cG55twDqWEqeQIOY9qaoxfzRtABx3n2NZix4b8QsHQKoyIjIP0mfrSnUaX4BLWyQDxB/X8KoxfFNLi0UTwJ+pM0PjeqNzfa2H4awWIgSTwP+aCex5AsgCMJMGCe0cc9RXlhAV3uwAjMnkmOQOlWLp7d508zeXjHC89+tBmyOctrQMYKK0OfDdL/LKTzzzx0j/mqdd4KvzQIAIEzie0Gr9HaNsQC21fz9un1oi7qIGYO7gHpU6juwtLsQabRtbuAuclSFAyQfx7daY3LgRUglmwSDmehk8VC9Z3XDkR05gDqJ/fvRf/TrYWQ0bhj061k4t9hKbVMW3bqgmFX6/wDFdVy+GW/X6sa6nX+I35q+n6GXu6raCVUOvOXjaOhWAZPpP71U3iCxuKc4BPQA5/vtSjTahcQrAAAYjPU8iBmeKNZ948jGQJAMA/eOJ7mlygopL+bPnONaDk1CFdyqSCYMwVP+qZBHqR0+tRa/tYY2zICjpwcCeDmqn1jONvxM+08d/X1Heg9Jf3MWaDsGBE+5njAgfWsg2rvo1Lex3rH2lB5mzkZ6iB5SYiexqvXXmfapAVSQdogR3BPeaGus4csoLTmeimPLzmOD35qK3Yfz7WbaSQTuiY6cx6UUJKLr2/wbB0GanUuF2bSSxy8CPbnvU9A4VXUtDTBI2yYzGQRz0rhqVKwABwQFhYzzOD0qq+84BG4dGGduY8x61vzKXF6vz/sKM2lxI6fSfzB/MlScncARnIMTnIx/zU3ti2xa9clc7QFhj94/KoeHqTcIJECJyJzMf2DXvjOluXBbRGBIzDHPAE4E9AM+nvXcmpU3X+hnzHypgfimut3WgiBHlO4k9MRNUKgS2uxtwPHl4M/XvQCWYP8AMLFpgBRuM9cgxTTVXFRBBAYnyqBkLBlue4q/HG2q6HTfpPEktMjaMboxuxOMg9PtUvELh3KCenQz3H6V1u0s8EHEY5kDpmKl4ri6QW3esd1z9jj6VY66E47uwvw62rW2G+O04E55xQF7TB2RSo3MwExOBg/T6Vfo7hKlBwSASZx3MUVoLmy8DAfZJEGRPHcGPMD14pOV/wDHKuzWpc7rQTqdKlp1baG82BHlQwIjr0+k0VcR2CynXEevHtROm1i3SWaCAdphfL1Mlp5wftV+lvKxncTiSIxPSDn1rwud1a2g4zafQivaG4rkXCFBM8E8Z9OKXanStnYPiYJIkEgT1z2rQeI6D4jSrCQeTInr0xHqYpd4ro0t2rYCeY8knrGQelPhNJre2a5oHsaoPcJCqoMZUYGOn9madXbquoiIBwCefaf0isXachQCCuSJ6Dr9ac6e/IVYUkdQM4HXFNzRelFmyly6NJpVB3gsCYBAjrAED0qjUKGxuiBkf3+lL7Vy5HkIA+kgc8GrdQ7OiMuc5/WpYRk27MigvTLuld5UDmOtXN4kFMBgemcce2aT6ncsFAMrLEt9/YUm02p6wAfrVKinofCSNm/iqeaVmcExH50u8RdLsA+WMCKz2p1zEDPk4Y5jv96hdumBIIBI557ijUEjZZHZpNFaRzD/ACJjI6/Sm+n+HbkoIED6x071nfCNa1yFIXaDy0j2zTfWpAydpiYWIjuB1+9dOA2Ew25flCdxE4MZ6xVTuLagSZM/1SaF02qX4dzZJCJLTzJ4/KrteV+Fa3GGKyVGZOD29aVJSq1/GMfBas9S/tMjjtj8K9t+IKWIHGePz7UlVyg83lgnygyYjr1paNW+6A3JP9MgDsfT61zg5aTETk5GwYj/ADA/eurNXNddkxEdK6upirRln05UbZlTnB+n94q7S6gW9qmHAk5jr68ihr10QDg5gnnaPX8ea5ipASdwkwcyvuImD+FUSV6ZGlaphWp1KgnaBkQBM5Of959Kt03yzuJIPK//AC6Tx9cUBoXNtijKVPRp6e8HyyZ7VdZusjMXJBJ5AAB9o/MULS6Mkq0M9S67NyTnlQSIIHI6cfce1A6d1wCGLnJIz7R7Z+hoW9qQBtLMqk/Kp+3SDRQYgApu3ROBkERP4dBWqFoyMXWg7T37gwxHYSPoQD+hj60fbeQQ6wxyDMExjH71nNFqg1yWKgQRujr0P39Ooo6ygDqVEgjBJiCBOM8xmD96Tlx0teQJquxsddaBMBgYAPaRzn++aktxCQzsQTwGJx9OR1oTT6hBLbSCYE5HpMHn8aCuaj4hIJY3JAUD+rMGTjjuKXDC9U3sCFthz3lt7tplZLnoFyJK9we2aS6nUszi4R8zGSMwoOIHt0oyVeFbKjduI8xZhAkHGB+9WXNIBbS58QBgxJB4A2ArAjqQRmRNelGoLj58/iWRdR2EoGeQj7vPtAG0TwQcA4j1oLXvNxtpOXbkD9Iox/honkuK55AI6wR1HHX/AIpXIkZH396oSp6MxS5K2NNAh2ud5kAGIGfw9qqOq23FjcfN5sLBXJP5T9DV3hShg8uoGJJPA6kDr2+tDLLs13uxMATAJA6dIn7GlZG47CtcmGXfKxtqf6pCiSDPH9nip6e9etXCw8x4g5CgfWolRcRSSqsBsYHBJE7cn0oN/EFs7WdsD5VHPPX096jnhvI0unv+MZCL78Gq04LguPLuzyB5f1nOKWeNHeMHKkeUk9+nei/BPFGueb4ZWcCRE/fMU8Fq3cEXLaEjqBmtj8PT00E8fJWYZbTuRP2x39TTXUWvhhWkkx3Gc+3tTw+FILm7cSvVWE+mJ5+tBeL6a3IYOQAIKnPpicUnMpxmrQp6ewC8zMmAY6y0DH0NV6PVH4Y3/LJkDGPelXiOvuIvlx26yKE8Mcsjy2RmD+VMx40k7C0jQeJ3GdMYBEjv7Vnk0rwxGMZJOAPWmaO7DJkEQF9fehzZJOJHHEkff96KMOKpGw7ostm3ctmyxdUXzrtiSREzz0mM9q9awgCQSc5ZuT2jPapaS0vxF9Wg4xkRV7213sxYyokE8K44xgfSicEo2g2DJ4wqXCseQGYBnzRzMTFFL4l8RmJJgL9QPSli6VLrTJAMmD/m+3HpRKWYUgEzED71umg4psYeFX0WYHnYEkdT2HEUat27c2qUEkNMRuUng+3Skil7QJAO8iJPNW+CXbltzvad8CIxkiZ+lBkblEyUZO0loafAt/EUs8mNrKMqT0ljENg8UFY0xLMSDEkg7pPPfiabeF6Ybdtwqu24Rtgcdgeee880ZrSnlCtBz/ZjtSVLi+IUMMm78Ge/wTHg/hXU7tOoAG/j1rqZv2N+WfLr89QI75Bz0JH95qVmzJ5I7yTC/apBjM5g5MHrkRNSuaV8QxgZMSRnIB4+4mqZpqVLoiTIXSycGQDyDuHOSM9u1df1BgEDyySJ6fj9qgisjSGBk8Rg/bv6VBL72zBUHYTKkdCIOZk4PWgdXs1RTdshdckjB5EGPrkxHrNH+RbYYtLtxtbAHOR+9Bau2sYO4M39JB4E9Cen2j7VsoAiDMkAgcjoY5rGjpRD21LQLnllTJGPMJ5xwYwa6zr1IMggAkpn5R79T2496W6i7vMxAHpEVyXISMT9fx6VkkmgPlqtj06rJUqD0G3IwOgJwZz+tW6jU7SlskC45AcjhFI4nmfWqhFvThr4DOQRbXghTwW9unag9Ft2q27hl3GcjkCPb9qaocFfl9fQHhxVse6HUm0CpIJW6RIiCCvfiDIPvRt7TKd6iYCiAwyNrTHqIb0pQD534MqGxHIJ4jBwoP6UaNTHygbpZdzGRDCQAeKXCN2bjtyBrlvai8zAxPJzVS8cfj70Z4pqd9uwMk7SScCfN+kc0Agx6+/pVa0h8FQ48Hfb8Ux/9s4n1jP3orw+1aZCty4bW3aFCQd5LmWYwZADfak+kZgSB2JOegNXuHIBUcQsep/GPOKRllJ+m6BklbZ1/Urbt33fzoTAHA3T5SPpH4UL/DegDBtXfyQCbSESDGJg884H17Uq8TLXLo06mQCS0egzn/So+9anU6oIlsqoCOgjbOOBtiMQI65zWOMpwpPr/AcK8ja1qpUE87ZarvD9SWHNItPrR55wQYzTn+H9MzgKoEtnJ6e/SnOFSSj0OjL07D314XBz+NBa1luLIn1ExjvR+otm0QLjIkzAkGY7QaDutbP9fNVPCpwpsmnK3pGT8asLO1CCSO/HvS7TOwO2YAMkQMmtPrfCrdxH/wAKzvqFJd7TeUm2ME2xw0H161i0uEvlTH2OP1qPJDhpmXfZq7WpnBAMcf3FXG/A8oKj2+/40o0WqAQH5ZHufrVz+JKIEyIyZ5qV90ugXqWgm1qFncM98ftQmsuuTBSAPTr/ALirVe2ODg9KLS/aUk7iDgQwx6Rn9KPmuhykAaa1GWkeswKYG4oG4sYIkRxSfTo1zezNMHEHEEjoD2mjL91flWI4HTHFPhGO/YNSGGlbdJgmfvRx0TFWlQDzJGQB2pJpdU1s8ShxjBHbNPPD9USPMx2x5SYI+080icVv6Da4xRRo9MyuwLEm55vaB0+gpqnhynkz1yeftSzUsd/lYyD2ifY02sXwFkmJOMGY7mOldHhxqX5Dr1cQu0ltQBtGPQftXtLzrSMDawHBzn711H8jH/d+4u37Hy+1cgSSR7dPeiPgOygrDZkREGYk9uK8QWgn/cJcj5QuM9P95rxNPcljujunGewkRP4UeRpeSFqj19K4uI1wjaDgjIgMoMx0z05pno9Pa+PdUqpDKGQk55IMTOD1HPtSLUaovtUkhgABHAiZx1Mx1rrepdLgeGE8NkdjM9vWp4tv7XYUG06ZcdKFvFN21AGKbj8pngnr196BvbiTswJjasgsP80dqv16ks8tu827eOpI49o71f4H4Wl1trlxCmQDEZHMqY5NG2krC0xchnpEESeM+9O9NpFt2/jXBE/9tD8xPf8A3q/W+FJZUsrhkBldwkEgdTImTAxigb157p3uCBtEA4kf+npj9KbBKMVJ/kLckS01y403CWYzmckCeq9auteHstkXpGw3ChHDAiSG9QMD60T4ffRLOpLMu4wgQxJLQSwxyP0oCxfcIQJKhjIMmAwAmOJOa6b8vdiZN2MrmnCuGQ+UpHPJmDg5zPHGaXvqWDptU7oAj1jZ+f5VD/GEJJyJwR0x260RevIXtNb8xUhmdZBA3bsjptJ5yCI9q7FCUk5Ja8/iMxvjJIlqbfwyttv6dxJMzJ7/AKVy7TP7elEeOWGW67Rgkf0iJOeY4/eqQQRMJxPGf/1pjeilxolYBAb5vovoIz0zTcKoSRtLLB9QolvpkrSsGSICxnI+ncd6K8X1oXTuR2MfVoH4IKVKPJ2Jn7C7+Fbau+ovOwBCkIJjcTyF7mIx61oksC2y6fb8XAcYgqvHUZMg8Uk/h/w9fhWG829nLEHI2rOQB/pA+1Otfq2F/dtyqr2HlLGTyQYE070x4uPlbAXLk76EN+9tvcELcYESOhPqJ719G/wxsaM3J/mXFlRHyr0+prMeKaFbl3TwFG64on0ZgT9efvX0fxvTC5bI6AY+nApj0xq3o+PNbuM+4zMQozgegoLUu9vNx9nYdfwzFNP4k1TW5S3g9W6/T96xF5mZiWJJnrU0rerGXRsvBv4gtW3Rix3qcN0Hv6f30o/xXw60Xu3rSFkc/EHIHmGY/wDKcGsFb0xDqGxMH6V9mvapVtWXwB8MD2+9bkU5YmvahE+9GD1WnufDDASDMACIj2rzQ+GXbh8qBQseaCZPUT6Vs31gIMKWkdIg9jUV8TCDaE2z0AyfqMTUajNKgfUjHXdFcVlVrRBn/KYn3iKk99H3LcUkqcwMTPWtZfui4JKeZe4Bn2FVMyqP+2qh4ztxx1peWbglaM512gDw+1bRAQh2nOeB25zXuuRW8wT0kR/ZqN9gN0NxyTIUD07z7V47K6A27nptB2kt3/5pUJSTUm+/xNTrYPbcEEHPtTXwjSCAY2qRycnnoKTaBn3uLnTE43YPtWh0Osd2KoigADaZ6U74jPxriP8Am3olqIDMWMgRg0RZd3INsz0IxgjpVu5SCCFaVzuI9yPwqnT6wAhEhSZAC8GepmlL4q49bX6BLLxI+Yf0/wDxPXPavKLtq8cr1/q9a6s/rF9Df6iR8g1jbbkjg00ta3awOw7YjAMEdM9x60q1zAjAMAn8P+aM0V8bVndEdOJ7ke1eo13QjwRVyXZlA6E9RmZ9O9XatEVQQgBVxJA/AjEDND27wDtBJBGFPQz60z8Vsslk/EcSwXYAPnyQSCegj0qWVqaMrYptXZOwA7GuznkjEA+gFaTwC7cS5d1DqgQqUhhhjgAgTmI9ppV4ZZRbguuV27i0eYjII2g/KT6g0drHN+NpVbQwoLGWgcwqkx0nvVkMcYr5mTrwvdnS9gDxjUPeIiAhkADrFU2bybQrHGCJMbTHvxz7flRoSpVg04mT2E4A55zNNfA/AbmrcW7e0FfnY4VVBgHAmcjoZpWSbk7bMbrQLdCgwQIIViRnoRIj2qFtmW4sEdcqRmJ+5zTj+Iv4Vu6bZce4jWWKp8RZ8mP6lIB7kRPHeq9fpPh3ltsWxneqAEkoCpCknykg9elbJXYu762KHTygkeUk4ns3QUVYv/Bt3AjxuG0SASVbcHExjG3HpU9PZlLvlkqSZkSMD9+lEa7w4Qu2cyRPtJ9+PxoIZuEqQVq0mXJ4gbtsb2fdPRBEepketefEI5uLEf1Ln7bvShNNadCAGUdeB0+01eyM8kkgHqVIzPHzU1tPRVzT2Xaay1zi4VQSWaOO3UHnpQv8R3It/D3l7jXAPlgbR5cZwZWI7GitHpRgvchAZjMmONw6iQKEvXfi662WGVId44kDdPMcgYnM+tC5xqkJk/UafTBLbIoXy2rQUxMyxAJj2UmPWrNDbt3N7yoDXDAjG1fLGe8E/WgLgIS7dFxdpJjafMCo2iQZgkg4z83NEXLQtW9hbeLahi4BGY7THoaB5Ip0wOUWxXc1AtH4kttt6hckzKK4BI7QQRFb7xv+IltgEEGeI7d6+d3/AA28bHm8y/DmFyZclm3DnFKNP4mTaVHbKYE9qe8lxpD8b3bNh4lasa2Wtv8ACudjwfftmsf4h4BetGXAgcEZmqbfiDqSVp9Y1Tm1Nw7gwnY3A/3jrQQu9hy4voV2LO62LjY+HAz1JLEqPaJ+tbDwPXi75WPA2DggwATg+/PpXz7VaswEwFHAGBnr7+tbn+DHA0ytkks85A6wOnp+FMy5LhX4E8lQwL2wRCOS2J28e45AoizpehBiekE47mKgusXfAyOOpEe4nNH6a4vyhTzzPfr/ALVLFb7Br6kE8P25UmOxpT4h4W7XCEuxxKmWj6SAZ+lNTq5kebHGDSzXa0KN0jPUj8OcV2adpR8nWI38KvqW2XFYbSQT5WMcgrkA++KAS29jdvCstzqCGgj2OKZMCzBha2ls7pMfSen0qu74WARMrOZGQZpCUum0NjG0C+CM92+OcA+Y8Y79a0GicfEId4WSN0AT/eM1Z4NYCyoTiq9T4WxO93WJO0SPpIjvUGTMp5Gpa1oC1eyGo1XxLn8tpzjy4B6/SetEeHaZo33CFO7b03RmIxHNAWrhtsfkYsMwcAx1PPNaOyoNvzDdnDbcfnS80+CUV0a6s8+GTmOfUD9K6ll/VJuMLiej4+kiuoOLM5fU+f65fL0/YmcV54TqdoYEBumeM9aYPomu7gBtyIwcSf760rWybV5rbe0/SRX0kbpS8GwdovCD4qi4VaYM5EZzMijjYfUsJuE27e4fE2wCCeFk5POYEVK34ObjoZYILYJY8DJwDAnMiDn3qet1W/8AkWiFABJOAABzRYsSrnPpGXXQJ4v4mMW7Y8iiCJMEDvmnfhert27QuGGdVlVYEASD0I28dRzWd8KtjDuQFVgxHVpxA6DHWmf/AFEDSOgcEqWRR1Kng59CKR8Rlc3S0tfkc0uiv/EJcDXDbS3buMZW2duw8SBxBjpgduaK/hLxUWLlyCSpABK8mD/T39qTazaioqxuCicZ9556xH51b4WqrdtgnDeUnAiePyyaHhzu/Jjjps1P8S+OpfVragwXWZxiYEfcGhPGU/l2pUBraqCQ07wDAicyCT9+tAeJ+HlCV2yZYqwzI5BxzxHpBq/W66LOybTfEBKmdzKIWeMKdw5oeMot8d292L49NFOjJ3vbJKS2+SvcbSCuMYFT1Oo320M+dQAMmDAgzntjpQH+LPxd5lzAMlueDyCe9Utq4BG4RkkROScc13y1ytBxi27Ybp3ls8RwJxn/AG9aOuvDZKbQOA8/ht4ikQcQTKzHQjt2q6zcPcHy55n8vanuF+RtDG3DQAQJBnPQj6etU+An4mpuvIljtBaIAmSe2Ao+9C6rVFVJxIQ9zzgcj1ojwBItIkiLtzzT/SAYP1gGhcd2DPWx5qVtkLYttuXfl8CYG4/TdFEalCQtsmfiOFIBEFFJYmfUCPrQF6+nxnNuFXbtAUQJYzmePlBiphDdu7TcC/DSA08Mxx9gOnep546uSJmh7a3SfKNqgAkkcZxXzXx7TfDvOFjaWJEcQTits3kbarbujLyOMHisT/ELH4rA+ke0V2GTcmm/A7HO3Q4/hRVZXO1S24Az0UjJHerfG02TtwKU+BK6+ZSPMYIOI7GfvxTnx5IQEkSee5jr7esCq4r119Bl7MbfOa+k/wAP2f8A6FFidykiPUn7HNfN7i5jk/rX1fwABLCpuU7BkSAVMAZBM49qVn5JelWDkbrQktIVC7ZUbSYJ83MSx9opjoNWZG4r2XIOemQfrmvdRrPK5ADJmdsZkf3xWf0nnI+GrDoZPl75yc/SlRae5ICO/tD7V+JFHKRDkEjjI6RkUFa8YXdtuICrZnOT1X0oS0lz4j/EYgIvlAzgZJg9Pb9KaaQC5/MGwSoAgAEk9OxNTZMi2nv6r9jr/tVnuvui3NtJCtnEGB27irzbuXLakvEdP6mEYgAUb4Xoi25js2gQu4AkEHn07U71GqIUbLe8GPlAEEdj69qklncapWxseVJmF1R1CQAHUSGLRMx0x3q++tx7YK4V/mIY4k+1PnN7abgRWUZKlob/AGjtNLE1jf8AbO1WEsAxxHQN60yalJc0loKfV0Jn0pt3l2mNxAM8E/rNO/8Aq4Q7XdiflPQjpheIxQepU3LobO23yTgqYkCOufzpe+luG5vbYufmnJPsOaZDGpxXNJsS6rsZfDQ5lc+prqHLxjehgDqO3+npxXUPyo+37szgwDQeIF0uuwVQkYk4J6CScYBpK1ltVqBs7Dc3QDuabaHSbw68sxEsQO3U15rL1vSobdv5jknqTX0UIcoq9R7GyaR2t1jIi6e2QWmBAj/3STn1pFav7HYhQXA2AHksSRMZyOnGYqehuIxZ7hnB579Ks8G0fnFx/lM7JzuMx+tT/EZr/wCq6BXptsKXS/DjcxgwBAyeCeRj86G1ulXei7tquAWJHETMcTiIA5o+7bbeA2VUzJOCe0daB+Nudrw4QiF5BH9UdMCo1K9oBSd2Ml8GVVzv3ESAwz6TyCe8cdKhc06WmDByLqgXFB4wQcR7EROZo3VeIyCwUIogDaTkbfU+3FI9ZqwwRVZiOu8ZHsZzQY5zbVmRnJjDxfXuxclY24VgSBt7gHkGTPalem3HaAhM4wJDRz+H5VNXItoSN0SNpEiOk47zV2g1tyxBUtbZuMZCnMrPQ1T5bfuMfQtZuFHB/PvRKMBmAZgZj9amLEMVcgEEwcZzP61WoELmSSaZCKCS0GJqIBwuABkfsBNerdg8DAmY7kUDcMqT3b96uuOBO3mIM/Sj4oLie+JKWTESRMdQAc/Sj/Atu+2rDCoxmO42jj3NLEtmRJ5XjNM/CN+y6bebkBAMzE5M9M/2KGlZzS6J6bSgKHJyznaOODtk8TiDU7WoO03FkF3J+WcDE88QJ+tD6Oyz3FtAqpY7QzGQDETPb2pvqNLbs3Ft27zOEWGP9O7jy57TPNco8l7IS1fp8kLF655jESMvmefwrvDrNvU/Ha5bQk4Q7eNoAkAZ5yYNQ8XvhUeG8x5BIM8QRwZ9IqfgVoW0kyWgQIGO/pzS44uE2x2LGlLYCmnNu5tdVMETPBHIPFT/AIz1gdrUDBSQMTE8GOxBo3xVFMXN0n5W4naeMDsfzrJeNXD8Qg9hVlpRs2SptIo0NwLeRzwpDfbI/Gte/wDEVsXBcRGub2IYOVkyOB6HvSH+HtKrh94kGB+fFMPjJbuG2lu0oHJjIjrLEkmhin2vJi0g7X2S9tWB+HJiOyxx61b4DoLaPv3Fm7sYA6TzBNG6W4zMtwXAbcYUKIB49qu1DFtiqJbIMCOhx+szXmfHwyY0l4d7JM0pVSZLXbCdxUkxE8SM/el1vSpt2jyqDIjB3Uz09q5cOwsFHeJq1/CGiUKsAcTiR2z615cZKOnKhEHJOy741pLfVv6eRLYnc0Gla+N3G2sFCqI3EHyyPUdY/Oi38HYxsYndlrYInAzBFEK5QbEtQoEgOIlcSSOC0jmKJZIKWlbf5Fy+K+gLf1bsishjdJIGMH8/rSV0W2GuP8wPlnt69wDWrtqjJua0CxHzAcj27DiqNdpLLW0IXzW8qvc+s8nPWm489R4R99mZJ8l6WJPFXa4BtG6VkuoO1vU+36UANtu2rxuuN1K7io6Ymfzou61x2YMdtoZJKE/QGlXjGrIfZa+SBEZParscfTQqK+6Gf9X0vXTqx6nYRJ69O9dSX45OWOTz/LH7V1P4xC4odXb401soCZ7nn2+lZXXfELS4Oe/qKd+GK1+4LjAEA4U8e/3qj+KLZFxjHUD8B+9XZppxqPSGpNbYitcMtP3skW7cQuDkCOg5j9az1l4YGtHqNThZfPOOBI6V5+RN1Rk71QFeckTIj+8H9690lxQmwqZycf1E9DGfwoTUMS22IBOQPSmakJaZy43HEfMR2Jx2n1oZVS0bJa/EDs6ltoUk7Qcjg+39iqijDawMEkn2/YVVeVt/B3e0fWOnSmekW2d6u20QAOpPJ9Bn1nit0jKrYCdRtJ28ewP1+8mvE1TM0tLERBJmI45+lGavSqBbKySwMiMCCIg9ZEmhbloyOhMg9PX9KeMSCdUhJLOZ3ANAx8w5ke1VBAGWeAJz0PNQdGMDqT+HAq7ZLGT+H07USpG9HvwxsEERODioFSd4Hp2q5VIAA2/VZ6xjsakwJDmB2wo71ujT1doKk5MdxHX6VXZuEBQGI3MCY5xJ9+1St25KHMTGMfpios0u3lggY9uk/QUEuwfwLnZWwbnJkqBMkCRn1MfjVmnUzwBPAnM/WqbCI1w7c4GM5nJ9O3NNvD0/pMY/pOcH1jHtNL5da2I5NMXPf+I9tnSCCZnsD+U0+IVRuIlTiZiJpatkk3Lkbk3FZxwOfxM4q9NbHkCqR6j8jT4xVW+ynHsa2rNtgwdDBEAq0DI61lPEPDGZo6php5OcfhWj0GoI7leSojeveJwRXeJRv+KMjCsSIkdCQDyDj606KvtmtMz38OeFvcuXLYlSFnrAM9Y6R1oh7BR2b4Y2nB2w4MH6z9KaadgrM2crtJTkrMigH07WrguW2DKTJUiYnoy+lG48WgPA80zqdI222QRPlUzHqOojn6V54VqluAWy+1yJMwJ6c9/SopCJ8Qv5XG07FjzEcbfr0ofX+EKLNq7aIVgoDycnuRPWe/6UWfDHJBRkrEuKl2aBEFrbJuEg5jt0x2r1dQW3KDucnMgqY9pEe9Zz+EtezXLlv4jt1UHnH9/hTm14oymNm5xIlh0n8Y4r5f4n4SWOfpVrwyacOD0HaIXFMMqyOjYwR/mioajVXEEm2pj/ANW6PUcVVpbnxdpZjuJ6GI7D+xXnium+GpLsSOGUGQM49TUsUnP1JWcmcniFuSSsmI8pKn6waB1/jLOjLG0CI/zMYicfnS666MdySoJ7Y/59qlfSdoyIGDyIHce9XY4QjK2dy8M9t6lW2xc8oB8nBnr3n2NAeIWrVxFPU/LsEn1k4z71G3pbm62WyN32xnmJjmo624m4I5AtycoAZHeQSRkcYq2KTqg4rehFdtkEiePU/vXUYXt9EQe5JrqbaG8mPvAPOFIAUzGOAAOnvSv+JrZN24OcbvsK6uqn7iH5PBlTRrXpUSTxXV1IODLVxAztkQu1R68muvXP5QnMsRPpFdXVyGfdZK7rC1tOBsgrjPMfYdqvvXkdTK5kbiCcsJJxx6V7XUuMVf6iUvUj0NATbzuBDQJHKx7Z/CqNU5Yg9Q2R6kx+tdXUx9heT0nziegJ+309qlaO4GYHTge/Qe1dXUXg2RZYJ3AYwByB+x71Wt3aGjvHTr7iurq3yzPLJLfEoevpjr/pom2waWYz5mkHkgY5HHFdXUE/Bj7RBVwr8C4T/wCJBIAxyIAqt12qWPTiO/Ga6uro/wCxUOmFeHPB+GeI8wxIJHIPufxqWshHQtJU4MRNeV1bi8h4u2GvqbNxT8MPbdeGmQw4yIwc80Oti6QylyQckT+NdXVSh4RpWlQeo8re1D/GFm9LLuUnzZ5XtXV1UfdQkcpr7YdrLibTjcpiCAY7dQetEeOakWrQsbZDAKHxP/qJ9esjma9rqN9MBGFBexedVYgkYZcSCAR1xWp/hzxl3U74JXGR6dxzXldXlfFfYcfqDl+yObV92G5YHbAkfhQF7Ss5855OSev2OK6urylFWyZvRadiKoAEbpOOD6TUn1iwRECOQB9K6uoWjvADqHDEEgAAzIAmfrND3LNlvmUiRO0GAcjzYXnuOs9K6uqnCdjbs6z4RpmUN8F8/wD5B/8AyK6urqrDtn//2Q==">
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                        <div class="latest__blog__text">
                            <div class="label">Restaurant</div>
                            <h5>The Kitengela Glass Bridge</h5>
                            <p><i class="fa fa-clock-o"></i> 18th August, 2023</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                        <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                            data-setbg="https://images.squarespace-cdn.com/content/v1/5bc06d4a797f742708fa9b93/1573551192823-U3QJV6J9E6FFVA88YVGU/DSM-20190811-IMG_0491.jpg">
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                        <div class="latest__blog__text">
                            <div class="label">Travel</div>
                            <h5>Mbagathi River</h5>
                            <p><i class="fa fa-clock-o"></i> 20th August, 2023</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                        <div class="latest__blog__pic latest__blog__pic__last__row set-bg"
                            data-setbg="https://pbs.twimg.com/media/DuRx3G5X4AE3oSG.jpg:large"></div>
                    </div>
                    <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                        <div class="latest__blog__text">
                            <div class="label">Travel</div>
                            <h5>Mugumo Tree</h5>
                            <p><i class="fa fa-clock-o"></i> 22th August, 2023</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Blog Section End -->

    </div>
</template>

<style scoped>
.hero-image {
    background-image: url("../../../heroto/img/maasai/3.jpg");
}

.room-1 {
    background-image: url("../../../heroto/img/maasai/parks.jpg");
}

.room-2 {
    background-image: url("../../../heroto/img/maasai/garden.jpg");
}

.room-3 {
    background-image: url("../../../heroto/img/maasai/st.jpg");
}</style>

