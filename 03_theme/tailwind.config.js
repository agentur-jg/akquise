/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './src/js/**/*.js',
    './assets/js/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        display: [
          "'Hanken Grotesk'",
          'ui-sans-serif',
          'system-ui',
          'sans-serif'
        ],
        sans: [
          "'Inter'",
          'ui-sans-serif',
          'system-ui',
          'sans-serif'
        ],
        mono: [
          "'IBM Plex Mono'",
          'ui-monospace',
          'monospace'
        ]
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography')
  ]
};
