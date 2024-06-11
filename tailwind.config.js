import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/**.vue",
    "./public/script.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      transitionProperty: {
        'height': 'height',
      },
      fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
    },
  },
  plugins: [],
};

