/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/tw-elements/dist/js/**/*.js"


    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("tw-elements/dist/plugin.cjs"),
        require('flowbite/plugin'),
        require('tailwind-scrollbar')({ nocompatible: true })

    ],
}