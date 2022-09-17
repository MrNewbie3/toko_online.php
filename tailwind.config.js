/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php}"],
  theme: {
    extend: {
      fontFamily: {
        logo: ['"Arizonia"', "cursive"],
        nav: ['"Homenaje"', "sans-serif"],
      },
    },
  },
};
