<script setup>
import { useForm } from "@inertiajs/vue3";
import InputField from "../../Components/InputField.vue";
import Button from "../../Components/Button.vue";
import DropDown from "../../Components/DropDown.vue";
import { ref } from "vue";

// DropDown Option

const Role = ["Manager","Kitchen",'Cashier']


const selectedOption = ref(null);
const handleSelect = (option) => {
  selectedOption.value = option;
};

const form = useForm({
    username: "",
    password: "",
});

const submit = () => {
    // form.post(route("login"), {
    //     onFinish: () => form.reset("password"),
    // });
    console.log(selectedOption.value)
    console.log(form);
};
</script>
<template>
    <div class="px-4 border">
        <div
            class="border-tertiary_dark border flex flex-col gap-8 mt-32 rounded-md bg-white p-8 max-w-[500px] mx-auto"
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
                    <p
                        class="font-medium text-secondary_dark text-[1.1rem]"
                    >
                        Caloocan North [Saranay Branch]
                    </p>
                </div>
            </header>

            <form @submit.prevent="submit" class="space-y-4 flex flex-col">
                <div class="flex items-center gap-2">
                    <p class="text-secondary_dark text-sm">Sign In As:</p>
                    <DropDown 
                        :options = "Role"
                        @select="handleSelect"
                    />
                </div>
                <InputField label="Username" v-model="form.username" />
                <InputField
                    label="Password"
                    type="password"
                    v-model="form.password"
                />
                <Button label="Login" class="bg-primary_blue hover:bg-secondary_blue" />
            </form>
        </div>
    </div>
</template>
