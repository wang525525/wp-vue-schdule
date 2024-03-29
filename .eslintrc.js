module.exports = {
  root: true,
  parserOptions: {
    "parser": "babel-eslint",
    "ecmaVersion": 2017,
    "sourceType": "module"
  },
  "extends": [
    "plugin:vue/recommended"
  ],
  "rules": {
    "semi": ["error", "always"],
    "quotes": ["error", "double"]
  }
}
