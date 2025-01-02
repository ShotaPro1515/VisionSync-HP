module.exports = {
  content: [
    "./pages/**/*.{html,php}",
    "./*.{html,php}"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}