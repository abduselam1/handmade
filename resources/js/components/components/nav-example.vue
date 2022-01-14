<template>
    <div class="flex flex-wrap bg-gray-800 py-1 px-4 items-center content-center justify-between">
        <div class="py-2 px-3">
            <img src="/storage/assets/logo.png" class="h-8 w-8" alt="">
        </div>
        <div class="flex text-gray-100 text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <p>Deliver to Ethipia</p>
        </div>

        <!-- search box -->
        <div class="inline-flex items-center">
            <div class="flex items-center mt-4">
                <svg width="20" height="20" fill="currentColor" class="rounded-l-md mt-4 pt-1 pl-1 w-8  h-8  transform -translate-y-1/2 text-black bg-yellow-300  ">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
            </div>
            
            <div>
                <input type="search" class=" h-8 w-full  focus:ring-1 focus:outline-none focus:ring-blue-400 "  name="search" >
            </div>
            <div class="">
                
                <dropdown />
            </div>
            

        </div>

        <!-- language change -->
        <div @click="lang = !lang" class="text-gray-200 relative">
            <div class="block">
                <div class="inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                    </svg>
                </div>
            </div>
            <div class="absolute">

            </div>
        </div>



    </div>
    
</template>

<script>
import dropdown from './dropdown.vue'
export default {
  components: { dropdown },

    data(){
        return{
            isOpen: false,
            lang: false
        }
    }
}
</script>