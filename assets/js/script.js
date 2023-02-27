//alpha script start


//$(document).ready(function() {
//$('.search-box').focus();
//});

const wrapper = document.querySelector(".wrapper");
const header = document.querySelector(".header");

wrapper.addEventListener("scroll", (e) => {
 e.target.scrollTop > 30
  ? header.classList.add("header-shadow")
  : header.classList.remove("header-shadow");
});

const toggleButton = document.querySelector(".dark-light");

toggleButton.addEventListener("click", () => {
 document.body.classList.toggle("dark-mode");
});

const jobCards = document.querySelectorAll(".pharma-card");
const logo = document.querySelector(".logo");
const jobLogos = document.querySelector(".pharma-logos");
const jobDetailTitle = document.querySelector(
 ".pharma-explain-content .pharma-card-title"
);
const jobBg = document.querySelector(".pharma-bg");

jobCards.forEach((jobCard) => {
 jobCard.addEventListener("click", () => {
  const number = Math.floor(Math.random() * 10);
  const url = `https://unsplash.it/640/425?image=${number}`;
  jobBg.src = url;

  const logo = jobCard.querySelector("svg");
  const bg = logo.style.backgroundColor;
  console.log(bg);
  jobBg.style.background = bg;
  const title = jobCard.querySelector(".pharma-card-title");
  jobDetailTitle.textContent = title.textContent;
  jobLogos.innerHTML = logo.outerHTML;
  wrapper.classList.add("detail-page");
  wrapper.scrollTop = 0;
 });
});

logo.addEventListener("click", () => {
 wrapper.classList.remove("detail-page");
 wrapper.scrollTop = 0;
 jobBg.style.background = bg;
});


//alpha script end


window.addEventListener('load', function () {
	document.body.classList.add('hide')
})

const allLink = document.querySelectorAll('a')

allLink.forEach(item=> {
	item.addEventListener('click', function (e) {
		e.preventDefault()
		document.body.classList.remove('hide')
		setTimeout(()=> {
			window.location.href = this.href
		}, 500)
	})
})