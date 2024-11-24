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
                <th class="flex-1 min-w-[100px]">Meals ID</th>
                <th class="flex-[2] min-w-[150px]">Meals</th>
                <th class="flex-1 min-w-[100px]">Quantity</th>
                <th class="flex-1 min-w-[100px]">Status</th>
            </tr>
            <MealsRow v-if="category == 0" :meals="meals.ramen"/>
            <MealsRow v-if="category == 1" :meals="meals.maki"/>
            <MealsRow v-if="category == 2" :meals="meals.alaCarte"/>
            <MealsRow v-if="category == 3" :meals="meals.donBuri"/>
            
        </table>
    </div>
</template>