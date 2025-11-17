import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/icons/fontawesome/styles.min.css',
                'resources/css/icons/icomoon/styles.css',
                'resources/css/main.css',
                'resources/js/app.js',
                'resources/js/owl.carousel.js',
                'resources/js/jquery.fancybox.min.js',
                'resources/js/main.js'
            ],
            refresh: true,
        }),
    ],
});
