<script setup>
import Navbar from "../Components/Navbar.vue";
import NavLink from "../Components/NavLink.vue";
</script>

<template>
    <div class="flex flex-col h-screen">
        <Navbar :username="'Manager Che'">
            <template #navlinks>
                <NavLink routeName="manager" componentName="Manager/Home">
                    Dashboard
                </NavLink>
                <NavLink routeName="pos" componentName="Manager/POS">
                    POS
                </NavLink>
                <NavLink routeName="ingredients" componentName="Manager/Inventory/Ingredients"> 
                    Inventory
                    </NavLink>
            </template>
        </Navbar>
        <main class="flex-1 p-4">
            <slot />
        </main>
    </div>
</template>
