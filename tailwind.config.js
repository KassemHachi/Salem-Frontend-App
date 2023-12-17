const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            colors: {
                "salem-yellow": {
                    50: "#F5F0E5",
                    100: "#EFE8D6",
                    200: "#E3D8B9",
                    300: "#D8C79C",
                    400: "#CCB77E",
                    500: "#C1A661",
                    600: "#A88B42",
                    700: "#806A32",
                    800: "#574822",
                    900: "#2F2712",
                    950: "#1B160B",
                },
                "salem-dark-blue": {
                    DEFAULT: "#192F43",
                    50: "#548CBF",
                    100: "#4582BA",
                    200: "#3A6E9C",
                    300: "#2F597E",
                    400: "#244461",
                    500: "#192F43",
                    600: "#0A1927",
                    700: "#0A121A",
                    800: "#000000",
                    900: "#000000",
                    950: "#000000",
                },
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/line-clamp"),
    ],
};
