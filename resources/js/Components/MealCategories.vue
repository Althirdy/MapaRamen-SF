<template>
    <div class="w-64 h-[80vh] border-r-2 border-gray-200 p-4 pr-4 overflow-y-auto custom-scrollbar">
      <ul class="space-y-1">
        <li
          v-for="(category, index) in categories"
          :key="index"
          :class="[
            'flex items-center justify-between cursor-pointer p-4 rounded-lg border transition',
            category === selectedCategory
              ? 'bg-blue-500 text-white border-blue-500'
              : 'bg-white border-gray-300 text-primary_dark  hover:bg-gray-100'
          ]"
          @click="selectCategory(category)"
        >
          <div class="flex items-center space-x-3">
            <div>
              <i class="text-lg">🌟</i>
            </div>
            <div>
              <p class="font-bold text-lg">{{ category }}</p>
              <small class="text-sm ">{{ itemsPerCategory }} items</small>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  import { defineProps, defineEmits } from "vue";
  
  // Props
  defineProps({
    selectedCategory: String,
    itemsPerCategory: { type: Number, default: 10 },
  });
  
  // Emits
  const emit = defineEmits(["categorySelected"]);
  
  // Hardcoded categories
  const categories = [
    "Best Seller",
    "Ramen",
    "Maki",
    "Ala Carte",
    "Don Buri",
    "Wings Platter",
    "New Meals",
    "Sizzling Plates",
    "More Items", // Add more to test scroll
    "Extra Items",
    "Even More",
  ];
  
  // Select category method
  const selectCategory = (category) => {
    emit("categorySelected", category);
  };
  </script>

<style scoped>
.custom-scrollbar::-webkit-scrollbar {
  width: 8px;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
  background-color: #9ca3af; /* Gray-400 */
  border-radius: 4px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
  background-color: #6b7280; /* Gray-500 */
}
.custom-scrollbar::-webkit-scrollbar-track {
  background-color: #e5e7eb; /* Gray-200 */
}
</style>