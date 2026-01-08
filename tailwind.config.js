import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brand-purple': '#4C24AB',
                'brand-pink': '#EC407A',
                'brand-cyan': '#4AD9D9',
                'brand-gray': '#F0F2F5',
                'form-bg': '#F8F9FA',
                'text-dark': '#333333',
                'text-light': '#777777',
            },
            borderRadius: {
                '4xl': '2rem',
            }
        },
    },

    plugins: [forms],
};