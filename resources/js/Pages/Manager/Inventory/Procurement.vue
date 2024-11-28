<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import ProcurementTable from "../InventoryComponents/ProcurementComponents/ProcurementTable.vue";
import InventoryWrapper from "../InventoryComponents/InventoryWrapper.vue";
</script>
<template>
    <Main>
        <InventoryWrapper>
            <InventoryNav/>
            <div class="flex flex-col gap-6">
                <SearchSort :HasAdd="false" :HasMenu="true" />
                <ProcurementTable/>
            </div>
        </InventoryWrapper>
    </Main>
</template>