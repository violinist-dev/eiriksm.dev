const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  theme: { 
    container: {
      center: true,
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
