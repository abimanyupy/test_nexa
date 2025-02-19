import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
               sans: ['Marcellus', 'sans-serif'],
            },
            fontFamily: {
                serif: ['Open Sans', 'serif'],

            },
            colors: {
                'font-primary': '#362C27',
                'font-secondary': '#C2996F',
                'bg-primary': '#FAF9F8',
                'btn-light': '#E9E9E9',
                'btn-dark': '#362C27',
                'btn-line': '#AEAEAE',
                'border': '#D2CFCC',

            },
        },
    },
    plugins: [],
};


