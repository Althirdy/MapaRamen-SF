import { ref } from "vue";

const cart = ref([]);

const addToCart = (meal) => {
    const existingMeal = cart.value.find((item) => item.id === meal.id);

    if (existingMeal) {
        existingMeal.quantity++;
    } else {
        cart.value.push({ ...meal, quantity: 1 });
    }
};

export default {
    cart,
    addToCart,
};
