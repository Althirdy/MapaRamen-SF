<script setup>
</script>
<template>
    <div class="overflow-x-auto">
        <table class="w-full min-w-[1000px] text-left">
            <tr class="flex p-4 items-center justify-between">
                <th class="flex-1/2 w1">Order ID</th>
                <th class="flex-1 w1">Last Ordered</th>
                <th class="flex-1 w1">Category</th>
                <th class="flex-[2] w2">Ingredients</th>
                <th class="flex-1 w1">Quantity</th>
                <th class="flex-1 w1">Max Quantity</th>
                <th class="flex-1 w1">Measurement</th>
                <th class="flex-1 w1">Action</th>
            </tr>
        </table>
    </div>
</template>
<style scoped>
.w1 {
    min-width: 100px;
}
.w2 {
    min-width: 150px;
}
.w3 {
    min-width: 120px;
}

</style>