<script setup> 
defineProps({
    link: String,
    name: String
})
</script>
<template>
    <Link :href="route(link)"
    :class="{
        'border-b-[2px] border-primary_blue py-2': $page.component === name,
        'text-disabled py-2': $page.component != name,
    }">
    <slot/>
    </Link>
</template>