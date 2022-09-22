import { defineConfig } from 'vite'
import tailwindcss from 'tailwindcss'
import autoprefixer from 'autoprefixer'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	plugins: [
		laravel(['resources/sass/main.scss'],{
			postcss: [
				autoprefixer(),
			],
		}),
	],
})
