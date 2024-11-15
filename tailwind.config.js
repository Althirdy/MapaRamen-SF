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
                Montserrat: ["Inter", "sans-serif"],
            },
            colors: {
                //Disabled Colors
                disabled: "#BBBCBB",
                // Dark Colors
                primary_dark: "rgba(0,0,0,0.85)",
                secondary_dark: "rgba(0,0,0,0.70)",
                tertiary_dark: "rgba(0,0,0,0.60)",
                // Red Colors
                primary_red: "rgba(255,0,0,0.90)",
                secondary_red: "rgba(255,0,0,0.85)",
                tertiary_red: "rgba(255,0,0,0.65)",
                // Green Colors
                primary_green: "rgba(0,100,0,0.95)",
                secondary_green: "rgba(0,100,0,0.85)",
                tertiary_green: "rgba(0,100,0,0.70)",
                // Blue Colors
                primary_blue: "rgba(45,111,242,0.95)",
                secondary_blue: "rgba(45,111,242,0.85)",
                tertiary_blue: "rgba(45,111,242,0.70)",
                // Light Colors
                primary_light: "rgba(255,255,255,0.95)",
                secondary_light: "rgba(255,255,255,0.85)",
                secondary_light: "rgba(255,255,255,0.70)",

                
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
