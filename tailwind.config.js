/** @type {import('tailwindcss').Config} */
module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                foreground: 'rgba(77, 115, 39, 1)'
            },
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
