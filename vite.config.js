import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                //styles
                'resources/css/header.css',
                'resources/css/footer.css',
                'resources/css/indexstyles.css',
                'resources/css/profilestyles.css',
                'resources/css/blogstyles.css',
                'resources/css/dashboardstyles.css',
                'resources/css/faqstyles.css',
                'resources/css/blogarticlestyles.css',
                //images
                'resources/images/backgroundimage2.png',
                'resources/images/githubicon.png',
                'resources/images/hz-logo.png',
                'resources/images/hz-university-of-applied-sciences.png',
                'resources/images/armin.png',
                'resources/images/Formula1-24.png',
                'resources/images/kaleo.png',
                'resources/images/legendofzelda.png',
                'resources/images/minecraft.png',
                'resources/images/ohthelarceny.png',
                'resources/images/rockedleague.png',
                'resources/images/thescore.png',
                'resources/images/tiesto.png',
                'resources/images/warhammer.png',
            ],
            refresh: true,
        }),
    ],
});
