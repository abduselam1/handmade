<template>
    <div>
        <div v-if="verified" class="w-full xs:max-w-sm xs:mx-auto mx-0 my-5 border px-10 border-gray-300 bg-gray-50">
            <div class="mt-5">
                <h4 class=" text-base font-medium text-center text-gray-700">You have successfuly registered <br/> Go back to <a href="/login" class="text-blue-600 font-semibold">Login</a></h4>
            </div>
        </div>
        <div v-else>
            <div  class=" w-full xs:max-w-sm xs:mx-auto mx-0 my-5 border px-10 border-gray-300 bg-gray-50">
                <div class="mt-5 content-center justify-center">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-center" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                
                
                
                <div class="mt-5">
                    <h4 class=" text-base font-medium text-center text-gray-700">We have sent you a verification code to your email address address</h4>
                </div>

                <div>
                    <form action="/" method="POST">
                        
                        <div class="mb-2">
                            <input type="text" v-model="code" class="text-sm text-gray-800 focus:outline-none w-full border border-gray-300 rounded-md py-2 px-2 bg-gray-50" required  placeholder="Code">
                            
                                <span class="code-error text-red-600 text-xs"></span>
                            
                        </div>
                                            
                        <button type="submit" @click.prevent="verify" class="py-1 my-2 w-full text-white bg-blue-600 rounded-lg text-center">Verify</button>
                    </form>
                    

                    
                </div>

                
            </div>
            <div class="w-full xs:max-w-sm xs:mx-auto mx-0 border py-5 mb-3 border-gray-300 mb bg-gray-50">
                <div class="w-full ">
                    <h3 class="text-center text-gray-800 text-sm">Incorrect Email <button @click="goBack"  class=" bg-gray-100 text-blue-600 font-semibold">Go back</button></h3>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
    data(){
        return {
            verified:false,
            code:null
        }
    },

    methods: {
        goBack: function(){
            this.$emit('registered',{component:'register-body'})
        },
        verify: function(){
            if(this.code == null || this.code.length != 5){
                $('.code-error').text("Invalid Code");
                return;
            }
            $('.code-error').text("");
            var id = this.$parent.$data.id;
            console.log(id);
            axios.post('/verify',{id:id,code:this.code}).then((result) => {
                if(result.status == 200){
                    this.verified = true;

                }
            }).catch((err) => {
                $('.code-error').text("Invalid Code");
                
            });
        }
    }
}
</script>