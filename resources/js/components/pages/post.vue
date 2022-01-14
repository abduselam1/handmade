<template>
<div class="h-full">
    <div v-if="(counter < 5) && (post == null)" class="my-14 sm:my-5">
        <div class="mb-14 sm:mb-5">
        
            <div class="sm:px-5 sm:max-w-xl w-full md:max-w-2xl mt-10 sm:mx-auto bg-gray-white h-full">
                <div  class=" h-16 bg-gray-300 animate-pulse">
                    
                </div>
                
                <!-- content part -->
                <div class=" h-60 w-full mb-2 bg-gray-300 animate-pulse">
                    
                </div> 

                
                <!-- like comment and other buttons -->
                <div class="w-full h-16 mb-2 animate-pulse bg-gray-300">
                    
                </div>


                <!-- writing comment part -->

                <div class="w-full h-16 animate-pulse bg-gray-300">
                    
                </div>

                

            </div>
            
        </div>
    </div>

    <div v-else-if="error" class="my-14 sm:my-5">
        <div class=" max-w-sm mx-auto w-full">
            <div class="w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="object-none object-center h-24 w-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                </svg>
            </div>
            <h3 class="text-center text-gray-500 font-semibold">There is an error with connecting to the server please check your internet connectivity</h3>
        </div>
    </div>
    <div class="" v-else-if="notFound">
        <page-not-found  />
    </div>
    <div v-cloak v-else class="mb-14 sm:mb-5">
        
        <div class=" px-2 sm:px-5 sm:max-w-xl w-full md:max-w-2xl mt-10 sm:mx-auto border border-gray-200 bg-gray-white h-full">
            <div class="flex items-center  my-2 justify-between">
                <div class="flex items-center">
                    <div class="w-12 h-12 mr-3 rounded-full overflow-hidden">
                        <img :src="'/storage/'+post.user.profiles.img_url" alt="Profile picture of the poster">
                    </div>
                    <div class="">
                        <h3 class="text-xl font-semibold text-gray-800">
                            {{post.user.first_name+' '+ post.user.last_name}}
                        </h3>
                        <span class=" text-gray-400 ">@{{post.user.username}}</span>
                    </div>
                </div>
                
                <div class="cursor-pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </div>
                
            </div>
            
            <!-- content part -->
            <div class=" hover:cursor-text ">
                <h3 class="text-lg md:text-xl font-medium  text-gray-800 ">
                    {{post.content}}
                </h3>
            </div>
            
            <div v-if="post.images.length > 0" class="w-full h-full mt-3 ">
                <img v-for="post_images in post.images" :key="post_images.id" :src="'/storage/'+post_images.url" class=" w-full" alt="">
            </div>
            <!-- time and data of the post -->
            <div class="py-2 my-2">
                <span> <router-link to="#" class=" text-gray-600 text-lg ">{{post.created_at | postDateFormat}}</router-link> </span>
            </div>

            <div class=" hr"></div>

            <div class="flex items-center">
                <div class="m-3">
                    <h3 class="text-gray-900 font-bold text-xl">{{post.comment}}<span class="text-gray-500 font-normal text-lg"> Comment</span></h3>
                </div>
                <div class="m-3">
                    <h3 class="text-gray-900 font-bold text-xl">{{post.likes}}<span class="text-gray-500 font-normal text-lg"> Likes</span></h3>
                </div>
                <div v-if="post.saveds != undefined " class="m-3">
                    <h3 class="text-gray-900 font-bold text-xl">{{post.saved}}<span class="text-gray-500 font-normal text-lg"> Saved</span></h3>
                </div>
            </div>

            <div class=" hr"></div>
            
            <!-- like comment and other buttons -->
            <div class="flex justify-between items-center">
                <div @click="likePost" class="mx-3 cursor-pointer focus:bg-white hover:bg-red-200 p-3 rounded-full">
                    
                    <svg  aria-label="Unlike" :id="'unlike'+post.id" :class="{hidden :!isLiked,'animate-like':isLiked}" color="#ed4956" fill="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                        <svg aria-label="Like" :id="'like'+post.id" :class="{hidden:isLiked,'fill-current hover:text-red-600 text-gray-800 focus:text-gray-600':true}" fill="#ed4956" color="#ed4956" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                            </path>
                        </svg>
                </div>
                <!-- comment button
                <button class="m-2 p-3 cursor-pointer hover:bg-green-200 rounded-full">
                    <svg aria-label="Comment" class="fill-current hover:text-green-600 text-gray-800 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd">
                        </path>
                    </svg>
                </button> -->
                <!-- message button -->
                <div @click="messagePost" class="m-2 p-3 cursor-pointer rounded-full focus:bg-white hover:bg-blue-200">
                    <svg aria-label="Share Post" class="fill-current text-gray-800 hover:text-blue-600" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24">
                        <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                        </path>
                    </svg>
                </div>
                <div @click="saveToSaved" class="m-2 p-3 cursor-pointer focus:bg-white hover:bg-purple-200 rounded-full">
                    

                    <svg aria-label="Save" :class="{hidden:isSaved,'hover:text-purple-600 fill-current text-gray-800 ':true}" color="#8e8e8e" fill="#8e8e8e" height="24" role="img" viewBox="0 0 48 48" width="24">
                            <path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z">
                            </path>
                        </svg>
                        <svg aria-label="Remove" :class="{hidden:!isSaved}" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                            <path d="M20 22a.999.999 0 01-.687-.273L12 14.815l-7.313 6.912A1 1 0 013 21V3a1 1 0 011-1h16a1 1 0 011 1v18a1 1 0 01-1 1z">
                            </path>
                        </svg>
                </div>
            </div>

            <div class=" hr"></div>

            <!-- writing comment part -->

            <div class="flex justify-evenly items-center mb-2">
                <div>
                    <svg aria-label="Emoji" class="" color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 48 48" width="24"><path d="M24 48C10.8 48 0 37.2 0 24S10.8 0 24 0s24 10.8 24 24-10.8 24-24 24zm0-45C12.4 3 3 12.4 3 24s9.4 21 21 21 21-9.4 21-21S35.6 3 24 3z"></path><path d="M34.9 24c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5 1.1 2.5 2.5 2.5 2.5-1.1 2.5-2.5zm-21.8 0c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5-2.5-1.1-2.5-2.5zM24 37.3c-5.2 0-8-3.5-8.2-3.7-.5-.6-.4-1.6.2-2.1.6-.5 1.6-.4 2.1.2.1.1 2.1 2.5 5.8 2.5 3.7 0 5.8-2.5 5.8-2.5.5-.6 1.5-.7 2.1-.2.6.5.7 1.5.2 2.1 0 .2-2.8 3.7-8 3.7z">
                        </path>
                    </svg>
                </div>
                <div class="w-full ml-2 ">
                    <textarea name="comment" id="comment" placeholder="Type Your comment"  rows="1" class="w-full text-lg focus:outline-none px-2 py-2 resize-none bg-white" ></textarea>
                </div>
                <div class="ml-2">
                    <button class="px-2 py-1 bg-blue-600 text-white rounded-lg">
                        Post
                    </button>
                </div>
            </div>

            <div class=" hr"></div>


            <div v-if="post.comments.length > 0">
                <comment v-for="each_comment in post.comments" :key="each_comment.id" :comment="each_comment" :username="post.user.username" />
            </div>
            <div v-else class="w-full text-center my-3">
                <h3 class="font-semibold text-gray-700">No comment Be the first to comment!!</h3>
            </div>
            <!-- <comment />
            <comment /> -->

        </div>
        
    </div>
