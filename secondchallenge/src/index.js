const list = [
  "Învață web development dacă vrei bani mulți!",
  "Web development-ul este de viitor.",
  "Poți lucra de oriunde.",
  "Treci la treabă că timpul trece!",
  "Trăiește ca și cum ai muri mâine. Învață ca și cum ai trăi veșnic – Mahatma Gandhi",
  "Nu mai aștepta! Momentul potrivit nu vine niciodată – Napoleon Hill",
  "Pesimistul vede dificultăți în orice oportunitate. Optimistul găsește oportunități în orice dificultate – Winston Churchill"
];

const btn = document.getElementById("buton");
const citat = document.getElementById("citat");

btn.addEventListener("click", genereazaCitat);

function genereazaCitat() {
  let random = Math.floor(Math.random() * list.length);
  citat.textContent = list[random];
}
