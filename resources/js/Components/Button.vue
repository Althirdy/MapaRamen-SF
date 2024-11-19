<template>
    <button
        :class="[
            'rounded-md text-center p-2 text-white text-[1.2rem] font-medium',
            disabled
                ? 'bg-slate-300 cursor-wait'
                : 'bg-primary_blue hover:bg-secondary_blue cursor-pointer',
        ]"
        :disabled="disabled"
    >
        {{ label }}
    </button>
</template>

<script setup>
defineProps({
    label: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: "primary",
    },
    disabled: {
        type: Boolean,
        default: false,
    },
});
</script>
