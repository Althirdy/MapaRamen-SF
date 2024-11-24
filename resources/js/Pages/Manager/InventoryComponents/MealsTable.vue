<script setup>
import { ref } from "vue";

let meals = await fetchData();
async function fetchData(){ 
    const response = await fetch('/ingredients.json');
    const data = await response.json();
    return data;
}
const props = defineProps({
    category: Number
})
let mealCategory = ref(ingredients.dry);

if (props.category == 0) {
    ingredients = ingredients.filter(ingredient => ingredient.category == "Dry");
} else if (props.category == 1) {
    ingredients = ingredients.filter(ingredient => ingredient.category == "Wet");
} else if (props.category == 2) {
    ingredients = ingredients.filter(ingredient => ingredient.category == "Sauces");
}
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
            <!-- <tr  v-for="(data, index) in ingredients.dry" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
            class="flex p-4 items-center">
                <td class="flex-1 min-w-[100px]">{{ data.id }}</td>
                <td class="flex-[2] min-w-[150px] ">{{ data.name }}</td>
                <td class="flex-1 min-w-[100px]">{{ data.quantity }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.measurement }}</td>
                <td class="flex-1 min-w-[100px] ">{{ data.status }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.manufactured }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.expiration }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.delivery }}</td>
            </tr> -->
            
        </table>
    </div>
</template>