<template>
    <div
        class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-3"
    >
        <MealCard
            v-for="meal in meals"
            :key="meal.id"
            :meal_id="meal.id"
            :name="meal.name"
            :price="meal.price"
            :image="meal.image"
            @add-to-cart="handleAddToCart"
        />
    </div>
</template>

<script setup>
import Cart from "../Pages/Manager/Util/Cart";
import MealCard from "./MealCard.vue";

const meals = [
    {
        id: 1,
        name: "Mapa Maki",
        price: 99,
        image: "/Assets/Meal_Img/MapaRamen.png",
    },
    {
        id: 2,
        name: "Volcano",
        price: 99,
        image: "/Assets/Meal_Img/MapaRamen.png",
    },
    {
        id: 3,
        name: "Cheezy Maki",
        price: 99,
        image: "/Assets/Meal_Img/MapaRamen.png",
    },
];

const handleAddToCart = (meal) => {
    const meal_record = { ...meal };
    Cart.addToCart(meal_record);
};
</script>
