<script setup>
import { ref } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import Button from "../../Components/Button.vue";
import DropDown from "../../Components/DropDown.vue";
import InputError from "../../Components/InputError.vue";

const Role = ["Manager", "Kitchen", "Cashier"];


const form = useForm({
    username: "",
    password: "",
    role: null,
});

const handleSelect = (option) => {
    form.role = option + 1;
};

const submit = async () => {
    form.post(route("login"),{
        onError: () => form.reset('password')
    });
};
</script>
<template>
    <div class="px-4 border">
        <div
            class="border-tertiary_dark border flex flex-col gap-8 mt-[5%] rounded-md bg-white p-8 max-w-[500px] mx-auto"
        >
            <header>
                <img
                    src="/public/Assets/MapaRamenLogo.png"
                    alt="MapaRamenLogo"
                    class="w-40 mx-auto"
                />
                <div class="text-center space-y-[-.5rem]">
                    <h1 class="font-bold text-[2.5rem] text-primary_dark">
                        Maparamen
                    </h1>
                    <p class="font-medium text-secondary_dark text-[1.1rem]">
                        Caloocan North [Saranay Branch]
                    </p>
                </div>
            </header>

            <form @submit.prevent="submit" class="space-y-4 flex flex-col">
                <InputError :error="form.errors.error" />
                <div class="flex items-center gap-2">
                    <p class="text-secondary_dark text-sm">Sign In As:</p>
                    <DropDown :options="Role" @change="handleSelect" />
                </div>
                <div>
                    <InputField label="Username" v-model="form.username" />
                    <InputError :error="form.errors.username" />
                </div>
                <div>
                    <InputField
                        label="Password"
                        type="password"
                        v-model="form.password"
                    />
                    <InputError :error="form.errors.password" />
                </div>
                <Button label="Login" :disabled="form.processing" />
            </form>
        </div>
    </div>
</template>
