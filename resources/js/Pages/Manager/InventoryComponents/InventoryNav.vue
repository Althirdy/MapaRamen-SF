<script setup>
import InvLink from './InventoryLink.vue';
</script>
<template>  
    <nav class="flex row gap-[24px] border-b-[1px] border-disabled">
        <InvLink link="ingredients" name="Manager/Inventory/Ingredients">
            Ingredients
        </InvLink>
        <InvLink link="meals" name="Manager/Inventory/Meals">
            Meals
        </InvLink>
        <InvLink link="procurement" name="Manager/Inventory/Procurement">
            Procurement (Orders)
        </InvLink>
        <InvLink link="delivery" name="Manager/Inventory/Delivery">
            Delivery
        </InvLink>
        <InvLink link="return" name="Manager/Inventory/Return">
            Return
        </InvLink>
    </nav>
</template>
