<template>
    <button class="rounded-md text-center bg-primary_blue p-2 text-white text-[1.2rem] font-medium disabled:bg-slate-300 disabled:cursor-wait">
        {{ label }}
    </button>
</template>
<script setup>
defineProps({
    label: String,
    type: {
        type: String,
        default: "primary",
    },
});
</script>
