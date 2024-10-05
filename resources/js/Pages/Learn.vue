<template>
    <Default>
        <p class="w-full max-w-[1400px] font-sans1 font-light text-center text-white text-xl md:text-2xl md:pt-12 p-5 md:p-8 leading-loose">An <strong class="font-bold">Urban Heat Island (UHI)</strong> occurs when urban areas become significantly warmer than surrounding rural areas due to heat-absorbing materials like concrete and asphalt, and reduced vegetation. Buildings and roads trap heat, while the lack of green spaces limits natural cooling.</p>
        <div style="margin-bottom: 20px;" class="h-full md:h-full flex items-center">
            <div class="h-full">
                <div class="w-screen grid grid-cols-1 md:grid-cols-3 gap-10 max-w-[1400px] text-white px-4 md:px-20 text-lg md:text-xl font-sans1 leading-relaxed">
                    <div class="flex flex-col items-center px-5 md:px-0">
                        <div class="w-20 py-4" > <img src="../assets/heart.png" class="w-20 py-4" /></div>
                        <ul class="list-disc">
                            <li><strong>Heat-Related Illnesses:</strong> Increased risk of heat exhaustion and heatstroke, especially for vulnerable populations.</li>
                            <br/>
                            <li><strong>Worsened Air Quality:</strong> Higher temperatures exacerbate air pollution, leading to respiratory problems.</li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center px-5 md:px-0">
                        <div class="w-20 py-4" > <img src="../assets/cost.png" class="w-20 py-4" /></div>
                        <ul class="list-disc">
                            <li><strong>Higher Energy Costs:</strong> Increased demand for air conditioning raises electricity bills When the energy for AC comes from burning fossil fuels this contributes to global warming.</li>
                            <br/>
                            <li><strong>Reduced Worker Productivity:</strong> Extreme heat impacts outdoor work efficiency and can increase absenteeism.</li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center px-5 md:px-0">
                        <div class="w-20 py-4" > <img src="../assets/badge.png" class="w-24 py-4" /></div>
                        <ul class="list-disc">
                            <li><strong>Decreased Outdoor Activity:</strong> Higher temperatures discourage physical activity and recreation. Populations with low-income are at greater risk of heat-related illnesses due to poor housing conditions, including lack of air conditioning and small living spaces, and inadequate resources to find alternative shelter during a heat wave.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </Default>

</template>
<script setup>

import Default from "../Shared/Layout/Default.vue";

</script>
