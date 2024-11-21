<script setup>
import { ref } from "vue";
import Search from "../InventoryComponents/Search.vue";
import DropDown from "../../../Components/DropDown.vue";

const isAscending = ref(true);
const changeSort = () => {
    isAscending.value = !isAscending.value;
}

defineProps({
    categories: Array,
    sortBy: Array,
    search: { type: Boolean, default: true },
    categories: { type: Boolean, default: true },
    sort: { type: Boolean, default: true },
    add: { type: Boolean, default: true },
});
</script>
<template>
    <div class="max-w-screen-xl p-4 min-h-full flex row justify-between">
        <div class="flex row gap-2">
            <Search v-if="search"/>
            <div v-if="categories" class="flex items-center w-max">
                <DropDown :options="categories" />
            </div>
        </div>
        <div class="flex row gap-6">
            <div v-if="sort" class="flex items-center gap-2">
                <p>Sort By: </p>
                <DropDown :options="sortBy"/>
                <button class="flex ml-2" @click="changeSort">
                    <img :src="`/Assets/${isAscending ? 'Ascending' : 'Descending'}.svg`" alt="sort direction">
                </button>
            </div>
            <button v-if="add" class="bg-primary_blue rounded-lg text-primary_light flex items-center gap-2 px-4 py-2">
                <img :src="`/Assets/Add.svg`" alt="add">
                Add Item
            </button>
        </div>
    </div>
</template>