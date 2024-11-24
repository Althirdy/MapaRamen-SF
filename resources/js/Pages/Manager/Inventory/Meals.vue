<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import MealsTable from "../InventoryComponents/MealsTable.vue";

let categories = ["Ramen", "Maki", "Ala Carte", "Don Buri", "Wings Platter", "Sizzling Plates"];
let sortBy = ["Alphabetical", "Quantity", "Expiration"];
</script>
<template>
    <Main>
        <div class="max-w-screen-xl p-6 min-h-full mx-auto flex flex-col gap-[24px]
         bg-white rounded-md border border-disabled">
            <InventoryNav/>
            <div class="border flex flex-col gap-6">
                <SearchSort :categories="categories" :sortBy="sortBy" :HasAdd="false"/>   
                <Suspense>
                    <MealsTable/>
                </Suspense>
            </div>
        </div>
    </Main>
</template>