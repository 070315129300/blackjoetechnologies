import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                'resources/sass/app.scss',
                'resources/js/app.js',

                // 'resources/sass/app.scss',

                // 'resources/css/app.css',
                // 'resources/vendor/bootstrap/css/bootstrap.min.css',
                // 'resources/vendor/bootstrap-icons/bootstrap-icons.css',
                // 'resources/vendor/aos/aos.css',
                // 'resources/vendor/glightbox/css/glightbox.min.css',
                // 'resources/vendor/swiper/swiper-bundle.min.css',
                // 'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
                // 'resources/vendor/aos/aos.js',
                // 'resources/vendor/glightbox/js/glightbox.min.js',
                // 'resources/vendor/isotope-layout/isotope.pkgd.min.js',
                // 'resources/vendor/swiper/swiper-bundle.min.js',
                // 'resources/vendor/php-email-form/validate.js',
                // 'resources/js/app.js',

            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
