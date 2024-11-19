import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import InputField from "../js/Components/InputField.vue";
import SearchInput from "./Components/SearchInput.vue";


createInertiaApp({
    title: (title) => `MapaRamen ${title}`,
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        let page = pages[`./Pages/${name}.vue`];

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Head", Head)
            .component("Link", Link)
            .component("InputField", InputField)
            .component("SearchInput",SearchInput)
            .mount(el);
    },
    progress: {
        color: "#fff",
        showSpinner: false,
    },
});
