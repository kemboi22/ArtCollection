import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import {VitePWA} from "vite-plugin-pwa";

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
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
        VitePWA({
            devOptions: {
                enabled: true
            },
            injectRegister: 'auto',
            registerType: 'prompt',
            includeAssets: ['favicon.ico', 'apple-touch-icon.png'],
            workbox: {
                globPatterns: ['**/*.{js,css,html,ico,png,svg,json,vue,txt,woff2,woff,ttf}']
            },
            manifest: {
                name: 'Notes',
                short_name: 'Notes',
                description: 'Notes app',
                theme_color: '#3c3735',
                background_color: '#3c3735',
                icons: [
                    {
                        src: 'android-chrome-192x192.png',
                        sizes: '192x192',
                        type: 'image/png'
                    },
                    {
                        src: 'android-chrome-512x512.png',
                        sizes: '512x512',
                        type: 'image/png'
                    },
                    {
                        src: 'android-chrome-512x512.png',
                        sizes: '512x512',
                        type: 'image/png'
                    },
                    {
                        src: 'android-chrome-maskable-512x512.png',
                        sizes: '512x512',
                        type: 'image/png',
                        purpose: 'any maskable'
                    },
                ],
                share_target: {
                    action: '/',
                    method: 'GET',
                    params: {
                        text: 'text'
                    }
                },

            },
        })
    ],
});
