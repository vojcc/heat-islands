<script setup>
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import 'leaflet.heat';
import { onMounted, ref } from 'vue';
import Default from "../Shared/Layout/Default.vue";
import Container from "../Shared/Components/Container.vue";

const mapContainer = ref(null);
const map = ref(null);
const markers = ref(null);

const json = ref('')


const props = defineProps({
    places: Object
})

function buildMap() {
    map.value = L.map(mapContainer.value);
    map.value.setView([51.11140262459186, 17.060282821412752], 16);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}{r}.png', {
        attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
        maxZoom: 16,
    }).addTo(map.value);
}

function fillMap() {

    markers.value = L.featureGroup(); // Initialize a feature group for markers

    const places = mapPlacesToHeatmapFormat(props.places)

    // props.places.forEach(place => {
    //     const marker = L.circleMarker([place.latitude, place.longitude], {
    //         radius: 5,
    //         weight: 1,
    //         color: '#000000',
    //         fillColor: '#ff0000',
    //         fillOpacity: 1,
    //     })
    //
    //     marker
    //         .addTo(markers.value)
    //         .bindTooltip(place.temperature)
    // })


    L.heatLayer(places, {
        radius: 12,
        maxZoom: 10,
        blur: 8,
        max: 45,
    }).addTo(map.value);

    markers.value.addTo(map.value); // Add the markers to the map
}

function mapPlacesToHeatmapFormat(places) {
    return places.map(place => [place.latitude, place.longitude, place.temperature]);
}

onMounted(() => {
    buildMap();
    fillMap();
});

const popupOpened = ref(false);

function handleClick() {
    popupOpened.value = true;
}

</script>

<template>
    <div class="w-full sm:flex">
        <div id="mapContainer" ref="mapContainer" class="fixed flex size-full"/>
    </div>

    <Default>

    </Default>

</template>
