/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}"
    ],

    theme: {
        extend: {
            colors: {
                'stonks-red':'#d63b1d',
                'hover-stonks-red': '#b02e1b',
                'italian-flag-green': '#008C45',
                'italian-flag-white': '#FFFFFF',
                'italian-flag-red': '#CE2B37',
                'gray-200': '#f4f4f4',
              }
        },
    },
    variants:{},
    plugins: [],
}

