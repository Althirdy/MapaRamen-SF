<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import IngredientsTable from "../InventoryComponents/IngredientsTable.vue";

const categories = ["Dry", "Wet", "Sauces"];
const sortBy = ["Alphabetical", "Status", "Expiration"];

defineProps({
    ingredients: Array
});
</script>
<template>
    <Main>
        <div class="max-w-screen-xl p-6 min-h-full mx-auto flex flex-col gap-[24px] bg-white rounded-md border border-disabled">
            <InventoryNav/>
            <div class="border flex flex-col gap-6">
                <SearchSort :categories="categories" :sortBy="sortBy"/>
                <IngredientsTable :ingredients="ingredients"/>
            </div>
        </div>
    </Main>
</template>