<script setup>
import { ref } from "vue";
import MealsRow from "./MealsRow.vue";

let meals = await fetchData();
async function fetchData(){ 
    const response = await fetch('/meals.json');
    const data = await response.json();
    return data;
}
defineProps({
    category: Number
})

</script>
<template>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[1000px] text-left">
            <tr class="flex p-4 justify-between items-center ">
                <th class="flex-1 w1">Meals ID</th>
                <th class="flex-[2] w2">Meals</th>
                <th class="flex-1 w1">Quantity</th>
                <th class="flex-1 w1">Status</th>
            </tr>
            <MealsRow v-if="category == 0" :meals="meals.ramen"/>
            <MealsRow v-if="category == 1" :meals="meals.maki"/>
            <MealsRow v-if="category == 2" :meals="meals.alaCarte"/>
            <MealsRow v-if="category == 3" :meals="meals.donBuri"/>
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