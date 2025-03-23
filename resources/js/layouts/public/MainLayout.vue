<script setup lang="ts">
    import Header from './Header.vue';
    import Footer from './Footer.vue';
</script>

<template>
    <div class="h-screen flex flex-col justify-between">
        <Header />
        <main class="mx-auto flex h-full w-full max-w-7xl flex-1 flex-col gap-4 rounded-xl">
            <slot />
        </main>

        <Footer />
    </div>
</template>
