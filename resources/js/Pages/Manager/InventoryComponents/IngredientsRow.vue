<script setup>
import Ingredients from '../Inventory/Ingredients.vue';

defineProps({
    ingredients: {
        default: []
    }
})
</script>
<template>
    <tr v-for="(ingredient, index) in ingredients" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
            class="flex p-4 items-center">
                <td class="flex-1 w1">{{ ingredient.id }}</td>
                <td class="flex-[2] w2">{{ ingredient.name }}</td>
                <td class="flex-1 w1">{{ ingredient.quantity }}</td>
                <td class="flex-1 w3">{{ ingredient.measurement }}</td>
                <td class="flex-1 w1">{{ ingredient.status }}</td>
                <td class="flex-1 w3">{{ ingredient.manufactured }}</td>
                <td class="flex-1 w3">{{ ingredient.expiration }}</td>
                <td class="flex-1 w3">{{ ingredient.delivery }}</td>
            </tr>
</template>