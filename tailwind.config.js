  /** @type {import('tailwindcss').Config} */
  const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
      "./index.html",
      "./resources/**/*.{vue,js,ts,jsx,tsx,blade.php}",
    ],
    theme: {
      extend: {fontFamily: {
        sans: ['InterVariable', '...defaultTheme.fontFamily.sans'],
      },},
    },
    plugins: [],
  };
  