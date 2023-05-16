import { defineConfig } from 'vite';
import vue from "@vitejs/plugin-vue";
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
/* import { viteStaticCopy } from 'vite-plugin-static-copy'

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [


        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),



        viteStaticCopy({
            targets: [
                {
                    src: 'resources/js/feedback.js',
                    dest: 'js/custom.js'
                }
            ]
        })


    ],
}); */
