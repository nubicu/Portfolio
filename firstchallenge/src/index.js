const buton1 = document.getElementById("change-text-color-button");
const buton2 = document.getElementById("change-text-bg-button");
const buton3 = document.getElementById("change-page-bg-color-button");
const text = document.getElementById("change-color-text");
const body = document.querySelector("body");
const colors = [
  "red",
  "green",
  "blue",
  "yellow",
  "pink",
  "purple",
  "gray",
  "black",
  "orange",
  "brown"
];

body.style.backgroundColor = "violet";
buton1.addEventListener("click", changeTextColor);
buton2.addEventListener("click", changeTextBackground);
buton3.addEventListener("click", changePageBackground);

function changeTextColor() {
  const colorIndex = parseInt(Math.random() * colors.length);
  text.style.color = colors[colorIndex];
}

function changeTextBackground() {
  const colorIndex = parseInt(Math.random() * colors.length);
  text.style.backgroundColor = colors[colorIndex];
}

function changePageBackground() {
  const colorIndex = parseInt(Math.random() * colors.length);
  body.style.backgroundColor = colors[colorIndex];
  //document.body.style.background = colors[Math.floor(Math.random() * colors.length)];
}
