/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Noto Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
};
