<script setup>

defineProps({
    meals: {
        default: []
    }
})
</script>
<template>
    <tr  v-for="(meal, index) in meals" :class="{'bg-[#F7F6FE]' : index % 2 === 0}" 
    class="flex p-4 items-center">
        <td class="flex-1">{{ meal.id }}</td>
        <td class="flex-[2]">{{ meal.name }}</td>
        <td class="flex-1">{{ meal.quantity }}</td>
        <td class="flex-1 ">{{ meal.status }}</td>
    </tr>
</template>