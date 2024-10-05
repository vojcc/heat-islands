<template>
    <div class="image flex flex-col items-center min-h-screen">
      <header class="sticky w-full lg:w-[calc(100%-10rem)] bg-white rounded-none lg:rounded-full mt-0 md:mt-10 flex justify-center drop-shadow-md">
          <nav class="relative flex justify-between items-center px-4 md:px-10 py-4 w-full max-w-[1400px] z-50">
            <InertiaLink href="/">
                <LogoDark class="relative sm:block h-12 md:h-14 z-30"/>
            </InertiaLink>
            <div class="hidden md:flex gap-4 md:gap-8">
                <InertiaLink href="/news" class="text-lg font-sans1 font-bold py-2" >News</InertiaLink>
                <InertiaLink href="/about" class="text-lg font-sans1 font-bold py-2">About us</InertiaLink>
                <InertiaLink href="/contact" class="text-lg font-sans1 font-bold py-2">Contact</InertiaLink>
            </div>
            <InertiaLink href="/learn" class="hidden md:flex px-6 py-2 rounded-full font-sans2 font-bold bg-foreground text-white">Learn more</InertiaLink>
            <img alt="" @click="toggleBurgerMenu" class="h-10 cursor-pointer md:hidden z-20" src="../../assets/burger-menu-svgrepo-com.svg"/>

            <div v-if="mobileMenuOn" class="fixed md:hidden w-screen h-screen top-0 left-0 flex flex-col bg-white">
              <div class="pt-20 flex flex-col items-end pr-12 z-20">
                <InertiaLink @click="toggleBurgerMenu" href="/" class="w-full h-10 text-xl font-sans1 font-bold my-2 hover:drop-shadow" ><span class="block w-full text-right">Home</span></InertiaLink>
                <InertiaLink @click="toggleBurgerMenu" href="/news" class="w-full h-10 text-xl font-sans1 font-bold my-2 hover:drop-shadow" ><span class="block w-full text-right">News</span></InertiaLink>
                <InertiaLink @click="toggleBurgerMenu" href="/about" class="w-full h-10 text-xl font-sans1 font-bold my-2 hover:drop-shadow"><span class="block w-full text-right">About us</span></InertiaLink>
                <InertiaLink @click="toggleBurgerMenu" href="/contact" class="w-full h-10 text-xl font-sans1 font-bold my-2 hover:drop-shadow"><span class="block w-full text-right">Contact</span></InertiaLink>
                  <InertiaLink @click="toggleBurgerMenu" href="/learn" class="w-full h-10 text-xl font-sans1 font-bold my-2 hover:drop-shadow"><span class="block w-full text-right font-bold text-foreground">Learn more</span></InertiaLink>
              </div>
            </div>
        </nav>
      </header>
      <main class="grow w-full flex flex-col items-center">
        <slot v-if="!mobileMenuOn"/>
      </main>
      <footer class="flex w-full justify-center bg-foreground text-white px-10 z-30">
        <div class="flex flex-col w-full max-w-[1400px] sm:flex-row justify-between items-center mt-4">

            <InertiaLink
                type="button"
                class="mb-4"
                :style="getStyleOfLink('/maps/Wroclaw/session/new-building-grunwaldzki')"
                href="/maps/Wroclaw/session/new-building-grunwaldzki">
                See Grunwaldzki with a new building
            </InertiaLink>

            <InertiaLink
                type="button"
                class="mb-4"
                :style="getStyleOfLink('/maps/Wroclaw')"
                href="/maps/Wroclaw/">
                See Grunwaldzki
            </InertiaLink>
          <div class="flex items-center gap-4 mb-4">
            <img alt="" class="cursor-pointer h-6" src="../../assets/facebookIcon.svg" />
            <img alt="" class="cursor-pointer h-6" src="../../assets/twitterIcon.svg" />
            <img alt="" class="cursor-pointer h-6" src="../../assets/instaIcon.svg" />
            <img alt="" class="cursor-pointer h-6" src="../../assets/linkedinIcon.svg" />
          </div>
        </div>
      </footer>

    </div>
</template>

<script setup>
import LogoDark from "../Components/LogoDark.vue";

import {ref} from "vue";
import {usePage} from "@inertiajs/vue3";

const mobileMenuOn = ref(false);

function toggleBurgerMenu() {
  mobileMenuOn.value = !mobileMenuOn.value;
}

function getStyleOfLink(link) {
    const currentUrl = usePage().url

    return currentUrl === link
        ? { backgroundColor: "rgba(0, 0, 0, 0.1)", padding: "8px", borderRadius: "6px" }
        : { backgroundColor: "rgba(255, 255, 255, 0.1)", padding: "8px", borderRadius: "6px" }
}

</script>

<style>
    .image {
        background-image: url('../../public/starting_image.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
    }
</style>
