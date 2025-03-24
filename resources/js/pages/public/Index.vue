<script setup lang="ts">
    import { Head } from '@inertiajs/vue3';
    import MainLayout from '@/layouts/public/MainLayout.vue';
    import ScrollToTop from "@/components/ScrollToTop.vue";
    import UnderConstruction from "@/components/UnderConstruction.vue";

</script>

<template>
    <Head title="Start" />
    <MainLayout>
        <section id="hero" class="pb-12 pt-24 md:py-28 px-4 lg:pb-12 lg:pt-36 relative bg-cover bg-center custom-hero-bg bg-slate-900">
            <div class="mx-auto max-w-screen-xl">
                <h1 class="mb-4 text-blue-50 text-4xl md:text-5xl lg:text-6xl text-left max-w-screen-md py-1">
                    Lundin Automationsteknik
                </h1>
                <p class="text-lg font-normal text-blue-50 lg:text-2xl py-4 mb-4 text-left max-w-screen-md">
                    Vi levererar enastående projekt inom automationsteknik med expertis inom projektledning, programmering, elkonstruktion, installation och apparatskåpsbyggnation – från idé till slutfört resultat.
                </p>

                <div class="flex flex-col mb-8 lg:mb-12 space-y-4 sm:flex-row sm:justify-start sm:space-y-0 sm:space-x-4">
                    <a href="#contact" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full bg-blue-800 hover:bg-blue-500 shadow-md transition-colors duration-300">
                        Kom igång med ditt projekt
                    </a>
                </div>
            </div>
        </section>

        <section id="about" class="bg-white py-24">
            <div class="max-w-screen-lg mx-auto text-gray-600 px-4 lg:px-0">
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Om Lundin Automationsteknik</h2>
                <p class="mb-4 text-lg md:text-xl">
                    Grundades 2025 av Fridolf Lundin som har mångårig erfarenhet inom den styrtekniska automationsbranschen.
                    Fridolf har varit med och levererat system inom allt från reglersystem för ventilation inom färgindustrin till transportsystem till krävande kunder inom bilindustrin både på mark och takhängt gods.
                    <br><br>
                    Vi har stor erfarenhet inom allt som krävs för att leverera ett komplett projekt inom automationsteknik.
                    Vi utför projektledning, programmering, elkonstruktion, installation och Apparatskåp under samma tak och är med från idé till slutfört projekt.
                    Vi vågar säga att vi är proffs på det vi gör och tekniken ligger i vårt DNA.
                </p>
            </div>
        </section>

        <section id="services" class="bg-slate-50 py-24">
            <div class="max-w-screen-lg mx-auto text-gray-600 px-4 lg:px-0">
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Tjänster</h2>

                <div id="project_management" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Projektledning</h5>
                        <p class="font-normal text-gray-800 dark:text-gray-400">
                            Projektledning erbjuder vi till kunder som önskar en helhetsleverans med allt från elkonstruktion, programmering, installation och apparatskåpsbyggnation.
                            Vi är då med på hela resan från idé till överlämnande av projekt till slutkund.
                        </p>
                    </div>


                    <div id="construction" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elkonstruktion</h5>
                        <p class="font-normal text-gray-800 dark:text-gray-400">
                            Vi utför elkonstruktioner i både Elprocad och Eplan. Där vi kan leverera alla typer av konstruktioner efter kundens önskemål och standard.
                            Vi jobbar även efter vår egen standard som vi förbättrar löpande med tiden. Vi uppdaterar och arbetar alltid efter den senaste mjukvaran.
                        </p>
                    </div>

                    <div id="programming" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Programmering</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Vi levererar huvudsakligen programmering i Siemens TIA men om ni önskar kan vi även utföra programmering i andra önskade system.
                            Vi levererar styrsystemen med allt från enkla knappuppsättning till olika storlekar av HMI.
                        </p>
                    </div>

                    <div id="installation" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Installation</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Vi har kunskapen att kunna leverera el & automationsinstallationer i den absoluta världsklassen.
                            Vi utför allt som krävs för en komplett installation såsom kabelstege, kabeldragning, inkoppling och test av utförd installation. Vi har allmän behörighet i företaget för att utföra fast installation.
                        </p>
                    </div>

                    <div id="cabinet" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Apparatskåpsbyggnation</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Vi har erfarenheten som krävs för att tillverka och skräddarsy apparatskåpen efter just dina behov.
                            Med både konstruktion och tillverkning i samma lokal säkerställer vi att tillverkningen håller absolut högsta kvalité.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section id="projects" class="bg-white py-24">
            <div class="max-w-screen-lg mx-auto text-gray-900 px-4 lg:px-0">
                <h2 class="mb-6 text-2xl font-bold">Senaste projekt</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Projekt 1</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </a>

                    <a href="#" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Projekt 2</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </a>
                </div>
            </div>
        </section>

        <section id="career" class="bg-slate-50 py-24">
            <div class="max-w-screen-lg mx-auto text-gray-900 px-4 lg:px-0">
                <h2 class="mb-6 text-2xl font-bold">Karriär</h2>

                <p class="mb-4 text-lg md:text-xl">
                    Vi är i en växande fas och behöver alltid personer med spetskompetens inom områdena projektledning, programmering, konstruktion, installation och apparatskåp.
                    <br><br>
                    Vi lägger även en stor vikt vid utbildandet av morgondagens kommande generation av tekniskt kunnande till lärlingar och praktikanter.
                    <br><br>
                    Tveka inte på att höra av dig med din ansökan nedan!
                </p>
            </div>
        </section> -->

        <!-- <section id="contact" class="bg-white py-24">
            <div class="md:grid grid-cols-2 gap-6 max-w-screen-lg mx-auto px-4 lg:px-0">
                <div class="mb-12">
                    <h2 class="mb-4 text-2xl tracking-tight font-bold text-gray-900">Kontakt</h2>
                    <p class="mb-4 text-lg md:text-xl text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <div class="bg-slate-200 px-4 py-6 rounded-lg shadow-lg">
                    <form id="onSaveForm" class="max-w-sm mx-auto space-y-5" action="#" method="POST">

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium">Namn</label>
                            <input type="text" name="name" id="name" class="w-full p-2.5 bg-gray-50 text-sm rounded-lg border-0">
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium">E-post</label>
                            <input type="email" name="email" id="email" class="w-full p-2.5 bg-gray-50 text-sm rounded-lg border-0">
                        </div>

                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium">Telefon</label>
                            <input type="tel" name="phone" id="phone" class="w-full p-2.5 bg-gray-50 text-sm rounded-lg border-0">
                        </div>

                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium">Meddelande</label>
                            <textarea id="message" name="message" rows="6" class="w-full p-2.5 bg-gray-50 text-sm rounded-lg border-0" placeholder="Berätta mer om ditt projekt. Eventuella krav, ideér, mål eller exempel för att komma igång"></textarea>
                        </div>
                        <button type="button" class="onSave text-center w-full py-2 text-white bg-blue-800 hover:bg-blue-900 rounded-lg shadow-md transition-colors duration-300">Skicka</button>
                        <div class="action-message"></div>
                    </form>
                </div>
            </div>
        </section> -->

        <section id="contact" class="bg-white py-24">
            <div class="max-w-screen-lg mx-auto text-gray-700 px-4 lg:px-0">
                <h2 class="mb-6 text-2xl font-bold text-gray-900">Kontakt</h2>
                <p class="mb-4 text-lg md:text-xl">
                    Behöver du hjälp med automation, styrteknik eller skräddarsydda tekniska lösningar?
                </p>
                <p class="mb-4 text-lg md:text-xl">
                    Med vår breda kompetens och erfarenhet erbjuder vi inte bara installation och elkonstruktion utan också rådgivning för att hjälpa dig hitta de bästa och mest kostnadseffektiva alternativen.
                </p>
                <p class="mb-12 text-lg md:text-xl">
                    Tveka inte att höra av dig!
                </p>
                <p class="text-lg md:text-xl font-semibold text-gray-800">
                    Fridolf Lundin, VD / CEO
                </p>
                <p class="text-lg md:text-xl">
                    Telefon: <a href="tel:0731449002" class="text-blue-600 hover:underline">0731449002</a>
                    <br>
                    E-post: <a href="mailto:Arsenal_fidde@hotmail.com" class="text-blue-600 hover:underline">Arsenal_fidde@hotmail.com</a>
                    <br>
                    LinkedIn: <a href="https://www.linkedin.com/in/fridolf-lundin-ab2928254/" target="_blank" class="text-blue-600 hover:underline">Fridolf Lundin</a>
                </p>
            </div>
        </section>


        <UnderConstruction />
        <ScrollToTop />
    </MainLayout>
</template>
