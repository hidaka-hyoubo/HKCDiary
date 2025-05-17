import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fs from 'fs';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: !isProduction ? {
        host: '0.0.0.0',
        port: 5173,
        https: {
            key: fs.readFileSync('./docker/ssl/localhost.key'),
            cert: fs.readFileSync('./docker/ssl/localhost.crt'),
        },
        strictPort: true,
        hmr: {
            host: 'localhost',
        },
    } : undefined,
    build: isProduction ? {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
        },
        emptyOutDir: true,
    } : undefined,
});
