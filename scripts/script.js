const searchButton = document.querySelector(".nav-search");
const inputSearch = document.querySelector(".search-input");

searchButton.addEventListener("click", () => {
  inputSearch.classList.toggle("input-on");
});
