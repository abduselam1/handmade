<template>
    <div>
        <div v-for="link in links" :key="link" class="flex justify-between px-3 py-2 bg-gray-100 border-t border-gray-300">
            <span class=" text-sm text-semibold text-gray-700">{{link.name}}</span>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    props: ['links','to']
}
</script>