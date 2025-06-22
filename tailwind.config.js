/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template/*.html',
    './template-parts/*.php',
    './inc/*.php',
    './js/*.js'
  ],

  theme: {
    extend: {
      colors: {
        blue: {
          600: '#667eea',
        },
        purple: {
          600: '#764ba2',
        },
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
