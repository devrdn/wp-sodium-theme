/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  purge: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'ui-sans-serif', 'system-ui'],
        serif: ['Lora', 'ui-serif', 'Georgia', 'Cambria', 'Times New Roman', 'Times, serif'],
      },
    },
  },
  plugins: [],
};
