<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Intro a VueJS</title>
</head>
<body>
  <div id="app-5">
    <p>@{{ message }}</p>
    <button v-on:click="reverseMessage">Reverse Message</button>
  </div>
  <script src="https://unpkg.com/vue"></script>
  <script>
  var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'Hello Vue.js!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
})
  </script>
</body>
</html>
