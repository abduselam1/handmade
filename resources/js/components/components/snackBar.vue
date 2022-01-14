<template>
    <div :class="' fixed sm:bottom-0 bottom-14 left-0 w-screen bg-gray-800'">
        <h3 class="sm:mx-3 sm:my-2 sm:text-lg mx-1 my-1 text-sm  font-semibold text-gray-50">
            {{message}}<slot></slot>
        </h3>
    </div>
</template>

<script>
export default {
    props: ['backgroundColor','message'],
}
</script>