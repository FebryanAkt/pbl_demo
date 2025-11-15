/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Path ini memindai SEMUA file .php di dalam folder views Anda
    "./app/views/**/*.php",

    // Anda juga bisa tambahkan path ke file JS jika perlu
    "./public/assets/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
