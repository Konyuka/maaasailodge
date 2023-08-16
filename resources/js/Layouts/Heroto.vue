<style>
@import '../../heroto/css/bootstrap.min.css';
@import '../../heroto/css/font-awesome.min.css';
@import '../../heroto/css/elegant-icons.css';
@import '../../heroto/css/nice-select.css';
@import '../../heroto/css/jquery-ui.min.css';
@import '../../heroto/css/owl.carousel.min.css';
@import '../../heroto/css/slicknav.min.css';
@import '../../heroto/css/style.css';
</style>

<template>
    <div>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <slot />
    </div>
</template>

<script setup>
import '../../heroto/js/jquery-3.3.1.min.js';
import '../../heroto/js/bootstrap.min.js';
import '../../heroto/js/jquery.nice-select.min.js';
import '../../heroto/js/jquery-ui.min.js';
import '../../heroto/js/jquery.slicknav.js';
import '../../heroto/js/owl.carousel.min.js';
import '../../heroto/js/main.js';
</script>





