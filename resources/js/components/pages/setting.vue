<template>
    <div class="mt-0 flex xs:mt-10 mx-auto w-full sm:max-w-xl lg:max-w-4xl xl:max-w-5xl ">
        <div class="hidden sm:block sm:w-1/4 mt-5 border-r-2 xs:border-gray-400">
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-bold hover:rounded py-2 hover:bg-gray-200 border-l-2 border-solid border-blue-600">
                <h3>Edit Account</h3>
            </div>
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-semibold rounded py-2 hover:bg-gray-200" >
                <h3>Change Password</h3>
            </div>
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-semibold rounded py-2 hover:bg-gray-200">
                <h3>Privacy and security</h3>
            </div>
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-semibold rounded py-2 hover:bg-gray-200">
                <h3>Login Activity</h3>
            </div>
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-semibold rounded py-2 hover:bg-gray-200">
                <h3>Apps and Websites</h3>
            </div>
            <div class=" cursor-pointer px-3 mb-3 text-gray-700 font-semibold rounded py-2 hover:bg-gray-200">
                <h3>Manage contacts</h3>
            </div>
        </div>
        <div class="  w-full sm:w-3/4">
            <div class=" xs:px-10 sm:px-20 sm:max-w-xl mx-auto ">
                <div class=" sm:px-0 flex px-5 py-5">
                    <div class="w-14 h-14 overflow-hidden rounded-full">
                        <img src="/storage/assets/images/profiles/5.jpg" class="h-full w-full" alt="">
                    </div>
                    <div class="mx-5">
                        <h3 class=" text-lg text-gray-600 font-semibold">abduselam30</h3>
                        <label for="profile-image" class="text-sm text-blue-800 font-semibold cursor-pointer">Change Profile Image</label>
                        <input type="file" name="profile-image" id="profile-image" class="hidden">
                    </div>
                </div>
                
                <div class="sm:flex mb-5">
                    <div class="px-5 sm:px-0 w-3/20">
                        <label for="name" class="text-gray-800 font-semibold text-lg">Name</label>
                    </div>
                    <div class="sm:ml-10 px-5 w-17/20">
                        <input type="text" class="focus:outline-none w-full px-2 py-2 text-base" id="name" placeholder="Name">
                        <div class="mt-2">
                            <span class=" text-xs text-gray-400 font-semibold">Help people discover your account by using the name you're known by: either your full name, nickname, or business name.</span>
                        
                            <span class="text-xs text-gray-400 font-semibold block mt-2">You can only change your name twice within 14 days.</span>
                        </div>
                    </div>
                </div>
                <div class="sm:flex mb-5">
                    <div class="px-5 sm:px-0 w-3/20">
                        <label for="username" class="text-gray-800 font-semibold text-lg">Username</label>
                    </div>
                    <div class="sm:ml-10 px-5 w-7/20">
                        <input type="text" class="focus:outline-none w-full px-2 py-2 text-base" id="username" placeholder="Username">
                        <div class="mt-2">
                            <span class=" text-xs text-gray-400 font-semibold">In most cases, you'll be able to change your username back to the_username for another 14 days. </span>
                        </div>
                        
                    </div>
                </div>

                <div class="sm:flex mb-2">
                    <div class="px-5 sm:px-0 w-3/20">
                        <label for="website" class="text-gray-800 font-semibold text-lg">Website</label>
                    </div>
                    <div class="sm:ml-10 px-5 w-17/20">
                        <input type="text" class="focus:border-blue-400 focus:border focus:outline-none w-full px-2 py-2 text-base" id="website" placeholder="Website">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- <div class="mt-0 md:mt-10 mx-auto max-w-4xl border-t border-gray-700">
        <div class="flex justify-between py-2 px-2 items-center  rounded">
            
        </div>
        <div class="mt-4 max-w-xl mx-auto shadow">
            <div class="flex  px-20 py-5">
                <div class="w-16 h-16 overflow-hidden rounded-full">
                    <img src="../assets/images/profiles/5.jpg" class="h-full w-full" alt="">
                </div>
                <div class="mx-5">
                    <h3 class=" text-lg text-gray-600 font-semibold">abduselam30</h3>
                    <label for="profile-image" class="text-sm text-blue-800 font-semibold cursor-pointer">Change Profile Image</label>
                    <input type="file" name="profile-image" id="profile-image" class="hidden">
                </div>
            </div>
        </div>
    </div> -->
</template>

<script>
export default {
    
}
</script>