<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head } from '@inertiajs/vue3';

import Navbar from '@/Components/Heroto/Navbar.vue'
import Hero from '@/Components/Heroto/Hero.vue'

</script>

<template>
    <Head title="Home" />

    <Heroto>
        <Navbar />
        <Hero />
    </Heroto>
</template>

<style></style>