</div>
</template>


<script>
export default {

    data(){
        return {
            isLiked:false,
            isSaved:false,
            post: null,
            error:false,
            counter:0,
            notFound:false,
        }
    },
    created(){
        
        
        if(this.$route.meta.data == null){
            this.getPost();
        }else{
            if(this.$route.meta.data == false){
                this.notFound = true;
            }
            else{
                this.post = this.$route.meta.data
            }
        }
        
    },

    methods:{
        // liked: function(postId){
        //     if(authorized){
        //         let likes = getCookie('liked');
        //         if(likes.length != 0){
        //             likes = JSON.parse(likes);
        //             likes.forEach(likedId => {
        //                 if(likedId == postId){
        //                     this.isLiked = true;
        //                 }
        //             });
        //         }
                
        //     }
            
        // },
        // saved: function(postId){
        //     var saveds = getCookie('saved');
        //     if(saveds.length != 0){
        //             saveds = JSON.parse(saveds);
        //             saveds.forEach(savedId => {
        //                 if(savedId == postId){
        //                     this.isSaved = true;
        //                 }
        //             });
        //     }
            
        // },
        getPost(){
            if(this.$route.meta.data == null){
                var post_id = this.$route.params.id;
                axios.get('/api/post/'+post_id).then((result) => {
                    if(result.data == false){
                        this.notFound = true;
                    }
                    this.post = result.data;
                    // this.saved(result.data.id);
                    // this.liked(result.data.id)
                }).catch((err) => {
                    // this.post = this.cache_post;
                    console.warn(err.status);
                    if(this.counter < 5){
                        this.counter++
                        setTimeout(this.getPost,5000);
                    }else{
                        this.error = true
                    }
                });
            }
            
        },
        showSnackbar: function(){
            $('#snack').removeClass('hidden')
            setTimeout(function(){
                $('#snack').addClass('hidden')
            },3000)
        },
        
        messagePost: function(){
            if(!authorized){
                this.showSnackBar()
            }
        },
        unlike: function(){
            this.isLiked = false;
            this.post.likes--;
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
        likeIcon: function(){
            this.isLiked = true;
            this.post.likes++;
            $('#unlike'+this.postid).addClass("animate-like");
        },
        likePost: function(){
            if(authorized){
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
                    this.post.likes--;
                });
            }
            else{

                this.showSnackbar();
            }
            
        },
        unsave: function(){
            
            axios.get('/api/post/'+this.post.id+'/unsave?user='+user.id).then((result) => {
                //success message
                this.isSaved = false;
                var currentSaved = getCookie('saved');
                currentSaved = JSON.parse(currentSaved);
                var newValue =currentSaved.filter((postId)=>{
                    return postId != this.post.id;
                })
                console.warn(newValue);
                newValue = JSON.stringify(newValue);
                setCookie('saved',newValue,365);
            }).catch((err) => {
                
            });
        },
        saveToSaved: function(){
            if(authorized){
                if(this.isSaved){
                    return this.unsave()
                }
                
                axios.get('/api/post/'+this.post.id+'/save?user='+user.id).then((result) => {
                    this.isSaved = true;
                    var currentSaved = getCookie('saved');
                    currentSaved = JSON.parse(currentSaved);
                    currentSaved.push(this.post.id)
                    currentSaved = JSON.stringify(currentSaved);
                    setCookie('saved',currentSaved,365);
                }).catch((err) => {
                    //show error message
                    
                });
            }
            else{

                this.showSnackbar();
            }
        }
    }
}
</script>