/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'funny-egg': '#f7f8fe',
      },
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}