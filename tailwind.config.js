/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

/** 
 * Generate spacing values from 0 to 500px with 0.0625rem increments
 * 
 * @type {Object}
 */
const spacing_max = 501;
const spacing = Object.fromEntries(
  Array.from({ length: spacing_max }, (_, i) => {
    const remValue = (i * 0.0625).toFixed(4).replace(/\.?0+$/, '')
    return [i, `${remValue}rem`]
  })
)


export default {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.antlers.php',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './resources/**/*.js',
    './content/**/*.md'
  ],

  safelist: [
    '!bg-white',
    'bg-white',
    'bg-white/90',
    'bg-transparent',
  ],

  theme: {

    extend: {

      screens: {

      },
      
      colors: {

      },

      fontFamily: {
        'muoto-regular': ['Muoto-Regular', ...defaultTheme.fontFamily.sans],
        'muoto-light': ['Muoto-Light', ...defaultTheme.fontFamily.sans],
        'muoto-light-italic': ['Muoto-Light-Italic', ...defaultTheme.fontFamily.sans],
      },

      fontSize: {
        xxs: '0.9375rem', // 15px
        xs: '1.063rem',   // 17px
        sm: '1.125rem',   // 18px
        md: '1.375rem',   // 22px
        lg: '1.75rem',    // 28px
      },
      
      zIndex: {
        '60': 60,
        '70': 70,
        '80': 80,
        '90': 90,
        '100': 100,
        '150': 150,
        '200': 200,
      },
    },

    spacing
  },

  plugins: [
    require('@tailwindcss/typography'),
  ],
};
