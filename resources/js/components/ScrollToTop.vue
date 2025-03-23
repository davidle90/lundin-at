<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";

const isVisible = ref(false);

// Function to check scroll position
const checkScroll = () => {
    isVisible.value = window.scrollY > 300; // Show button after 300px scroll
};

// Function to scroll to top smoothly
const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
};

// Add and remove event listener
onMounted(() => {
    window.addEventListener("scroll", checkScroll);
});
onUnmounted(() => {
    window.removeEventListener("scroll", checkScroll);
});
</script>

<template>
    <button
        v-if="isVisible"
        @click="scrollToTop"
        class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition-all"
    >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
    </svg>

    </button>
</template>
