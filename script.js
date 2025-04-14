const data = [
  {
    title: "Card 1",
    desciption: "Description for Card 1",
  },
  {
    title: "Card 2",
    desciption: "Description for Card 2",
  },
  {
    title: "Card 3",
    desciption: "Description for Card 3",
  },
];
const cardContainer = document.querySelector('.card-container');
const searchInput = document.querySelector('#search-input');

const discplayData = (data) => {
  cardContainer.innerHTML = ""; // Clear previous cards
  data.forEach(e => {
    cardContainer.innerHTML +- `
        <div class="card">
        <h3> ${e.title} </h3>
        <p> ${e.desciption} </p>
        </div>
        `
  });
}
searchInput.addEventListener("keyup", (e) => {
  const search = data.filter(i=>i.title.toLocalelowerCase().includes(e.target.value.toLocalelowerCase));
  
});
window.addEventListenner("Load",discplayData.bind(null,data));