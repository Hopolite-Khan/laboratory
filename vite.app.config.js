import { defineConfig } from "vite";
import autoprefixer from "autoprefixer";
import purgecss from "@fullhuman/postcss-purgecss";
import laravel from "laravel-vite-plugin";
import { resolve } from "path";
export default defineConfig({
    plugins: [
        laravel({
            refresh: true,
            input: ["resources/scripts/app.js", "resources/scss/app.scss"],
        }),
    ],
    resolve: {
        alias: {
            "~bootstrap": resolve(__dirname, "node_modules/bootstrap"),
            "~axios": resolve(__dirname, "node_modules/axios"),
        },
    },
});
