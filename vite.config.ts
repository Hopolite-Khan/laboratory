import { defineConfig } from "vite";
import autoprefixer from "autoprefixer";
import laravel from "vite-plugin-laravel";
import path from 'path';
import purgecss from "@fullhuman/postcss-purgecss";

export default defineConfig({
    plugins: [
        purgecss({
            content: ['./**/*.blade.php']
        }),
        laravel({
            postcss: [autoprefixer()],
        }),
    ],
    resolve: {
        alias: {
          '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
          '~axios': path.resolve(__dirname, 'node_modules/axios')
        }
      },
});
