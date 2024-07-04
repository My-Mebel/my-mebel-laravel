const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
            colors: {
                link: "#1E4AE9",
                primary: {
                    100: "#313957",
                    200: "#162D3A",
                    300: "#0C0E21",
                },
                typo: {
                    white: "#FFFFFF",
                    surface: "#F7FBFF",
                    light: "#8897AD",
                    outline: "#F3F4F6",
                    inline: "#D4D7E3",
                    disabled: "#959CB6",
                },
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
