module.exports = {
  content: ["./**/*.php", "./templates/parts/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#12273a",
        secondary: "#CD7B1E",
        black: "#000000",
        white: "#ffffff",
      },
      fontFamily: {
        roboto: ['"Roboto Condensed"', "sans-serif"],
      },
    },
    safelist: ["grid-cols-[60%_30%]"],
  },
  plugins: [],
};
