<template>
    <Default>
        <div class="bg-gray-100 px-16 py-10 mt-2">
            <section class="text-center mb-8">
                <h1 class="text-2xl md:text-4xl font-bold text-foreground">Lastest News and Resources</h1>
                <p class="text-gray-600 mt-2 text-lg md:text-xl">Learn more about Urban Heat Islands (UHI) and how they impact your life.</p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-[1400px]">
                <article class="md:col-span-2 bg-white shadow-md overflow-hidden">
                    <img src="../public/city.jpg" alt="Main News Image" class="w-full object-cover rounded-2xl" />
                    <div class="p-6">
                        <span class="bg-foreground text-white text-xs px-2 py-1 rounded">NEWS</span>
                        <h2 class="text-xl font-bold mt-4">Urban Heat Island Effect: How Cities Are Trapping Heat...</h2>
                        <p class="text-gray-600 mt-2">Urban areas are becoming significantly warmer...</p>
                        <a href="#" class="text-green-600 hover:underline mt-4 block">Read more</a>
                    </div>
                </article>

                <div class="space-y-8">
                    <article class="shadow-md md:col-span-1 overflow-hidden gap-2">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?fit=crop&w=600&q=80" alt="Small News Image" class="w-full h-64 w-108 object-cover rounded-2xl" />
                        <div class="p-4 rounded-2xl">
                            <span class="bg-foreground text-white text-xs px-2 py-1 rounded">PRESS RELEASE</span>
                            <h3 class="text-lg font-bold mt-2">Cooling the Concrete Jungle...</h3>
                            <p class="text-gray-600 mt-2">As cities grow, the UHI effect worsens...</p>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?fit=crop&w=600&q=80" alt="Small News Image" class="w-full h-32 object-cover" />
                        <div class="p-4">
                            <span class="bg-foreground text-white text-xs px-2 py-1 rounded">NEWS</span>
                            <h3 class="text-lg font-bold mt-2">Why Are Cities Getting Hotter?</h3>
                            <p class="text-gray-600 mt-2">Learn how densely built environments are creating 'heat islands'...</p>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl shadow-md overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?fit=crop&w=600&q=80" alt="Small News Image" class="w-full h-32 object-cover" />
                        <div class="p-4">
                            <span class="bg-foreground text-white text-xs px-2 py-1 rounded">NEWS</span>
                            <h3 class="text-lg font-bold mt-2">Urban Heat Islands: The Overlooked Threat...</h3>
                            <p class="text-gray-600 mt-2">While global warming dominates climate discussions...</p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </Default>
  </template>
<script setup >
import Default from "../Shared/Layout/Default.vue";
</script>
