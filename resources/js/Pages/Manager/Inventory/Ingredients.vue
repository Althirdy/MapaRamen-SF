<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import IngredientsTable from "../InventoryComponents/IngredientsTable.vue";
import { ref } from "vue";

const categories = ["Dry", "Wet", "Sauces"];
const sortBy = ["Alphabetical", "Quantity", "Expiration"];
let selectedCategory = ref(0);
let selectedSort = ref(0);

defineProps({
    ingredients: Array
});
</script>
<template>
    <Main>
        <div class="max-w-screen-xl p-6 min-h-full mx-auto flex flex-col gap-[24px] bg-white rounded-md border border-disabled">
            <InventoryNav/>
            <div class="border flex flex-col gap-6">
                <SearchSort :categories="categories" :sortBy="sortBy" @update:category="selectedCategory = $event"
                @update:sort="selectedSort = $event"/>
                <Suspense>
                    <IngredientsTable :category="selectedCategory" :sortBy="selectedSort" :ingredients="ingredients"/>
                </Suspense>
            </div>
        </div>
    </Main>
</template>