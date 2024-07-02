
const show = document.querySelector("#bt_show");
const btshow = document.querySelector("#btu_show");
let check = true;
let eventclickshow = function () {
  if (check) {
    btshow.style.display = "block";
    show.style.display = "block";
    btshow.innerHTML = " Ẩn đi ";
    btshow.style.fontSize = "15px";
    check = false;
  } else {
    btshow.innerHTML = " Xem Thêm ";
    show.style.display = "none";
    check = true;
  }
};