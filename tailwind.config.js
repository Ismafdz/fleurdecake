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
            colors: {
                fdc: {
                    dark: "#4A3425",     // Dark brown - coffee
                    medium: "#8C6A55",   // Latte brown
                    gold: "#C7A17A",     // Gold accent
                    cream: "#F7EFE7",    // Cream base
                    peach: "#FFF6F3",    // Soft peach background
                },
                'fleur-dark': '#8B4513',
                'fleur-light': '#FAF0E6',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
