<script setup lang="ts">
</script>

<template>
    <nav class="border-b shadow">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="h-8" src="#" alt="logo">
                <span class="haf-font self-center text-4xl font-normal">Lundin AT</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <div class="flex justify-center items-center">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0">
                        <li class="">
                            <a href="#" class="block py-2 px-3 hover:text-blue-800">Start</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 hover:text-blue-800">Tjänster</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 hover:text-blue-800">Projekt</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-white bg-blue-700 hover:bg-blue-800 rounded-md">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>
