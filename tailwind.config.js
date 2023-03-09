/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      "center" : true,
      "padding" : '16px',
    },

    extend: {

      fontFamily: {
        "poppins" : "Poppins" 
      },
      colors: {
        "primarySD" : "#FF4B43",
        "bodyText" : "#767676",
        "primary" : "#0096ff",
        "placeholder" : "#a3a3a3",
        "primaryInp" : "#c2c2c2",
        "light_blue" : "#f2f5ff",
        "primaryYellow" : "#ffb200",
        "footer" : "#F8FAFC",
        "secondary" : "#767676",
        "primary-gray" : "#1a1a1a",
        "active" : "#ffd677",
        "light-gray" : "#d3d1d8"
      },
      screens: {
        'notebook': '930px',
        'small' : '500px',
        '2xl' : '1320px',
        '1x136' : '1136px',
        '8x75' : '875px',
        'tall' : '1010px'
      },
      gridTemplateRows: {
        '12': 'repeat(12, minmax(0, 1fr))'
      }
    },
  },
  plugins: [],
}