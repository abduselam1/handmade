<template>
    <div>
        
        <div class="mb-8 bt-4  shadow-md bg-gray-50">
            <div class="flex justify-between items-center border-b border-gray-200 bg-gray-50 py-2 px-4 md:py-3 ">
                <router-link :to="'/account/'+post.user.username" class="flex items-center">
                    <div class="w-12 h-12 rounded-full overflow-hidden ">
                        <img :src="'/storage/'+post.user.profiles[0].thumbnail_url" class="" alt="">
                    </div>
                    <div>
                        <span class="text-sm text-gray-600 font-semibold">
                            {{ post.user.first_name }} {{' '+post.user.last_name}}
                        </span>
                    </div>
                </router-link>
                <!-- three dots for options -->
                <div class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </div>
                
            </div>
            <div class="">
                <div class="mx-2 my-3">
                    
                    <h3 class=" text-xs md:text-sm text-gray-800">
                        {{post.content}}
                    </h3>
                </div>
            </div>
            <div v-if="post.images.length > 0" class="w-full">
                <img v-for="post_images in post.images" :src="'/storage/'+post_images.url" :key="post_images.id" class="w-full object-cover" alt="">
            </div>
            <div class="px-2 py-1 flex justify-between">
                <div class="flex">
                    <!-- like button -->
                    <button @click="likePost"  class="m-2 cursor-pointe ">
                        <svg  aria-label="Unlike" :id="'unlike'+post.id" :class="{hidden :!isLiked,'animate-like':isLiked}" color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                        <svg aria-label="Like" :id="'like'+post.id" :class="{hidden:isLiked,'fill-current text-gray-800 focus:text-gray-600':true}" fill="#ed4956" color="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                    </button>
                    
                    <!-- message button -->
                    <button @click="messagePost" class="m-2 cursor-pointer ">
                        <svg aria-label="Share Post" class="fill-current text-gray-800 hover:text-gray-600" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                            </path>
                        </svg>
                    </button>
                    <!-- comment button -->
                    <router-link :to="'/post/'+post.id" class="m-2 cursor-pointer ">
                        <svg aria-label="Comment" class="fill-current text-gray-800 focus:text-gray-600 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd">
                            </path>
                        </svg>
                    </router-link>
                    
                </div>
                <div>
                    <button @click="saveToSaved" class="m-2 cursor-pointer ">
                        <svg aria-label="Save" :class="{hidden:isSaved,'fill-current text-gray-800 hover:text-gray-600':true}" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
                            </path>
                        </svg>
                        <svg aria-label="Remove" :class="{hidden:!isSaved}" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                            <path d="M20 22a.999.999 0 01-.687-.273L12 14.815l-7.313 6.912A1 1 0 013 21V3a1 1 0 011-1h16a1 1 0 011 1v18a1 1 0 01-1 1z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class=" px-2 py-1">
                <span class="m-2 text-sm font-bold text-gray-600">{{post.like}} likes</span>
            </div>
            <div class="px-2 py-1">
                
                <div>
                    <router-link :to="'/post/'+post.id" class="text-ms text-gray-500 font-semibold m-2">View All Comments</router-link>
                </div>
                <div>
                    <span class="text-xs text-gray-500 font-semibold m-2">{{post.date}}</span>
                </div>
            </div >
            <div class="hidden border px-2 py-1 sm:flex items-center">
                <div class=" w-1/12">
                    <svg aria-label="Emoji" class="" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z"></path><path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z">
                        </path>
                    </svg>
                </div>
                <div class=" w-9/12">
                    <input type="text" placeholder="Write your comment" class="px-2 py-1 w-full focus:outline-none h-8 bg-gray-50" name="" id="">
                </div>
                <div class=" w-1/12">
                    <button class="px-2 py-1 text-blue-900 font-semibold rounded-md">
                        Post
                    </button>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    mounted(){
        this.authorized = authorized;
        if(authorized){
            
            if(this.liked.length != 0){

                let liked = JSON.parse(this.liked);
                liked.forEach(likedId => {
                    if(likedId == this.post.id){
                        this.isLiked = true;
                    }
                });
            }

            if(this.saved.length != 0){
                let saved = JSON.parse(this.saved);
                saved.forEach(savedId => {
                    if(savedId == this.post.id){
                        this.isSaved = true;
                    }
                });
            }
        }

        
    },
    data(){
        return {
            authorized:null,
            isLiked:false,
            isSaved:false
        }
    },
    props: ['post','liked','saved'],

    methods:{
        
        showSnackbar: function(){
            
            $('#snack').removeClass('hidden');
            setTimeout(function(){
                $('#snack').addClass('hidden')
            },5000)
        },
        likeIcon: function(){
            this.isLiked = true;
            this.post.like++
            $('#unlike'+this.postid).addClass("animate-like");
        },
        
        unlike: function(){
            this.isLiked = false;
            this.post.like--;
            axios.get('/api/post/'+this.post.id+'/unlike?user='+user.id).then((result) => {
                //success message
                var currentLiked = getCookie('liked');
                currentLiked = JSON.parse(currentLiked);
                var newValue = currentLiked.filter((postId)=>{
                    return postId != this.post.id;
                })
                console.warn(newValue);
                newValue = JSON.stringify(newValue);
                setCookie('liked',newValue,365);
            }).catch((err) => {
                this.isLiked =true
            });
        },
        likePost: function(){
            if(this.authorized){
                if(this.isLiked){
                    return this.unlike()
                }
                this.likeIcon();
                axios.get('/api/post/'+this.post.id+'/like?user='+user.id).then((result) => {
                    var currentLiked = getCookie('liked');
                    currentLiked = JSON.parse(currentLiked);
                    currentLiked.push(this.post.id)
                    currentLiked = JSON.stringify(currentLiked);
                    setCookie('liked',currentLiked,365);
                }).catch((err) => {
                    //show error message
                    this.isLiked = false;
                    this.post.like--;
                });
            }
            else{

                this.showSnackbar();
            }
            
        },
        messagePost: function(){
            this.showSnackbar();
        },


        unsave: function(){
            this.isSaved = false;
            axios.get('/api/post/'+this.post.id+'/unsave?user='+user.id).then((result) => {
                //success message
                var currentSaved = getCookie('saved');
                currentSaved = JSON.parse(currentSaved);
                var newValue =currentSaved.filter((postId)=>{
                    return postId != this.post.id;
                })
                console.warn(newValue);
                newValue = JSON.stringify(newValue);
                setCookie('saved',newValue,365);
            }).catch((err) => {
                this.isSaved = true;
            });
        },
        saveToSaved: function(){
            if(this.authorized){
                if(this.isSaved){
                    return this.unsave()
                }
                this.isSaved = true;
                axios.get('/api/post/'+this.post.id+'/save?user='+user.id).then((result) => {
                    var currentSaved = getCookie('saved');
                    currentSaved = JSON.parse(currentSaved);
                    currentSaved.push(this.post.id)
                    currentSaved = JSON.stringify(currentSaved);
                    setCookie('saved',currentSaved,365);
                }).catch((err) => {
                    //show error message
                    this.isSaved = false;
                });
            }
            else{

                this.showSnackbar();
            }
            
        }
    }
    
}
</script>