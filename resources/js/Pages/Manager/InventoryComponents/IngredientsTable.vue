<script setup>
import Ingredients from '../Inventory/Ingredients.vue';

const formatDate = (dateString) => {
    if (!dateString) return '';
    const [year, month, day] = dateString.split('-');
    return `${month}/${day}/${year}`;
}
let ingredients = await fetchData();
async function fetchData(){ 
    const response = await fetch('/ingredients.json');
    const data = await response.json();
    return data;
}

defineProps({
    category: Number,
    sortBy: String,
})
</script> 
<template>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[1000px]">
            <tr class="flex p-4 items-center">
                <th class="flex-1 min-w-[100px] text-left">Ingredients ID</th>
                <th class="flex-[2] min-w-[150px] text-left">Ingredients</th>
                <th class="flex-1 min-w-[100px] text-left">Quantity</th>
                <th class="flex-1 min-w-[120px] text-left">Measurement</th>
                <th class="flex-1 min-w-[100px] text-left">Status</th>
                <th class="flex-1 min-w-[120px] leading-none text-left">Manufactured <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
                <th class="flex-1 min-w-[120px] leading-none text-left">Expiration <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
                <th class="flex-1 min-w-[120px] leading-none text-left">Delivery <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
            </tr>
            <tr v-if='category == 0' v-for="(data, index) in ingredients.dry" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
            class="flex p-4 items-center">
                <td class="flex-1 min-w-[100px]">{{ data.id }}</td>
                <td class="flex-[2] min-w-[150px] text-left">{{ data.name }}</td>
                <td class="flex-1 min-w-[100px]">{{ data.quantity }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.measurement }}</td>
                <td class="flex-1 min-w-[100px] text-left">{{ data.status }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.manufactured }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.expiration }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.delivery }}</td>
            </tr>
            <tr v-if='category == 1' v-for="(data, index) in ingredients.wet" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
            class="flex p-4 items-center">
                <td class="flex-1 min-w-[100px]">{{ data.id }}</td>
                <td class="flex-[2] min-w-[150px] text-left">{{ data.name }}</td>
                <td class="flex-1 min-w-[100px]">{{ data.quantity }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.measurement }}</td>
                <td class="flex-1 min-w-[100px] text-left">{{ data.status }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.manufactured }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.expiration }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.delivery }}</td>
            </tr>
        
            <tr v-if='category == 2' v-for="(data, index) in ingredients.sauces" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
            class="flex p-4 items-center">
                <td class="flex-1 min-w-[100px]">{{ data.id }}</td>
                <td class="flex-[2] min-w-[150px] text-left">{{ data.name }}</td>
                <td class="flex-1 min-w-[100px]">{{ data.quantity }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.measurement }}</td>
                <td class="flex-1 min-w-[100px] text-left">{{ data.status }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.manufactured }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.expiration }}</td>
                <td class="flex-1 min-w-[120px]">{{ data.delivery }}</td>
            </tr>
        </table>
    </div>
</template>