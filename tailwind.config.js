/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary-color': '#EDEDED',
                'secondary-color': '#1F66EF',
                'tertiary-color': '#FC3838',
                'on-surface-color': '#FDFDFD',
                'text-color': '#0B1215',
                'success-color': '#4BB543',
                'error-color': '#D8000C',
                'warning-color': '#FF5F15',
            },
            container: {
                center: true,
            },
        },
    },
    plugins: [],
}
