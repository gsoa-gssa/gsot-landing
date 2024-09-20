/** @type {import('tailwindcss').Config} */
export default {
    content: [
        // Laravel content tailwindcss config
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue'
    ],
    theme: {
        extend: {
            "colors": {
                "accent": "#B40E44"
            },
            "fontFamily": {
                "inter": ["Inter", "sans-serif"]
            }
        },
    },
    plugins: [],
}

