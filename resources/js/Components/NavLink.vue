<script setup>
defineProps({
    routeName: String,
    componentName: String,
});
</script>

<template>
    <Link
        :href="route(routeName)"
        :class="{
            'text-primary_dark': $page.component === componentName,
            'text-disabled': $page.component != componentName,
        }"
    >
        <slot />
    </Link>
</template>
