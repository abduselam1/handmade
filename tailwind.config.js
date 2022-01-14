module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      animation: {
        'like': 'like 0.5s cubic-bezier(0, 0, 0.2, 0.4)',
       },
       keyframes:{
        like: {
          '75% , 100%':{
            transform: 'scale(1.5)',opacity: '0'
          }
        }
       },
      spacing: {
        '1/5':'20%',
        '1/2':'50%',
        '1/8':'12.5%',
        '3/8':'37.5%',
        '5/8':'62.5%',
        '6/8':'75%',
        '7/8':'87.5%',
        '1/10':'10%',
        '3/10':'30%',
        '6/10':'60%',
        '7/10':'70%',
        '9/10':'90%',
        '5/16':'31.25%',
        '3/20':'15%',
        '17/20':'85%',
        '8/25':'32%',
        '16/25': '64%',
        '2/5':'40%',
        '3/5':'60%',
        '168':'42rem',
        '152':'36rem',
      },
      screens: {
        'xs':'480px'
      },
      fontSize:{
        'ms':'.80rem'
      },
      gridTemplateColumns:{
        '16': 'repeat(16, minmax(0, 1fr))',
      }
      
    },
  },
  variants: {
    extend: {
      cursor: ['hover', 'focus'],
    },
  },
  plugins: [],
}
