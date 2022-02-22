module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'green': '#00BFA5',
        'black': '#191919',
        'white': '#FFFFFF',
        'red': '#EF4444',
      },
      fontFamily: {
        'times': ['Times New Roman', 'serif'],
      },
      height: {
        '50vh': '50vh',
        '75vh': '75vh',
      },
      backgroundImage: {
        'hokusai': "url('/img/hokusai.png')",
        'leslutinstournes': "url('/img/leslutinstournes.png')",
      }
    }
  },
  plugins: [],
}
