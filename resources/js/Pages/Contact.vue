<script setup>
import Heroto from '@/Layouts/Heroto.vue';
import { Head } from '@inertiajs/vue3';

import Navbar from '@/Components/Heroto/Navbar.vue'
import Contact from '@/Components/Heroto/Contact.vue'
import Foota from '@/Components/Heroto/Footer.vue'

</script>

<template>
    <Head title="Contact Us" />

    <Heroto>
        <Navbar />
        <Contact />
        <Foota />
    </Heroto>
</template>

<style>

</style>
