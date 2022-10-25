/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../**.php",
"../**/**.php",],
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
        orange: '#F3722C',
        charcoal: '#4A4A4A',
      },
    },
  },
  plugins: [],
}
