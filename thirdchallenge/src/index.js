(function () {
  const buttons = document.querySelectorAll(".counterBtn");
  //Select the counter text
  const counter = document.querySelector("#counter");
  let count = 0;
  counter.style.color = "black";

  //Add event listeners and functionailty to each button
  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      if (button.classList.contains("prevBtn")) {
        count--;
      } else if (button.classList.contains("nextBtn")) {
        count++;
      } else if (button.classList.contains("resetBtn")) {
        count = 0;
      }

      counter.textContent = count;

      if (count < 0) {
        counter.style.color = "red";
      } else if (count > 0) {
        counter.style.color = "green";
      } else {
        counter.style.color = "black";
      }
    });
  });
})();
