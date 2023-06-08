/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#41B3A3",
        secondary: "#E27D60",
        tertiary: "#E8A87C",
        quaternary: "#858DCB",
        quinary: "#C38D9E",
      },
    },
  },
  plugins: [],
}