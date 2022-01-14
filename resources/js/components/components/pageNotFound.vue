<template>
    <div class=" max-w-sm mx-auto h-full my-auto ">
            <h1 class=" text-red-500 text-center font-medium text-7xl ">404</h1>
            <h3 class="text-center text-gray-500 font-semibold">{{ this.default }} return <router-link to="/" class=" text-blue-600">Home</router-link> </h3>
    </div>
</template>

<script>
export default {
    mounted(){
        if(this.message != undefined){
            this.default = this.message;
        }
    },
    data(){
        return {
            default:"Page not found"
        }
    },
    props:['message']
}
</script>