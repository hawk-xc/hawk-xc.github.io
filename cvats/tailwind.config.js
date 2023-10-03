/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html, js}"],
  darkMode: ["class"],
  theme: {
    extend: {
      fontFamily: {
        VarelaRound: ["Varela Round", "sans-serif"],
        CartographCF: "Cartograph CF",
      },
      spacing: {
        13: "7rem",
      },

      animation: {
        munculkan: "muncul_pelan 0.3s ease-in",
      },

      keyframes: {
        muncul_pelan: {
          from: { opacity: "0" },
          to: { opacity: "1" },
        },
      },

      backgroundColor: {
        rada_hitam: "rgb(0 0 0 / .1)",
      },
    },
  },
  plugins: [],
};
