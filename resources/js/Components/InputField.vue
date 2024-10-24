<template lang="">
    <div>
        <div>
            <label
                :for="label"
                class="block text-sm font-medium text-dark_text"
            >
                {{ label }}
            </label>

            <div class="mt-1 rounded-md">
                <input
                    :type="type"
                    :name="label"
                    :placeholder="placeholder"
                    v-model="model"
                    class="block w-full text-dark_text rounded-md pr-3 pl-8 text-sm border-gray-400 outline-0 focus:ring-1 focus:ring-inset focus:ring-secondary_light_text focus:border-secondary_dark_text placeholder:text-secondary_light_text"
                />
            </div>
        </div>
    </div>
</template>
<script setup>
const model = defineModel();

defineProps({
    label: String,
    placeholder: {
        type: String,
        default: "",
    },
    type: {
        type: String,
        default: "text",
    },
});
</script>
