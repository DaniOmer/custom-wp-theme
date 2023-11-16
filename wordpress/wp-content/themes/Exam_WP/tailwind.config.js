/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.{html,php,js}"],
    theme: {

      fontFamily: {
        'mulish': ['Mulish', 'sans-serif']
      },
      fontSize: {
        h1: ['2.625rem', {
          fontWeight: 600,
        }],
        h2: ['1.969rem',{
          letterSpacing: '3px',
          fontWeight: 600,
        }],
        h3: ['1.469rem',{
          fontWeight: 600,
        }],
        h4: ['1.094rem',{
          fontWeight: 600,
        }],
        h5: ['0.844rem',{
          fontWeight: 700,
        }],
        h6: ['0.625rem',{
          fontWeight: 700,
        }],
        p26: ['1rem',{
          fontWeight: 400,
        }],
        p20: ['0.8125rem',{
          fontWeight: 400,
        }]
      },
      extend: {
        colors: {
          'blue': '#050A3A',
          'white': '#FFFFFF',
          'gray': '#8A8A8A',
        },
        backgroundImage: {
          'default-grad': 'linear-gradient(90deg, #FFD0A8 0%, #FF4FC0 100%)',
        },
      
      },
    },
    plugins: [    require('tailwind-scrollbar-hide')
  ],
  }
   
