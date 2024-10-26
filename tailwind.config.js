/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: "tw-",
  content: [
    "./src/**/*.css",
    "./partials/*.php",
    "*.{php,css,js}",
    "./couch/snippets/*.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#0a3b3f",
      },
    },
  },
  plugins: [],
};
