window.addEventListener('load', handleScroll);
window.onscroll = function () { progressBar(); paralax(); showSW(); handleScroll() };

//behaving on scroll
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
    headerImg.style.setProperty(`transform`, ` translateY(${scrolled * 1.5}%)`)
}
const socialMedia = document.getElementById("social-media")
function showSW() {
    let scrolled = scrolling();
    if (window.innerWidth > 800) {
        if (scrolled >= 30) {
            socialMedia.style.setProperty("right", '0')
        } else {
            socialMedia.style.setProperty("right", '-20%')
        }

    }

}
const menuBars = document.getElementById("barsWrap");
const menuMobile = document.getElementById("menu-mobile");
const bodyMenu = document.querySelector("body")
const btns_a = document.querySelectorAll(".btn-a")
const main = document.querySelector("main")
let menuActive = true;
menuBars.addEventListener("click", function () {
    menuBars.classList.add("bars-wrap-active");
    if (menuActive) {
        menuBars.classList.add("bars-wrap-active");
        menuMobile.classList.add("nav-container-active");
        bodyMenu.classList.add("body-active-menu");
        main.classList.add("main-menu-acive");

        menuActive = !menuActive
    } else if (!menuActive) {
        menuBars.classList.remove("bars-wrap-active");
        setTimeout(function () {
            menuMobile.classList.remove("nav-container-active");
            bodyMenu.classList.remove("body-active-menu");
            main.classList.remove("main-menu-acive");
        }, 500)
        menuActive = !menuActive
    }

})
btns_a.forEach((element) => {
    element.addEventListener("click", function () {
        menuBars.classList.remove("bars-wrap-active");
        menuMobile.classList.remove("nav-container-active");
        bodyMenu.classList.remove("body-active-menu");
        main.classList.remove("main-menu-acive");
        menuActive = !menuActive
        console.log(menuActive)
    })

})

function handleScroll() {
    const nav_a_btns = document.querySelectorAll(".nav-section ul li");
    const sections = document.querySelectorAll(".section-main");
    const windowHeight = window.innerHeight;
    let myScroll = window.scrollY + windowHeight / 2; // Przesunięcie o połowę wysokości okna

    sections.forEach((section, index) => {
        const sectionOffsetTop = section.offsetTop; //odleglosc od poczatku documenyu
        const sectionHeight = section.clientHeight;//wysokosc elementu
        const sectionBottom = sectionOffsetTop + sectionHeight;

        // Sprawdź, czy dolna krawędź okna przekroczyła sekcję
        if (myScroll >= sectionOffsetTop && myScroll <= sectionBottom) {
            if (section.hasAttribute('id')) {
                const sectionId = section.id;
                if (sectionId) {
                    // Zmiana koloru przycisku nawigacyjnego
                    nav_a_btns.forEach((btn, btnIndex) => {
                        const shouldBeActive = index === btnIndex;
                        btn.classList.toggle('li-active', shouldBeActive);
                        // console.log(`Button ${btnIndex} should be active: ${shouldBeActive}`)
                    });
                }
            }
        }
    });
}


