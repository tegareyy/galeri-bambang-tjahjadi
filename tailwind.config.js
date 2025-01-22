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
                neonGreen: "#a6ff00",
                abuTerang: "#f0f0f0",
                abuCard: "#d9d9d9",
                brownLight: "#ba8272",
            },

            boxShadow: {
                neon: "0 0 5px #a6ff00, 0 0 15px #a6ff00, 0 0 30px #a6ff00",
            },

            lineHeight: {
                "-1": "-1",
            },

            backgroundImage: {
                "custom-radial":
                    "radial-gradient(circle farthest-side at 63% 50%, #a2c3eb 0%, #f2f3ed 80%)",
                "custom-image": "url('../img/background/prisma-line.jpg'",
            },

            fontFamily: {
                inter: ["Inter", "sans-serif", ...defaultTheme.fontFamily.sans],
                serif: ["Inria Serif", "serif"],
            },
        },
    },
    plugins: [
        function ({ addUtilities }) {
            addUtilities({
                ".text-neon": {
                    "text-shadow":
                        "0 0 5px #a6ff00, 0 0 10px #a6ff00, 0 0 20px #a6ff00",
                },
                ".btn-neon": {
                    "background-color": "#a6ff00",
                    color: "#000",
                    padding: "0.5rem 1rem",
                    "border-radius": "9999px",
                    "font-weight": "bold",
                    "box-shadow": "0 0 5px #a6ff00, 0 0 15px #a6ff00",
                    transition: "background-color 0.3s",
                },
                ".btn-neon:hover": {
                    "background-color": "#b5ff33",
                },
            });
        },
    ],
};
