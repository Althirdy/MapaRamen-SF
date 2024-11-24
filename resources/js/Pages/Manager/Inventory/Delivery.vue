<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import InventoryWrapper from "../InventoryComponents/InventoryWrapper.vue";
import DeliveryTable from "../InventoryComponents/DeliveryComponents/DeliveryTable.vue";
</script>
<template>
    <Main>
        <InventoryWrapper>
            <InventoryNav/>
            <div class="flex flex-col gap-6">
                <SearchSort :HasAdd="false" />
                <DeliveryTable/>
            </div>
        </InventoryWrapper>
    </Main>
</template>