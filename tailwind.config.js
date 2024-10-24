/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                primary_blue: "#2D6FF2",
                primary_red: "#EC1616",
                light_text: "#F0F3FA",
                darK_text: "#0A0A0A",
                secondary_dark_text: "#56595F",
                secondary_light_text: "#BBBCBB",
                tertiary_black_text: "#2D2E30",
                
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
