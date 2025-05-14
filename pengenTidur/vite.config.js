import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/css/loginS.css',
                    'resources/css/signupS.css',
                    'resources/css/walletS.css',
                    'resources/css/profileS.css',
                    'resources/css/trashpediaS.css',
                    'resources/css/transferS.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
