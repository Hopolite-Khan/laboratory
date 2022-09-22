import { defineConfig } from "vite";
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";
import laravel from "vite-plugin-laravel";

export default defineConfig({
    plugins: [
        laravel({
            input: ["/resources/sass/app.scss", "resources/scripts/main.ts"],
            postcss: [autoprefixer()],
        }),
    ],
});
