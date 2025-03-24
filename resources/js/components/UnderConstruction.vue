<script setup lang="ts">
import { ref } from "vue";

const isVisible = ref(true); // Always visible
</script>

<template>
    <div
        v-if="isVisible"
        class="fixed bottom-0 left-0 right-0 bg-yellow-500 text-black text-center py-3 font-bold shadow-md"
    >
        🚧 Website is under construction 🚧
    </div>
</template>
