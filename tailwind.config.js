const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'content': {
                    DEFAULT:'var(--content)',
                    'light':'var(--content-light)',
                    'dark':'var(--content-dark)',
                },
                'backdrop': {
                    DEFAULT:'var(--backdrop)',
                    'light':'var(--backdrop-light)',
                    'dark':'var(--backdrop-dark)',
                },
                'content-inv': 'var(--content-inv)',
                'backdrop-inv': 'var(--backdrop-inv)',
                'primery': {
                    DEFAULT:'var(--primery)',
                    'light':'var(--primery-light)',
                    'dark':'var(--primery-dark)',
                },
                'accent': {
                    DEFAULT:'var(--accent)',
                    'light':'var(--accent-light)',
                    'dark':'var(--accent-dark)',
                }
            },
            fontFamily: {
                'content': ['content', ...defaultTheme.fontFamily.sans],
                'alt': ['header', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
