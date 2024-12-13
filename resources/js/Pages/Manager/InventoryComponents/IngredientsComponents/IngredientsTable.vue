<script setup>

import IngredientsRow from './IngredientsRow.vue';
let ingredients = await fetchData();
let Dry = ingredients.dry;
let Wet = ingredients.wet;
let Sauces = ingredients.sauces;

async function fetchData(){
    const response = await fetch('/ingredients.json');
    const data = await response.json();
    return data;
}

const props = defineProps({
    category: Number,
    sortBy: Number,
})

</script>
<template>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[1000px] text-left">
            <tr class="flex p-4 items-center">
                <th class="flex-1 w1">Ingredients ID</th>
                <th class="flex-[2] w2">Ingredients</th>
                <th class="flex-1 w1">Quantity</th>
                <th class="flex-1 w3">Measurement</th>
                <th class="flex-1 w1">Status</th>
                <th class="flex-1 w3 leading-none ">Manufactured <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
                <th class="flex-1 w3 leading-none ">Expiration <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
                <th class="flex-1 w3 leading-none ">Delivery <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
            </tr>
            <IngredientsRow v-if="category == 0" :ingredients="Dry"/>
            <IngredientsRow v-if="category == 1" :ingredients="Wet"/>
            <IngredientsRow v-if="category == 2" :ingredients="Sauces"/>
        </table>
    </div>
</template>
<style scoped>
.w1 {
    min-width: 100px;
}
.w2 {
    min-width: 150px;
}
.w3 {
    min-width: 120px;
}
</style>