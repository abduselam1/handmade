<template>
    <div class="relative">
        <div class="block">
            <button @click="this.dropdownOpener" class="text-gray-900 inline-flex text-sm py-1 bg-gray-200 rounded-r-lg h-8  px-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                All 
            </button>
            <ul v-if="isOpen" class="absolute right-0 m-2 p-2 bg-white rounded-lg w-48 ">
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">Electronics</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">fashion</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">mens fashion</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">womens fashion</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">cars</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">jewlery</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">others</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">Electronics</li>
                <li class=" cursor-pointer hover:bg-gray-100 rounded-lg p-2">Electronics</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            isOpen:false
        }
    },
    methods: {
        dropdownOpener(){
            console.log(this.isOpen);
            this.isOpen = !this.isOpen
        }
    }
}
</script>