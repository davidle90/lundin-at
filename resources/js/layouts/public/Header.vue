<script setup lang="ts">
    import { ref, onMounted, onUnmounted } from "vue";
    import Dropdown from "@/components/Dropdown.vue";
    import { Link } from "@inertiajs/vue3";

    const isScrolled = ref(false);
    const isMobileMenuOpen = ref(false);
    const isMobile = ref(false);  // Determines if the screen is mobile

    // Function to check if the screen is mobile
    const checkMobile = () => {
        isMobile.value = window.innerWidth <= 768; // Define the mobile breakpoint (768px)
    };

    // Function to check scroll position
    const handleScroll = () => {
        isScrolled.value = window.scrollY > 50; // Change color after 50px of scroll
    };

    // Toggle the mobile menu
    const toggleMobileMenu = () => {
        isMobileMenuOpen.value = !isMobileMenuOpen.value; // ✨ Toggle the mobile menu visibility
    };

    // Add and remove scroll event listener
    onMounted(() => {
        window.addEventListener("scroll", handleScroll);
        checkMobile();
        window.addEventListener("resize", checkMobile);  // Update on resize
    });
    onUnmounted(() => {
        window.removeEventListener("scroll", handleScroll);
        window.removeEventListener("resize", checkMobile);
    });
</script>

<template>
    <nav
        :class="[
            'fixed top-0 left-0 w-full z-50 transition-all duration-300 shadow-sm',
            isScrolled ? 'bg-white/90 shadow-lg backdrop-blur-md' : 'bg-white'
        ]"
    >
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <Link
                :href="route('index')"
                class="flex items-center gap-x-3 rounded-lg px-3 py-2 text-sm font-medium"
            >
                <img class="h-8" src="https://dl-spaces.ams3.cdn.digitaloceanspaces.com/lundin-at/Lundin%20AT%20-%20Logo%20-%20Black.png" alt="logo">
            </Link>

            <!-- ✨ Mobile Burger Icon (Visible on mobile screens) -->
            <div class="md:hidden flex items-center" @click="toggleMobileMenu">
                <div class="space-y-1">
                    <span class="block w-6 h-1 bg-gray-600"></span>
                    <span class="block w-6 h-1 bg-gray-600"></span>
                    <span class="block w-6 h-1 bg-gray-600"></span>
                </div>
            </div>

            <div :class="['flex items-center', isMobileMenuOpen ? 'block' : 'hidden', 'md:flex md:w-auto w-full']">
                <ul class="font-medium flex flex-col p-4 gap-4 md:gap-0 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 w-full">
                    <li>
                        <a href="#" class="block py-2 px-3 hover:text-blue-800">Start</a>
                    </li>

                    <li v-if="isMobile">
                        <a href="#services" class="block py-2 px-3 hover:text-blue-800">Tjänster</a>
                    </li>

                    <!-- Desktop Dropdown (as usual) -->
                    <template v-else>
                        <li>
                            <Dropdown>
                                <a href="#services" class="hover:text-blue-800">Tjänster</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </Dropdown>
                        </li>
                    </template>

                    <!-- <li>
                        <a href="#projects" class="block py-2 px-3 hover:text-blue-800">Projekt</a>
                    </li>
                    <li>
                        <a href="#career" class="block py-2 px-3 hover:text-blue-800">Karriär</a>
                    </li> -->
                    <li>
                        <a href="#about" class="block py-2 px-3 hover:text-blue-800">Om oss</a>
                    </li>
                    <li>
                        <a href="#contact" class="block py-2 px-3 text-white bg-blue-700 hover:bg-blue-800 rounded-md text-center">Kontakt</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</template>
