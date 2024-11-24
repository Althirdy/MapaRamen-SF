<script setup>
import { h, ref } from "vue";
import Search from "../InventoryComponents/Search.vue";
import DropDown from "../../../Components/DropDown.vue";

const isAscending = ref(true);
const changeSort = () => {
    isAscending.value = !isAscending.value;
}
let Categs = [];
defineProps({
    categories: {default: []},
    sortBy: {default: []},
    HasSearch: { type: Boolean, default: true },
    HasAdd: { type: Boolean, default: true },
});

const emit = defineEmits(['update:category', 'update:sort'])
const handleCategoryChange = (index) => {
    emit('update:category', index)
}
const handleSortChange = (index) => {
    emit('update:sort', index)
}

</script>
<template>
    <div class="max-w-screen-xl p-4 min-h-full flex row justify-between">
        <div class="flex row gap-2">
            <Search v-if="HasSearch"/>
            <div v-if="categories.length != 0" class="flex items-center w-max">
                <DropDown :options="categories" @change="handleCategoryChange" />
            </div>
        </div>
        <div class="flex row gap-6">
            <div v-if="sortBy.length != 0" class="flex items-center gap-2">
                <p>Sort By: </p>
                <DropDown :options="sortBy" @change="handleSortChange" />
                <button class="flex ml-2"> 
                    <img :src="`/Assets/${isAscending ? 'Ascending' : 'Descending'}.svg`" alt="sort direction">
                </button>
            </div>
            <button v-if="HasAdd" class="bg-primary_blue rounded-lg text-primary_light flex items-center gap-2 px-4 py-2">
                <img :src="`/Assets/Add.svg`" alt="add">
                Add Item
            </button>
        </div>
    </div>
</template>