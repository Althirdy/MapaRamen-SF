<script setup>
import { useForm } from "@inertiajs/vue3";
import InputField from "../../Components/InputField.vue";
import Button from "../../Components/Button.vue";

const form = useForm({
    username: "",
    password: "",
});

const submit = () => {
    // form.post(route("login"), {
    //     onFinish: () => form.reset("password"),
    // });
    console.log(form);
};
</script>
<template>
    <div class="px-4">
        <div
            class="border-secondary_dark_text border flex flex-col gap-8 mt-28 rounded-md bg-white p-8 max-w-[500px] mx-auto"
        >
            <header>
                <img
                    src="/public/Assets/MapaRamenLogo.png"
                    alt="MapaRamenLogo"
                    class="w-40 mx-auto"
                />
                <div class="text-center space-y-[-.5rem]">
                    <h1 class="font-bold text-[2.5rem] text-dark_text">
                        Maparamen
                    </h1>
                    <p
                        class="font-medium text-secondary_dark_text text-[1.1rem]"
                    >
                        Caloocan North [Saranay Branch]
                    </p>
                </div>
            </header>

            <form @submit.prevent="submit" class="space-y-4 flex flex-col">
                <InputField label="Username" v-model="form.username" />
                <InputField
                    label="Password"
                    type="password"
                    v-model="form.password"
                />
                <Button label="Login"  />
            </form>
        </div>
    </div>
</template>
