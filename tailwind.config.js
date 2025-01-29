import defaultTheme from "tailwindcss/defaultTheme";
const plugin = require("tailwindcss/plugin");

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
                abuCoklat: "#adadad",
                neonGreen: "#a6ff00",
                abuTerang: "#f0f0f0",
                abuCard: "#d9d9d9",
                brownLight: "#ba8272",
                brownSemiLight: "#242424",
                blueOcean: "#5a30ff",
                neonLight: "#42ff38",
                creamLight: "#fae0d2",
                yellowSemidark: "#ffcb2e",
                darkIcon: "#0d0d0d",
                InputForm: "#f2f2f2",
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
        plugin(function ({ addComponents, theme }) {
            addComponents({
                ".btn-buy": {
                    padding: `${theme("spacing.3")} ${theme("spacing.9")}`,
                    fontSize: theme("fontSize.lg"),
                    backgroundColor: theme("colors.blackDrop"),
                    color: theme("colors.white"),
                    borderRadius: theme("borderRadius.3xl"),
                    transition: "background-color 0.3s ease-in-out",
                    "&:hover": {
                        backgroundColor: theme("colors.gray.700"),
                    },
                },
                ".btn-shopping-cart": {
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    padding: `${theme("spacing.3")} ${theme("spacing.5")}`,
                    fontSize: theme("fontSize.lg"),
                    backgroundColor: theme("colors.blueOcean"),
                    color: theme("colors.white"),
                    borderRadius: theme("borderRadius.3xl"),
                    transition: "background-color 0.3s ease-in-out",
                    "&:hover": {
                        backgroundColor: theme("colors.blue.600"),
                    },
                    "& svg": {
                        width: theme("spacing.7"),
                        height: theme("spacing.7"),
                    },
                },
            });
        }),
    ],
};
