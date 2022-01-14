<template>
    <div class=" mt-8 mx-auto max-w-xl md:max-w-3xl">
        <div class=" fixed top-0 bg-gray-100 w-full py-3  md:hidden">
            <div class=" flex justify-between  items-center mx-2">
                <div v-if="settingNavOpen" @click="settingNavOpen = !settingNavOpen" class="cursor-pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" class=" fill-current text-gray-600 hover:text-gray-700 h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div v-else @click="settingNavOpen = !settingNavOpen" class=" cursor-pointer">
                    <svg aria-label="Options" class=" fill-current text-gray-600 hover:text-gray-700 h-7 w-7" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path clip-rule="evenodd" d="M46.7 20.6l-2.1-1.1c-.4-.2-.7-.5-.8-1-.5-1.6-1.1-3.2-1.9-4.7-.2-.4-.3-.8-.1-1.2l.8-2.3c.2-.5 0-1.1-.4-1.5l-2.9-2.9c-.4-.4-1-.5-1.5-.4l-2.3.8c-.4.1-.8.1-1.2-.1-1.4-.8-3-1.5-4.6-1.9-.4-.1-.8-.4-1-.8l-1.1-2.2c-.3-.5-.8-.8-1.3-.8h-4.1c-.6 0-1.1.3-1.3.8l-1.1 2.2c-.2.4-.5.7-1 .8-1.6.5-3.2 1.1-4.6 1.9-.4.2-.8.3-1.2.1l-2.3-.8c-.5-.2-1.1 0-1.5.4L5.9 8.8c-.4.4-.5 1-.4 1.5l.8 2.3c.1.4.1.8-.1 1.2-.8 1.5-1.5 3-1.9 4.7-.1.4-.4.8-.8 1l-2.1 1.1c-.5.3-.8.8-.8 1.3V26c0 .6.3 1.1.8 1.3l2.1 1.1c.4.2.7.5.8 1 .5 1.6 1.1 3.2 1.9 4.7.2.4.3.8.1 1.2l-.8 2.3c-.2.5 0 1.1.4 1.5L8.8 42c.4.4 1 .5 1.5.4l2.3-.8c.4-.1.8-.1 1.2.1 1.4.8 3 1.5 4.6 1.9.4.1.8.4 1 .8l1.1 2.2c.3.5.8.8 1.3.8h4.1c.6 0 1.1-.3 1.3-.8l1.1-2.2c.2-.4.5-.7 1-.8 1.6-.5 3.2-1.1 4.6-1.9.4-.2.8-.3 1.2-.1l2.3.8c.5.2 1.1 0 1.5-.4l2.9-2.9c.4-.4.5-1 .4-1.5l-.8-2.3c-.1-.4-.1-.8.1-1.2.8-1.5 1.5-3 1.9-4.7.1-.4.4-.8.8-1l2.1-1.1c.5-.3.8-.8.8-1.3v-4.1c.4-.5.1-1.1-.4-1.3zM24 41.5c-9.7 0-17.5-7.8-17.5-17.5S14.3 6.5 24 6.5 41.5 14.3 41.5 24 33.7 41.5 24 41.5z" fill-rule="evenodd">
                        </path>
                    </svg>
                </div>
                <div class=" max-w-full mx-auto ">
                    <h4 v-if="settingNavOpen" class=" text-left text-lg text-gray-700 ">Options</h4>
                    <h4 v-else class=" text-lg text-gray-700 ">abduselam30</h4>
                </div>
                <div v-if="!settingNavOpen" class=" cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-7 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
            </div>
        </div>
        <setting-nav v-if="settingNavOpen" />
        <div v-if="!settingNavOpen" class=" grid grid-cols-6 sm:justify-between md:justify-start mx-2 md:mx-0">
            <div class=" col-span-1 h-14 w-14 sm:h-24 sm:w-24 md:h-36 md:w-36 rounded-full overflow-hidden">
                <img src="/storage/assets/images/1.jpg" class="h-full w-full object-cover" alt="">
            </div>
            <div class="col-span-5 lg:ml-16 ml-4 md:ml-8">
                <div class="md:inline-flex items-center">
                    <h3 class="text-gray-500 text-3xl ml-4">
                        abduselam30
                    </h3>
                    <button class="px-1 ml-4 mt-2 md:mt-0 md:ml-6 border mr-8 md:mr-0 text-center border-gray-400 mx-2 rounded-md"> 
                        <span class="text-gray-600 font-semibold text-sm">Edit Profile</span>
                    </button>
                    <router-link to="/setting" class=" hidden md:block ml-4 cursor-pointer">
                        <svg aria-label="Options" class=" fill-current text-gray-600 hover:text-gray-700" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M46.7 20.6l-2.1-1.1c-.4-.2-.7-.5-.8-1-.5-1.6-1.1-3.2-1.9-4.7-.2-.4-.3-.8-.1-1.2l.8-2.3c.2-.5 0-1.1-.4-1.5l-2.9-2.9c-.4-.4-1-.5-1.5-.4l-2.3.8c-.4.1-.8.1-1.2-.1-1.4-.8-3-1.5-4.6-1.9-.4-.1-.8-.4-1-.8l-1.1-2.2c-.3-.5-.8-.8-1.3-.8h-4.1c-.6 0-1.1.3-1.3.8l-1.1 2.2c-.2.4-.5.7-1 .8-1.6.5-3.2 1.1-4.6 1.9-.4.2-.8.3-1.2.1l-2.3-.8c-.5-.2-1.1 0-1.5.4L5.9 8.8c-.4.4-.5 1-.4 1.5l.8 2.3c.1.4.1.8-.1 1.2-.8 1.5-1.5 3-1.9 4.7-.1.4-.4.8-.8 1l-2.1 1.1c-.5.3-.8.8-.8 1.3V26c0 .6.3 1.1.8 1.3l2.1 1.1c.4.2.7.5.8 1 .5 1.6 1.1 3.2 1.9 4.7.2.4.3.8.1 1.2l-.8 2.3c-.2.5 0 1.1.4 1.5L8.8 42c.4.4 1 .5 1.5.4l2.3-.8c.4-.1.8-.1 1.2.1 1.4.8 3 1.5 4.6 1.9.4.1.8.4 1 .8l1.1 2.2c.3.5.8.8 1.3.8h4.1c.6 0 1.1-.3 1.3-.8l1.1-2.2c.2-.4.5-.7 1-.8 1.6-.5 3.2-1.1 4.6-1.9.4-.2.8-.3 1.2-.1l2.3.8c.5.2 1.1 0 1.5-.4l2.9-2.9c.4-.4.5-1 .4-1.5l-.8-2.3c-.1-.4-.1-.8.1-1.2.8-1.5 1.5-3 1.9-4.7.1-.4.4-.8.8-1l2.1-1.1c.5-.3.8-.8.8-1.3v-4.1c.4-.5.1-1.1-.4-1.3zM24 41.5c-9.7 0-17.5-7.8-17.5-17.5S14.3 6.5 24 6.5 41.5 14.3 41.5 24 33.7 41.5 24 41.5z" fill-rule="evenodd">
                            </path>
                        </svg>
                    </router-link>
                </div>
                <div class="md:ml-4 my-7 flex items-center ">
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
        <div v-if="!settingNavOpen" class="mx-2 md:hidden">
            <h3 class="text-lg text-gray-800 font-semibold ">Abduselam</h3>
            <h4 class=" text-gray-600">Mind Your business</h4>
        </div>
        <div v-if="!settingNavOpen" class=" mt-12 px-2 border-t border-gray-400"> 
            <div class=" flex mx-auto max-w-md py-3 justify-between items-center">
                <div class=" inline-flex p-1 cursor-pointer icon">
                    <svg aria-label="Posts" class="h-4 w-4 md:h-6 md:w-6" color="" fill="" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd">
                        </path>
                    </svg>
                    <span class="ml-2">Posts</span>
                </div>
                <div class=" inline-flex p-1 cursor-pointer icon">
                    <svg aria-label="Posts" class="h-4 w-4 md:h-6 md:w-6" color="" fill="" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22.5C6.2 22.5 1.5 17.8 1.5 12S6.2 1.5 12 1.5 22.5 6.2 22.5 12 17.8 22.5 12 22.5zm5-11.8l-6.8-3.9c-.5-.3-1-.3-1.5 0-.4.3-.7.7-.7 1.3v7.8c0 .5.3 1 .8 1.3.2.1.5.2.8.2s.5-.1.8-.2l6.8-3.9c.5-.3.8-.8.8-1.3s-.5-1-1-1.3zm-7.5 5.2V8.1l6.8 3.9-6.8 3.9z">
                        </path>
                    </svg>
                    <span class="ml-2">Videos</span>
                </div>
                <div class=" inline-flex p-1 cursor-pointer icon">
                    <svg aria-label="Save" class="h-4 w-4 md:h-6 md:w-6" color="" fill="" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
                        </path>
                    </svg>
                    <span class="ml-2">Saved</span>
                </div>
                <div class=" inline-flex p-1 cursor-pointer icon">
                    <svg aria-label="Tagged" class="h-4 w-4 md:h-6 md:w-6" color="" fill="" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z">
                        </path>
                    </svg>
                    <span class="ml-2">Tagged</span>
                </div>
            </div>
        </div>
        <div v-if="!settingNavOpen" class="grid grid-cols-12 justify-between">
            <div class="col-span-4 mb-2">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/1.jpg" alt="">
            </div>
            <div class="col-span-4 pl-1 mb-2 h-auto">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/2.jpg" alt="">
            </div>
            <div class="col-span-4 pl-1 mb-2 h-auto">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/3.jpg" alt="">
            </div>
            <div class="col-span-4  mb-2 h-auto">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/4.jpg" alt="">
            </div>
            <div class="col-span-4 pl-1  mb-2 h-auto">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/5.jpg" alt="">
            </div>
            <div class="col-span-4 pl-1 mb-2 h-auto">
                <img class=" h-28 sm:h-48 lg:h-64 xl:h-72 w-full object-cover" src="/storage/assets/images/profiles/13.jpg" alt="">
            </div>
            
        </div>
        
    </div>
</template>

<script>

export default {
    data(){
        return {
            settingNavOpen:false,
        }
    }
}
</script>