const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: { 
    container: {
      center: true,
    },
    fontFamily: {
      sans: '-apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif',
      mono: [
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace',
      ]
    },
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '768px',
      // => @media (min-width: 1024px) { ... }

      'xl': '768px',
      // => @media (min-width: 1280px) { ... }
    }
  },
  variants: {},
  plugins: []
}
