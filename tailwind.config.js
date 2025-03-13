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
                expansiva: ['Expansiva', 'sans-serif'],
                expansivaItalic: ['ExpansivaItalic', 'sans-serif'],
                expansivaBold: ['ExpansivaBold', 'sans-serif'],
                expansivaBoldItalic: ['ExpansivaBoldItalic', 'sans-serif'],
                swis721Italic: ['Swis721Italic', 'sans-serif'],
                swis721: ['Swis721', 'sans-serif'],
                swis721Ltex: ['Swis721Ltex', 'sans-serif'],
            },
            colors: {
                Azul1:   '#081b4e',
                Azul2:   '#0b1e50',
                Azul4:   '#0054ff',
                'azul-escuro': '#002868',
                'azul-claro': '#004A99',
                'amarelo': '#FBC02D',
                'cinza-claro': '#E0E0E0',
                'branco': '#FFFFFF',
                'cinza-medio': '#BDBDBD',
                cinza1: '#2c2c2c',
                cinza2: '#545454',
                cinza3: '#818181',
                cinza4: '#9f9f9f',
                'preto': '#212121',
                'vermelho': '#D32F2F',
            },
            spacing: {
                'fullhd': '1920px',
            },
        },
        screens: {
            "xs" : "480px",
            "sm" : "640px",
            "sm2": "700px",
            "md" : "768px",
            "md2": "991px",
            "lg" : "1024px",
            "lg2": "1180px",
            "xl" : "1280px",
            "2xl": "1536px",
        }
    },

    plugins: [forms],
};
