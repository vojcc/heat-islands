<template>
    <Default>
        <Container class="relative h-[50%] min-h-[450px] w-full flex items-center md:my-auto mt-4">
            <div class="flex flex-col md:flex-row gap-8 w-full max-w-screen-xl">
                <!-- Contact Information Section -->
                <div class="bg-white rounded-lg p-6 w-full md:w-1/2">
                    <h2 class="text-2xl font-bold text-left mb-4">Contact Information</h2>
                    <p class="text-gray-700"><strong>Phone:</strong> 666 777 888</p>
                    <p class="text-gray-700"><strong>Email:</strong> cim@pwr.edu.pl</p>
                </div>

                <!-- Message Form Section -->
                <form class="bg-white rounded-lg p-8 w-full md:w-1/2">
                    <h2 class="text-2xl font-bold text-center mb-6">Send us a message</h2>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" placeholder="Your Name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" placeholder="Your Email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required />
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                        <textarea id="message" placeholder="Write your message.." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="w-full bg-foreground text-lg text-white rounded-full py-4 px-3 shadow-md hover:bg-opacity-80 transition duration-200">Send Message</button>
                    </div>
                </form>
            </div>
        </Container>
    </Default>

</template>
<script setup>
import Container from "../Shared/Components/Container.vue";
import Default from "../Shared/Layout/Default.vue";
</script>
