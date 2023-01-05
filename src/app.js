const burgerIcon = document.querySelector("#burger");
const sideMenu = document.querySelector(".side-menu");
const closeBtn = document.querySelector("#close");
const backdrop = document.querySelector("#backdrop");
const navLinks = document.querySelector(".nav-links");
const sideLinks = document.querySelector(".side-links");

function hideMenu() {
  backdrop.classList.add("backdrop-hide");
  sideMenu.classList.add("side-menu-hide");
}

burgerIcon.addEventListener("click", (e) => {
  console.log("burger clicked");
  backdrop.classList.remove("backdrop-hide");
  sideMenu.classList.remove("side-menu-hide");
});

closeBtn.addEventListener("click", hideMenu);
navLinks.addEventListener("click", hideMenu);
sideLinks.addEventListener("click", hideMenu);
backdrop.addEventListener("click", hideMenu);
