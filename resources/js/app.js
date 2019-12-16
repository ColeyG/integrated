require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const searchButton = document.querySelector('.search-button');
const spits = document.querySelector('.spits');

function search() {
  axios.post(`/api/search?q=${document.querySelector('.search-in').value}`)
    .then(({ data }) => {
      while (spits.firstChild) {
        spits.removeChild(spits.firstChild);
      }
      data.data.forEach((post) => {
        const newSpit = document.createElement('div');
        const spitTitle = document.createElement('h2');
        const spitText = document.createElement('p');
        newSpit.className = 'spit';
        spitTitle.appendChild(document.createTextNode(post.user));
        spitText.appendChild(document.createTextNode(post.content));
        newSpit.appendChild(spitTitle);
        newSpit.appendChild(spitText);
        if (post.image !== '') {
          const spitImage = document.createElement('img');
          spitImage.src = `images/${post.image}`;
          newSpit.appendChild(spitImage);
        }
        spits.append(newSpit);
      });
    });
}

searchButton.addEventListener('click', search, false);
