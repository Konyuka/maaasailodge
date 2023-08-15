<script setup>
</script>

<template>
    <div>

        <!-- Hero Section Begin -->
        <section class="hero spad set-bg" data-setbg="img/hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__text">
                            <h5>WELCOME HIROTO</h5>
                            <h2>Experience the greatest for you holidays.</h2>
                        </div>
                        <form action="#" class="filter__form">
                            <div class="filter__form__item filter__form__item--search">
                                <p>Location</p>
                                <div class="filter__form__input">
                                    <input type="text" placeholder="Search Location">
                                    <span class="icon_search"></span>
                                </div>
                            </div>
                            <div class="filter__form__item">
                                <p>Check In</p>
                                <div class="filter__form__datepicker">
                                    <span class="icon_calendar"></span>
                                    <input type="text" class="datepicker_pop check__in">
                                    <i class="arrow_carrot-down"></i>
                                </div>
                            </div>
                            <div class="filter__form__item">
                                <p>Check Out</p>
                                <div class="filter__form__datepicker">
                                    <span class="icon_calendar"></span>
                                    <input type="text" class="datepicker_pop check__out">
                                    <i class="arrow_carrot-down"></i>
                                </div>
                            </div>
                            <div class="filter__form__item filter__form__item--select">
                                <p>Person</p>
                                <div class="filter__form__select">
                                    <span class="icon_group"></span>
                                    <select>
                                        <option value="">2 Adult, 1 Children</option>
                                        <option value="">2 Adult</option>
                                        <option value="">1 Adult</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit">BOOK NOW</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

    </div>
</template>