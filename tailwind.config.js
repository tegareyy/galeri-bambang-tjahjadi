import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                cream: "rgb(250, 243, 237)",
                cream2: "#f9f2ed",
                blackDrop: "#101010",
                redDrop: "#ff1212",
            },

            backgroundImage: {
                "hero-pattern": "url('/img/hero1.jpg')",
            },

            fontFamily: {
                inter: ["Inter", "sans-serif", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
