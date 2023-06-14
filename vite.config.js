import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/loader.css',
                'resources/assets/js/loader.js',
                'resources/assets/css/plugins.css',
                'resources/plugins/apex/apexcharts.css',
                'resources/assets/css/dashboard/dash_2.css',
                'resources/assets/css/scrollspyNav.css',
                'resources/plugins/animate/animate.css',
                'resources/plugins/sweetalerts/sweetalert2.min.css',
                'resources/plugins/sweetalerts/sweetalert.css',
                'resources/assets/css/components/custom-sweetalert.css',


                'resources/assets/js/libs/jquery-3.1.1.min.js',
                'resources/bootstrap/js/popper.min.js',
                'resources/bootstrap/js/bootstrap.min.js',
                'resources/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
                'resources/assets/js/app.js',
                'resources/assets/js/sweetalert2@11.js',
                'resources/plugins/table/datatable/datatables.js',
                'resources/plugins/sweetalerts/promise-polyfill.js',
                'resources/plugins/highlight/highlight.pack.js',
                'resources/assets/js/scrollspyNav.js',
                'resources/plugins/sweetalerts/sweetalert2.min.js',
                'resources/plugins/sweetalerts/custom-sweetalert.js',
                'resources/js/chart.js',

            ],
            refresh: true,
        }),
    ],
    resolve:{
        alias:{
            '~bootstrap':path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    }
});
