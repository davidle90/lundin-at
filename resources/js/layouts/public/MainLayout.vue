<script setup lang="ts">
    import Header from './Header.vue';
    import Footer from './Footer.vue';
</script>

<template>
    <div class="h-screen flex flex-col justify-between">
        <Header />
        <main class="grow">
            <slot />
        </main>

        <Footer />
    </div>
</template>
