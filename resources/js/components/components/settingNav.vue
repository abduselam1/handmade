<template>
    <div class=" -mt-8 mb-14 bg-gray-300">
        <div class="">
            <h3 class="mx-3 text-xs font-semibold text-gray-700 pt-4 mb-1">ACCOUNT</h3>
            
            <setting-nav-link v-bind:links='accounts' />
            
            <h3 class="mx-3 text-xs font-semibold text-gray-700 pt-4 mb-1">SETTINGS</h3>

            <setting-nav-link :links='settings' />
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            accounts:[
                {name:'Edit Account',to:''},
                {name:'Nametag',to:''},
                {name:'Change Password',to:''},
                {name:'Privacy and security',to:''},
                {name:'Login Activity',to:''},
                {name:'Emails from handmed',to:''},
                
            ],
            settings:[
                {name:'Languages',to:''},
                {name:'Apps and Websites',to:''},
                {name:'Notifications',to:''},
                {name:'Notifications',to:''},
            ],
        }
    }
}
</script>