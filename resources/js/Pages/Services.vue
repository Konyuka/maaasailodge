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
        <Landing />
        <Foota />
    </Heroto>
</template>

<style>

</style>
