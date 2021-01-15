module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        nav: '#5D1A81',
        primary: {
          bg: '#0EC43F',
          text: '#fff',
        },
        secondary: {
          bg: '#000',
          text: '#fff',
        },

        main: '#A54AFF'
      },

      fontFamily: {
        'roboto': 'Roboto'
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
