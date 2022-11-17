/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../**.php",
"../**/**.php",],
important: true,
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['"Roboto"', 'sanas-serif'],
        'nunito': ['"Nunito"', 'sanas-serif'],
      },
      colors : {
        turquoise: '#06D6A0',
        blue: '#2176FF',
        yellow: '#FFBE00',
        red: '#E3655B',
        green: '#44A659',
        orange: '#FF6D31',
        pink: '#F9627D',
        charcoal: '#4A4A4A',
        grey: '#f8f8f8',
      },
    },
  },
  plugins: [],
  corePlugins: {
   container: false,
  }
}
