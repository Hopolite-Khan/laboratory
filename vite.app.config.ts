import { defineConfig } from 'vite'
import autoprefixer from 'autoprefixer'
import purgecss from '@fullhuman/postcss-purgecss';
import laravel from 'vite-plugin-laravel'
import {resolve} from 'path';
export default defineConfig({
    plugins: [
		laravel({
            build: "build/app",
            input: [
                "resources/scss/app.scss",
                "resources/scss/app-dark.scss",
                "resources/scripts/app.ts"
            ],
			postcss: [
				autoprefixer(),
                purgecss({content: ['./**/*.blade.php']})
			],
		}),
	],
    resolve: {
        alias: {
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
            '~axios': resolve(__dirname, 'node_modules/axios')
        }
    }
})
