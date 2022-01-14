<template>
    <div class="">
        
        <keep-alive>
            <component :is="component" @registered="registered($event)" />
        </keep-alive>
        <!-- <register-body :data='registeration'></register-body> -->

        
    </div>
</template>

<script>


export default {
    
    data(){
        return {
            verify:null,
            id: null,
            component:"register-body"
        }
    },
    updated(){
        console.log(this.email);
    },
    methods:{
    
        registered: function(properties){
            if(properties.component == 'verify'){
                this.id = properties.id;
                this.component = properties.component;
            }else{
                axios.delete('/register/user/'+this.id).then((result) => {
                    if(result.data == true){
                        this.component = properties.component;
                    }
                }).catch((err) => {
                    
                });
            }
        }
    }
}
</script>