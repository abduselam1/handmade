<template>
    <div class=" sticky top-0">
        <div class="py-1 flex sm:justify-evenly justify-between shadow-md bg-gray-100 items-center">
            <div class="sm:hidden py-2 cursor-pointer px-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
            <router-link to="/" class="py-2 cursor-pointer px-3 focus:outline-none ">
                <img src="/storage/assets/logo.png" class="h-8 w-8" alt="">
            </router-link>
            <div class="sm:inline-flex items-center hidden ">
                <input type="search" class="py-2 px-3 focus:outline-none rounded-l-lg h-8" name="" id="">
                <button class="pb-2 pt-2 px-2 bg-white rounded-r-lg h-8" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="sm:inline-flex items-center hidden">
                <!-- home icon -->
                <router-link to="/" class="m-3 cursor-pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </router-link>
                <!-- message -->
                <router-link to="/message" class="m-3 cursor-pointer ">
                    <svg aria-label="Share Post" class="fill-current text-gray-800 hover:text-gray-600" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                        </path>
                    </svg>
                </router-link>
                <!-- plus -->
                <button class="m-3 cursor-pointer ">
                    <svg aria-hidden="true" data-prefix="far" data-icon="plus-square" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M352 240v32c0 6.6-5.4 12-12 12h-88v88c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-88h-88c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h88v-88c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v88h88c6.6 0 12 5.4 12 12zm96-160v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-48 346V86c0-3.3-2.7-6-6-6H54c-3.3 0-6 2.7-6 6v340c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"/>
                    </svg>
                </button>
                <!-- Explore -->
                <button class="m-3 cursor-pointer ">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="compass" class="h-5 w-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor" d="M347.94 129.86L203.6 195.83a31.938 31.938 0 0 0-15.77 15.77l-65.97 144.34c-7.61 16.65 9.54 33.81 26.2 26.2l144.34-65.97a31.938 31.938 0 0 0 15.77-15.77l65.97-144.34c7.61-16.66-9.54-33.81-26.2-26.2zm-77.36 148.72c-12.47 12.47-32.69 12.47-45.16 0-12.47-12.47-12.47-32.69 0-45.16 12.47-12.47 32.69-12.47 45.16 0 12.47 12.47 12.47 32.69 0 45.16zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 448c-110.28 0-200-89.72-200-200S137.72 56 248 56s200 89.72 200 200-89.72 200-200 200z"></path>
                    </svg>
                </button>
                <!-- activities -->
                <button  class="m-3 cursor-pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <router-link to="/profile" class="h-7 cursor-pointer  w-7 rounded-full overflow-hidden ">
                    <img :src="userProfile"  alt="">
                </router-link>
            </div>
            <div class="sm:hidden py-2 cursor-pointer px-3">
                <router-link to="/message" class="cursor-pointer ">
                    <svg aria-label="Share Post" class="fill-current text-gray-800 hover:text-gray-600" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                        </path>
                    </svg>
                </router-link>
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    methods:{
        userProfile: function(){
            return "/storage/"+profile.thumbnail_url;
        }
    }
}
</script>