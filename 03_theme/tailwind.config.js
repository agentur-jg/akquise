/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './src/js/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Inter',
          'ui-sans-serif',
          'system-ui',
          'sans-serif'
        ]
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography')
  ]
};

