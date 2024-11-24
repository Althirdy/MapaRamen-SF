<script setup>
import Main from "../../../Layouts/Main.vue";
import InventoryNav from "../InventoryComponents/InventoryNav.vue";
import SearchSort from "../InventoryComponents/Search-Sort.vue";
import InventoryWrapper from "../InventoryComponents/InventoryWrapper.vue";
import ReturnTable from "../InventoryComponents/ReturnComponents/ReturnTable.vue";
</script>
<template>
    <Main>
        <InventoryWrapper>
            <InventoryNav/>
            <div>
                <SearchSort :HasAdd="false" />
                <ReturnTable/>
            </div>
        </InventoryWrapper>
    </Main>
</template>