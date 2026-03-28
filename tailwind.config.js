import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import containerQueries from '@tailwindcss/container-queries';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "primary-container": "#00a896",
                "tertiary-fixed-dim": "#ffba27",
                "surface-container": "#edeeef",
                "on-background": "#191c1d",
                "surface": "#f8f9fa",
                "primary-fixed-dim": "#59dbc7",
                "surface-container-highest": "#e1e3e4",
                "on-secondary-fixed-variant": "#3c475d",
                "on-primary": "#ffffff",
                "outline-variant": "#bbcac5",
                "primary-fixed": "#79f7e3",
                "surface-variant": "#e1e3e4",
                "on-surface-variant": "#3c4946",
                "surface-container-low": "#f3f4f5",
                "error": "#ba1a1a",
                "on-tertiary-container": "#3e2a00",
                "on-tertiary-fixed-variant": "#5e4100",
                "secondary-container": "#d7e2ff",
                "on-tertiary": "#ffffff",
                "tertiary-fixed": "#ffdea9",
                "on-secondary-fixed": "#101b30",
                "on-primary-fixed-variant": "#005047",
                "surface-container-high": "#e7e8e9",
                "on-secondary-container": "#5a647c",
                "on-primary-container": "#00352e",
                "surface-tint": "#006b5f",
                "on-error-container": "#93000a",
                "surface-bright": "#f8f9fa",
                "on-error": "#ffffff",
                "secondary-fixed": "#d7e2ff",
                "inverse-primary": "#59dbc7",
                "inverse-on-surface": "#f0f1f2",
                "background": "#f8f9fa",
                "secondary-fixed-dim": "#bbc6e2",
                "primary": "#006b5f",
                "on-primary-fixed": "#00201c",
                "on-tertiary-fixed": "#271900",
                "secondary": "#545e76",
                "surface-dim": "#d9dadb",
                "surface-container-lowest": "#ffffff",
                "tertiary-container": "#c38b00",
                "on-surface": "#191c1d",
                "outline": "#6c7a76",
                "tertiary": "#7d5800",
                "error-container": "#ffdad6",
                "inverse-surface": "#2e3132",
                "on-secondary": "#ffffff"
            },
            fontFamily: {
                "headline": ["Manrope"],
                "body": ["Inter"],
                "label": ["Inter"],
                "sans": ['Inter', ...defaultTheme.fontFamily.sans],
            },
            borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
        },
    },

    plugins: [forms, containerQueries],
};
