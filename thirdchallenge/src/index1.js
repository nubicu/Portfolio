  let count = 0;

  //Add event listeners and functionailty to each button
  but1 = document.querySelector(".prevBtn");
  but1.addEventListener("click", lowerCount);

  but2 = document.querySelector(".nextBtn");
  but2.addEventListener("click", addCount);

  but3 = document.querySelector(".resetBtn");
  but3.addEventListener("click", resetCount);
  //Select the counter text
  const counter = document.querySelector("#counter");
  counter.style.color = "black";

function lowerCount() {
  count--;
  counter.textContent = count;
  setCounterColor();
}

function addCount() {
  count++;
  counter.textContent = count;
  setCounterColor();
}

function resetCount() {
  count = 0;
  counter.textContent = count;
  setCounterColor();
}

function setCounterColor() {
  if (count < 0) {
    counter.style.color = "red";
  } else if (count > 0) {
    counter.style.color = "green";
  } else {
    counter.style.color = "black";
  }
}
