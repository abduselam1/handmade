<template>
    <div class="absolute top-0 left-auto mx-auto  pb-4 sm:pt-20 h-full w-full">
        <div class="flex sm:max-w-4xl h-full mx-auto border rounded border-gray-300">
            <div class=" overflow-y-auto overflow-x-hidden w-full sm:w-2/5 border-r border-gray-200 bg-gray-50">
                <div class="sticky top-0 py-4 px-2 border-b border-gray-300 bg-gray-50 flex justify-between items-center">
                    <router-link to="/" class="block sm:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </router-link>
                    <div class="">
                        <h3 class=" text-gray-800 font-semibold text-lg">Message Room</h3>
                    </div>
                    <div>
                        <svg aria-label="New Message" class="" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 44 44" width="24">
                            <path d="M33.7 44.12H8.5a8.41 8.41 0 01-8.5-8.5v-25.2a8.41 8.41 0 018.5-8.5H23a1.5 1.5 0 010 3H8.5a5.45 5.45 0 00-5.5 5.5v25.2a5.45 5.45 0 005.5 5.5h25.2a5.45 5.45 0 005.5-5.5v-14.5a1.5 1.5 0 013 0v14.5a8.41 8.41 0 01-8.5 8.5z"></path><path d="M17.5 34.82h-6.7a1.5 1.5 0 01-1.5-1.5v-6.7a1.5 1.5 0 01.44-1.06L34.1 1.26a4.45 4.45 0 016.22 0l2.5 2.5a4.45 4.45 0 010 6.22l-24.3 24.4a1.5 1.5 0 01-1.02.44zm-5.2-3h4.58l23.86-24a1.45 1.45 0 000-2l-2.5-2.5a1.45 1.45 0 00-2 0l-24 23.86z"></path><path d="M38.2 14.02a1.51 1.51 0 01-1.1-.44l-6.56-6.56a1.5 1.5 0 012.12-2.12l6.6 6.6a1.49 1.49 0 010 2.12 1.51 1.51 0 01-1.06.4z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="pb-10 sm:pb-0">
                    <!-- messages list -->
                    <div class="flex items-center justify-start py-2 w-full  mt-1 px-1 cursor-pointer hover:rounded-lg hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="flex-none h-12 w-12 mr-2 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/8.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class="w-full overflow-hidden">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Abduselam</h4>
                                <span class=" text-xs text-gray-700 ">2 hours ago</span>
                            </div>
                            <div class=" truncate">
                                <span class="text-sm text-gray-700">last sent adaf adfjf adjfasdkff adfjfa adfd fsd asddjd djffj djdj ddk</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-7 items-center py-2 mt-2 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 mr-2 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/10.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-6 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Dr</h4>
                                <span class=" text-xs text-gray-700 ">2 hours ago</span>
                            </div>
                            <div class=" truncate">
                                <span class="text-sm text-gray-700">last sent or recieved message asdfasdfasdf asdf asdf asdfasdfdf </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/3.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Test1</h4>
                                <span class=" text-xs text-gray-700 ">8 hours ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">last sent or recieved message </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/4.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Iban</h4>
                                <span class=" text-xs text-gray-700 ">2 minutes ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">last sent or recieved message </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/2.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Uche</h4>
                                <span class=" text-xs text-gray-700 ">2 days ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">last sent or recieved message </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/8.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">Bura</h4>
                                <span class=" text-xs text-gray-700 ">1 week ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">last sent or recieved message </span>
                            </div>
                        </div>
                        
                    </div>

                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/14.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">group</h4>
                                <span class=" text-xs text-gray-700 ">3 week ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">hello everyone </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/14.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">group</h4>
                                <span class=" text-xs text-gray-700 ">3 week ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">hello everyone </span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="grid grid-cols-5 items-center py-2  mt-1 px-1 cursor-pointer hover:rounded-sm hover:bg-gray-200 ">
                        <!-- profile image of each message room -->
                        <div class="h-12 col-span-1 w-12 flex-1 rounded-full overflow-hidden">
                            <img src="/storage/assets/images/profiles/14.jpg" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- name -->
                        <div class=" col-span-4 flex-1">
                            <div class="flex justify-between">
                                <h4 class=" text-sm text-gray-800 font-bold">group</h4>
                                <span class=" text-xs text-gray-700 ">3 week ago</span>
                            </div>
                            <div>
                                <span class="text-sm text-gray-700">hello everyone </span>
                            </div>
                        </div>
                        
                    </div>

                    
                    
                </div>
            </div>
            <div :class="{'relative overflow-auto hidden  sm:block w-3/5 h-full bg-gray-50 ':true,'flex place-items-center mx-auto':!messageSelected}">
                <div class="sticky top-0 py-4 px-2 border-b border-gray-300 bg-gray-50 flex justify-between items-center">
                    <div class="mx-auto">
                        <h3 class=" text-gray-800 font-bold text-lg">Abduselam</h3>
                    </div>
                    
                </div>
                <!-- message part -->
                <ul class=" ">
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li><li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li><li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li><li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    <li class=" my-2 font-semibold">
                        <span class="text-sm bg-gray-300 px-2 py-2 rounded mt-2 ml-2">hey everyone</span>
                    </li>
                    <li class="my-2  text-right font-semibold text-gray-900">
                        <span class="text-sm bg-blue-500 py-2 px-2 mt-2 mr-2 rounded ">
                            hey how you doin
                        </span>
                    </li>
                    
                    
                </ul>
                <!-- message send input and button -->
                <div class=" px-2 sticky bg-white w-full bottom-0 left-0 grid grid-cols-12 items-center ">
                    
                    <div class=" col-span-10">
                        <input type="text" placeholder="Message" class="my-2 w-full focus:outline-none rounded px-2 py-1" id="">
                    </div>
                    <div class=" pl-1 col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class=" col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                    
                </div>
                <!-- <svg aria-label="Add Photo or Video" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                    <path d="M38.5 0h-29C4.3 0 0 4.3 0 9.5v29C0 43.7 4.3 48 9.5 48h29c5.2 0 9.5-4.3 9.5-9.5v-29C48 4.3 43.7 0 38.5 0zM45 38.5c0 3.6-2.9 6.5-6.5 6.5h-29c-3.3 0-6-2.5-6.4-5.6l8.3-8.3c.1-.1.3-.2.4-.2.1 0 .2 0 .4.2l6.3 6.3c1.4 1.4 3.6 1.4 5 0L35.9 25c.2-.2.6-.2.8 0l8.3 8.3v5.2zm0-9.4l-6.2-6.2c-1.3-1.3-3.7-1.3-5 0L21.3 35.3c-.1.1-.3.2-.4.2-.1 0-.2 0-.4-.2L14.2 29c-1.3-1.3-3.7-1.3-5 0L3 35.2V9.5C3 5.9 5.9 3 9.5 3h29C42.1 3 45 5.9 45 9.5v19.6zM11.8 8.2c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z">
                    </path>
                </svg> -->
            </div>
        </div>
       
    </div>
</template>

<script>

export default {
    data(){
        return {
            messageSelected: true
        }
    }
   
}
</script>