<template>
    <div class="flex px-3 py-2 w-full justify-start mb-2 border-b border-gray-300">

        <!-- profile picture of the owner of the comment -->
        <div class="w-12 h-11 rounded-full overflow-hidden">
            <img :src="'/storage/'+comment.user.profiles.img_url" class="h-full w-full" alt="">
        </div>
        <div class=" w-full px-2 justify-between">

            <!-- name and option -->
            <div class="flex items-baseline justify-between">
                <div class=" inline-flex items-center">
                    <h3 class="text-lg text-gray-800 font-semibold">{{comment.user.first_name + ' ' + comment.user.last_name}}</h3>
                    <router-link to="#" class="text-base ml-1 text-gray-500 ">@{{comment.user.last_name}}</router-link>
                </div>
                <div>
                    <div class="cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <div class="">
                    <h3 class="sm:text-lg text-base text-gray-600 ">Replying to <router-link to="#" class=" font-medium text-blue-700">@{{username}}</router-link></h3>
                </div>
                <div>
                    <h4 class=" font-medium text-base sm:text-lg text-gray-800">
                        {{comment.content}}
                    </h4>
                </div>
            </div>
            <div class="my-2 flex ">
                <div class="text-gray-500 font-medium text-xs sm:text-sm">
                    <span class="ml-1 sm:ml-2">{{comment.date}}</span>
                    
                </div>
                <!-- <div class="text-gray-500 font-medium text-xs sm:text-sm">
                    
                    <span class="ml-1 sm:ml-2">234 replies</span>
                    
                </div> -->
                <div class="text-gray-500 font-medium text-xs sm:text-sm">
                    <span class="ml-2 sm:ml-2">
                        {{comment.like}} likes
                    </span>
                </div>
                
                
            </div>
        </div>
    </div>
</template>


<script>

export default {
    props: ['comment','username'],
}
</script>