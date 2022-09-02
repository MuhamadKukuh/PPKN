module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ["Inter"]
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}