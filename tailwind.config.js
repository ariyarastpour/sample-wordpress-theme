/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.php', './**/*.php', './assets/js/**/*.js'],
	theme: {
		extend: {
			container: {
				center: true,
				padding: '1rem',
			},
			colors: {
				'pr-dark': '#032B4A',
				'pr-main': '#0984E3',
				'pr-light': '#CEE9FD',
				'sec-dark': '#0E3E3A',
				'sec-main': '#26A69A',
				'sec-light': '#D5F5F2',
				'text-main': '#262626',
				'text-main2': '#737373',
				'text-light': '#E6E6E6',
				background: '#262626',
				'background-sec': '#FFFFFF',
				'vip-main': '#FFC107',
				'vip-main2': '#CC9900',
				'vip-light': '#FFF5D6',
			},
		},
	},
	plugins: [require('tailwindcss'), require('autoprefixer'), require('@tailwindcss/typography')],
};
