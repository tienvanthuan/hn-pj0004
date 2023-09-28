const config = require("./config");
const settings = config.settings;
const root = settings.root;


module.exports = {
  mode: "jit",
  purge: ['./root' + root + '**/*.php'],
  darkMode: false,
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}