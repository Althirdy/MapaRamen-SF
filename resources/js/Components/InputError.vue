<script setup>
defineProps({
    error: {
        type: String,
        default: "",
    },
});
</script>
<template>
    <span class="text-sm text-primary_red">{{ error }}</span>
</template>
