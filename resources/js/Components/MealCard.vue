<template>
    <div
        class="border relative cursor-pointer border-disabled rounded-[4px] hover:shadow-lg shadow-gray-800 transition h-auto w-auto px-2 py-1 bg-white"
        @click="addToCart"
    >
        <img :src="image" :alt="name" class="w-full h-36 object-fit" />
        <div class="mt-2 text-left space-y-[-.1rem]">
            <div
                v-if="quantity > 0"
                class="bg-blue-600 absolute top-0 right-0 shadow-md shadow-gray-700 h-8 w-8 flex items-center justify-center text-white rounded-full"
            >
                {{ quantity }}
            </div>
            <h3 class="font-semibold text-primary_dark text-md">{{ name }}</h3>
            <p class="text-secondary_dark font-medium text-sm">
                ₱ {{ price }}.00
            </p>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref, watch } from "vue";
import Cart from "../Pages/Manager/Util/Cart";

// Initialize quantity as a ref
const quantity = ref(0);
onMounted(() => {
    // Execute the function manually when the component is mounted
    handleCartChange(Cart.cart.value);

    // Watch for cart changes
    watch(
        () => Cart.cart.value, // Watching for cart changes
        (newCart) => {
            handleCartChange(newCart);
        },
        { deep: true } // Deep watch to handle changes inside the cart items
    );
});

function handleCartChange(newCart) {
    // Find the meal in the cart based on its meal_id
    const cart_meal = newCart.find((item) => item.id === props.meal_id);

    if (cart_meal && cart_meal.quantity > 0) {
        // If the meal is found and its quantity is greater than 0
        quantity.value = cart_meal.quantity;
    }
}

const props = defineProps({
    meal_id: {
        type: Number,
        required: true,
    },
    name: {
        type: String,
        required: true,
    },
    price: {
        type: Number,
        required: true,
    },
    image: {
        type: String,
        required: true,
    },
});
const emit = defineEmits(["add-to-cart"]);

const addToCart = () => {
    emit("add-to-cart", {
        id: props.meal_id,
        name: props.name,
        price: props.price,
    });
};
</script>
