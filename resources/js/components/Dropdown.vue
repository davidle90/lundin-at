<script setup lang="ts">
import { ref, onMounted, onUnmounted } from "vue";

const isOpen = ref(false);

const toggleDropdown = () => {
    isOpen.value = !isOpen.value;
};

const closeDropdown = (event: MouseEvent) => {
    if (!event.target || !(event.target as HTMLElement).closest(".dropdown-container")) {
        isOpen.value = false;
    }
};

onMounted(() => {
    document.addEventListener("click", closeDropdown);
});

onUnmounted(() => {
    document.removeEventListener("click", closeDropdown);
});
</script>

<template>
    <div class="relative dropdown-container">
        <!-- Dropdown Button -->
        <button
            @mouseenter="isOpen = true"
            class="flex items-center gap-1 py-2 px-3 hover:text-blue-800"
        >
            <slot />
        </button>

        <!-- Dropdown Menu -->
        <div
            v-if="isOpen"
            @mouseleave="isOpen = false"
            class="absolute mt-2 w-48 bg-white border shadow-lg z-50"
        >
            <a href="#" class="block px-4 py-3 hover:bg-blue-100">Projektledning</a>
            <a href="#" class="block px-4 py-3 hover:bg-blue-100">Programmering</a>
            <a href="#" class="block px-4 py-3 hover:bg-blue-100">Elkonstruktion</a>
            <a href="#" class="block px-4 py-3 hover:bg-blue-100">Elinstallation</a>
            <a href="#" class="block px-4 py-3 hover:bg-blue-100">Elskåpsbyggnation</a>
        </div>
    </div>
</template>
