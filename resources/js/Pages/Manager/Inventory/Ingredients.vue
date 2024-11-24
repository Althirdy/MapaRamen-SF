<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import IngredientsTable from "../InventoryComponents/IngredientsComponents/IngredientsTable.vue";
import InventoryWrapper from "../InventoryComponents/InventoryWrapper.vue";
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
        <InventoryWrapper>
            <InventoryNav/>
            <div class="border flex flex-col gap-6">
                <SearchSort :categories="categories" :sortBy="sortBy" @update:category="selectedCategory = $event"
                @update:sort="selectedSort = $event"/>
                <Suspense>
                    <IngredientsTable :category="selectedCategory" :sortBy="selectedSort" :ingredients="ingredients"/>
                </Suspense>
            </div>
        </InventoryWrapper>
    </Main>
</template>