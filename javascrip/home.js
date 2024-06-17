let input = document.querySelector(".input");
let btn = document.querySelector(".btn");
let parent = document.querySelector(".parent");

btn.addEventListener("click", () => {
    parent.classList.toggle("active");
    input.focus();
});
let slider2 = document.getElementById("myRange2");
let output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;
slider2.oninput = function () {
  output2.innerHTML = this.value;
};