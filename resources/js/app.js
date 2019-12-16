require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const searchButton = document.querySelector('.search-button');

function search() {
  axios.post(`/api/search?q=${document.querySelector('.search-in').value}`)
    .then(({ data }) => {
      console.log(data);
    });
}

searchButton.addEventListener('click', search, false);
