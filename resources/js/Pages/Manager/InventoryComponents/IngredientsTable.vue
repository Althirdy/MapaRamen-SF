<script setup>
import Ingredients from '../Inventory/Ingredients.vue';

const formatDate = (dateString) => {
    if (!dateString) return '';
    const [year, month, day] = dateString.split('-');
    return `${month}/${day}/${year}`;
}

defineProps({
    ingredients: {
        default: []
    }
})
</script>
<template>
    <table class="w-full">
        <tr class="flex justify-between p-4 items-center">
            <th>Ingredients ID</th>
            <th class="w-[191px] text-left">Ingredients</th>
            <th>Quantity</th>
            <th class="">Measurement</th>
            <th class="w-[115px] text-left">Status</th>
            <th class="leading-none">Manufactured <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
            <th class="leading-none">Expiration <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
            <th class="leading-none">Delivery <br> <span class="text-xs">(mm-dd-yyyy)</span></th>
        </tr>
        <tr v-for="(ingredient, index) in ingredients" :class="{'bg-[#F7F6FE]'
        : index % 2 === 0}" class="flex gap-11 p-4 items-center">
            <td class="w-[113px]">{{ ingredient.id }}</td>
            <td class="w-[191px] text-left">{{ ingredient.name }}</td>
            <td class="w-[70px]">{{ ingredient.quantity }}</td>
            <td class="w-[110px]">{{ ingredient.measurement }}</td>
            <td class="w-[115px] text-left">{{ ingredient.status }}</td>
            <td class="w-[115px]">{{ formatDate(ingredient.manufactured) }}</td>
            <td>{{ formatDate(ingredient.expiration) }}</td>
            <td>{{ formatDate(ingredient.delivered) }}</td>
        </tr>
    </table>
</template>