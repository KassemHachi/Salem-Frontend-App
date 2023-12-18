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
            keyframes: {
                "fade-in-down": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(-10px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
                "fade-out-down": {
                    from: {
                        opacity: "1",
                        transform: "translateY(0px)",
                    },
                    to: {
                        opacity: "0",
                        transform: "translateY(10px)",
                    },
                },
                "fade-in-up": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(20px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
                "fade-out-up": {
                    from: {
                        opacity: "1",
                        transform: "translateY(0px)",
                    },
                    to: {
                        opacity: "0",
                        transform: "translateY(10px)",
                    },
                },
            },
            animation: {
                "fade-in-down": "fade-in-down 1s ease-out",
                "fade-out-down": "fade-out-down 1s ease-out",
                "fade-in-up": "fade-in-up 1s ease-out",
                "fade-out-up": "fade-out-up 1s ease-out",
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
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/line-clamp"),
        require("tw-elements/dist/plugin.cjs"),
    ],
};
