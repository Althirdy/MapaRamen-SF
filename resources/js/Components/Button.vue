<template>
    <button
      :class="[
        'rounded-md text-center p-2 font-medium transition',
        type === 'primary'
          ? 'bg-primary_blue text-white text-[1.2rem] hover:bg-secondary_blue'
          : type === 'green'
          ? 'bg-green-500 text-white hover:bg-green-600'
          : 'bg-gray-300 text-gray-700',
        disabled ? 'cursor-wait' : 'cursor-pointer'
      ]"
      :disabled="disabled"
    >
      <slot />
    </button>
  </template>
  
  <script setup>
  defineProps({
    type: {
      type: String,
      default: "primary", // Default button type
    },
    disabled: {
      type: Boolean,
      default: false,
    },
  });
  </script>