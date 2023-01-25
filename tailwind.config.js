/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["../**.php",
"../**/**.php",],
  theme: {
    extend: {
      fontFamily: {
        'gothic': ['"gothic"', 'sans-serif'],
        'gothic-bold': ['"gothic-bold"', 'sans-serif'],
      },
      colors : {
        whitlockBlue: '#254873',
        whitlockLightBlue: '#e1eff2',
      },
    },
  },
  plugins: [],
}
