module.exports = {
  mode: 'jit',
  content: [
    './*.php',
    './*.html',
    './*.js',
    './theme.json',
    './template-parts/**/*.{html,js,php}',
    './woocommerce/**/*.{html,js,php}',
    './src/**/*.{html,js,php}',
    './assets/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        black: '#231F20',
        white: '#FFFFFF',
        blue: {
          DEFAULT: '#41B6E6',
          light: '#C8E6F2'
        },
        gray: {
          text: '#767676'
        },
        orange: '#FBB03B'

      },
      fontFamily: {
        inter: [ 'Inter', 'sans-serif' ],
        cassanet: [ 'Cassanet', 'sans-serif' ]
      },
      maxWidth: {
        'wide': '94.75rem',
        'normal': '71.25rem',
        '75': '18.75rem', //300px
        '115': '28.75rem', //460px
        '125': '31.25rem', // 500px
        '155-5': '38.875rem',
        '318-75': '79.688rem', // 1275px
        '340': '85rem',
        '345-25': '86.313rem' //1381px
      },
      width: {
        '37-5': '9.375rem',
        '215-25': '53.813rem',

      },
      height: {
        '37-5': '9.375rem',
      },
      borderRadius: {
        '5': '1.35rem',
        '4xl': '2.436rem'
      },
      spacing: {
        '15': '3.75rem', //60px
        '17-5': '4.375rem', //70px
        '19': '4.75rem', //76px
        '34-5': '8.625rem', //138px
      },
      boxShadow: {
        'video-box': '3px 3px 6px rgba(0, 0, 0, 0.16)',
        'little-box': '0 3px 6px rgba(0, 0, 0, 0.16)',
      },
      screens: {
        'desktop': '1140px',
        'desktop-xl': '1516px',
      }
    },
  },

  plugins: [],
}
