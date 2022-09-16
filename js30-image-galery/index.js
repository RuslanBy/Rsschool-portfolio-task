const input = document.getElementById('input');
const images = document.getElementsByClassName('images')[0];

input.addEventListener("keydown", (event) => {
    if (event.key == "Enter")
      getData();
});

async function getData() { 
    removeData();
    let url = 'https://api.unsplash.com/search/photos?query='+input.value+'&per_page=30&client_id=D1keYnsaMii4P8RCYS1FN7gVmGBJv-oNoQ7BN-xTbK0'
    const res = await fetch(url);
    const data = await res.json();
    let imagesArray = [];
    for(let i = 0; i < data.results.length;i++){
        imagesArray[i] = document.createElement('div');
        imagesArray[i].className = 'img';
        imagesArray[i].style.backgroundImage = 'url('+data.results[i].urls.regular+')';
        images.appendChild(imagesArray[i]);
    }
  }
function removeData() {
    images.innerHTML = '';
}

(async function getDataFirst() {
  let url = 'https://api.unsplash.com/search/photos?query=cheese&per_page=30&client_id=D1keYnsaMii4P8RCYS1FN7gVmGBJv-oNoQ7BN-xTbK0'
  const res = await fetch(url);
  const data = await res.json();
  let imagesArray = [];
  for(let i = 0; i < data.results.length;i++){
      imagesArray[i] = document.createElement('div');
      imagesArray[i].className = 'img';
      imagesArray[i].style.backgroundImage = 'url('+data.results[i].urls.regular+')';
      images.appendChild(imagesArray[i]);
  }
})();