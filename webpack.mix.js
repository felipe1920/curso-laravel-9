export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    resolve: {
        alias: {
            '@': '/resources/js'
        }
    }
});