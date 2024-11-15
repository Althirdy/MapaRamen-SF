<template>
    <div class="relative" @click="toggleDropdown">
        <button
            class="w-full px-3 py-1 border border-gray-300 rounded-md text-left text-secondary_black flex gap-4 items-center focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <span>{{ selected }}</span>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
            >
                <path
                    fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.21 8.27a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd"
                />
            </svg>
        </button>
        <ul
            v-if="isOpen"
            class="absolute w-full bg-white border border-gray-300 mt-1 rounded-md shadow-lg z-10 max-h-60 overflow-auto"
        >
            <li
                v-for="(option, index) in options"
                :key="index"
                @click.stop="selectOption(option)"
                class="px-4 py-2 hover:bg-disabled cursor-pointer text-secondary_dark"
            >
                {{ option }}
            </li>
        </ul>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";

const props = defineProps({
    options: {
        type: Array,
        required: true,
    },
});

const emit = defineEmits(["select"]);

const isOpen = ref(false);
const selected = ref(null);

const toggleDropdown = () => {
    isOpen.value = !isOpen.value;
};

const selectOption = (option) => {
    selected.value = option;
    isOpen.value = false;
    emit("select", option);
};

// Set the first option as the default selected value
onMounted(() => {
    if (props.options && props.options.length > 0) {
        selected.value = props.options[0];
        emit("select", selected.value);
    }
});
</script>
