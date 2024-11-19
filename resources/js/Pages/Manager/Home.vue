<script setup>
import Main from "../../Layouts/Main.vue";
import CardList from "./HomeComponents/CardList.vue";
</script>
<template>
    <Main>
        <!-- <header>
            <Link :href="route('logout')" method="post" as="button"
                >Logout</Link
            >
        </header> -->
        <div
            class="max-w-screen-xl p-6 min-h-full mx-auto bg-white rounded-md border border-disabled"
        >
            <header class="space-y-[-.5rem]">
                <h1 class="text-primary_dark font-bold text-[2rem]">
                    Dashboard
                </h1>
                <p class="text-[1rem] text-secondary_dark">
                    Your sales, inventory, and team overview in one place.
                </p>
            </header>
            <CardList />
        </div>
    </Main>
</template>
