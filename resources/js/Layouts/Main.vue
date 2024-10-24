<script setup>
</script>

<template>
    <div class="max-w-screen-xl mx-auto">
        <header class="bg-main_blue text-white">
            <nav
                class="p-6 mx-auto max-w-screen-lg flex items-center justify-between"
            >
                <Link :href="route('home')">Home</Link>
            </nav>
        </header>

        <main class="p-6 mx-auto max-w-screen-lg">
            <slot />
        </main>
    </div>
</template>
