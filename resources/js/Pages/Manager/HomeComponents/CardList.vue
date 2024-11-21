<template lang="">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
        <StatisticCard sales="5,000" label="Daily Sales">
            <template #header>
                <div class="flex justify-between items-center">
                    <VueDatePicker
                        v-model="date"
                        class="max-w-[60%]"
                        :enable-time-picker="false"
                    />
                    <span
                        class="text-sm text-primary_blue underline cursor-pointer"
                        >Print Report</span
                    >
                </div>
            </template>
        </StatisticCard>
        <StatisticCard sales="5,000" label="Weekly Sales">
            <template #header>
                <div class="flex gap-2 items-center">
                    <VueDatePicker
                        v-model="date"
                        class="max-w-[60%]"
                        :enable-time-picker="false"
                    />
                    <span>to</span>
                    <VueDatePicker
                        v-model="date"
                        class="max-w-[60%]"
                        :enable-time-picker="false"
                    />
                </div>
            </template>
        </StatisticCard>

        <StatisticCard sales="5,000" label="Monthly Sales">
            <template #header>
                <VueDatePicker
                    disabled
                    v-model="date"
                    class="max-w-[60%]"
                    :enable-time-picker="false"
                />
            </template>
        </StatisticCard>
    </div>
</template>
<script setup>

import VueDatePicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import { ref } from "vue";
import StatisticCard from "../../../Components/StatisticCard.vue";

// Helper function to format the date as YYYY-MM-DD
const formatDate = (date) => {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0"); // Months are 0-based
    const day = String(date.getDate()).padStart(2, "0");
    return `${year}-${month}-${day}`;
};

// Initialize the date ref with today's date in YYYY-MM-DD format
const date = ref(formatDate(new Date()));
</script>
