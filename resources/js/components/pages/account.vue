<template>
    <div class=" mt-8 mx-auto max-w-xl md:max-w-3xl">
        <div class=" fixed top-0 bg-gray-100 w-full py-3  sm:hidden">
            <div class=" flex justify-between  items-center mx-2">
                
                <div  @click="goBack" class=" cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
                <div class=" max-w-full mx-auto ">
                    <h4 class=" text-base font-semibold text-gray-700 ">abduselam30</h4>
                </div>
                
            </div>
        </div>
        
        <div class=" grid grid-cols-6 sm:justify-between items-center md:justify-start mx-2 md:mx-0">
            <div class=" col-span-1 h-20 w-20 sm:h-24 sm:w-24 md:h-36 md:w-36 rounded-full overflow-hidden">
                <img src="/storage/assets/images/1.jpg" class="h-full w-full object-cover" alt="">
            </div>
            <div class="col-span-5 lg:ml-16 ml-4 md:ml-8">
                <div class="inline-flex items-center">
                    <h3 class="text-gray-500 text-3xl ml-4 truncate">
                        abduselam30
                    </h3>
                    
                    <div class="cursor-pointer ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </div>
                    
                </div>
                <div class="md:ml-4 my-7 hidden sm:flex items-center ">
                    <div class=" md:pr-4 text-center">
                        <h4 class=""><span class="  text-gray-700 font-semibold">3544</span> <span class="text-gray-600 font-medium">posts</span></h4>
                    </div>
                    <div class=" md:pr-4 text-center">
                        <h4 class=" ml-8"><span class=" text-gray-700  font-semibold">3272</span> <span class="text-gray-600 font-medium">followers</span></h4>
                    </div>
                    <div class=" md:pr-4 text-center">
                        <h4 class=" ml-8"><span class=" text-gray-700  font-semibold">1000</span> <span class="text-gray-600 font-medium">following</span></h4>
                    </div>
                </div>
                <div class="hidden md:block ml-4">
                    <h3 class="text-lg text-gray-800 font-semibold ">Abduselam</h3>
                    <h4 class=" text-gray-600">Mind Your business</h4>
                </div>
            </div>
        </div>
        <div class="md:ml-4 my-7 sm:hidden mx-2 flex items-center ">
            <div class=" md:pr-4  text-center">
                <h4 class=""><span class="  text-gray-700 font-semibold">3544</span> <span class="text-gray-600 font-medium">posts</span></h4>
            </div>
            <div class=" md:pr-4 text-center">
                <h4 class=" ml-8"><span class=" text-gray-700  font-semibold">3272</span> <span class="text-gray-600 font-medium">followers</span></h4>
            </div>
            <div class=" md:pr-4 text-center">
                <h4 class=" ml-8"><span class=" text-gray-700  font-semibold">1000</span> <span class="text-gray-600 font-medium">following</span></h4>
            </div>
        </div>
        <div  class="mx-2 md:hidden">
            <h3 class="text-lg text-gray-800 font-semibold ">Abduselam</h3>
            <h4 class=" text-gray-600">Mind Your business</h4>
        </div>
        <div  class=" mt-12 px-2 sm:w-full mx-auto max-w-xl border-t border-gray-400"> 
            <div class=" flex mx-auto max-w-md py-3 justify-evenly items-center">
                <div class=" inline-flex p-1 items-center cursor-pointer icon">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    <span class="ml-2">Posts</span>
                </div>
                
                
                <div class=" inline-flex p-1 cursor-pointer icon">
                    <svg aria-label="Tagged" class="h-4 w-4 md:h-6 md:w-6" color="" fill="" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z">
                        </path>
                    </svg>
                    <span class="ml-2">Tagged</span>
                </div>
            </div>

            <div class="border-b border-gray-200">
                <div class="hover:bg-gray-50 flex items-center justify-start ">
                    <div class=" w-12 h-12 rounded-full bg-red-500 overflow-hidden ">
                        <img src="/storage/assets/images/profiles/9.jpg" class="w-full h-full object-cover" alt="">
                    </div>
                    
                    <div class="tems-baseline pl-2">
                        <div class=" inline-flex items-baseline">
                            <h3 class="text-gray-800 font-semibold text-lg">Abdu Hafiz</h3>
                            <span class="tex-base text-gray-500 font-light">@abduhafiz </span>
                        </div>
                        <div>
                            <span class="tex-base text-gray-500 font-light">Dec 5</span>
                        </div>
                    </div>
                </div>
                <div class="w-full justify-between ml-2">
                    <div class="">
                        ኢትዮጵያ ተስፋ መቁረጥን ራሱን ተስፋ አስቆርጣዋለች። የማያውቋት ተነሡባት። የሚያውቋት ተነሡላት። የማያውቋት ዘመቱባት፤ የሚያውቋት ዘመቱላት። ኢትዮጵያ ማለት ሲነኳት ማንም የማያውቀውን ኃይሏን የምታወጣ ሀገር ናት። እየሆነ ያለውም ይሄ ነው።
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>

export default {
    mounted(){
        console.log(this.$route);
    },

    data(){
        return {

        }
    },

    methods:{
        goBack: function(){
            this.$router.go(-1);
        }
    }
}
</script>