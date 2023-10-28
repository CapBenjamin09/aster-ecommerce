/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            orange: {
                900: '#b13825',
                800: '#c64136',
                750: '#e04229',
                700: '#e7533d',
                600: '#e5553e',
                500: '#fa5c44',
                200: '#fca193',
                50:  '#fff6f5',
            },
            red: {
                800: '#6a1c15',
                600: '#d4361e',
                500: '#fa4444',
                400: '#ff3b3b',
                200: '#fb7474',
                100: '#fdb4b4',
                50:  '#ffe3e2',
            },
            yellow: {
                800: '#662b0d',
                600: '#eeba11',
                500: '#fcd436',
                400: '#fcd63f',
                300: '#fec84b',
                200: '#ffe88d',
            }

        }
    },
  },
  plugins: [],
}

