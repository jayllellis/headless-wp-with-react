const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    colors: {
      'white': '#ffffff',
    },
    extend: {
      fontFamily: {
        sans: ["Roboto", ...defaultTheme.fontFamily.sans],// don't forget to include the Google font in the <head> of public/index.html
      },
      spacing: {
      },
      maxWidth: {
      },
      zIndex: {
        '2': '2',
      }
  },
  },
  plugins: [],
}
