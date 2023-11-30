window.onscroll = function () { progressBar(); paralax(); showSW() };






const scrolling = function () {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    return scrolled;
}
const myBar = document.getElementById("myBar");
function progressBar() {
    let scrolled = scrolling();
    myBar.style.width = scrolled + "%";
}
const headerImg = document.querySelector(".img-wrap")
function paralax() {
    let scrolled = scrolling();
    headerImg.style.setProperty(`transform`, ` translateY(${scrolled * 2}%)`)
}
const socialMedia = document.getElementById("social-media")
function showSW() {
    let scrolled = scrolling();
    if (scrolled >= 20) {
        socialMedia.style.setProperty("right", '0')
    } else {
        socialMedia.style.setProperty("right", '-5%')
    }
}