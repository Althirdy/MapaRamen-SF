<template lang="">
    <Main>
        <div
            class="max-w-screen-2xl p-6  flex  mx-auto bg-white rounded-md border border-disabled"
        >
        <MealCategories
        :selectedCategory="selectedCategory"
        @categorySelected="handleCategorySelected"
      />
    </div>
    </Main>
</template>
<script setup>
import Main from "../../Layouts/Main.vue";
import { ref } from "vue";

// Manage the selected category in the parent
const selectedCategory = ref("Best Seller");

const handleCategorySelected = (category) => {
  selectedCategory.value = category;
};
</script>
<style lang=""></style>
