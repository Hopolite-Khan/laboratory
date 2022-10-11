import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { resolve } from "path";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    build: {
        manifest: true,
        outDir: "build/main",
    },
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel([
            "resources/scripts/main.ts"
        ]),
    ],
    resolve: {
        alias: {
            "~bootstrap": resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});

