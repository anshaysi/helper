// Buttons
const homeBtn = document.getElementById("home")
const exploreBtn = document.getElementById("explore")
const messageBtn = document.getElementById("message")
const bookmarkBtn = document.getElementById("bookmark")
const listbtn = document.getElementById("list")
const profileBtn = document.getElementById("profile")
const morebtn = document.getElementById("more")
console.log(messageBtn)

// sections
const secondSection = document.querySelector(".mainly")
const homeSection = document.querySelector(".home-section")
const exploreSection = document.querySelector(".explore-section")
const messageSection = document.querySelector(".message-section")
const bookmarkSection = document.querySelector(".bookmark-section")
const listSection = document.querySelector(".list-section")
const profileSection = document.querySelector(".profile-section")
const moreSection = document.querySelector(".more-section")
homeBtn.addEventListener("click", function (e) {
  secondSection.innerHTML = homeSection.innerHTML
})
exploreBtn.addEventListener("click", function (e) {
  secondSection.innerHTML = exploreSection.innerHTML
})
messageBtn.addEventListener("click", function (e) {
  secondSection.innerHTML = messageSection.innerHTML
})
bookmarkBtn.addEventListener("click", () => {
  secondSection.innerHTML = bookmarkSection.innerHTML
})
listSection.addEventListener("click", () => {
  secondSection.innerHTML = listSection.innerHTML
})
profileBtn.addEventListener("click", () => {
  secondSection.innerHTML = profileSection.innerHTML
})
morebtn.addEventListener("click", () => {
  secondSection.innerHTML = moreSection.innerHTML
})
