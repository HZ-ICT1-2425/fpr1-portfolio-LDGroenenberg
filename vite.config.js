import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                //styles
                'resources/css/indexstyles.css',
                'resources/css/header.css',
                'resources/css/footer.css',
                //images
                'resources/images/backgroundimage2.png',
                'resources/images/githubicon.png',
                'resources/images/hz-logo.png',
                'resources/images/hz-university-of-applied-sciences.png',
                'resources/images/githubicon.png',
            ],
            refresh: true,
        }),
    ],
});
