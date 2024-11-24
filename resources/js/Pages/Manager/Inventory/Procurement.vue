<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import ProcurementTable from "../InventoryComponents/ProcurementComponents/ProcurementTable.vue";
</script>
<template>
    <Main>
        <div class="max-w-screen-xl p-6 min-h-full mx-auto flex flex-col gap-[24px]
         bg-white rounded-md">
            <InventoryNav/>
            <div class="flex flex-col gap-6">
                <SearchSort :HasAdd="false" :HasMenu="true" />
                <ProcurementTable/>
            </div>
        </div>
    </Main>
</template>