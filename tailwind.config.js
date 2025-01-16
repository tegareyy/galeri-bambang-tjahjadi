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
        fontWeight: {
            thin: "100",
            hairline: "100",
            extralight: "200",
            light: "300",
            normal: "400",
            medium: "550",
            semibold: "600",
            bold: "700",
            extrabold: "800",
            "extra-bold": "800",
            black: "900",
        },

        extend: {
            colors: {
                cream: "rgb(250, 243, 237)",
                cream2: "#f9f2ed",
                blackDrop: "#101010",
                redDrop: "#ff1212",
                abuCoklat: "#adadad",
            },

            lineHeight: {
                "-1": "-1",
            },

            backgroundImage: {
                "hero-pattern": "url('/img/hero1.jpg')",
            },

            fontFamily: {
                inter: ["Inter", "sans-serif", ...defaultTheme.fontFamily.sans],
                serif: ["Inria Serif", "serif"],
            },
        },
    },
    plugins: [],
};
