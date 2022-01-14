<template>
  <div class="static">
        <div class=" md:grid row-auto md:px-12 sm:px-10 sm:mx-auto max-w-full md:max-w-xl  lg:max-w-2xl items-start">
      <div class=" overscroll-y-auto ">
        <div v-for="post in posts" :key="post.id">
          <card v-bind:liked="liked" v-bind:saved="saved" v-bind:post="post" /> 
        </div>
        <!-- <card /> 
        <card /> 
        <card /> 
        <card />  -->
      </div>
      <div class=" mt-4 hidden ">
        <div class="flex">
          <div class=" h-16 w-16 bg-gray-500 rounded-full rounded-b-full overflow-hidden">
            <img src="/storage/assets/images/1.jpg" class="w-full h-full object-cover" alt="">
          </div>
          <div class="ml-4">
            <h3 class="text-gray-900 font-semibold">Abduselam30</h3>
            <h4 class="text-gray-500">Abduselam</h4>
          </div>
        </div>
        <div>
          <div class="flex justify-between items-center">
            <h3 class="my-3 text-lg text-gray-500 font-semibold">Suggested For You</h3>
            <a href="#" class="mr-16 text-sm font-semibold text-blue-700">See all</a>
          </div>
        </div>
      </div>
      
    </div>
    

  </div>
</template>

<script>

export default {
    data(){
      return {
        posts:'',
        liked:'[]',
        saved:'[]'
      }
    },

    mounted(){
      if(authorized){
        this.liked = getCookie('liked');
        this.saved = getCookie('saved');
      }
      
      axios.get('/api/post').then((result) => {
        this.posts = result.data;
      }).catch((err) => {
        console.log(err);
      });
      // console.log(this.$name);
      // this.$axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
      // this.$axios.defaults.headers.get['Accept'] = 'application/json';
      // this.$axios.get('http://127.0.0.1:4000/test').then((result) => {
      //   console.log(result);
      // }).catch((err) => {
      //   console.warn(err);
      // });
      // console.log(this.$route);
    },
    methods: {
      handleAnauthorizedAction: function (properties){
        console.log("hello");
            
      }
    }
}
</script>