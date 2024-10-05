<template>
    <Default>
        <Container v-if="!popupOpened" class="relative h-[50%] min-h-[450px] w-11/12 md:w-full flex items-center justify-center m-4 sm:mx-auto my-auto">

                <h1 class="font-sans1 font-bold text-2xl sm:text-3xl md:text-3xl text-center">
                    Urban heat islands influence the comfort of your life.
                </h1>
            <br>
            <br>
                <InertiaLink href="/maps/Wroclaw" class="bg-foreground text-white md:text-xl rounded-full py-4 px-4 sm:py-5 sm:px-6 mt-10 font-bold">
                    Check the map of your location
                </InertiaLink>

        </Container>
        <Container v-else-if="popupOpened" class="relative h-[50%] min-h-[450px] w-full flex justify-center mx-auto my-auto p-10">
            <div class="grow w-full flex flex-col justify-between">
                <div>
                    <h1 class="text-xl md:text-3xl font-bold">Available heat maps</h1>
                    <br>
                    <InertiaLink class="text-lg font-bold" href="/maps/Wroclaw">Wrocław</InertiaLink>
                    <br>
                    <br>
                    <span class="text-lg font-bold text-gray-400">Poznań</span>
                    <br>
                    <br>
                    <span class="text-lg font-bold text-gray-400">Gdańsk</span>
                    <br>
                    <br>
                    <span class="text-lg font-bold text-gray-400">Warszawa</span>
                    <br>
                    <br>
                    <span class="text-lg font-bold text-gray-400">Białystok</span>
                </div>
                <button @click="() => { popupOpened = false }"
                        class="bg-foreground text-white text-lg md:text-xl rounded-full py-4 px-4 sm:py-5 sm:px-6 mt-10 font-bold max-w-[200px]">
                    Go back
                </button>
            </div>
        </Container>
    </Default>

</template>
<script setup>

import Container from "../Shared/Components/Container.vue";
import Default from "../Shared/Layout/Default.vue";
import {ref} from "vue";

const popupOpened = ref(false);

function handleClick() {
    popupOpened.value = true;
}
</script>
